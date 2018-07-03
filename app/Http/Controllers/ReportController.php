<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Model\ReportAdvert;
use Auth;


class ReportController extends ApiController
{
    
    public function report(Request $request, $id){
        // dd($request);
        $validate = $this->validator($request->all());

        if($validate->fails()){
            return $this->validationFailed("Report Failed", $validate->errors());
        }

        $report = new ReportAdvert;
        $report->user_id = Auth::user()->id;
        $report->advert_id = $id;
        $report->report = $request->report;
        // dd($report);
        if($report->save()){
            $this->actionSuccess('Report has been made against this advert');
        }else{
            $this->actionSuccess('Something went wrong');
        }
    }
     /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'report' => 'required|string',
           
            ]);
    }
}
