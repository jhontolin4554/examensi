<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\teams;
use App\Models\User;
class teamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $items1 = [

            ['nombre' => 'Casos Simples',],
            ['nombre' => 'Casos De Divorcios',],
            ['nombre' => 'Casos De Femenicidios',],
            ['nombre' => 'Casos De Complejos',],
        ];

        foreach ($items1 as $item) {
           $teams=teams::create($item);
           $teams->users()->sync(1);
        }

        $items2 = [

            ['nombre' => 'Casos De Dicriminacion',],
            ['nombre' => 'Casos De Choques De Auto',],
            ['nombre' => 'Casos De Robos',],
            ['nombre' => 'Casos De Complejos',],
        ];

        foreach ($items2 as $item) {
           $teams=teams::create($item);
           $teams->users()->sync(2);
        }


        $items3 = [

            ['nombre' => 'Casos Estafas',],
            ['nombre' => 'Casos De Fiscales',],
            ['nombre' => 'Casos De Narcotraficos',],
            ['nombre' => 'Casos De Familiares',],
        ];

        foreach ($items3 as $item) {
           $teams=teams::create($item);
           $teams->users()->sync(3);
        }


        $items4 = [

            ['nombre' => 'Casos De Robo',],
            ['nombre' => 'Casos De Asesinatos',],
            ['nombre' => 'Casos De Femenicidios',],
            ['nombre' => 'Casos De Complejos',],
        ];

        foreach ($items4 as $item) {
           $teams=teams::create($item);
           $teams->users()->sync(4);
        }


        $items5 = [

            ['nombre' => 'Casos Politicos',],
            ['nombre' => 'Casos De Corrupcion',],
            ['nombre' => 'Casos De Violacion',],
            ['nombre' => 'Casos De Contrabando',],
        ];

        foreach ($items5 as $item) {
           $teams=teams::create($item);
           $teams->users()->sync(5);
        }

    }
}
