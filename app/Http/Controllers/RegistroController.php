<?php

namespace App\Http\Controllers;

use App\registro;
use Illuminate\Http\Request;

class RegistroController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $registros=registro::all();
        return view('registro.create',compact('registros'));
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
        //
        $request->validate([
            'nombres'=>'required',
            'apellidos'=>'required',
            'usuario'=>'required',
            'correo'=>'required',
            'contrasena'=>'required',
        ]);

        registro::create($request->all());
        return redirect()->route('registro.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\registro  $registro
     * @return \Illuminate\Http\Response
     */
    public function show(registro $registro)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\registro  $registro
     * @return \Illuminate\Http\Response
     */
    public function edit(registro $registro)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\registro  $registro
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,  $id)
    {
        //
       $datosRegistros=$request->except(['_token','_method']);
       registro::where(['id'=>$id])->update($datosRegistros);
       return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\registro  $registro
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        registro::destroy($id);
        return redirect()->route('registro.index');
    }
}
