<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth'); //antes de mostrar el usuario identificamos que esta verificado
    }

    public function index()
    {
        //dd(auth()->user()); //vemos la informacion del usuario autenticado
        //retornamos al usuario autenticado a su dashboard
        return view('dashboard');
    }
}
