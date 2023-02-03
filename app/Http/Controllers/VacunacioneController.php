<?php

namespace App\Http\Controllers;

use App\Models\Animal;
use App\Models\Categoria;
use App\Models\Medicamento;
use App\Models\User ;
use App\Models\Vacunacione;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;




class VacunacioneController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $vacunacion=Vacunacione::all();
        return view('vacunacion.index',compact('vacunacion'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $medicamento = Medicamento::all();
        // $data = array('lista_medicamentos' => $medicamento);

        $animal = Animal::all();
        // $data1 = array('lista_animales' => $animal);

        $users = User::all();

        return view('vacunacion.create', compact('medicamento', 'animal', 'users'));
    }

    // public function create2(){

    //     $users = User ::all();
    //     $data2 = array('lista_usuarios' => $users);

    //     return view('vacunacion.create', $data2);
    // }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'id_animal' => 'required',
            'cantidad_usada' => 'required',
            'fecha_realizacion' => 'required',
            'unidad_medi' => 'required',
            'medio_admin' => 'required',
            'nombre_medic' => 'required',
            'id_usuario' => 'required',
            
        ]);
        $request->all();
        DB::table('vacunaciones')->insert([
            'cantidad_usada'=>$request->cantidad_usada,
            'fecha_realizacion'=>$request->fecha_realizacion,
            'unidad_medi'=>$request->unidad_medi,
            'medio_admin'=>$request->medio_admin,
            'nombre_medic'=>$request->nombre_medic,
            'id_animal'=>$request->id_animal,
            'id_usuario'=>$request->id_usuario

        ]);
        return redirect()->route('index.vacunacion')->with('crear', 'ok');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Vacunacione  $vacunacione
     * @return \Illuminate\Http\Response
     */
    public function show(Vacunacione $vacunacione)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Vacunacione  $vacunacione
     * @return \Illuminate\Http\Response
     */
    public function edit( Vacunacione $vacunacione)

    {

        $medicamento =Medicamento::all();

        $data = array('lista_medicamentos' => $medicamento);

        $animal =Animal::all();

        $data1 = array('lista_animales' => $animal);

      

        $users = User ::all();
        $data2 = array('lista_usuarios' => $users);

 
        return view('vacunacion.edit', compact('vacunacione'),$data1,$data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Vacunacione  $vacunacione
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Vacunacione $vacunacione)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Vacunacione  $vacunacione
     * @return \Illuminate\Http\Response
     */
    public function destroy(Vacunacione $vacunacione)
    {
        $vacunacione->delete();
        return redirect()->back()->with('elminar', 'ok');
    }
}
