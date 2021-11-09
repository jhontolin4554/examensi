<?php

namespace App\Http\Controllers;

use App\Models\Team;
use Illuminate\Http\Request;

use App\Models\teams;
use App\Models\User;

class teamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $id=auth()->user()->id;
     $teams=User::find($id)->grupo()->get();
     return view('team.index',compact('teams'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('team.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $team=new teams();
        $team->nombre=$request->nombre;
        $team->save();
        $team->users()->sync(auth()->user()->id);
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
        //
        $teams=teams::find($id)->users()->get();

        return view('team.show',compact('teams'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $team=teams::find($id);
        return view('team.edit',compact('team'));
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
        $team=teams::find($id);
        $team->nombre=$request->nombre;
        $team->save();
        return redirect()->back()->with('Grupo Ya Actualizado');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $team=team::find($id);
        $team->delete();
        return redirect()->route('teams.index');
    }
}
