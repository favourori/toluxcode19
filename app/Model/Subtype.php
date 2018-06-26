<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Subtype extends Model
{
    public function type(){
        return $this->belongsTo(Type::class);
    }
}
