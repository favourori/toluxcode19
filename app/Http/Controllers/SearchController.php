<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Advert;
use App\Model\User;
use App\Model\Category;
use App\Http\Resources\GenericResource;

class SearchController extends Controller
{
    public function search(Request $request){
        $param = $request->param;
        $category_id = $request->category_id;
        
        $advert= Advert::where(function ($query) use ($param, $category_id) {
                    $query->where('category_id', $category_id)
                    ->where('title', 'like',"%$param%")
                    ->orWhere('description', 'like', "%$param%");
                 })->orderBy('verified_seller', 'desc')->get();
        $advert->load('image', 'user.profile');      
        $advert->each(function ($item, $key){
            $item->encoded_id = $this->encode($item->id);
        });
        return new GenericResource($advert);
    }

    public function searchPage(Request $request){
        $param = $request->get('param');
        $category_id = $request->get('category_id');
        
        $adverts= Advert::where(function ($query) use ($param, $category_id) {
                    $query->where('category_id', $category_id)
                    ->where('title', 'like',"%$param%")
                    ->orWhere('description', 'like', "%$param%");
                 })->orderBy('verified_seller', 'desc')->paginate(8);
        $adverts->load('image', 'user.profile');      
        $adverts->each(function ($item, $key){
            $item->encoded_id = $this->encode($item->id);
        });
       
        $categories = Category::all();
        return view('searchresult', compact('adverts', 'categories'));
    }
}
