@extends('layouts.app')

@section('title') Register in DevsTagram  @endsection

@section('principal-content')
    <div class="max-w-5xl mx-auto my-16 flex flex-col md:flex-row justify-between items-stretch gap-7">
        <div class="md:w-1/2 overflow-hidden">
            <img class="rounded-lg object-cover h-full overflow-hidden" src="{{ asset('img/registrar.jpg') }}" alt="regiter image">
        </div>
        <div class="md:w-1/2 p-6 bg-white shadow-xl rounded-lg">
            <form action="{{ route('register') }}" method="POST">
                @csrf {{-- evitamos que la pigina expire (crear un token y valida la cadena evita los ataques) --}}
                <div>
                    <div class=" @error('name') border-red-500 @enderror bg-white rounded-lg border border-gray-200 shadow-md px-2 pb-1 pt-[2px] w-full">
                        <label for="name" class="text-sm text-gray-400">Your name</label>
                        <input
                            id="name"
                            name="name" 
                            type="text" 
                            class="p-1 w-full border-none focus:outline-none"
                            value="{{ old('name') }}"
                            >
                    </div>
                    @error('name')
                        <p class="font-semibold mt-1 text-red-400 text-center">{{ $message }}</p>
                    @enderror
                 </div>
                <div>
                    <div class="@error('username') border-red-500 @enderror bg-white mt-5 rounded-lg border border-gray-200 shadow-md px-2 pb-1 pt-[2px] w-full">
                        <label for="username" class="text-sm text-gray-400">User name</label>
                        <input
                            id="username"
                            name="username" 
                            type="text"
                            value="{{ old('username') }}" 
                            class="p-1 w-full border-none focus:outline-none"
                            >
                    </div>
                    @error('username')
                        <p class="font-semibold mt-1 text-red-400 text-center">{{ $message }}</p>
                    @enderror
                </div>
                <div>
                    <div class="@error('email') border-red-500 @enderror bg-white mt-5 rounded-lg border border-gray-200 shadow-md px-2 pb-1 pt-[2px] w-full">
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
                <div class="bg-white mt-5 rounded-lg border border-gray-200 shadow-md px-2 pb-1 pt-[2px] w-full">
                    <label for="password_confirmation" class="text-sm text-gray-400">Confirmation password</label>
                    <input
                        id="password_confirmation"
                        name="password_confirmation" 
                        type="password" 
                        class="p-1 w-full border-none focus:outline-none"
                        >
                </div>
                <button 
                    type="submit"
                    class="mt-5 inline-flex items-center hover:opacity-[0.7] justify-center font-semibold transition-all text-md py-3 rounded-lg cursor-pointer bg-gradient-to-tr from-purple-600 to-purple-400 text-white shadow-lg shadow-purple-500/20 px-7" 
                    >
                    Create Acount
                </button>

            </form>
        </div>
    </div>

@endsection