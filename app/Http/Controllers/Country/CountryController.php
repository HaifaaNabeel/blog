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
// for search one record 
    public function countryById($id){
        $country=CountryModel::find($id);
        if(is_null($country)){
            return response()->json(["message" => "Record not found!"],404);
        }
        return response()->json($country,200);
    }
    public function countrySave(Request $request){
       /* $rules=[
            'name' => 'required|min:3',
            'dname' => 'required|min:3',
            'iso' => 'required|min:3|max:3',
        ];
        $validator = Validator :: make ($request -> all() , $rules);
        if( $validator -> fails())
        {
            return response()->json ($validator -> error(),400);
        }//
        $country=CountryModel::create($request->all());
        return response()->json($country,201);
    }*/
}
