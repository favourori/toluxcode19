<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Country;
use App\Model\State;
use App\Model\Lga;

use App\Http\Resources\GenericResource;

class LocationController extends ApiController
{
    public function getCountries(){
        $country = Country::where('name', 'Nigeria')->get();
        return new GenericResource($country);
    }

    public function getStates(Request $request, $country_id){
        $state = State::where('country_id', $country_id)->get();
        return new GenericResource($state);
    }

    public function getLgas(Request $request, $state_id){
        $lga = Lga::where('state_id', $state_id)->get();
        return new GenericResource($lga);
    }

}
