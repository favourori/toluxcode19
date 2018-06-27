<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\User;
use App\Model\Profile;
use App\Http\Resources\GenericResource;
use Illuminate\Support\Facades\Validator;

class UserController extends ApiController
{
    
    public function dashboard(){
        return view('user.dashboard');
    }

    public function profile(){
        $user = auth()->user();
        return view('user.profile', compact('user'));
    }

    public function social(){
        return view('user.social');
    }

    public function apiUser(){
        $user = auth()->user();
        return new GenericResource($user);
    }

    public function apiProfile(){
        $profile = auth()->user()->profile;
        return new GenericResource($profile);
    }

    public function contact(){
        $user = auth()->user();
        return view('user.contact', compact('user'));
    }


    public function updateProfile(Request $request){
        $validate = $this->validator($request->all());

        if($validate->fails()){
            return $this->validationFailed("Profile update Failed", $validate->errors());
        }

        $user = auth()->user();
        $user->firstname = $request->firstname;
        $user->lastname = $request->lastname;
        if($user->save()){
            return new GenericResource($user);
        }else{
            return $this->actionFailure('Something Went wrong');
        }
    }

    public function updateContact(Request $request){
        $validate = $this->validateContact($request->all());

        if($validate->fails()){
            return $this->validationFailed("Profile update Failed", $validate->errors());
        }

        $profile = auth()->user()->profile;
        $profile->longitude = $request->longitude;
        $profile->latitude = $request->latitude;
        $profile->address = $request->address;
        $profile->website = $request->website;
        $profile->phone = $request->phone;
        $profile->country_id = $request->country_id;
        $profile->state_id = $request->state_id;
        $profile->lga_id = $request->lga_id;
        if($profile->save()){
            return new GenericResource($profile);
        }else{
            return $this->actionFailure('Something Went wrong');
        }
    }

    public function updateSocial(Request $request){
        $validate = $this->validateSocial($request->all());

        if($validate->fails()){
            return $this->validationFailed("Profile update Failed", $validate->errors());
        }

        $profile = auth()->user()->profile;
        $profile->facebook = $request->facebook;
        $profile->twitter = $request->twitter;
        $profile->instagram = $request->instagram;
        $profile->snapchat = $request->snapchat;
        $profile->google = $request->google;
        $profile->linkedin = $request->linkedin;

        if($profile->save()){
            return new GenericResource($profile);
        }else{
            return $this->actionFailure('Something Went wrong');
        }
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
            'firstname' => 'required|string',
            'lastname' => 'required|string',
            ]);
    }

        /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validateContact(array $data)
    {
        return Validator::make($data, [
            'longitude' => 'required|string',
            'latitude' => 'required|string',
            'phone' => 'required|string',
            'country_id' => 'required|numeric|min:1',
            'state_id' => 'required|numeric|min:1',
            'lga_id' => 'required|numeric|min:1',
        ],
    [
        'lga_id.min' => 'Lga must be selected',
        'country_id.min' => 'Country must be selected',
        'state_id.min' => 'State must be selected',
    ]);
    }

     /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validateSocial(array $data)
    {
        return Validator::make($data, [
            'facebook' => 'nullable|regex:/^(https?:\/\/)?([\da-z\.-]+)\.([a-z\.]{2,6})([\/\w \.-]*)*\/?$/',
            'instagram' => 'nullable|regex:/^(https?:\/\/)?([\da-z\.-]+)\.([a-z\.]{2,6})([\/\w \.-]*)*\/?$/',
            'twitter' => 'nullable|regex:/^(https?:\/\/)?([\da-z\.-]+)\.([a-z\.]{2,6})([\/\w \.-]*)*\/?$/',
            'snapchat' => 'nullable|regex:/^(https?:\/\/)?([\da-z\.-]+)\.([a-z\.]{2,6})([\/\w \.-]*)*\/?$/',
            'linkedin' => 'nullable|regex:/^(https?:\/\/)?([\da-z\.-]+)\.([a-z\.]{2,6})([\/\w \.-]*)*\/?$/',
            'google' => 'nullable|regex:/^(https?:\/\/)?([\da-z\.-]+)\.([a-z\.]{2,6})([\/\w \.-]*)*\/?$/',
       
            ]);
    }
    

}
