<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Advert extends Model
{
    protected $fillable = [];

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function country(){
        return $this->belongsTo(Country::class);
    }

    public function state(){
        return $this->belongsTo(State::class);
    }

    public function image(){
        return $this->hasMany(AdvertImage::class);
    }

    public function category(){
        return $this->belongsTo(Category::class);
    }

    public function specifications(){
        return $this->hasMany(AdvertSpecification::class);
    }

    public function subcategory(){
        return $this->belongsTo(SubCategory::class);
    }

}
