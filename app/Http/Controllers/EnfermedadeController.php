<?php

namespace App\Http\Controllers;

use App\Models\Animal;
use App\Models\Enfermedade;
use Illuminate\Http\Request;
use PhpParser\Node\Stmt\Return_;

use Illuminate\Support\Facades\DB;

class EnfermedadeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $enfermedad=Enfermedade::all();
        return view('enfermedad.index',compact('enfermedad'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $animal = Animal:: all();
        $data = array('lista_animales' => $animal);
        return view('enfermedad.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'animal' => 'required',
            'tipo' => 'required',
            'tipo_diagnostico' => 'required',
            'fecha_inicio' => 'required',
            'muerte' => 'required',
            'soporte' => 'required',

        
        ]);
        $request->all();
        DB::table('enfermedades')->insert([
            'fecha_inicio'=>$request->fecha_inicio,
            'tipo_enfermedad'=>$request->tipo,
            'tipo_diagnostico'=>$request->tipo_diagnostico,
            'muerte'=>$request->muerte,
            'soporte'=>$request->soporte,
            'animal'=>$request->animal
        ]);
        return redirect()->route('index.enfermedad')->with('crear', 'ok');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Enfermedade  $enfermedade
     * @return \Illuminate\Http\Response
     */
    public function show(Enfermedade $enfermedade)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Enfermedade  $enfermedade
     * @return \Illuminate\Http\Response
     */
    public function edit(Enfermedade $enfermedade)
    {
        $animal = Animal:: all();
        $data = array('lista_animales' => $animal);
       
        return view('enfermedad.edit', compact('enfermedade'),$data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Enfermedade  $enfermedade
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Enfermedade $enfermedade)
    {
        $request->validate([
            'animal' => 'required',
            'tipo' => 'required',
            'tipo_diagnostico' => 'required',
            'fecha_inicio' => 'required',
            'muerte' => 'required',
            'soporte' => 'required',
            
        ]);
      $enfermedade->update([
        'fecha_inicio'=>$request->fecha_inicio,
        'tipo_enfermedad'=>$request->tipo,
        'tipo_diagnostico'=>$request->tipo_diagnostico,
        'muerte'=>$request->muerte,
        'soporte'=>$request->soporte,
        'animal'=>$request->animal
        ]);
        return redirect()->route('index.enfermedad')->with('actualizar', 'ok');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Enfermedade  $enfermedade
     * @return \Illuminate\Http\Response
     */
    public function destroy(Enfermedade $enfermedade)
    {
        $enfermedade->delete();
      return redirect()->back()->with('elminar', 'ok');
    }
}
