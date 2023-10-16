<?php

namespace App\Http\Controllers;

use App\Models\User;
use DateTime;
use Illuminate\Http\Request;

class UserController extends Controller
{
    function all() {
        $users = User::with('domicilio')->get();
        
        foreach ($users as $user){
            $cumple = new DateTime($user->fecha_nacimiento);
            $hoy = new DateTime();
            $edad = $hoy->diff($cumple);
            $user->edad = $edad->y;
        }

        return $users; 
    }
}
