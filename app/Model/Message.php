<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    public function user(){
        if(auth()->user()->id == $this->user_id){
            return $this->belongsTo(User::class, 'seller_id', 'id');
            
        }else{
            return $this->belongsTo(User::class);
        }
        
    }

    public function seller(){
        return $this->belongsTo(User::class, 'seller_id', 'id');
    }
}
