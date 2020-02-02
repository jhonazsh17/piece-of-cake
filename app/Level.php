<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Level extends Model
{
    //Table "levels"
    protected $table = "levels";

    //Attributes for Level Model
    protected $fillable = [
    	'level_name',
    	'grade',
    	'section'
    ];

    /*
    * -> Relationships from here to below
    */

    //One To Many: Has many users
    public function users(){
    	return $this->hasMany('App\User', 'id_level');
    }

}
