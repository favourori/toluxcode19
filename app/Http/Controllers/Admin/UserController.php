<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Controllers\ApiController;
use Illuminate\Support\Facades\Validator;
use App\Model\User;
use App\Model\Advert;
use App\Model\SubCategory;

class UserController extends ApiController
{
    
    public function User(){
        $users = User::withTrashed()->get();
        $users->load('profile', 'advert.image');
        return view('admin.user', compact('users'));
    }


    public function viewUser(Request $request, $id){
        $user = User::withTrashed()->where('id', $id)->first();
        if(is_null($user)){
            return "Wrong page";
        }

        $user->load('profile');
        return view('admin.viewuser', compact('user'));
    }

    public function myAdverts(Request $request, $id){
        $user = User::withTrashed()->where('id', $id)->first();
        if(is_null($user)){
            return "Wrong page";
        }

        $user->load('profile');
        return view('admin.useradverts', compact('user'));
    }

    
    public function deleteUser(Request $request, $id){
        $user = User::find($id);
        if($user->forceDelete()){
            return $this->actionSuccess('User has been deleted');
        }else{
            return $this->actionFailure('error', 'User delete failed');
        }
    }

    public function banUser(Request $request, $id){
        $user = User::find($id);
        if($user->delete()){
            return $this->actionSuccess('User has been banned');
        }else{
            return back()->with('error', 'User ban failed');
        }
    }

    public function unbanUser(Request $request, $id){
        $user = User::withTrashed()->where('id', $id)->first();
        
        if($user->restore()){
            return $this->actionSuccess('User has been restored');
        }else{
            return back()->with('error', 'User ban failed');
        }
    }

    public function verifyUser(Request $request, $id){
        $user = User::find($id);
        $user->verified_seller = true;
        $user->advert()->update(['verified_seller' => 1]);
        if($user->save()){
            return $this->actionSuccess('Seller has been verified');
        }else{
            return back()->with('error', 'Seller Verification failed');
        }
    }

    public function unverifyUser(Request $request, $id){
        $user = User::find($id);
        $user->verified_seller = false;
        $user->advert()->update(['verified_seller' => 0]);
        if($user->save()){
            return $this->actionSuccess('Seller Verification has been cancelled');
        }else{
            return back()->with('error', 'Seller Verification Cancellation failed');
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
