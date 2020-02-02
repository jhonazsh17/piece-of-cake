<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Option extends Model
{
    //Table "options"
    protected $table = "options";

    //Attributes for Option Model
    protected $fillable = [
    	'id_question',
    	'option_description',
    	'some_note',
    	'order_option',
    	'is_correct'
    ];

    /*
    * -> Relationships from here to below
    */

    //One To Many(Inverse): this option belongs to one question
    public function question(){
    	return $this->belongsTo('App\Question');
    }
}
