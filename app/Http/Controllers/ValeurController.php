<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Valeur;
use JavaScript;
use View;
use DB;

class ValeurController extends Controller
{   
    
    public function getAll()
    {
        //WEB function 
    }

    
    public function getSpecVals()
    {
        //WEB function
        
        //Recupératioon des valeurs du PH
        $vals = DB::connection('remote_mysql')
        ->table('valeurs')
        ->where('capteur_mac','i2c-2')
        ->orderBy('id', 'desc')
        ->pluck('valeur')->take(6);

        $dates = DB::connection('remote_mysql')
        ->table('valeurs')
        ->where('capteur_mac','i2c-2')
        ->orderBy('id', 'desc')
        ->pluck('date')->take(6);

     
        JavaScript::put([
        'vals' => $vals->toArray(),
        'dates' => $dates->toArray(),
        ]);

        return View::make('charts');
    }

    public function getTempValues()
    {
        //Recupération des valeurs de température
        $vals = DB::connection('remote_mysql')
        ->table('valeurs')
        ->where('capteur_mac','28-3c01d075c94b')
        ->orderBy('id', 'desc')
        ->pluck('valeur')->take(6);

        //Return dates for classification
        $dates = DB::connection('remote_mysql')
        ->table('valeurs')
        ->where('capteur_mac','28-3c01d075c94b')
        ->orderBy('id', 'desc')
        ->pluck('date')->take(6);

     
        JavaScript::put([
        'vals' => $vals->toArray(),
        'dates' => $dates->toArray(),
        ]);

        return View::make('charts2');
    }

    public function remoteVal(){
        
        $records = DB::connection('remote_mysql')
        ->table('valeurs')
        ->where('capteur_mac','i2c-2')
        ->get()->take(6);

        return dd($records);
  
    }

}
