<?php

namespace App\Http\Controllers;

use App\Models\folders;
use App\Models\imagenes;
use App\Models\teams;
use App\Models\User;
use Illuminate\Http\Request;

class folderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function ver($id)
    {

       $folders=teams::find($id)->folder;


       return view('folders.index',compact('folders'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $id=auth()->user()->id;
        $teams=User::find($id)->grupo;
        return view('folders.create',compact('teams'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $folders=new folders();
        $folders->nombre=$request->nombre;
        $folders->teams_id=$request->team_id;
        $folders->save();
        return redirect()->back()->with('Grupo Ya Creado');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $expedientes=folders::find($id)->expediente;
        $imagenes=folders::find($id)->imagen;
        return view('folders.show',compact('expedientes','id','imagenes'));
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
