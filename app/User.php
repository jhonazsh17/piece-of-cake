<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id_school',
        'id_level',
        'dni', 
        'name',
        'email',
        'password',
        'role'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    // protected $hidden = [
    //     'password', 'remember_token',
    // ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    // protected $casts = [
    //     'email_verified_at' => 'datetime',
    // ];


    /*
    * -> Relationships from here to below
    */

    //One To Many(Inverse): This user belongs to one school.
    public function school(){
        return $this->belongsTo('App\School');
    }

    //One To Many(Inverse): This user belongs to one level.
    public function level(){
        return $this->belongsTo('App\Level', 'id_level');
    }

    //One To Many: Has Many califications
    public function califications(){
        return $this->hasMany('App\Calification');
    }

}
