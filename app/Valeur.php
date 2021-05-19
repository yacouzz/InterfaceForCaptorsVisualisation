<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Valeur extends Model
{
    //
    protected $fillable = ['valeur','capteur_id'];

 
        public function capteur()
        {
            return $this->belongsTo('App\Capteur', 'capteur_id');
        }
        
    
}
