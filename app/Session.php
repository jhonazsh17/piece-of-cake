<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Session extends Model
{
    //Table "sessions"
    protected $table = "sessions";

    //Attributes for Session Model
    protected $fillable = [
    	'id_unit',
    	'title',
    	'order_of_session',
    ];

    /*
    * -> Relationships: From here to below
    */

    //One To Many: Has Many Evaluations
    public function evaluations(){
    	return $this->hasMany('App\Evaluation', 'id_session', 'id');
    }

    //One To Many(Inverse): This session belongs to one unit
    public function unit(){
    	return $this->belongsTo('App\Unit', 'id_unit');
    }
}
