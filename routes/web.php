<?php

use App\Http\Controllers\AnimalController;
use App\Http\Controllers\ArchivoController;
use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\EnfermedadeController;
use App\Http\Controllers\MedicamentoController;
use App\Http\Controllers\VacunacioneController;
use App\Models\Medicamento;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

 Route::get('/', function () {return view('welcome');})->name('welcome');
 Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');





//categoria
Route::get('/categoria',                    [CategoriaController::class,'index'])->name('index.categoria');
Route::get('/categoria',                    [CategoriaController::class,'index1'])->name('menu.categoria');
Route::get('/categoria/create',             [CategoriaController::class,'create'])->name('create.categoria');
Route::post('/categoria/create/store',      [CategoriaController::class,'store'])->name('store.categoria');
Route::get('/categoria/edit/{categoria}',   [CategoriaController::class,'edit'])->name('edit.categoria');
Route::put('/categoria/{categoria}',        [CategoriaController::class,'update'])->name('update.categoria');
Route::delete('/categoria/{categoria}',     [CategoriaController::class,'destroy'])->name('destroy.categoria');


// ------------------------------------------------------------------------------------------------------------

//Archivo

Route::get('/archivo',                          [ArchivoController::class,'index'])->name('index.archivo');
Route::get('/archivo/create',                   [ArchivoController::class,'create'])->name('create.archivo');
Route::post('/archivo/create/store',            [ArchivoController::class,'store'])->name('store.archivo');
Route::delete('/archivo/eliminar/{archivo}',    [ArchivoController::class,'destroy'])->name('destroy.archivo');
Route::get('/archivo/{archivo}/edit',           [ArchivoController::class,'edit' ])->name('archivo.edit');
Route::put('/archivo/{archivo}',                [ArchivoController::class,'update' ])->name('archivo.update');

// ----------------------------------------------------------------------------------------------------------------

// Medicamento

Route::get('/medicamento',                    [ MedicamentoController ::class,'index'])->name('index.medicamento');
Route::get('/medicamento/create',             [MedicamentoController::class,'create'])->name('create.medicamento');
Route::post('/medicamento/create/store',      [MedicamentoController::class,'store'])->name('store.medicamento');
Route::delete('/medicamento/{medicamento}',   [MedicamentoController::class,'destroy'])->name('destroy.medicamento');
Route::get('/medicamento/{medicamento}/edit', [MedicamentoController::class,'edit' ])->name('medicamento.edit');
Route::put('/medicamento/{medicamento}',      [MedicamentoController::class,'update' ])->name('medicamento.update');


// ----------------------------------------------------------------------------------------------------------------

// Animal

Route::get('/animal',                   [ AnimalController ::class,'index'])->name('index.animal');
Route::get('/animal/create',            [AnimalController::class,'create'])->name('create.animal');
Route::post('/animal/create/store',     [AnimalController::class,'store'])->name('store.animal');
Route::delete('/animal/{animal}',       [AnimalController::class,'destroy'])->name('destroy.animal');
Route::get('/animal/{animal}/edit',     [AnimalController::class,'edit' ])->name('animal.edit');
Route::put('/animal/{animal}',          [AnimalController::class,'update' ])->name('animal.update');


// ----------------------------------------------------------------------------------------------------------------

// Enfermedad

Route::get('/enfermedad',                       [EnfermedadeController ::class,'index'])->name('index.enfermedad');
Route::get('/enfermedad/create',                [EnfermedadeController::class,'create'])->name('create.enfermedad');
Route::post('/enfermedad/create/store',         [EnfermedadeController::class,'store'])->name('store.enfermedad');
Route::delete('/enfermedad/{enfermedade}',      [EnfermedadeController::class,'destroy'])->name('destroy.enfermedad');
Route::get('/enfermedad/{enfermedade}/edit',    [EnfermedadeController::class,'edit' ])->name('enfermedad.edit');
Route::put('/enfermedad/{enfermedade}',         [EnfermedadeController::class,'update' ])->name('enfermedad.update');

// ----------------------------------------------------------------------------------------------------------------

// Vacunacion

Route::get('/vacunacion',                   [ VacunacioneController ::class,'index'])->name('index.vacunacion');
Route::get('/vacunacion/create',            [VacunacioneController::class,'create'])->name('create.vacunacion');
Route::post('/vacunacion/create/store',     [VacunacioneController::class,'store'])->name('store.vacunacion');
Route::delete('/vacunacion/{vacunacione}',  [VacunacioneController::class,'destroy'])->name('destroy.vacunacion');
Route::get('/vacunacion/{vacunacione}/edit',[VacunacioneController::class,'edit' ])->name('vacunacion.edit');
Route::put('/vacunacion/{vacunacione}',     [VacunacioneController::class,'update' ])->name('vacunacion.update');

// ----------------------------------------------------------------------------------------------------------------


