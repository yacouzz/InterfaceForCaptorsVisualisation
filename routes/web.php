<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('index');
});

Route::get('/capteurs','CapteurController@allCapteurs')->name('capteur.all');
Route::get('/valeurs','ValeurController@getSpecVals')->name('valeurs.capteur');
Route::get('/valeursTemp','ValeurController@getTempValues')->name('valeurs.capteurTemp');
Route::get('/test','CapteurController@testRemoteDB')->name('capteur.test');
Route::get('/test2','ValeurController@remoteVal')->name('valeur.test');