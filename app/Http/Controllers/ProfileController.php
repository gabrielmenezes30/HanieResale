<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Venda;

class ProfileController extends Controller
{
    public function perfil(){

        $user = auth()->user();
        $vendas = $user->vendas;

        return view('perfil.perfil', ['vendas' => $vendas]);

    }
}
