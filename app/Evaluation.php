<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Evaluation extends Model
{
    //Table "evaluations"
    protected $table = "evaluations";

    //Attributes for Evaluation Model
    protected $fillable = [
    	'id_session',
    	'order_of_evaluation',
    	'title',
    	'type'
    ];

    /*
    * -> Relationships from here to below
    */

    //One To Many: Has Many Califications
    public function califications(){
    	return $this->hasMany('App\Calification');
    }

    //One To Many(Inverse): This evaluation belongs to one Session
    public function session(){
    	return $this->belongsTo('App\Session', 'id_session');
    }

    //One To Many: Has many questions
    public function questions(){
    	return $this->hasMany('App\Question', 'id_evaluation');
    }

}
