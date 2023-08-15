<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LogoutController extends Controller
{
    public function store()
    {
       //dd('cerrando...');
        auth()->logout();//cierra la sesion actual

        return redirect()->route('login');
    }
}
