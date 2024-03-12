<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
class UserController extends Controller
{
    
    function test(){
        $user = User::find(1);
        var_dump($user);
        echo "hola mundo";
        return view('welcome',['user' => $user]);
    }


}
