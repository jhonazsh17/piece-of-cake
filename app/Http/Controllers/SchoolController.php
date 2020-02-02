<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\School;

class SchoolController extends Controller
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

    //Method for create a school
    public function create(){
    	$school = School::get()->first();

    	if($school){
    		return redirect('/school/data');
    	}else{
    		return view('admin.school.create');
    	}
    	
    }

    //Method for save a school
    public function save(Request $request){
    	School::create([
    		'name'=>$request['name'],
    		'number_school'=>$request['number'],
    		'location'=>$request['location'],
    		'ugel_dep'=>$request['ugel'],
    		'dre_dep'=>$request['dre'],
    		'format'=>$request['format']
    	]);

    	return redirect('/school/data');
    }

    //Method for get data school
    public function getSchool(){
    	$school = School::get()->first();
    	return view('admin.school.school', compact('school'));
    }
}
