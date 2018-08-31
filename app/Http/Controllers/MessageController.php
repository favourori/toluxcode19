<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Model\Message;
use App\Model\User;
use App\Model\Advert;
use App\Mail\Message as EMessage;
use Illuminate\Support\Facades\Mail;
use App\Http\Resources\GenericResource;
use App\Model\MessageStream;
use App\Events\SendMessageSignal;
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
       
        $message_exists = Message::where('user_id', Auth::user()->id)
                                        ->where('seller_id', $request->seller_id)
                                        ->first();
        if(is_null($message_exists)){
            $message_exists = Message::where('seller_id', Auth::user()->id)
                                        ->where('user_id', $request->seller_id)
                                        ->first();
            
        }

        if(!is_null($message_exists)){
            $message_stream = new MessageStream;
            $message_stream->sender_id = Auth::user()->id;
            $message_stream->message = $request->message;
            $message_stream->message_id = $message_exists->id;
            $message_stream->save();
            $advert = Advert::find($request->advert_id);
            $advert->load('user', 'image');
            $mail = Mail::to($user)->send(new EMessage($user, $advert, $request->message));
            
                return back()->with('success', 'Message has been sent to the seller');
            
        }else{
            $message = new Message;
            $message->user_id = Auth::user()->id;
            $message->seller_id = $request->seller_id;
            $message->message = $request->message;
            $message->advert_id = $request->advert_id;
            $advert = Advert::find($request->advert_id);
            $advert->load('user', 'image');
            if($message->save()){
                $message_stream = new MessageStream;
                $message_stream->sender_id = Auth::user()->id;
                $message_stream->message = $request->message;
                $message_stream->message_id = $message->id;
                $message_stream->save();
                Mail::to($user)->send(new EMessage($user, $advert, $request->message));
                return back()->with('success', 'Message has been sent to the seller');
            }else{
                return back()->with('error', 'Something Went wrong');
            }

        }
        
    }

    public function messages(){
        $user_messages = collect([]);
        
        $user_messages = Message::where('user_id', Auth::user()->id)
                             ->orWhere('seller_id', Auth::user()->id)
                             ->get();
        $user_messages->load('user');
   
        $user_messages = $user_messages->unique();
        return view('user.message', compact('user_messages'));
    }

    public function apiMessages(){
        $user_messages = collect([]);
        
        $user_messages = Message::where('user_id', Auth::user()->id)
                             ->orWhere('seller_id', Auth::user()->id)
                             ->get();

        $user_messages->load('user.profile');
   
        $user_messages = $user_messages->unique();
        return new GenericResource($user_messages);
    }

    public function chat(Request $request, $message_id){
        $message_stream = new MessageStream;
        $message_stream->sender_id = Auth::user()->id;
        $message_stream->message = $request->message;
        $message_stream->message_id = $message_id;
        $message_stream->save();
        event(new SendMessageSignal($message_stream));
        return new GenericResource($message_stream);
    }


    public function getRelatedMessages(Request $request, $message_id){
        $messages = MessageStream::where('message_id', $message_id)->get();

        return new GenericResource($messages);
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
