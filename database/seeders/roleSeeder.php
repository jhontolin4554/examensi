<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use Spatie\Permission\Models\Role;
class roleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        $role = Role::create(['name' => 'Abogado']);
        $role1 = Role::create(['name' => 'Juez']);
        $role2 = Role::create(['name' => 'Procurador']);
        
    }
}
