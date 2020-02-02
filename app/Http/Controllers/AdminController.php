<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Pregunta;
use App\Opcion;
use App\Estudiante;
use App\ExamenEstudiantes;

class AdminController extends Controller
{
    public function index(){
   		return view('create-pregunta');
	}

	public function preguntaSave(Request $request){
		Pregunta::create([
			'descripcion' => $request->titulo
		]);

		$pregunta = Pregunta::all()->last();
		//-----
		if($request->op1=="on"){   
			$op1=1;       
		}else{ $op1 = 0; }

		if($request->op2=="on"){   
			$op2=1;       
		}else{ $op2 = 0; }

		if($request->op3=="on"){   
			$op3=1;       
		}else{ $op3 = 0; }

		if($request->op4=="on"){   
			$op4=1;       
		}else{ $op4 = 0; }

		if($request->op5=="on"){   
			$op5=1;       
		}else{ $op5 = 0; }

		//-------
		if($request->opcion1!=""){   
			Opcion::create(['id_pregunta'=>$pregunta->id, 'orden' =>1, 'descripcion'=>$request->opcion1, 'es_correcta'=>$op1]);        
		}

		if($request->opcion2!=""){
			Opcion::create(['id_pregunta'=>$pregunta->id, 'orden' =>2, 'descripcion'=>$request->opcion2, 'es_correcta'=>$op2]); 
		}

		if($request->opcion3!=""){
			Opcion::create(['id_pregunta'=>$pregunta->id, 'orden' =>3, 'descripcion'=>$request->opcion3, 'es_correcta'=>$op3]); 
		}

		if($request->opcion4!=""){
			Opcion::create(['id_pregunta'=>$pregunta->id, 'orden' =>4, 'descripcion'=>$request->opcion4, 'es_correcta'=>$op4]); 
		}

		if($request->opcion5!=""){
			Opcion::create(['id_pregunta'=>$pregunta->id, 'orden' =>5, 'descripcion'=>$request->opcion5, 'es_correcta'=>$op5]); 
		}

		return redirect('/');
	}

	public function enviar(Request $request, $id, $idExamen){
		$estudiantes = Estudiante::all();
		$suma=0;
		$preguntas = Pregunta::all();
		$multiplo = 20/count($preguntas);

		for($i=1;$i<=20;$i++){
			$opcion = Opcion::where('id_pregunta', $request['question-'.$i])
						->where('orden', $request['correct-'.$i])
						->first();
			if($opcion['es_correcta']==1){
				$suma = $suma + 1;
			}
		}

		$nota = $suma*$multiplo;
		$resta = count($preguntas) - $suma;
		$cantidad = count($preguntas);

		$resolucion = ExamenEstudiantes::where('id_examen', $idExamen)->where('id_estudiante', $id)->first();

		if($resolucion){
			if($resolucion->estado==0){
				$resolucion->estado = 1;
				$resolucion->nota = $nota;
				$resolucion->correctas = $suma;
				$resolucion->incorrectas = $resta;
				$resolucion->save();
			}else{
				// Nada
			}			
		}else{
			// Nada
		}
		

		return view('mensaje', compact('nota', 'suma', 'resta', 'cantidad', 'estudiantes'));
	}

	public function estudianteGuardar(Request $request){
		Estudiante::create([
			'nombres'=>$request->nombre,
			'dni'=>$request->dni,
			'nivel'=>$request->nivel,
			'grado'=>$request->grado
		]);

		
		return 1;
			
	}
}
