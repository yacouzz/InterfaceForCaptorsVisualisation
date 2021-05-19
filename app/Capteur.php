<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Capteur extends Model
{
    //

    protected $fillable = ['mac','name'];

    
    public function valeurs()
    {
        return $this->hasMany('App\Valeur', 'capteur_id');
    }
    
}
