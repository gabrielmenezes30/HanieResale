<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class ProfileController extends Controller
{
    public function perfil(){

        $users = User::all();

        return view('perfil.perfil', ['users' => $users]);
    }
}
