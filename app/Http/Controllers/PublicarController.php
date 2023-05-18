<?php

namespace App\Http\Controllers;

use App\publicar;
use Illuminate\Http\Request;

class PublicarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $publicar=publicar::all();
        return view('publicar.create',compact('publicar'));

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
            'titulo'=>'required',
            'informacion'=>'required',
          
        ]);

        publicar::create($request->all());
        return redirect()->route('publicar.index ');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\publicar  $publicar
     * @return \Illuminate\Http\Response
     */
    public function show(publicar $publicar)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\publicar  $publicar
     * @return \Illuminate\Http\Response
     */
    public function edit(publicar $publicar)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\publicar  $publicar
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,  $id)
    {
        //
        $datosPublicar=$request->except(['_token','_method']);
       publicar::where(['id'=>$id])->update($datosPublicar);
       return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\publicar  $publicar
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        publicar::destroy($id);
        return redirect()->route('publicar.index');
    }
}
