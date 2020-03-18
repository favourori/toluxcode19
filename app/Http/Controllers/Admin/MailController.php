<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\ApiController;
use App\Model\User;
use App\Mail\Contact;
use Illuminate\Support\Facades\Mail;
use App\Model\SellerApplication;
use Auth;

class MailController extends ApiController
{
    public function application(){
        $applications = SellerApplication::all();
        return view('admin.seller', compact('applications'));
    }

    public function viewMail(Request $request){
        
        return view('admin.mailusers');
    }

    public function sendMail(Request $request){
        $user = [];
        if($request->user == 'all'){
            $user = User::all();
        }else{
            $user = User::where('verified_seller', 1)->get();
        }
        $messages = $request->message;
        $mail = Mail::to(auth()->user())->cc($user)->send(new Contact(html_entity_decode($messages)));
       
        return back()->with('success', 'Message has been sent to users');
       
    }

   
    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validateMessage(array $data)
    {
        return Validator::make($data, [
            'message' => 'required|string',
           
        ]
    );
    }
}
