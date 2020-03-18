<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\ApiController;
use App\Http\Resources\GenericResource;
use Illuminate\Support\Facades\Validator;
use App\Model\NewsLetterSubscription;
use Carbon\Carbon;

class NewsLetterController extends Controller
{
    
    public function subscribe(Request $request){
        $this->validator($request->all())->validate();
        $newsletter = new NewsLetterSubscription;

        $newsletter->email = $request->email;
        $newsletter->hash = md5(Carbon::now());

        if($newsletter->save()){
            return back()->with('success', 'You have subscribed to our newsletter');
        }else{
            return back()->with('error', 'Subscription Failed');
        }
    }

    public function unsubscribe(Request $request,$email, $hash){
        
        $newsletter = NewsLetterSubscription::where('email', $email)->where('hash', $hash)->first();

        if(is_null($newsletter)){
            return back()->with('error', 'The Subscription Cancellation did not work');
        }else{
            return back()->with('success', 'You have unsubscribed from our newsletter');
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
            'email' => 'required|string|unique:news_letter_subscriptions',
            
            ]);
    }

}
