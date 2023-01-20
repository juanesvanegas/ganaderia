<?php

namespace App\Http\Controllers;

use App\Models\Animal;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class AnimalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $animal=Animal::all();
        return view('animal.index',compact('animal'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // $animal =Animal::all();
        return view('animal.create');

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
            'identificador' => 'required',
            'peso' => 'required',
            'tipo'=>'required',
            'raza' => 'required',
            'fecha' => 'required'
            
        ]);
        $request->all();
        DB::table('animals')->insert([
            'identificador'=>$request->identificador,
            'peso'=>$request->peso,
            'tipo_animal'=>$request->tipo,
            'raza'=>$request->raza,
            'fecha_nacimiento'=>$request->fecha
        ]);
        return redirect()->route('index.animal')->with('crear', 'ok');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Animal  $animal
     * @return \Illuminate\Http\Response
     */
    public function show(Animal $animal)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Animal  $animal
     * @return \Illuminate\Http\Response
     */
    public function edit(Animal $animal)
    {
        return view('animal.edit', compact('animal'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Animal  $animal
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Animal $animal)
    {
        $request->validate([
            'identificador' => 'required',
            'peso' => 'required',
            'tipo'=>'required',
            'raza' => 'required',
            'fecha' => 'required'
            
        ]);
      
       $animal->update([
            'identificador'=>$request->identificador,
            'peso'=>$request->peso,
            'tipo_animal'=>$request->tipo,
            'raza'=>$request->raza,
            'fecha_nacimiento'=>$request->fecha
        ]);
        return redirect()->route('index.animal')->with('actualizar', 'ok');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Animal  $animal
     * @return \Illuminate\Http\Response
     */
    public function destroy(Animal $animal)
    {
        $animal->delete();
      return redirect()->back()->with('elminar', 'ok');
    }
}
