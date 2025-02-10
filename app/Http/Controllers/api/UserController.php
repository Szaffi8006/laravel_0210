<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Http\Requests\RegisterRequest;

class UserController extends Controller
{
    public function register(RegisterRequest $request){

        $request->validated();

        // $user = User::create([
        //     "name"=>$request ["name"],
        //     "email"=>$request ["email"],
        //     "password"=>bcrypt ($request ["password"]),
        // ]);
        return $user;
    }

    public function login(){

    }

    public function logout(){

    }

}


    
