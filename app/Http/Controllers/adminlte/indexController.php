<?php

namespace App\Http\Controllers\adminlte;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class indexController extends Controller
{
    public function index(){
    	return view ('adminlte.principal');
    }
    public function ingresomenu(){
    	return view ('adminlte.imenu');
    }
    public function login(){
    	return view ('adminlte.login');
    }
}
