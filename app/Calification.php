<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Calification extends Model
{
    //Table "califications"
    protected $table = "califications";

    //Attributes for Calification Model
    protected $fillable = [
    	'id_user',
    	'id_evaluation',
    	'estado_evaluation',
    	'note',
    	'corrects',
    	'no_corrects'
    ];

    /*
    * -> Relationships from here to below
    */

    //One To Many(Inverse): This Calification belongs to one user
    public function user(){
    	return $this->belongsTo('App\User');
    }

    //One To Many(Inverse): This Calification belongs to one evaluation
    public function evaluation(){
    	return $this->belongsTo('App\Evaluation');
    }
}
