<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class aboutController extends Controller
{
  
	public function aboutpage(){
		return view('about');
	}

	public function productpage(){
		return view('productos');
	}
	public function blogs(){
		return view('blog');
	}
}
