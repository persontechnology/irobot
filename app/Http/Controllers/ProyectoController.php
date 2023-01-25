<?php

namespace App\Http\Controllers;

use App\Models\Proyecto;
use Illuminate\Http\Request;

class ProyectoController extends Controller
{
    public function guardar(Request $request)
    {
        $pry=Proyecto::findOrFail($request->id);
        $pry->codigo=$request->contenidoHtml;
        $pry->save();
        return redirect()->route('principal',$request->id);
    }

    // eliminar el proyecto, el cual necesitamos el id para la busqueda y proceder a elimnar
    public function eliminar($id)
    {   
        // buscamos por el id
        $pry=Proyecto::findOrFail($id);
        // elimnar el proyecto
        $pry->delete();
        // retornamos a la ruta de welcome
        return redirect()->route('welcome');
    }



    public function actualizar(Request $request)
    {
        $pry=Proyecto::findOrFail($request->id);
        $pry->nombre=$request->nombre;
        $pry->save();
        return redirect()->route('welcome');
    }


    // presentar una lista de proyecto ingresados
    public function proyectos()
    {
        // aceder al model o tabla proyecto o conulatr lo s19 ultimo sregiostro y obtener en un paginador
        $listaProyecto=Proyecto::latest()->paginate(19);
        // retornar a la vista proyectos con esa lista obteniuda
        return view('proyectos',['proyectos'=>$listaProyecto]);
    }
}
