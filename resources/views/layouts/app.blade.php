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
    <div x-data="{ showSideBar: true }" class="min-w-fit bg-prism-svg dark:bg-prism-svg-dark" x-cloak>

        {{-- Medium Nav Bar --}}
        <div class="sticky-top z-10 bg-slate-800 lg:hidden">
            <div class="ml-4">
                {{-- Show Side Bar Button --}}
                <button @click.prevent="showSideBar = !showSideBar " class="flex justify-between px-2 py-4"
                    x-show="showSideBar">
                    <svg class="mr-2 h-6 w-6 text-white" fill="none" stroke-linecap="round" stroke-linejoin="round"
                        stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                        <path d="M4 6h16M4 12h16M4 18h16"></path>
                    </svg>
                </button>
                {{-- Hide Side Bar Button --}}
                <button @click.prevent="showSideBar = !showSideBar " class="flex justify-between px-2 py-4"
                    x-show="!showSideBar">
                    <svg class="mr-2 h-6 w-6 text-white" fill="none" stroke-linecap="round" stroke-linejoin="round"
                        stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                        <path d="M6 18L18 6M6 6l12 12"></path>
                    </svg>
                </button>
            </div>
        </div>
        {{-- End Medium Nav-bar --}}

        <div class="relative flex min-h-screen justify-start">
            <div class="relative z-30">
                {{-- Hamburger --}}
                <div class="ml-4 hidden lg:block">
                    <button @click.prevent="showSideBar = !showSideBar " class="flex justify-between px-2 py-4"
                        :class="showSideBar ? '' : 'hidden'">
                        <svg x-show="showSideBar" class="mr-2 h-6 w-6" fill="none" stroke-linecap="round"
                            stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                            <path d="M4 6h16M4 12h16M4 18h16"></path>
                        </svg>
                    </button>
                </div>
                {{-- End Hamburger --}}
                @include('layouts.side-nav')
            </div>

            <!-- Page Content -->
            <div class="relative w-full" :class="!showSideBar ? '' : 'lg:ml-64'">
                {{-- Navbar --}}
                {{-- <div class="sticky-top mx-auto mt-2 w-[96%] rounded-lg bg-slate-800 bg-opacity-70 backdrop-filter backdrop-blur py-2 px-4 text-slate-200">
                    <div class="flex justify-end space-x-3">
                        <div class="h-10rounded-full w-10">
                            <img class="rounded-full transition duration-150 ease-in-out hover:ring-2 hover:ring-slate-300"
                                src="{{ asset('img/Avatar/default.jpg') }}" alt="" />
                        </div>
                        <div class="flex flex-col my-auto">
                            <h6 class="text-xs font-medium">{{ \App\Models\UserDetails::where('np_user',Auth::user()->np)->value('nama') }}</h6>
                            <h6 class="text-xs font-medium text-center">{{ Auth::user()->np }}</h6>
                        </div>
                    </div>
                </div> --}}
                <main>
                    <div class="mx-auto">
                        @yield('content')
                    </div>
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
