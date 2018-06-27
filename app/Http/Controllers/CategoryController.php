<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\ApiController;
use App\Http\Resources\GenericResource;
use Illuminate\Support\Facades\Validator;
use App\Model\Category;
use App\Model\SubCategory;


class CategoryController extends ApiController
{
    public function getCategories(){
        $categories = Category::all();
        return new GenericResource($categories);
    }

    public function getSubCategories(Request $request, $category_id){
        $subcategories = SubCategory::where('category_id', $category_id)->get();
        return new GenericResource($subcategories);
    }
}
