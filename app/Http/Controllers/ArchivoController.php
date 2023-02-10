<?php

namespace App\Http\Controllers;

use App\Models\Archivo;
use App\Models\Categoria;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class ArchivoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $archivo=Archivo::all();
        $archivo=DB::select('select * from archivos  where categoria = ?', [1]);
        $categorias=DB::select('select * from categorias  where id = ?', [1]);
        return view('archivo.index',compact('archivo','categorias'));
    }


    public function vacunacion()
    {
        // $archivo=Archivo::all();
        $archivo=DB::select('select * from archivos  where categoria = ?', [2]);
        $categorias=DB::select('select * from categorias  where id = ?', [2]);
        return view('archivo.vacunacion',compact('archivo','categorias'));
    }
 

    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    $categoria =Categoria::all();

    $data = array('lista_categorias' => $categoria);
    

  
        return view('archivo.create',$data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
            $archivo=$request->file('file')->store('public/archivos');
            $file=Storage::url($archivo);
    
           Archivo::create($request->only('categoria')+[
                'archivo'=>$file
            ]); 
            
             return redirect()->route('index.archivo')->with('crear', 'ok');
          
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Archivo  $archivo
     * @return \Illuminate\Http\Response
     */
    public function show(Archivo $archivo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Archivo  $archivo
     * @return \Illuminate\Http\Response
     */
    public function edit(Archivo $archivo)
    {
        $categoria =Categoria::all();

        $data = array('lista_categorias' => $categoria);


        return view('archivo.edit',compact('archivo'),$data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Archivo  $archivo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Archivo $archivo)
    {
        $data=$request->only('categoria');
        $archivo->update($data);
        if ($request->hasFile('file')) {
            if ($archivo->archivo != '') {
                $file=str_replace('storage','public',$archivo->archivo);
                Storage::delete($file);

                
            }
            $archiv=$request->file('file')->store('public/archivos');
            $file=Storage::url($archiv);
            $archivo->update(['archivo'=>$file]);
        }
        return redirect()->route('index.archivo')->with('actualizar', 'ok');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Archivo  $archivo
     * @return \Illuminate\Http\Response
     */
    public function destroy(Archivo $archivo)
    {
        $PDF=str_replace('storage','public',$archivo->archivo);
        Storage::delete($PDF);

        $archivo->delete();

        return redirect()->back()->with('elminar', 'ok');
    }
}
