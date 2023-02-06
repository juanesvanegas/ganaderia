<?php

namespace App\Http\Controllers;

use App\Models\Medicamento;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class MedicamentoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $medicamento=Medicamento::all();
        return view('medicamento.index',compact('medicamento'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('medicamento.create')->with('crear', 'ok');
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
            'nombre_medic' => 'required',
            'dosis_medic' => 'required',
            'medio_admin' => 'required',
            'unidad_medi' => 'required',
            'fecha_cadu' => 'required',
            'lote'=>'required'
            
        ]);
        $request->all();
        DB::table('medicamentos')->insert([
            'nombre_medic'=>$request->nombre_medic,
            'dosis_medic'=>$request->dosis_medic,
            'medio_admin'=>$request->medio_admin,
            'unidad_medi'=>$request->unidad_medi,
            'fecha_cadu'=>$request->fecha_cadu,
            'lote'=> $request->lote
        ]);
        return redirect()->route('index.medicamento')->with('crear', 'ok');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Medicamento  $medicamento
     * @return \Illuminate\Http\Response
     */
    public function show(Medicamento $medicamento)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Medicamento  $medicamento
     * @return \Illuminate\Http\Response
     */
    public function edit(Medicamento $medicamento)
    {
        
        return view('medicamento.edit', compact('medicamento'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Medicamento  $medicamento
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Medicamento $medicamento)
    {
        $request->validate([
            'nombre_medic' => 'required',
            'dosis_medic' => 'required',
            'medio_admin' => 'required',
            'unidad_medi' => 'required',
            'fecha_cadu' => 'required',
            'lote'=>'required'
            
        ]);
       
     $medicamento->update([
            'nombre_medic'=>$request->nombre_medic,
            'dosis_medic'=>$request->dosis_medic,
            'medio_admin'=>$request->medio_admin,
            'unidad_medi'=>$request->unidad_medi,
            'fecha_cadu'=>$request->fecha_cadu,
            'lote'=>$request->lote
        ]);
        return redirect()->route('index.medicamento')->with('actualizar', 'ok');
    
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Medicamento  $medicamento
     * @return \Illuminate\Http\Response
     */
    public function destroy(Medicamento $medicamento)
    {
        $medicamento->delete();
      return redirect()->back()->with('elminar', 'ok');
    }
}
