<?php

use App\Http\Controllers\ProyectoController;
use App\Models\Proyecto;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    // una consulta de los proyectos, obtengo los 7 ultimos registros
    $data = array('proyectos' => Proyecto::take(7)->latest()->get() );
    // retornar a la vista con esa consulta
    return view('inicio',$data);

})->name('welcome');


Route::get('/nuevo-proyecto', function () {
    // crear un nuevo ingresra un nuevo proyecto
    $pry=new Proyecto();
    $pry->save();
    // retornar a un a pricinpal
    return redirect()->route('principal',$pry->id);
})->name('nuevo-proyecto');

// esta es la ruta para el juego pricipal, necesita un id
Route::get('/principal/{id}',function($id){
    $data = array('pry' => Proyecto::findOrFail($id) );
    return view('principal',$data);
})->name('principal');



Route::post('/guardar',[ProyectoController::class,'guardar'])->name('guardar');
Route::post('/actualizar',[ProyectoController::class,'actualizar'])->name('actualizar');


// todas estas se comunican con el controlador 
Route::get('/eliminar/{id}',[ProyectoController::class,'eliminar'])->name('eliminar');

Route::get('/proyectos',[ProyectoController::class,'proyectos'])->name('proyectos');