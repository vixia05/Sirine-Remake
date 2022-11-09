<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Andon - @yield('title')</title>

    <!-- Fonts -->
    {{-- <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap"> --}}

    <!-- Styles -->
    @livewireStyles
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <style>
        [x-cloak] {
            display: none !important;
        }
    </style>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    @yield('plugin-js')

</head>

<body class="bg-prism-svg-dark font-sans antialiased scrollbar-hide">
    <main class="min-w-screen relative min-h-screen overflow-hidden">
        <div class="fixed-top flex w-screen justify-between gap-4 rounded-b px-4 py-1">
            <a href="#" class="flex gap-2 rounded bg-blue-700 px-2 py-0.5 text-blue-100 brightness-125">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="h-5 w-5">
                    <path fill-rule="evenodd"
                        d="M9.293 2.293a1 1 0 011.414 0l7 7A1 1 0 0117 11h-1v6a1 1 0 01-1 1h-2a1 1 0 01-1-1v-3a1 1 0 00-1-1H9a1 1 0 00-1 1v3a1 1 0 01-1 1H5a1 1 0 01-1-1v-6H3a1 1 0 01-.707-1.707l7-7z"
                        clip-rule="evenodd" />
                </svg>
            </a>
            @if (Auth::check())
                <a href="{{ route('dashboard') }}" class="text-blue-500 underline brightness-125">
                    Dashboard
                </a>
            @else
                <a href="{{ route('login') }}" class="text-blue-500 underline brightness-125">
                    Log-in
                </a>
            @endif
        </div>
        @yield('content')
    </main>
    @livewireScripts

    <script>
          setTimeout(function(){
            location.reload();
          },59000);
    </script>
</body>
@stack('js')

</html>
