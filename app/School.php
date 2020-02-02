<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class School extends Model
{
    //Table "schools"
    protected $table = "schools";

    //Attributes for School Model
    protected $fillable = [
    	'name',
    	'number_school',
    	'location',
    	'ugel_dep',
    	'dre_dep',
    	'format'
    ];

    /*
    * -> Relationships from here to below
    */

    //One To Many: Has many users (students and teachers)
    public function users(){
    	return $this->hasMany('App\User');
    }

}
