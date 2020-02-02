<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Auth;

use App\User;
use App\School;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //sharing variable to multiple views
        view()->share([
            'isAdministrator'=> $this->isAdministratorOrNot(),
            'school'=> $this->getSchoolName()
        ]);
    }

    /*
    * -> Another functions.
    */

    //Get the first user, is administrator or not
    public function isAdministratorOrNot(){
        $user = User::where('role','Administrator')->first();
        $isAdministrator = 0;

        if($user){
            $isAdministrator = 1;
        }else{
            $isAdministrator = 0;
        }
        return $isAdministrator;
    }

    //Get school name
    public function getSchoolName(){
        $school = "";

        if($this->isAdministratorOrNot()==1){
            $school = School::get()->first(); 
        }
        return $school;
    }


}
