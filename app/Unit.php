<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Unit extends Model
{
    //Table "units"
    protected $table = "units";

    //Attributes for Unit Model
    protected $fillable = [
    	'id_minimum_period',
    	'title',
    	'order_of_unit'
    ];

    /*
    * -> Relationships from here to below
    */

    //One To Many: Has many Sessions
    public function sessions(){
    	return $this->hasMany('App\Session', 'id_unit');
    }

    //One To Many(Inverse): this unit belongs to one minimum period
    public function minimumPeriod(){
    	return $this->belongsTo('App\MinimumPeriod', 'id_evaluation');
    }

}
