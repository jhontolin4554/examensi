<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\expedientes;

class expedienteSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {


        $items = [

            ['nombre' => 'expediente1.pdf',  'codigo'=>'01457811',],
            ['nombre' => 'expediente2.pdf',  'codigo'=>'00145782',],
            ['nombre' => 'expediente3.pdf',  'codigo'=>'00145783',],
            ['nombre' => 'expediente4.pdf',  'codigo'=>'00145785',],
            ['nombre' => 'expediente5.pdf',  'codigo'=>'00145785',],
            ['nombre' => 'expediente6.pdf',  'codigo'=>'00145786',],
            ['nombre' => 'expediente7.pdf',  'codigo'=>'00145787',],
            ['nombre' => 'expediente8.pdf',  'codigo'=>'00145788',],
            ['nombre' => 'expediente9.pdf',  'codigo'=>'00145789',],
            ['nombre' => 'expediente10.pdf', 'codigo'=>'001457810',],
            ['nombre' => 'expediente11.pdf', 'codigo'=>'001457811',],
            ['nombre' => 'expediente12.pdf', 'codigo'=>'001457812',],
            ['nombre' => 'expediente13.pdf', 'codigo'=>'001457813',],
            ['nombre' => 'expediente14.pdf', 'codigo'=>'001457814',],
            ['nombre' => 'expediente15.pdf', 'codigo'=>'001457815',],
            ['nombre' => 'expediente16.pdf', 'codigo'=>'001457816',],
            ['nombre' => 'expediente17.pdf', 'codigo'=>'001457817',],
            ['nombre' => 'expediente18.pdf', 'codigo'=>'001457818',],
            ['nombre' => 'expediente19.pdf', 'codigo'=>'001457819',],
            ['nombre' => 'expediente20.pdf', 'codigo'=>'001457820',],
            ['nombre' => 'expediente21.pdf', 'codigo'=>'001457821',],
            ['nombre' => 'expediente22.pdf', 'codigo'=>'001457822',],
            ['nombre' => 'expediente23.pdf', 'codigo'=>'001457823',],
            ['nombre' => 'expediente24.pdf', 'codigo'=>'001457824',],
            ['nombre' => 'expediente25.pdf', 'codigo'=>'001457825',],
            ['nombre' => 'expediente26.pdf', 'codigo'=>'001457826',],
            ['nombre' => 'expediente27.pdf', 'codigo'=>'001457827',],
            ['nombre' => 'expediente28.pdf', 'codigo'=>'001457828',],
            ['nombre' => 'expediente29.pdf', 'codigo'=>'001457829',],
            ['nombre' => 'expediente30.pdf', 'codigo'=>'001457830',],

        ];


        foreach ($items as $item) {
            expedientes::create($item);
        }


    }
}
