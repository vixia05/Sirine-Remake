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
    @livewireStyles
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    @yield('plugin-js')

</head>

<body class="font-sans antialiased">
    {{-- <div class="sticky-top">
        @include('layouts.navigation')
    </div> --}}
    <div x-data="{ showSideBar: false }" class="bg-prism-svg min-w-fit">

        {{-- Medium Nav Bar --}}
        <div class="sticky-top bg-slate-800 lg:hidden z-10">
            <div class="ml-4">
                {{-- Show Side Bar Button --}}
                <button @click.prevent="showSideBar = !showSideBar " class="flex justify-between px-2 py-4"
                    x-show="showSideBar">
                    <svg class="w-6 h-6 mr-2 text-white" fill="none" stroke-linecap="round" stroke-linejoin="round"
                        stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                        <path d="M4 6h16M4 12h16M4 18h16"></path>
                    </svg>
                </button>
                {{-- Hide Side Bar Button --}}
                <button @click.prevent="showSideBar = !showSideBar " class="flex justify-between px-2 py-4"
                    x-show="!showSideBar">
                    <svg class="w-6 h-6 mr-2 text-white" fill="none" stroke-linecap="round" stroke-linejoin="round"
                        stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                        <path d="M6 18L18 6M6 6l12 12"></path>
                    </svg>
                </button>
            </div>
        </div>
        {{-- End Medium Nav-bar --}}

        <div class="relative flex justify-start min-h-screen">
            <div class="relative z-30">
                {{-- Hamburger --}}
                <div class="hidden ml-4 lg:block">
                    <button @click.prevent="showSideBar = !showSideBar " class="flex justify-between px-2 py-4"
                        :class="showSideBar ? '' : 'hidden'">
                        <svg x-show="showSideBar" class="w-6 h-6 mr-2" fill="none" stroke-linecap="round"
                            stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                            <path d="M4 6h16M4 12h16M4 18h16"></path>
                        </svg>
                    </button>
                </div>
                {{-- End Hamburger --}}
                @include('layouts.side-nav')
            </div>

            <!-- Page Heading -->
            {{-- <header class="bg-white shadow">
                <div class="px-4 py-6 mx-auto max-w-7xl sm:px-6 lg:px-8">
                    {{ $header }}
                </div>
            </header> --}}

            <!-- Page Content -->
            <div class="relative w-full" :class="showSideBar ? '' : 'lg:ml-64'" x-transition>
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
