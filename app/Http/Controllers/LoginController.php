<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
   public function index()
   {
    return view('auth.login');
   }

   public function store(Request $request)
   {
        //validamos
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required'
        ]);

        //comporvamos que el usuario este autenticado (retorna true-false)
        if(!auth()->attempt($request->only('email', 'password'), $request->remember)){
            //redireccionamos y ponenmos un mensaje en una sesion
            return back()->with('message', 'Data entered is incorrect');
        }

        //si esta autenticado redireccionamos hacia la vista de post
        return redirect()->route('post.index');
        
   }

}
