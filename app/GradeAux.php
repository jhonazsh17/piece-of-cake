<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class GradeAux extends Model
{
    protected $table = "grades_aux";

    protected $fillable = [
    	'id',
    	'id_unit',
    	'id_level'
    ];
}
