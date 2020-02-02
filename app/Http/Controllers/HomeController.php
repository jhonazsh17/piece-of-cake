<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

use App\Evaluation;
use App\Session;
use App\Calification;
use App\Option;
use App\Question;
use App\Unit;
use App\Answer;
use App\GradeAux;
use App\User;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function getProgress(){
        $user = Auth::user();
        $califications = Calification::where('id_user', $user->id)->latest()->take(3)->get();
        $suma = 0;

        foreach ($califications as $calification) {
            $suma = $suma + ($calification['note']*100)/20;
        }

        $suma = $suma/3;

        return $suma;
    }

    public function getAverage($user){
        $califications = Calification::where('id_user', $user->id)->get();
        $suma = 0;

        foreach ($califications as $calification) {
            $suma = $suma + $calification['note'];
        }

        if($suma ==0){
            return $suma;
        }else{
            $suma = $suma/count($califications);
            return $suma;
        }
    }

    public function grafico($id){
        $cals = Calification::where('id_user', $id)->get();
        $arrayExams = [];
        $arrayNotes = [];
        $array = [];
        $i=0;
        foreach ($cals as $item) {
            $exam = Evaluation::find($item->id_evaluation);
            $arrayExams[$i] = $exam['title'];
            $arrayNotes[$i] = $item['note'];
            $array[$i] = ['evaluation'=>$exam['title'], 'note'=>$item['note']];
            $i=$i+1;
        }

        $arrayExams = json_encode($arrayExams);
        $arrayNotes = json_encode($arrayNotes);

        return view('dashboard.student.grafico', compact('arrayExams', 'arrayNotes', 'array'));
    }

    public function ordenMerito(){
        $promedios = [];
        $level= Auth::user()->level;
        $users = User::where('id_level',$level->id)->get();
       
        $i=0;

        foreach($users as $user){
            $promedios[$i] = array($user->name, $this->getAverage($user));
            $i=$i+1;
        }

        $promedios = json_encode($promedios);


        return view('dashboard.student.orden-merito', compact('promedios'));
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        //user is administrator or teacher or student
        if(Auth::user()->role=="Administrator"){
            return view('admin.index');
        }else{
            $level = Auth::user()->level;
            $arrayUnits = [];
            $i=0;
            $relation = GradeAux::where('id_level', $level['id'])->get();


            foreach ($relation as $item) {
                $arrayUnits[$i] = Unit::find($item['id_unit']);
                $i=$i+1;
            }

            $calification = $this->getProgress();
            $average = $this->getAverage(Auth::user());

            return view('home', compact('arrayUnits', 'calification', 'average'));
        }        
        
    }

    public function listExams($id){
        $session = Session::find($id);
        $exams = Evaluation::where('id_session', $id)->where('type','Exam')->get();
        $array = [];
        $i=0;

        foreach ($exams as $exam) {
            $cal = Calification::where('id_user', Auth::user()->id)->where('id_evaluation',$exam->id)->first();
            $array[$i] = [
                'id'=>$exam->id,
                'order_of_evaluation'=>$exam->order_of_evaluation,
                'title'=>$exam->title,
                'state'=>$cal['estado_evaluation'],
                'note'=>$cal['note']
            ];
            $i=$i+1;
        }

        return view('exams', compact('session', 'array'));
    }

     public function exam($idSession, $idExam){

        $usersComodin = User::where('id_level', Auth::user()->level['id'])->where('role', 'Student')->get();
        $cal = Calification::where('id_evaluation', $idExam)->where('id_user', Auth::user()->id)->first();
        $cal1 = Calification::where('id_evaluation', $idExam)->where('id_user', Auth::user()->id)->get();
        $bandera = 0;
        $exam = Evaluation::find($idExam);
        $questions = Evaluation::find($idExam)->questions;
        $idEval = $exam->id;

        if($cal){   
            $bandera=1;
            if($cal->estado_evaluation==1){
                $cantidad = count($questions);
                $sum = $cal->corrects;
                $resta = $cal->no_corrects;
                $nota = $cal->note;

                return view('mensaje', compact('nota', 'sum', 'resta', 'cantidad', 'idEval'));
            }else{
                return view('exam', compact('exam', 'questions', 'cal1', 'bandera', 'usersComodin'));
            }
        }else{
            $bandera=0;
            return view('exam', compact('exam', 'questions', 'cal1', 'bandera', 'usersComodin'));
        }

        
    }

    public function goExam($id){
        Calification::create([
            'id_user'=>Auth::user()->id,
            'id_evaluation'=>$id,
            'estado_evaluation'=>0,
            'note'=>0,
            'corrects'=>0,
            'no_corrects'=>0
        ]);

        return 1;
    }

    public function saveAnswer($id, Request $request){
        
        $sum=0;
        $evaluation = Evaluation::find($id);
        $idEval = $evaluation->id;
        $questions = Evaluation::find($id)->questions;
        $multiplo = 20/count($questions);

        for($i=1;$i<=count($questions);$i++){

            $option = Option::where('id_question', $request['question-'.$i])
                        ->where('order_option', $request['correct-'.$i])
                        ->first();

            Answer::create([
                'id_question'=> $option['id_question'],
                'answer_description'=> $option['option_description'],
                'order_in_option'=> $option['order_option'],
                'id_user_support'=> Auth::user()->id
            ]);
            
            if($option['is_correct']==1){
                $sum = $sum + 1;
            }

            
        }

        $nota = round($sum*$multiplo);
        $resta = round(count($questions) - $sum);
        $cantidad = count($questions);
        $sum = round($sum);

        $resolucion = Calification::where('id_evaluation', $id)->where('id_user', Auth::user()->id)->first();

        if($resolucion){
            if($resolucion->estado_evaluation==0){
                $resolucion->estado_evaluation = 1;
                $resolucion->note = $nota;
                $resolucion->corrects = $sum;
                $resolucion->no_corrects = $resta;
                $resolucion->save();
            }else{
                // Nada
            }           
        }else{
            // Nada
        }

        

        return view('mensaje', compact('nota', 'sum', 'resta', 'cantidad', 'idEval'));
    }

    public function answers($idEval, $idUser){
        $exam = Evaluation::find($idEval);
        $questions = Evaluation::find($idEval)->questions;
        return view('dashboard.student.answers', compact('questions', 'exam'));
    }
}
