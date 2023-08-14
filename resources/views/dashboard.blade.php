@extends('layouts.app')

@section('title') Your Account  @endsection

@section('principal-content')

<div>
    <div class="flex gap-10 items-center justify-center">
        <div class="w-1/2">
            <img src="{{ asset('img/usuario.svg') }}" alt="user photo">
        </div>
        <div class="w-1/2">
            <p>{{ auth()->user()->username }}</p>
        </div>
    </div>
</div>

@endsection