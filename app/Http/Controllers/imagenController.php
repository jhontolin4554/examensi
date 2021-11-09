<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\imagenes;
use Illuminate\Support\Facades\Storage;
class imagenController extends Controller
{
    public function index()
    {


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {

        return view('imagen.create',compact('id'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function subir(Request $request,$id)
    {



        $imagenes=new imagenes();
        $imagenes->nombre=$request->nombre;
        $imagen= $request->file('imagen');
        $imagen->move('storage/', $request->nombre.'.'.$imagen->getClientOriginalExtension());

        $imagenes->url= $request->nombre.'.'.$imagen->getClientOriginalExtension();

        $imagenes->folders_id=$id;
        $imagenes->save();

        return Redirect()->back()->with('status','ya creado');


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
        $imagenes=imagenes::findOrFail($id);

        Storage::delete($imagenes->url);
        $imagenes->delete();
        return redirect()->route('teams.index');
    }
}
