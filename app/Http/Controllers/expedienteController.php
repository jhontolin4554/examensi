<?php

namespace App\Http\Controllers;

use App\Models\expedientes;
use App\Models\folders;
use App\Models\teams;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class expedienteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

       $expedientes=[];
        return view('expediente.buscar',compact('expedientes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $texto=trim($request->get('expediente'));

        $expedientes =[ DB::table('expedientes')->where('codigo',$texto)->first()];



        return view('expediente.buscar',compact('expedientes'));
    }




    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $expediente=expedientes::find($id);
        $folders=folders::all();
        return view('expediente.edit',compact('expediente','folders'));
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
        $expediente=expedientes::find($id);
        $expediente->nombre=$request->nombre;
        $expediente->folders_id=$request->folder_id;
        $expediente->save();
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

        $expediente=expedientes::find($id);
        $expediente->folders_id=null;
        $expediente->save();
    
        return redirect()->route('teams.index');
    }
}
