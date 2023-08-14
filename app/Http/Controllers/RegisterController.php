<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Register;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('auth.register');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //dd($request); //$request->('email')

        //modificamos el request (agregamos el str para que lo tome)
        $request->request->add(['username' => Str::slug($request->username)]);

        //validacion (toma esl request y las reglas de validacion)
        $this->validate($request, [
            'name' => 'required|min:3|max:10',
            'username' => 'required|unique:users|min:3|max:15', /* obligatorio en la tabla */
            'email' => 'required|unique:users|email|max:30',
            'password' => 'required|confirmed|min:6'
        ]);

        //dd($request->request); //creamos registros
        //asociamos lo que tenemos en las columnas de la tabla user con los inputs  que estamos pasando
        User::create([ 
            'name' => $request->name,
            'username' => $request->username,
            'email' => $request->email,
            'password' => Hash::make($request->password)
        ]);

        //autenticamos al usuario automaticamente al crear la cuenta
        auth()->attempt($request->only('email', 'password'));

        //redireccionar al usuario
        return redirect()->route('post.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Register $register)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Register $register)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Register $register)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Register $register)
    {
        //
    }
}
