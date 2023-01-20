<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class CategoriaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categoria=Categoria::all();
        return view('categoria.index',compact('categoria'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       return view('categoria.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $categoria=$request->file('img')->store('public/imagenes');
        $img=Storage::url($categoria);

        Categoria::create($request->only('nombre_cat')+[
            'img'=>$img
        ]); 
        
        return redirect()->route('index.categoria')->with('crear', 'ok');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Categoria  $categoria
     * @return \Illuminate\Http\Response
     */
    public function show(Categoria $categoria)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Categoria  $categoria
     * @return \Illuminate\Http\Response
     */
    public function edit(Categoria $categoria)
    {     
        return view('categoria.edit',compact('categoria'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Categoria  $categoria
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Categoria $categoria)
    {
        $data=$request->only('nombre_cat');
        $categoria->update($data);
        if ($request->hasFile('img')) {
            if ($categoria->img != '') {
                $image=str_replace('storage','public',$categoria->img);
                Storage::delete($image);

                
            }
            $categori=$request->file('img')->store('public/imagenes');
            $file=Storage::url($categori);
            $categoria->update(['img'=>$file]);
        }
        return redirect()->route('index.categoria')->with('actualizar', 'ok');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Categoria  $categoria
     * @return \Illuminate\Http\Response
     */
    public function destroy(Categoria $categoria)
    {
        $image=str_replace('storage','public',$categoria->img);
        Storage::delete($image);
        $categoria->delete();
        return redirect()->back()->with('elminar', 'ok');
    }
}
