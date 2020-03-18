<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Resources\GenericResource;
use Illuminate\Support\Facades\Validator;
use App\Model\Advert;
use App\Model\AdvertImage;
use App\Model\Subtype;
use App\Model\AdvertSpecification;
use Carbon\Carbon;
use Image;


class AdvertController extends ApiController
{
    public function advert(){
        
        return view('user.advert');
    }

    public function editAdvert(){
        
        return view('user.editadvert');
    }

    public function myAdvert(){
        $adverts = auth()->user()->advert;
        $adverts->each(function ($item, $key){
            $item->encoded_id = $this->encode($item->id);
        });
        return view('user.myadvert', compact('adverts'));
    }

    public function getSingleAdvert($id){
        $advert = Advert::find($this->decode($id));
        $advert->load('image', 'specifications');
        $raw = str_replace("'","\"",$advert->attributes);
        $decoded = json_decode($raw, true) == null ? [] : json_decode($raw, true);
        $subtypes = [];
        foreach($decoded as $key => $value){
                try{
                    $temp = Subtype::whereIn('id', $value)->get();
                    $subtypes[$key] = $temp;
                }
                catch(\Exception $e){

                }
                
            
        }
        $advert->subtypes = $subtypes;
        return new GenericResource($advert);
    }

    public function deleteAdvert(Request $request, $advert_id){
        $advert = Advert::find($advert_id);

        if(is_null($advert)){
            return $this->notFound('Advert does not exist', []);
        }

        if($advert->user_id != auth()->user()->id){
            return $this->unauthorized('You are not authorized to delete this ad');
        }
        $advert->delete();
        

        return $this->actionSuccess('Advert has been deleted');
    }

    
    public function createAdvert(Request $request){
        // dd($request->specification);
        $validate = $this->validateAdvert($request->all());
        
        if($validate->fails()){
            return $this->validationFailed("Advert Creation Failed", $validate->errors());
        }
        
        $advert = new Advert;
        $advert->longitude = $request->longitude;
        $advert->latitude = $request->latitude;
        $advert->address = $request->address1;
        $advert->title = $request->title;
        $advert->description = $request->description;
        $advert->price = $request->price;
        $advert->phone = $request->phone1;
        $advert->country_id = $request->country_id;
        $advert->category_id = $request->category_id;
        $advert->subcategory_id = $request->subcategory_id;
        $advert->state_id = $request->state_id;
        $advert->lga_id = $request->lga_id;
        $advert->advert_hash = md5(Carbon::now());
        $advert->user_id = auth()->user()->id;
        $advert->attributes = $request->attr;
        $advert->verified_seller = auth()->user()->verified_seller;

        if($advert->save()){
            for($i = 1; $i <= 6; $i++){
                if($request->has("image".$i)){
                    $advert_image = new AdvertImage;
                    $advert_image->image = $this->processImage($request,"image".$i);
                    $advert_image->advert_id = $advert->id;
                    $advert_image->save();
                }
                
            }
            $specifications = json_decode($request->specifications, true);
            foreach($specifications as $key => $specs){
                $specification = new AdvertSpecification;
                $specification->specification = $specs;
                $specification->advert_id = $advert->id;
                $specification->save();
            }

            

        }

        return $this->actionSuccess('Advert Created Successfuly');
        
    }

    public function postEditAdvert(Request $request, $id){
        
        $validate = $this->validateEditAdvert($request->all());
       
        if($validate->fails()){
            return $this->validationFailed("Advert Creation Failed", $validate->errors());
        }
        
        $advert = Advert::find($this->decode($id));
        $advert->longitude = $request->longitude;
        $advert->latitude = $request->latitude;
        $advert->address = $request->address1;
        $advert->title = $request->title;
        $advert->description = $request->description;
        $advert->price = $request->price;
        $advert->phone = $request->phone1;
        $advert->country_id = $request->country_id;
        $advert->category_id = $request->category_id;
        $advert->subcategory_id = $request->subcategory_id;
        $advert->state_id = $request->state_id;
        $advert->lga_id = $request->lga_id;
        $advert->advert_hash = md5(Carbon::now());
        $advert->user_id = auth()->user()->id;
        $advert->attributes = $request->attr;
        $advert->verified_seller = auth()->user()->verified_seller;
      
        if($advert->save()){
            
            for($i = 1; $i <= 6; $i++){
                if($request->has("image".$i)){
                    AdvertImage::where('advert_id', $advert->id)->where('image', 'like',"%image$i%")->delete();
                    $advert_image = new AdvertImage;
                    $advert_image->image = $this->processImage($request,"image".$i);
                    $advert_image->advert_id = $advert->id;
                    $advert_image->save();
                }
                
            }
            $specifications = json_decode($request->specifications, true);
            AdvertSpecification::where('advert_id', $advert->id)->delete();
            
            foreach($specifications as $key => $specs){
                $specification = new AdvertSpecification;
                $specification->specification = $specs;
                $specification->advert_id = $advert->id;
                $specification->save();
            }

            

        }

        return $this->actionSuccess('Advert Edited Successfully');
        
    }


    protected function processImage($request, $image_name){
        $filename = null;
        try{
            if($request->has($image_name)){
                $img = Image::make($request->file($image_name));

                // create a new Image instance for inserting
                $watermark = Image::make('img/property-logo.png')->opacity(30);
                $img->resize(625, 425);
                $watermark->resize(199,77);
                $img->insert($watermark);

                $image = $request->file($image_name); 
                $path = public_path('/img/adverts/');
                $original = str_replace(' ', '_',$image->getClientOriginalName());
                $original = str_replace('.', '_',$original);
                $filename = 'img/adverts/'.$image_name.$original.time().".".$image->getClientOriginalExtension();
                

                $img->save($filename);

            }
        }catch(\Exception $e){
            return $filename;
        }
        return '/'.$filename;
    }


        /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validateAdvert(array $data)
    {
        return Validator::make($data, [
            'longitude' => 'nullable|string',
            'latitude' => 'nullable|string',
            'address1' => 'required|string',
            'title' => 'required|string',
            'description' => 'required|string',
            'price' => 'required|numeric|min:50',
            'phone1' => 'required|string',
            'image1' => 'required|image',
            'image2' => 'required|image',
            'image3' => 'nullable|image',
            'image4' => 'nullable|image',
            'image5' => 'nullable|image',
            'image6' => 'nullable|image',
            'country_id' => 'required|numeric|min:1',
            'state_id' => 'required|numeric|min:1',
            'lga_id' => 'required|numeric|min:1',
            'category_id' => 'required|numeric|min:1',
            // 'subcategory_id' => 'nullable|numeric|min:1',
            
        ],
    [
        'phone1.required' => 'Phone number is required',
        'address1.required' => 'Address  is required',
        'image1.required' => 'Image  is required',
        'image2.required' => 'Image  is required',
        'image3.required' => 'Image  is required',
        'image4.required' => 'Image  is required',

        // 'image1.max' => 'Image  must be less than 4MB',
        // 'image2.max' => 'Image  must be less than 4MB',
        // 'image3.max' => 'Image  must be less than 4MB',
        // 'image4.max' => 'Image  must be less than 4MB',

        'phone.required' => 'Phone number is required',
        'lga_id.min' => 'Lga must be selected',
        'country_id.min' => 'Country must be selected',
        'state_id.min' => 'State must be selected',
        'category_id.min' => 'Category must be selected',
        'price.min' => 'Price cannot be empty',
        // 'subcategory_id.min' => 'Subcategory must be selected',
    ]);
    }

         /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validateEditAdvert(array $data)
    {
        return Validator::make($data, [
            'longitude' => 'nullable|string',
            'latitude' => 'nullable|string',
            'address1' => 'required|string',
            'title' => 'required|string',
            'description' => 'required|string',
            'price' => 'required|numeric|min:50',
            'phone1' => 'required|string',
            // 'image1' => 'required|image',
            // 'image2' => 'required|image',
            'image3' => 'nullable|image',
            'image4' => 'nullable|image',
            'image5' => 'nullable|image',
            'image6' => 'nullable|image',
            'country_id' => 'required|numeric|min:1',
            'state_id' => 'required|numeric|min:1',
            'lga_id' => 'required|numeric|min:1',
            'category_id' => 'required|numeric|min:1',
            // 'subcategory_id' => 'nullable|numeric|min:1',
            
        ],
    [
        'phone1.required' => 'Phone number is required',
        'address1.required' => 'Address  is required',
        // 'image1.required' => 'Image  is required',
        // 'image2.required' => 'Image  is required',

        'phone.required' => 'Phone number is required',
        'lga_id.min' => 'Lga must be selected',
        'country_id.min' => 'Country must be selected',
        'state_id.min' => 'State must be selected',
        'category_id.min' => 'Category must be selected',
        'price.min' => 'Price cannot be empty',
        // 'subcategory_id.min' => 'Subcategory must be selected',
    ]);
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|string',
            'description' => 'required|string',
            'image' => 'image|max:1024'
            ]);
    }
}
