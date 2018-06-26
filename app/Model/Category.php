<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = ['name', 'categories'];

    public function delete(){

        if(file_exists(public_path().$this->image)){
            @unlink(public_path().$this->image);
        }
        parent::delete();
    }

    public function subcategory(){
        return $this->hasMany(SubCategory::class);
    }
}
