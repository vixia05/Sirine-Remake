<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Sirine - @yield('title')</title>

    <!-- Fonts -->
    {{-- <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap"> --}}

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
    {{-- <div class="sticky-top">
        @include('layouts.navigation')
    </div> --}}
    <div x-data="{expandNavbar: false }" class="min-w-fit bg-prism-svg dark:bg-prism-svg-dark" x-cloak>

        {{-- Medium Nav Bar --}}
        <div class="sticky-top z-10 bg-slate-800 md:hidden">
            <div class="ml-4">
                {{-- Show Side Bar Button --}}
                <button @click.prevent="expandNavbar = true" x-on:mouseleave="expandNavbar = false" class="flex justify-between px-2 py-4">
                    <svg class="mr-2 h-6 w-6 text-white" fill="none" stroke-linecap="round" stroke-linejoin="round"
                        stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                        <path d="M4 6h16M4 12h16M4 18h16"></path>
                    </svg>
                </button>
            </div>
        </div>
        {{-- End Medium Nav-bar --}}

        <div class="relative flex min-h-screen justify-start">
            <div class="absolute z-30">
                @include('layouts.side-nav')
            </div>

            <!-- Page Content -->
            <div class="relative w-full md:ml-20">
                <div class="px-6 lg:px-8 pt-4">
                    <h5 class="text-slate-700 dark:text-slate-300 text-2xl tracking-wide">@yield('title')</h5>
                </div>
                <main>
                        @yield('content')
                    {{-- {{ $slot }} --}}
                </main>
            </div>
        </div>
    </div>
    @livewireScripts
</body>

@yield('script-js')
@stack('js')

</html>
