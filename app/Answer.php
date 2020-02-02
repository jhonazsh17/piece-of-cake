<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Answer extends Model
{
    //Table "answers"
    protected $table = "answers";

    //Attributes for Answer Model
    protected $fillable = [
    	'id_question',
    	'answer_description',
    	'order_in_option',
        'id_user_support'
    ];

    /*
    * -> Relationships from here to below
    */

    //One to One(Inverse): this answer belongs to one question
    public function question(){
    	return $this->belongsTo('App\Question');
    }
}
