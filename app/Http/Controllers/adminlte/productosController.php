<?php

namespace App\Http\Controllers\adminlte;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Servicio;

class productosController extends Controller
{
    public function principal(){
    	return view('adminlte.productos');
    }
     public function store(Request $request){
     	$servicio= new Servicio();

     	$servicio->descripcion=$request->descripcion;
        $servicio->titulo=$request->titulo;
        $servicio->imagen=$request->imagen;
        $servicio->save();
        return redirect('admin/productos');


    }
}
