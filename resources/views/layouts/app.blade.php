<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">


    <title>Sirine - @yield('title')</title>

    <!-- Fonts -->

    <!-- Styles -->
    <style>
        [x-cloak] {
            display: none !important;
        }
    </style>
    @livewireStyles
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    @yield('plugin-js')

</head>

<body class="font-sans antialiased scrollbar-hide">
    <div x-data="{expandNavbar: false }" class="min-w-fit bg-prism-svg dark:bg-prism-svg-dark" x-cloak>
        {{-- Medium Nav Bar --}}
        <div class="z-10 md:hidden">
            <div class="flex justify-between px-4 pt-4 pb-1">
                {{-- Hamburger --}}
                <button @click.prevent="expandNavbar = true" x-on:mouseleave="expandNavbar = false"
                    class="flex justify-center px-2 py-1 my-auto transition duration-150 ease-in-out rounded dark:bg-slate-100 dark:bg-opacity-10 dark:backdrop-blur-sm hover:bg-slate-300">
                    <svg class="w-6 h-6 text-white" fill="none" stroke-linecap="round" stroke-linejoin="round"
                        stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                        <path d="M4 6h16M4 12h16M4 18h16"></path>
                    </svg>
                </button>
                {{-- Logo --}}
                <div class="flex justify-center gap-2">
                    <img src="{{ asset('img/logo-only.png') }}" class="my-auto -mt-1 h-9">
                    <h1
                        class="my-auto font-mono text-sm font-extrabold duration-300 ease-in-out text-slate-800 dark:text-white">SIRINE
                    </h1>
                </div>
                {{-- User --}}
                <img class="h-8 my-auto transition duration-150 ease-in-out rounded-full hover:ring-2 hover:ring-slate-300"
                    src="{{ asset('img/Avatar/default.jpg') }}" alt="" />
            </div>
        </div>
        {{-- End Medium Nav-bar --}}
        <div class="relative flex justify-start min-h-screen">
            {{-- Side Nav Bar --}}
            <div class="absolute z-[500]">
                @include('layouts.side-nav')
            </div>
            {{-- End Side Nav Bar --}}
            {{-- Main Content --}}
            <div class="relative w-full md:ml-20">
                <main
                    x-data="{
                        mainContent:false
                    }"
                    x-init='setTimeout(() => mainContent = true, 0)'>
                    @yield('content')
                    @isset($slot)
                    {{ $slot }}
                    @endisset
                </main>
            </div>
            {{-- End Main Content --}}
        </div>
    </div>
    @livewireScripts
</body>

@yield('script-js')
@stack('js')

</html>
