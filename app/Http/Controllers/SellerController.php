<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Model\User;
use App\Model\Advert;
use App\Model\Category;
use App\Model\SellerApplication;
use Auth;

class SellerController extends ApiController
{
    public function apply(){
        if(Auth::user()->verified_seller){
            return back()->with('error', 'You are already a verified Seller');
        }

        if(!is_null(SellerApplication::where('user_id', Auth::user()->id)->first())){
            return back()->with('error', 'You have already applied to become a seller');
        }

        return view('user.apply');
    }

    public function postApply(Request $request){

        $data = $request->all();
        $data['store_url'] = str_replace('.', '',str_replace(' ', '-', $request->store_url));
        $validate = $this->validateApply($data);

        if($validate->fails()){
            return $this->validationFailed("Application Failed", $validate->errors());
        }

        $apply = new SellerApplication;
        $apply->store_name = $request->store_name;
        $apply->store_description = $request->store_description;
        $apply->user_id= Auth::user()->id;
        $apply->store_url = str_replace('.', '',str_replace(' ', '-', $request->store_url)); //$request->store_url;
        $apply->business_docs = $this->processImage($request, 'business_docs');

        if($apply->save()){
            return $this->actionSuccess('Application Successful');
        }else{
            return $this->actionFailure('Application failed');
        }
    }

    protected function processImage($request, $image_name){
        $filename = null;

        if($request->has($image_name)){
            $image = $request->file($image_name); 
            $path = public_path('/docs/');
            $original = str_replace(' ', '_',$image->getClientOriginalName());
            $filename = '/docs/'.$image_name.$original.time().".".$image->getClientOriginalExtension();
            $image->move($path,$filename);
        }
        return $filename;
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $store_url)
    {
        $store = User::where('store_url', $store_url)->first();
        if(is_null($store)){
            return redirect('/')->with('error', 'Store does not exist');
        }
        $adverts = Advert::where('user_id', $store->id)->get();
        $adverts->load('image');
        $categories = Category::all();
        $adverts->each(function ($item, $key){
            $item->encoded_id = $this->encode($item->id);
        });
        $user = $store;
        return view('store', compact('adverts', 'categories', 'user'));
    }

    public function categories()
    {
        $adverts = Advert::all();
        $adverts->load('image');
        $categories = Category::all();

        $categories->load('advert.subcategory');
      

        $categories->each(function ($item, $key){
            $item->advert->each(function ($item1, $key1){
                $item1->encoded_id = $this->encode($item1->id);
            });
            
        });
        
        return view('categories', compact('adverts', 'categories'));
    }


    public function advertDetail(Request $request, $advert_id, $name)
    {
        $advert = Advert::find($this->decode($advert_id));
        if(is_null($advert)){
            return "";
        }
        $raw = str_replace("'","\"",$advert->attributes);
        $decoded = json_decode($raw, true) == null ? [] : json_decode($raw, true);
        
        $specification = [];
        $advert->encoded_id = $advert_id;
        foreach($decoded as $key => $value){
            $temp = Subtype::whereIn('id', $value)->get();
            $specification[$key] = $temp;
            
        }
        
        $advert->load('image','category','subcategory');
        return view('singleadvert', compact('advert', 'specification'));
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validateApply(array $data)
    {
        return Validator::make($data, [
            'store_name' => 'required|string',
            'store_url' => 'required|unique:seller_applications|unique:users',
            'business_docs' => 'nullable|file|max:1024',
        ]
    );
    }
}
