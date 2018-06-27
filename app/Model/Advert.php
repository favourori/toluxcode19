<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Advert extends Model
{
    protected $fillable = [];

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function image(){
        return $this->hasMany(AdvertImage::class);
    }

    public function category(){
        return $this->belongsTo(Category::class);
    }

    public function subcategory(){
        return $this->belongsTo(SubCategory::class);
    }

}
