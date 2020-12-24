<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
Route::namespace('Country')->group(function(){

    Route::get('country','CountryController@showCountry');
    Route::get('country/{id}','CountryController@countryById');
    Route::post('country','CountryController@countrySave');
    Route::put('country/{id}','CountryController@countryUpdate');
    Route::delete('country/{id}','CountryController@countryDelete');
    
});