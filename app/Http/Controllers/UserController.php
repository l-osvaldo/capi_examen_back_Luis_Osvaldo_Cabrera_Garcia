<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    function all() {
        $users = User::with('domicilio')->get();

        return $users; 
    }
}
