<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>DevsTragram - @yield('title')</title>
        @vite('resources/css/app.css')
    </head>
    <body class="bg-gray-100 text-gray-500">
        <header class="fixed top-0 left-0 right-0 z-10">
            <div class="py-5 border-b bg-white shadow-lg bg-opacity-90 backdrop-filter backdrop-blur-sm">
                <div class="flex justify-between items-center md:max-w-3xl lg:max-w-6xl mx-auto">
                    <h1 class="font-bold text-2xl">DevsTragram &lt;/&gt;</h1>
                    <nav class="flex gap-5 items-center">
                        <a 
                        class="inline-flex items-center hover:opacity-[0.7] justify-center font-semibold transition-all text-md py-1 rounded-lg cursor-pointer bg-gradient-to-tr from-gray-200 to-gray-100 shadow-lg shadow-gray-500/20 px-5" 
                        href="#">Loging</a>
                        <a                     
                            class="inline-flex items-center hover:opacity-[0.7] justify-center font-semibold transition-all text-md py-1 rounded-lg cursor-pointer bg-gradient-to-tr from-purple-600 to-purple-400 text-white shadow-lg shadow-purple-500/20 px-5" 
                            href="{{ route('register') }}">Register</a>
                    </nav>
                </div>
           </div>
        </header>

        <main class="mx-auto mt-28 md:max-w-3xl lg:max-w-6xl">
            <h2 class="text-center text-2xl font-bold">@yield('title')</h2>
            @yield('principal-content')
        </main>

        <footer class="bg-slate-900 text-white">
            <div class="md:max-w-3xl lg:max-w-6xl mx-auto flex items-center justify-between py-10">
                <p>All right reserved - {{ now()->year }}</p>
                <p>This website is created by devstagram</p>
            </div>
        </footer>
    </body>
</html>
