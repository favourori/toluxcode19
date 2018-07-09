<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Model\Message;
use App\Model\User;
use App\Model\Advert;
use App\Mail\Message as EMessage;
use Illuminate\Support\Facades\Mail;
use Auth;

class MessageController extends Controller
{
    public function sendMessage(Request $request, $seller_id){
        $validate = $this->validator($request->all());
        $user = User::find($seller_id);
        if(is_null($user)){
            return back()->with('error', 'Unknown seller');
        }
        if($validate->fails()){
            return back()->with('error', 'Check required Fields');

        }

        $message = new Message;
        $message->user_id = Auth::user()->id;
        $message->seller_id = $seller_id;
        $message->message = $request->message;
        $message->advert_id = $request->advert_id;
        $advert = Advert::find($request->advert_id);
        $advert->load('user', 'image');
        if($message->save()){
            Mail::to($user)->send(new EMessage($user, $advert, $request->message));
            return back()->with('success', 'Message has been sent to the seller');
        }else{
            return back()->with('error', 'Something Went wrong');
        }

    }

    public function messages(){
        $user_messages = Message::where('user_id', Auth::user()->id)
                            ->get()
                            ->groupBy('user_id');
        
        $seller_messages = Message::where('seller_id', Auth::user()->id)
                            ->get()
                            ->groupBy('seller_id');
                            
        // dd($messages);

        return view('user.message', compact('user_messages', 'seller_messages'));
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
            'message' => 'required|string',
           
            ]);
    }
}
