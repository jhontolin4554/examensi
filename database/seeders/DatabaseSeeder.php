<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        $this->call([

            roleSeeder::class,
            userSeeder::class,
            teamSeeder::class,
            expedienteSeed::class,
            folderSeeder::class,
        ]);
    }
}
