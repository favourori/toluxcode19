<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class ReportAdvert extends Model
{
    protected $fillable = ['user_id', 'advert_id', 'report'];

    public function user(){
        return $this->belongsTo(User::Class);
    }

    public function advert(){
        return $this->belongsTo(Advert::Class);
    }


}
