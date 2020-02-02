<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

use App\User;
use App\Level;
use App\Unit;
use App\Session;
use App\MinimumPeriod;
use App\Evaluation;
use App\Question;
use App\Option;
use App\Calification;
use App\LevelAux;
use App\GradeAux;

class DashboardController extends Controller
{
    //Method for students
    public function getMyStudents(){
    	$array = [];
    	$i=0;

    	if(Auth::user()->role=="Teacher"){
    		$levelsAux = LevelAux::where('id_user', Auth::user()->id)->get();

            foreach ($levelsAux as $levelAux) {
                $level = Level::find($levelAux->id_level);
                $array[$i] = [
                    'id'=>$level->id,
                    'level_name'=>$level->level_name,
                    'grade'=>$level->grade,
                    'section'=>$level->section,
                    'users'=>$level->users
                ];
                $i=$i+1;
            }
    		return view('dashboard.teacher.my-students', compact('array'));

    	}
    	
    }

    public function getStudentsForLevel($level){
        $students = Level::find($level)->users;
        $level = Level::find($level);
        $evaluations = Evaluation::all();

        $arrayEvaluations = [];
        $k=0;

        $gradeAux = GradeAux::where('id_level', $level->id)->first();

        if($gradeAux){
            $sessions = Unit::find($gradeAux['id_unit'])->sessions;

            foreach ($sessions as $session) {
                $evaluationsAll = $session->evaluations;

                foreach ($evaluationsAll as $evaluation) {
                    $arrayEvaluations[$k] = [
                        'id'=>$evaluation->id,
                        'title'=>$evaluation->title,
                        'order_of_evaluation'=>$evaluation->order_of_evaluation
                    ];
                }

                $k=$k+1;
            }
        }
        

        $arrayStudents = [];
        $arrayNotes = [];
        $i=0;
        $j=0;
        
        foreach($students as $student){

            $arrayStudents[$i] = [
                'student' => $student,
                'notes' => []
            ];

            $j=0;

            foreach($evaluations as $evaluation){
                $calification = Calification::where('id_evaluation', $evaluation->id)->where('id_user', $student->id)->first();

                if($calification){
                    $arrayNotes[$j] = $calification['note'];
                }else{
                    $arrayNotes[$j] = "";
                }

                $j=$j+1;
            }

            $notes = json_encode($arrayNotes);
            $arrayStudents[$i]['notes'] = $notes;
            $i=$i+1;
        }

        return view('dashboard.teacher.students-for-level', compact('arrayStudents', 'level', 'arrayEvaluations'));

    }

    //Method for get units and sessions
    public function getUnitsAndSessions(){
        $levelsUser = LevelAux::where('id_user', Auth::user()->id)->get();
        $unitsArray = [];
        $i=0;

        foreach ($levelsUser as $level) {
            $grades = GradeAux::where('id_level', $level->id_level)->get();

            if($grades){

                foreach($grades as $grade){
                    $unitsArray[$i] = [
                        'level'=>Level::find($grade['id_level']),
                        'unit'=>Unit::find($grade['id_unit'])
                    ];
                    $i=$i+1;
                }
                

            }
            
        }

    	return view('dashboard.teacher.units-and-sessions', compact('unitsArray', 'levelsUser'));
    }

    //Method for create
    public function createUnit(){
    	$periods = MinimumPeriod::all();
        $levels = Level::all();
    	return view('dashboard.teacher.create-unit', compact('periods', 'levels'));
    }

    //
    public function saveUnit(Request $request){
    	Unit::create([
    		'id_minimum_period'=>$request->minimum_period,
    		'title'=>$request->title,
    		'order_of_unit'=>$request->order
    	]);

        $unitLast = Unit::all()->last();

        GradeAux::create([
            'id_unit' => $unitLast->id,
            'id_level' => $request->level
        ]);

    	return redirect('/unit-and-session/list');
    }

    //Method for create
    public function createSession(){
    	$units = Unit::all();
    	return view('dashboard.teacher.create-session', compact('units'));
    }

    //
    public function saveSession(Request $request){
    	Session::create([
    		'id_unit'=>$request->unit,
    		'title'=>$request->title,
    		'order_of_session'=>$request->order
    	]);

    	return redirect('/unit-and-session/list');
    }

    public function listEvaluations($type){
    	if($type=="exams"){
    		$exams = Evaluation::where('type', 'Exam')->get();
    		return view('dashboard.teacher.exams', compact('exams'));
    	}else if($type=="practices"){
    		$exams = Evaluation::where('type', 'Practice')->get();
    	}else{
    		$exams = Evaluation::where('type', 'Game')->get();
    	}
    }

    public function createEvaluations($type){
    	$sessions = Session::all();
    	if($type=="exam"){
    		return view('dashboard.teacher.create-exam', compact('sessions'));
    	}
    }

    public function saveEvaluations($type, Request $request){
    	if($type=="exam"){
    		Evaluation::create([
    			'id_session'=>$request->session,
    			'order_of_evaluation'=>$request->order,
    			'title'=>$request->title,
    			'type'=>'Exam'
    		]);

            //Create register in calification table

            $evaluation_last = Evaluation::all()->last();

            Calification::create([
                'id_user'=>Auth::user()->id,
                'id_evaluation'=>$evaluation_last->id
            ]);

    		return redirect('/evaluation/exams');
    	}
    }

    public function questionList($id){
    	$evaluation = Evaluation::find($id);
        $questions = Evaluation::find($id)->questions;
        $questionsArray = [];
        $i=0;

        foreach($questions as $question)
        {
            $questionsArray[$i] = [
                'id'=>$question->id,
                'question_description'=>$question->question_description,
                'question_instruction'=>$question->question_instruction,
                'options'=>$question->options
            ];

            $i=$i+1;
        }   
    	return view('dashboard.teacher.questions', compact('evaluation','questionsArray'));
    }

    public function createQuestion($id){
        $evaluation = Evaluation::find($id);
         

        return view('dashboard.teacher.create-question', compact('evaluation'));
    }

    public function saveQuestion($id, Request $request){
        $evaluation = Evaluation::find($id);
        Question::create([
            'id_evaluation'=>$evaluation->id,
            'question_description'=>$request->question_description,
            'question_instruction'=>$request->question_instruction
        ]);

        $question_last = Question::all()->last();

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
            Option::create([
                'id_question'=>$question_last->id, 
                'option_description' =>$request->opcion1, 
                'some_note'=>$request->inst1, 
                'order_option'=>1,
                'is_correct'=>$op1
            ]);        
        }

        if($request->opcion2!=""){
            Option::create([
                'id_question'=>$question_last->id, 
                'option_description' =>$request->opcion2, 
                'some_note'=>$request->inst2, 
                'order_option'=>2,
                'is_correct'=>$op2
            ]);    
        }

        if($request->opcion3!=""){
            Option::create([
                'id_question'=>$question_last->id, 
                'option_description' =>$request->opcion3, 
                'some_note'=>$request->inst3,
                'order_option'=>3, 
                'is_correct'=>$op3
            ]);  
        }

        if($request->opcion4!=""){
            Option::create([
                'id_question'=>$question_last->id, 
                'option_description' =>$request->opcion4, 
                'some_note'=>$request->inst4, 
                'order_option'=>4,
                'is_correct'=>$op4
            ]);  
        }

        if($request->opcion5!=""){
            Option::create([
                'id_question'=>$question_last->id, 
                'option_description' =>$request->opcion5, 
                'some_note'=>$request->inst5, 
                'order_option'=>5,
                'is_correct'=>$op5
            ]);  
        }

        return redirect('/eval/uation/'.$evaluation->id);
    }
}
