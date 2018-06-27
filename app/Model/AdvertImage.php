<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class AdvertImage extends Model
{
    public function advert(){
        return $this->belongsTo(Advert::class);
    }
}
