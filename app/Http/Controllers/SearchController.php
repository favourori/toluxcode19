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
        $words = explode(" ", $param);
        $prepared_advert = collect();

        foreach($words as $key => $word){
            $advert= Advert::where(function ($query) use ($word) {
                        $query->where('title', 'like',"%$word%")
                        ->orWhere('description', 'like', "%$word%");
                    })->orderBy('verified_seller', 'desc')->get();
            $advert->load('image', 'user.profile');      
            $advert->each(function ($item, $key) use (&$prepared_advert){
                $item->encoded_id = $this->encode($item->id);
                $prepared_advert->push($item);
            });
        }
        return new GenericResource($prepared_advert->unique());
    }

    public function searchPage(Request $request){
        $param = $request->get('param');
        $words = explode(" ", $param);
        $prepared_advert = collect();

        foreach($words as $key => $word){
        $adverts= Advert::where(function ($query) use ($word) {
                    $query->where('title', 'like',"%$word%")
                    ->orWhere('description', 'like', "%$word%");
                 })->orderBy('verified_seller', 'desc')->paginate(8);
        $adverts->load('image', 'user.profile');      
        $adverts->each(function ($item, $key) use (&$prepared_advert) {
            $item->encoded_id = $this->encode($item->id);
            $prepared_advert->push($item);
        });
    }
        $categories = Category::all();
        return view('searchresult', compact('adverts', 'categories'));
    }
}
