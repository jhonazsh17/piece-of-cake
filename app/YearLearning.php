<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class YearLearning extends Model
{
    //Table "years_learning"
    protected $table = "years_learning";

    //Attributes for YearLearning Model
    protected $fillable = [
    	'year',
    	'year_name'
    ];

    /*
    * -> Relationships from here to below
    */

    //One To Many: has many Minimum Period
    public function minimumPeriods(){
    	return $this->hasMany('App\MinimumPeriod');
    }
}
