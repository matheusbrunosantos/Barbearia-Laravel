<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BarbeariaController extends Controller
{
    public function home(){
        return view('home');
    }

    public function contato(){
        return view('contato');
    }

    public function sobre(){
        return view('sobre');
    }

    public function servicos(){
        return view('servicos');
    }
}
