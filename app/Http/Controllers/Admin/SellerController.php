<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\ApiController;
use App\Http\Controllers\Controller;
use App\Model\User;
use App\Model\SellerApplication;
use App\Model\Advert;
use Auth;

class SellerController extends ApiController
{
    public function application(){
        $applications = SellerApplication::all();
        return view('admin.seller', compact('applications'));
    }

    public function viewApplication(Request $request, $id){
        $application = SellerApplication::find($id);
        return view('admin.singleapplication', compact('application'));
    }

    public function deleteApplication(Request $request, $application_id){
        $application = SellerApplication::find($application_id);

        if(is_null($application)){
            return $this->notFound('Application does not exist', []);
        }
        
        if(file_exists(public_path().$application->business_docs)){
            @unlink(public_path().$application->business_docs);
        }

        $application->delete();
        
        return $this->actionSuccess('Application has been deleted');
    }

    public function verifySeller(Request $request){

        $application = SellerApplication::find($request->application_id);
        // dd($request);
        if(is_null($application)){
            return back()->with('error', 'Application does not exist');
        }
        // dd($application);
        $user = User::find($application->user_id);
        $user->store_url = $application->store_url;
        $user->store_name = $application->store_name;
        $user->verified_seller = 1;
        
        if($user->save()){

            $application->status = true;
            $application->save();
            Advert::where('user_id', $user->id)->update(['verified_seller' => true]);
            return $this->actionSuccess('Seller has been verified');
        }else{
            return $this->actionFailure('Seller could not be verified');
        }
        
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
