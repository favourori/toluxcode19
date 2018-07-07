<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class AdvertSpecification extends Model
{
    public function advert(){
        return $this->belongsTo(Advert::class);
    }
}
