@extends('layouts.app')

@section('title') Sign in to DevsTagram  @endsection

@section('principal-content')
    <div class="max-w-5xl mx-auto my-16 flex flex-col md:flex-row justify-between items-stretch gap-7">
        <div class="md:w-1/2 overflow-hidden">
            <img class="rounded-lg object-cover h-full overflow-hidden" src="{{ asset('img/login.jpg') }}" alt="login image">
        </div>
        <div class="md:w-1/2 p-6 bg-white shadow-xl rounded-lg">
            <form action="{{ route('login') }}" method="POST">
                @csrf
                @if (session('message')) {{-- en caso de aver un mensaje mostramos un mensaje --}}
                    <div class="text-center border-l-4 border-l-red-500">
                        <p class="font-semibold text-red-400">{{ session('message') }}</p>
                        <p class="text-center text-xs">Incorrect credentials</p>
                    </div>    
               
                @endif
                <div>
                    <div class="@error('email') border-red-500 @enderror bg-white mt-8 rounded-lg border border-gray-200 shadow-md px-2 pb-1 pt-[2px] w-full">
                        <label for="email" class="text-sm text-gray-400">E-mail</label>
                        <input
                            id="email"
                            name="email" 
                            type="email"
                            value="{{ old('email') }}"  
                            class="p-1 w-full border-none focus:outline-none"
                            >
                    </div>
                    @error('email')
                        <p class="font-semibold mt-1 text-red-400 text-center">{{ $message }}</p>
                    @enderror
                </div>
                <div>
                    <div class="@error('password') border-red-500 @enderror bg-white mt-5 rounded-lg border border-gray-200 shadow-md px-2 pb-1 pt-[2px] w-full">
                        <label for="password" class="text-sm text-gray-400">Password</label>
                        <input
                            id="password"
                            name="password" 
                            type="password" 
                            class="p-1 w-full border-none focus:outline-none"
                            >
                    </div>
                    @error('password')
                        <p class="font-semibold mt-1 text-red-400 text-center">{{ $message }}</p>
                    @enderror
                </div>
                <button 
                    type="submit"
                    class="mt-5 inline-flex items-center hover:opacity-[0.7] justify-center font-semibold transition-all text-md py-3 rounded-lg cursor-pointer bg-gradient-to-tr from-purple-600 to-purple-400 text-white shadow-lg shadow-purple-500/20 px-7" 
                    >
                    Log in
                </button>

            </form>
        </div>
    </div>

@endsection