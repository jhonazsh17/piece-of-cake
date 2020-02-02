<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Level;

class LevelController extends Controller
{
    //Method for get all levels
    public function all(){
    	$levels = Level::all();
    	return view('admin.levels.list', compact('levels'));
    }

    //Method for create form
    public function create(){
    	return view('admin.levels.create');
    }

    //Method for save a level
    public function save(Request $request){
    	Level::create([
    		'level_name'=>$request['name'],
    		'grade'=>$request['grade'],
    		'section'=>$request['section']
    	]);
    	return redirect('level/list');
    }
}
