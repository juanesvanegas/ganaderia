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
Route::get('/categoria',                    [CategoriaController::class,'index'])->middleware('auth')->name('index.categoria');
Route::get('/categoria',                    [CategoriaController::class,'index1'])->middleware('auth')->name('menu.categoria');
Route::get('/categoria/create',             [CategoriaController::class,'create'])->middleware('auth')->name('create.categoria');
Route::post('/categoria/create/store',      [CategoriaController::class,'store'])->middleware('auth')->name('store.categoria');
Route::get('/categoria/edit/{categoria}',   [CategoriaController::class,'edit'])->middleware('auth')->name('edit.categoria');
Route::put('/categoria/{categoria}',        [CategoriaController::class,'update'])->middleware('auth')->name('update.categoria');
Route::delete('/categoria/{categoria}',     [CategoriaController::class,'destroy'])->middleware('auth')->name('destroy.categoria');


// ------------------------------------------------------------------------------------------------------------

//Archivo

Route::get('/archivo',                          [ArchivoController::class,'index'])->middleware('auth')->name('index.archivo');
Route::get('/archivo/create',                   [ArchivoController::class,'create'])->middleware('auth')->name('create.archivo');
Route::post('/archivo/create/store',            [ArchivoController::class,'store'])->middleware('auth')->name('store.archivo');
Route::delete('/archivo/eliminar/{archivo}',    [ArchivoController::class,'destroy'])->middleware('auth')->name('destroy.archivo');
Route::get('/archivo/{archivo}/edit',           [ArchivoController::class,'edit' ])->middleware('auth')->name('archivo.edit');
Route::put('/archivo/{archivo}',                [ArchivoController::class,'update' ])->middleware('auth')->name('archivo.update');

// ----------------------------------------------------------------------------------------------------------------

// Medicamento

Route::get('/medicamento',                    [ MedicamentoController ::class,'index'])->middleware('auth')->name('index.medicamento');
Route::get('/medicamento/create',             [MedicamentoController::class,'create'])->middleware('auth')->name('create.medicamento');
Route::post('/medicamento/create/store',      [MedicamentoController::class,'store'])->middleware('auth')->name('store.medicamento');
Route::delete('/medicamento/{medicamento}',   [MedicamentoController::class,'destroy'])->middleware('auth')->name('destroy.medicamento');
Route::get('/medicamento/{medicamento}/edit', [MedicamentoController::class,'edit' ])->middleware('auth')->name('medicamento.edit');
Route::put('/medicamento/{medicamento}',      [MedicamentoController::class,'update' ])->middleware('auth')->name('medicamento.update');


// ----------------------------------------------------------------------------------------------------------------

// Animal

Route::get('/animal',                   [ AnimalController ::class,'index'])->middleware('auth')->middleware('auth')->name('index.animal');
Route::get('/animal/create',            [AnimalController::class,'create'])->middleware('auth')->name('create.animal');
Route::post('/animal/create/store',     [AnimalController::class,'store'])->middleware('auth')->name('store.animal');
Route::delete('/animal/{animal}',       [AnimalController::class,'destroy'])->middleware('auth')->name('destroy.animal');
Route::get('/animal/{animal}/edit',     [AnimalController::class,'edit' ])->middleware('auth')->name('animal.edit');
Route::put('/animal/{animal}',          [AnimalController::class,'update' ])->middleware('auth')->name('animal.update');


// ----------------------------------------------------------------------------------------------------------------

// Enfermedad

Route::get('/enfermedad',                       [EnfermedadeController ::class,'index'])->middleware('auth')->middleware('auth')->name('index.enfermedad');
Route::get('/enfermedad/create',                [EnfermedadeController::class,'create'])->middleware('auth')->name('create.enfermedad');
Route::post('/enfermedad/create/store',         [EnfermedadeController::class,'store'])->middleware('auth')->name('store.enfermedad');
Route::delete('/enfermedad/{enfermedade}',      [EnfermedadeController::class,'destroy'])->middleware('auth')->name('destroy.enfermedad');
Route::get('/enfermedad/{enfermedade}/edit',    [EnfermedadeController::class,'edit' ])->middleware('auth')->name('enfermedad.edit');
Route::put('/enfermedad/{enfermedade}',         [EnfermedadeController::class,'update' ])->middleware('auth')->name('enfermedad.update');

// ----------------------------------------------------------------------------------------------------------------

// Vacunacion

Route::get('/vacunacion',                   [ VacunacioneController ::class,'index'])->middleware('auth')->middleware('auth')->name('index.vacunacion');
Route::get('/vacunacion/create',            [VacunacioneController::class,'create'])->middleware('auth')->name('create.vacunacion');
Route::post('/vacunacion/create/store',     [VacunacioneController::class,'store'])->middleware('auth')->name('store.vacunacion');
Route::delete('/vacunacion/{vacunacione}',  [VacunacioneController::class,'destroy'])->middleware('auth')->name('destroy.vacunacion');
Route::get('/vacunacion/{vacunacione}/edit',[VacunacioneController::class,'edit' ])->middleware('auth')->name('vacunacion.edit');
Route::put('/vacunacion/{vacunacione}',     [VacunacioneController::class,'update' ])->middleware('auth')->name('vacunacion.update');

// ----------------------------------------------------------------------------------------------------------------