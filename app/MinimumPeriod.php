<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MinimumPeriod extends Model
{
    //Table "minimum_periods"
    protected $table = "minimum_periods";

    //Attributes for MinimumPeriod Model
    protected $fillable = [
    	'id_year_learning',
    	'name',
    	'self_period',
    	'size_period',
    	'order_period',
    	'start',
    	'end'
    ];

    /*
	* -> Relationships from here to below
	*/    

	//One To Many: Has Many Units
	public function units(){
		return $this->hasMany('App\Unit');
	}

	//One To Many(Inverse): this Minimum Period belongs to one Year Learning
	public function yearLearning(){
		return $this->belongsTo('App\YearLearning');
	}
}
