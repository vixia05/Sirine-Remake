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
</head>

<body class="font-sans antialiased">
    <div class="sticky-top">
        @include('layouts.navigation')
    </div>
    <div class="relative flex min-h-screen justify-start bg-gray-100">
        <div class="relative">
            @include('layouts.side-nav')
        </div>

        <!-- Page Heading -->
        {{-- <header class="bg-white shadow">
            <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                {{ $header }}
            </div>
        </header> --}}

        <!-- Page Content -->
        <div class="relative w-full">
            <main>
                @yield('content')
                {{-- {{ $slot }} --}}
            </main>
        </div>
    </div>
    @livewireScripts
    <script src="{{ asset('chart.js/chart.min.js') }}"></script>
</body>

@yield('chart')
@yield('script-js')
@stack('js')

</html>
