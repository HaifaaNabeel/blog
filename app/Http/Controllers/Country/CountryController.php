<?php

namespace App\Http\Controllers\Country;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\CountryModel;
use validator;

class CountryController extends Controller
{
    //
    public function showCountry(){
        return response()->json(CountryModel::get(),200);
    }

    public function countryById($id){
        $country=CountryModel::find($id);
        if(is_null($country)){
            return response()->json(["message" => "Record not found!"],404);
        }
        return response()->json($country,200);
    }
}
