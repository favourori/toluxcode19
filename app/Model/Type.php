<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Type extends Model
{
    protected $casts = ['subcategory' => 'array'];

    public function subtype(){
        return $this->hasMany(Subtype::class);
    }
}
