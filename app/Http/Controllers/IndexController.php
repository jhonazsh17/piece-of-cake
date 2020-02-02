<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Pregunta;
use App\Opcion;
use App\Estudiante;

use App\User;

class IndexController extends Controller
{
    public function index(){
    	return view('index');
    }

    public function ayuda(){
    	$estudiantes = Estudiante::all();
    	return view('ayuda', compact('estudiantes'));
    }	
}
