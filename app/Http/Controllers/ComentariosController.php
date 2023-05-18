<?php

namespace App\Http\Controllers;

use App\comentarios;
use Illuminate\Http\Request;

class ComentariosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $comentarios=comentarios::all();
        return view('noticia1.create',compact('comentarios'));
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
            'comentario'=>'required',
            
        ]);

        comentarios::create($request->all());
        return redirect()->route('noticia1.index');
    }
    

    /**
     * Display the specified resource.
     *
     * @param  \App\comentarios  $comentarios
     * @return \Illuminate\Http\Response
     */
    public function show(comentarios $comentarios)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\comentarios  $comentarios
     * @return \Illuminate\Http\Response
     */
    public function edit(comentarios $comentarios)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\comentarios  $comentarios
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,  $id)
    {
        //
        $datosComentarios=$request->except(['_token','_method']);
       comentarios::where(['id'=>$id])->update($datosComentarios);
       return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\comentarios  $comentarios
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        comentarios::destroy($id);
        return redirect()->route('noticia1.index');
    }
}
