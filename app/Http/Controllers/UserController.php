<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\User;
use App\Model\Profile;
use App\Http\Resources\GenericResource;
use Illuminate\Support\Facades\Validator;
// use App\Http\Controllers\ApiController;

class UserController extends ApiController
{
    
    public function dashboard(){
        return view('user.dashboard');
    }

    public function profile(){
        $user = auth()->user();
        return view('user.profile', compact('user'));
    }

    public function apiUser(){
        $user = auth()->user();
        return new GenericResource($user);
    }

    public function apiProfile(){
        $profile = auth()->user()->profile;
        return new GenericResource($profile);
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

    public function contact(){
        $user = auth()->user();
        return view('user.contact', compact('user'));
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
    

}
