<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Support\Facades\DB;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public static function getEnumValues($table, $column){
        $type = DB::select( DB::raw("SHOW COLUMNS FROM $table WHERE Field = '$column'") )[0]->Type;
        preg_match('/^enum\((.*)\)$/', $type, $matches);
        $enum = array();
        foreach( explode(',', $matches[1]) as $value )
        {
            $v = trim( $value, "'" );
            $enum = array_add($enum, $v, $v);
        }
        return $enum;
    }

    public function decode($value){
        $multiplier = 6;
        $advertid_decoded = substr($value, ($multiplier), strlen($value) - ($multiplier * 2));
        if(is_numeric($advertid_decoded)){
            return $advertid_decoded;
        }else{
            return false;
        }
        
    }

    public function encode($value){
        $start = "";
        $end = "";
        $multiplier = 6;
        $alpha = "ABCDEFGHIJKLMNOPQRSTUPWXYZabcdefghijklmanopqrstuvwxyz";
        
        for($i = 0; $i < $multiplier; $i++){
            $rand = rand(0,strlen($alpha));
            $start .= substr($alpha,$rand, 1);
        }

        for($i = 0; $i < $multiplier; $i++){
            $rand = rand(0,strlen($alpha));
            $end .= substr($alpha,$rand, 1);
        }
        
        return $start.$value.$end;
        
    }
}
