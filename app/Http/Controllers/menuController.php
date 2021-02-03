<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Menu;
use App\Models\Servicio;

class menuController extends Controller
{
   
	public function cargartodo(){
	   $menus=Menu::all();
	   $servicios=Servicio::all();
       return view('welcome', compact('menus', 'servicios'));
	}


	public function store(Request $request){

		$menu= new Menu();
		$menu->descripcion=$request->descrip;
		$menu->ruta=$request->ruta;
        $menu->orden=$request->orden;
        $menu->save();

        return redirect('admin/menu');

	}

}
