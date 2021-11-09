<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\folders;
class folderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $items1 = [

            ['nombre' => 'Expedientes  De Carlos ', 'teams_id'=>1 ,],
            ['nombre' => 'Expedientes  De Andres', 'teams_id'=>1 ,],
            ['nombre' => 'Expedientes  De Juan', 'teams_id'=>1 ,],
            ['nombre' => 'Expedientes  De Maria', 'teams_id'=>2 ,],
            ['nombre' => 'Expedientes  De  Pedro', 'teams_id'=>2 ,],
            ['nombre' => 'Expedientes  De Ana', 'teams_id'=>3 ,],
            ['nombre' => 'Expedientes  De Adrian', 'teams_id'=>3 ,],
            ['nombre' => 'Expedientes  De Martin', 'teams_id'=>4 ,],
            ['nombre' => 'Expedientes  De Yoel', 'teams_id'=>4 ,],
            ['nombre' => 'Expedientes  De Ivan', 'teams_id'=>4 ,],
            ['nombre' => 'Expedientes  De Gabriel', 'teams_id'=>4 ,],
            ['nombre' => 'Expedientes  De Lopez', 'teams_id'=>5 ,],
            ['nombre' => 'Expedientes  De Kar', 'teams_id'=>5 ,],
            ['nombre' => 'Expedientes  De Matias', 'teams_id'=>5 ,],
            ['nombre' => 'Expedientes  De Amanex', 'teams_id'=>5 ,],
            ['nombre' => 'Expedientes  De Eloy', 'teams_id'=>6 ,],
            ['nombre' => 'Expedientes  De Andrea', 'teams_id'=>6 ,],
            ['nombre' => 'Expedientes  De Luis', 'teams_id'=>6 ,],
            ['nombre' => 'Expedientes  De Laura', 'teams_id'=>6 ,],
            ['nombre' => 'Expedientes  De Lesly', 'teams_id'=>7 ,],
            ['nombre' => 'Expedientes  De Jose Perez', 'teams_id'=>7 ,],
            ['nombre' => 'Expedientes  De Mateo', 'teams_id'=>7 ,],
            ['nombre' => 'Expedientes  De Lucio', 'teams_id'=>7 ,],
            ['nombre' => 'Expedientes  De Ken', 'teams_id'=>8 ,],
            ['nombre' => 'Expedientes  De Abelardo', 'teams_id'=>8 ,],
            ['nombre' => 'Expedientes  De Damaris', 'teams_id'=>8 ,],
            ['nombre' => 'Expedientes  De Deidy', 'teams_id'=>8 ,],
            ['nombre' => 'Expedientes  De Fernando', 'teams_id'=>9 ,],
            ['nombre' => 'Expedientes  De Julian', 'teams_id'=>9 ,],
            ['nombre' => 'Expedientes  De Zenon', 'teams_id'=>9 ,],
            ['nombre' => 'Expedientes  De Edwin', 'teams_id'=>9 ,],
            ['nombre' => 'Expedientes  De Nely', 'teams_id'=>10 ,],


        ];

        foreach ($items1 as $item) {
          folders::create($item);

          
        }

    }
}
