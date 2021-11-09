<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\teams;
use App\Models\perfiles;
class userController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $id=auth()->user()->id;
        $teams=User::find($id)->grupo()->get();
        return view('user.create',compact('teams'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {


        $user=new User();
        $perfil=new perfiles();
        $user->name=$request->nombre;
        $user->email=$request->correo;
        $user->password=bcrypt('password');
        $user->save();

        $user->assignRole($request->rol);

        $user->grupo()->sync($request->team_id);

        $perfil->nombre=$request->nombre;
        $perfil->dirrecion=$request->Direccion;
        $perfil->telefono=$request->Telefono;
        $perfil->fecha_nacimiento=$request->fecha_nacimiento;
        $perfil->carnet=$request->carnet_identidad;
        $perfil->carrera=$request->profesion;
        $perfil->user_id=$user->id;
        $perfil->save();

        return redirect()->back()->with('Procurador Ya Creado');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
