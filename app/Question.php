<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    //Table "questions"
    protected $table = "questions";

    //Attributes for Question Model
    protected $fillable = [
    	'id_evaluation',
    	'question_description',
    	'question_instruction'
    ];

    /*
    * -> Relationships from here to below
    */

    //One To Many(Inverse): this question belongs to one evaluation
    public function evaluation(){
    	return $this->belongsTo('App\Evaluation');
    }

    //One To Many: Has many options
    public function options(){
    	return $this->hasMany('App\Option', 'id_question');
    }

    //One To One: This question has one answer
    public function answers(){
    	return $this->HasMany('App\Answer', 'id_question');
    }

}
