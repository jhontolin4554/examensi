<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\perfiles;
class userSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user=new User();
        $perfil=new perfiles();
        $user->name="jhon";
        $user->email="jhon@root.com";
        $user->password=bcrypt('password');
        $user->save();

        $user->assignRole("Abogado");

        $perfil->nombre="jhon Fernando";
        $perfil->dirrecion="16 de julio";
        $perfil->telefono="+591 4715544";
        $perfil->fecha_nacimiento="1998-10-24";
        $perfil->carnet="13972103";
        $perfil->carrera="derecho";
        $perfil->user_id=$user->id;
        $perfil->save();


        $user=new User();
        $perfil=new perfiles();
        $user->name="jaime";
        $user->email="jaime@root.com";
        $user->password=bcrypt('password');
        $user->save();

        $user->assignRole("Abogado");

        $perfil->nombre="jaime karnol";
        $perfil->dirrecion="calle 3";
        $perfil->telefono="+52 1454115";
        $perfil->fecha_nacimiento="1997-10-11";
        $perfil->carnet="55471255";
        $perfil->carrera="derecho penal";
        $perfil->user_id=$user->id;
        $perfil->save();


        $user=new User();
        $perfil=new perfiles();
        $user->name="jose";
        $user->email="jose@root.com";
        $user->password=bcrypt('password');
        $user->save();

        $user->assignRole("Abogado");

        $perfil->nombre="jose flores rojas";
        $perfil->dirrecion="calle sucre";
        $perfil->telefono="+123 41541155";
        $perfil->fecha_nacimiento="1997-10-02";
        $perfil->carnet="14854125";
        $perfil->carrera="derecho";
        $perfil->user_id=$user->id;
        $perfil->save();


        $user=new User();
        $perfil=new perfiles();
        $user->name="pepe";
        $user->email="pepe@root.com";
        $user->password=bcrypt('password');
        $user->save();

        $user->assignRole("Abogado");

        $perfil->nombre="pepe gonzalo perez";
        $perfil->dirrecion="avenida america";
        $perfil->telefono="+41 58545841";
        $perfil->fecha_nacimiento="2000-10-14";
        $perfil->carnet="625215415";
        $perfil->carrera="derecho";
        $perfil->user_id=$user->id;
        $perfil->save();

        $user=new User();
        $perfil=new perfiles();
        $user->name="alberto callejas";
        $user->email="alberto@root.com";
        $user->password=bcrypt('password');
        $user->save();

        $user->assignRole("Abogado");

        $perfil->nombre="alberto callejas ";
        $perfil->dirrecion="calle florida";
        $perfil->telefono="+415 8574552";
        $perfil->fecha_nacimiento="1998-10-04";
        $perfil->carnet="4543424";
        $perfil->carrera="derecho";
        $perfil->user_id=$user->id;
        $perfil->save();

        $user=new User();
        $perfil=new perfiles();
        $user->name="federico";
        $user->email="federico@root.com";
        $user->password=bcrypt('password');
        $user->save();

        $user->assignRole("Abogado");

        $perfil->nombre="federico vidal";
        $perfil->dirrecion="calle flores";
        $perfil->telefono="715485123";
        $perfil->fecha_nacimiento="2000-05-13";
        $perfil->carnet="125123";
        $perfil->carrera="derecho";
        $perfil->user_id=$user->id;
        $perfil->save();

        $user=new User();
        $perfil=new perfiles();
        $user->name="andres";
        $user->email="andres@root.com";
        $user->password=bcrypt('password');
        $user->save();

        $user->assignRole("Abogado");

        $perfil->nombre="andres roman ";
        $perfil->dirrecion="calle vezcusio";
        $perfil->telefono="715485123";
        $perfil->fecha_nacimiento="1986-10-08";
        $perfil->carnet="6433579";
        $perfil->carrera="derecho";
        $perfil->user_id=$user->id;
        $perfil->save();

        $user=new User();
        $perfil=new perfiles();
        $user->name="karem";
        $user->email="karem@root.com";
        $user->password=bcrypt('password');
        $user->save();

        $user->assignRole("Abogado");

        $perfil->nombre="karem flores";
        $perfil->dirrecion="calle 6";
        $perfil->telefono="+4  55411125";
        $perfil->fecha_nacimiento="1994-01-05";
        $perfil->carnet="0876554";
        $perfil->carrera="derecho";
        $perfil->user_id=$user->id;
        $perfil->save();

        $user=new User();
        $perfil=new perfiles();
        $user->name="maria";
        $user->email="maria@root.com";
        $user->password=bcrypt('password');
        $user->save();

        $user->assignRole("Abogado");

        $perfil->nombre="maria varientos";
        $perfil->dirrecion="calle don bosco";
        $perfil->telefono="715485123";
        $perfil->fecha_nacimiento="1989-05-09";
        $perfil->carnet="5864564";
        $perfil->carrera="derecho";
        $perfil->user_id=$user->id;
        $perfil->save();

        $user=new User();
        $perfil=new perfiles();
        $user->name="amdrea";
        $user->email="amdrea@root.com";
        $user->password=bcrypt('password');
        $user->save();

        $user->assignRole("Abogado");

        $perfil->nombre="amdrea tolin";
        $perfil->dirrecion="calle 18";
        $perfil->telefono="+47 451325";
        $perfil->fecha_nacimiento="1998-07-09";
        $perfil->carnet="562125541";
        $perfil->carrera="derecho";
        $perfil->user_id=$user->id;
        $perfil->save();


    }
}
