<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\ApiController;
use Illuminate\Support\Facades\Validator;
use App\Http\Resources\GenericResource;
use App\Model\Type;
use App\Model\Subtype;


class TypeController extends ApiController
{
    public function getTypes(Request $request, $subcategory_id){
        $rawtypes = Type::all();
        $rawtypes->load('subtype');
        $types = [];
        $rawtypes->each(function ($item, $key) use(&$subcategory_id, &$types) {
            if (in_array("$subcategory_id", $item->subcategory)){
                array_push($types, $item);
            }
        });
        $types = collect($types);
        return new GenericResource($types);
    }

    public function getSubTypes(Request $request, $type_id){
        $subtypes = Subtype::where('type_id', $type_id);
        return new GenericResource($subtypes);
    }
}
