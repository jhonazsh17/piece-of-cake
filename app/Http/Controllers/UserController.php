<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;

use App\User;
use App\Level;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    //Method for register user
    protected function register(Request $data){
    	$roles = ['Student', 'Teacher', 'Administrator'];
        $role = "";
        $password = "";

        if($data['role']=="Administrator"){
            $role = $roles[2];
            $password = Hash::make($data['password']);
        }else if($data['role']=="Teacher"){
            $role = $roles[1];
            $password = Hash::make($data['dni']);
        }else{
            $role = $roles[0];
            $password = Hash::make($data['dni']);
        }

        User::create([
            'dni' => $data['dni'],
            'id_level'=>$data['level'],
            'id_school'=>$data['school'],
            'name' => $data['name'],
            'email'=> $data['email'],            
            'password' => $password,
            'role' => $role,
        ]);

        return redirect('user/list');

    }

    //Method for list all users
    public function all(){
        $users = User::all();
        $usersArray=[];
        $i=0;

        $usersTeachers = User::where('role', 'Teacher')->get();
        $usersStudents = User::where('role', 'Student')->get();

        foreach ($users as $user) {
            $level = Level::find($user->id_level);
            if($user->role=="Administrator"||$user->role=="Teacher"){
                $level = "";
            }else{
                $level = $level['level_name'].' '.$level['grade'].'° "'.$level['section'].'"';
            }
            $usersArray[$i] = [
                'id'=>$user->id,
                'name'=>$user->name,
                'role'=>$user->role,
                'level'=> $level,
                'dni'=>$user->dni
            ];
            $i=$i+1;
        }
        return view('admin.users.list', compact('usersArray','usersStudents', 'usersTeachers'));
    }

    //Method for create a new user
    public function create(){
        $levels = Level::all();
        return view('admin.users.create', compact('levels'));
    }
}
