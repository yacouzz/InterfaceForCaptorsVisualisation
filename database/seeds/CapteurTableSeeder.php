<?php

use Illuminate\Database\Seeder;

class CapteurTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $cat1=App\Capteur::create([
            'name'=>'Capteur de PH',
            'mac'=>'XX:XX:XX:XX:XX:XX'
        ]);
        $cat2=App\Capteur::create([
            'name'=>'Capteur de temperature',
            'mac'=>'XX:XX:XX:XX:XX:XX'
        ]);
        $cat3=App\Capteur::create([
            'name'=>'Capteur de niveau d\'eau',
            'mac'=>'XX:XX:XX:XX:XX:XX'
        ]);
        $cat4=App\Capteur::create([
            'name'=>'Capteur d\'Electroconnectivité',
            'mac'=>'XX:XX:XX:XX:XX:XX'
        ]);
        $cat4=App\Capteur::create([
            'name'=>'Capteur d\'humidité',
            'mac'=>'XX:XX:XX:XX:XX:XX'
        ]);
        $cat5=App\Capteur::create([
            'name'=>'Capteur de Luminosité',
            'mac'=>'XX:XX:XX:XX:XX:XX'
        ]);
    }
}
