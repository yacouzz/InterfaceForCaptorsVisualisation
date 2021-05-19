<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Capteur;
use DB;

class CapteurController extends Controller
{
   public function allCapteurs(){
       //WEB function

       $caps= Capteur::all();
       return view('capteur.all',compact('caps'));
   }

   public function testRemoteDB(){

    $records = DB::connection('remote_mysql')
    ->table('capteurs')
    ->where('mac','i2c-2')
    ->get();

    return dd($records);
   }
}
