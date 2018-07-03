<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Controllers\ApiController;
use Illuminate\Support\Facades\Validator;
use App\Model\User;
use App\Model\SubCategory;

class UserController extends ApiController
{
    
    public function User(){
        $users = User::all();
        $users->load('profile', 'advert.image');
        return view('admin.user', compact('users'));
    }


    public function viewUser(Request $request, $id){
        $user = User::find($id);
        if(is_null($user)){
            return "Wrong page";
        }

        $user->load('profile');
        return view('admin.viewuser', compact('user'));
    }

    
    public function deleteUser(Request $request, $id){
        $User = User::find($id);
        if($User->delete()){
            return $this->actionSuccess('User has been deleted');
        }else{
            return back()->with('error', 'User delete failed');
        }
    }

    public function createUser(Request $request){
        $this->validator($request->all())->validate();
        $User = new User;
        $User->name = $request->name;
        $User->form_User = $request->form_User;
        $User->subcategory = $request->subcategory;

        if($User->save()){
            return back()->with('success', 'User Created Successfully');
        }else{
            return back()->with('error', 'User Creation failed');
        }
    }


    protected function processImage($request){
        $filename = null;

        if($request->has('image')){
            $image = $request->file('image'); 
            $path = public_path('/img/User/');
            $filename = '/img/User/'.time().".".$image->getClientOriginalExtension();
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
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|string',
            'form_User' => 'required|string',
            
            ]);
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validateSubUser(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|string',
            'User_id' => 'required|numeric',
        ],
    
    [
        'User_id.numeric' => 'Select a User'
    ]);
    }

    

}
