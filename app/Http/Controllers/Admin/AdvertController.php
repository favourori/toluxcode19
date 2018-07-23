<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\GenericResource;
use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\ApiController;
use App\Model\Advert;
use App\Model\AdvertImage;
use App\Model\ReportAdvert;
use App\Model\AdvertSpecification;
use Carbon\Carbon;
use Image;

class AdvertController extends ApiController
{

    public function advert(){
        $adverts = Advert::withTrashed()->get();
        $adverts->load('image');
        return view('admin.adverts', compact('adverts'));
    }

    public function singleAdvert(Request $request, $advert_id){
        $advert = Advert::withTrashed()->where('id', $advert_id)->first();
        $advert->load('image');
        
        return view('admin.advertsingle', compact('advert'));
    }

    public function deleteAdvert(Request $request, $advert_id){
        $advert = Advert::withTrashed()->where('id', $advert_id)->first();

        if(is_null($advert)){
            return $this->notFound('Advert does not exist', []);
        }
        
        $advert_images = $advert->image;
        $advert_images->each(function ($item, $key){
            @unlink(public_path().$item->image);
            $item->forceDelete();
        });
        AdvertSpecification::where('advert_id',$advert->id)->forceDelete();
        ReportAdvert::where('advert_id', $advert->id)->forceDelete();
        $advert->forceDelete();
        

        return $this->actionSuccess('Advert has been deleted');
    }
}
