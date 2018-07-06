<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class SellerApplication extends Model
{
    public function user(){
        return $this->belongsTo(User::Class);
    }
}
