<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LevelAux extends Model
{
    protected $table = "levels_aux";

    protected $fillable = [
    	'id_user',
    	'id_level'
    ];
}
