<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\MinimumPeriod;
use App\YearLearning;

class PeriodController extends Controller
{
    //
    public function all(){
    	$minimum_periods = MinimumPeriod::all();
    	//fix this
    	$years = YearLearning::all();
    	$year = YearLearning::all()->last();
    	return view('admin.periods.list', compact('minimum_periods','years','year'));
    }

    //
    public function createYear(){
    	return view('admin.periods.create-year');
    }

    //
    public function saveYear(Request $request){
    	YearLearning::create([
    		'year'=>$request->year,
    		'year_name'=>$request->year_name
    	]);

    	return redirect('/period/list');
    }

    //
    public function createMinimumPeriod(){
    	$year = YearLearning::all()->last();
    	return view('admin.periods.create-minimum-period', compact('year'));
    }

    //
    public function saveMinimumPeriod(Request $request){
    	MinimumPeriod::create([
    		'id_year_learning'=>$request->year,
    		'name'=>$request->minimum_period_name,
    		'self_period'=>$request->range,
    		'size_period'=>$request->size_range,
    		'order_period'=>$request->order,
    		'start'=>$request->start,
    		'end'=>$request->end
    	]);

    	return redirect('/period/list');
    }
}
