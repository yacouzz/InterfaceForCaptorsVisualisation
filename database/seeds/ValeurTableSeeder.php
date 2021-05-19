<?php

use Illuminate\Database\Seeder;

class ValeurTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $cat1=App\Valeur::create([
            'valeur'=>12,
            'capteur_id'=>1
        ]);
        $cat2=App\Valeur::create([
            'valeur'=>8,
            'capteur_id'=>1
        ]);
        $cat3=App\Valeur::create([
            'valeur'=>9,
            'capteur_id'=>1
        ]);
        $cat4=App\Valeur::create([
            'valeur'=>10,
            'capteur_id'=>1
        ]);
        $cat5=App\Valeur::create([
            'valeur'=>6,
            'capteur_id'=>1
        ]);
        $cat6=App\Valeur::create([
            'valeur'=>3,
            'capteur_id'=>1
        ]);
        $cat7=App\Valeur::create([
            'valeur'=>5,
            'capteur_id'=>1
        ]);
        $cat8=App\Valeur::create([
            'valeur'=>4,
            'capteur_id'=>1
        ]);
        $cat9=App\Valeur::create([
            'valeur'=>5,
            'capteur_id'=>1
        ]);
        $cat10=App\Valeur::create([
            'valeur'=>4,
            'capteur_id'=>1
        ]);
        $cat11=App\Valeur::create([
            'valeur'=>6,
            'capteur_id'=>1
        ]);
        $cat12=App\Valeur::create([
            'valeur'=>7,
            'capteur_id'=>1
        ]);
    }
}
