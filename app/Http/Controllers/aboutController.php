<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Menu;
class aboutController extends Controller
{
  
	public function aboutpage(){
	    $menus=Menu::all();
		return view('about', compact('menus'));
	}

	public function productpage(){
		return view('productos');
	}
	public function blogs(){

	   $menus=Menu::all();
       return view('blog', compact('menus'));

	}
}
