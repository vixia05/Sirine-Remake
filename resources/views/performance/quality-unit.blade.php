@section('title', 'Quality Unit')
@extends('layouts.app')
@section('content')
    <div class="grid-cols grid">
        <div class="relative flex flex-col justify-center p-6">
            {{-- 1-A Grafik retur/kelolosan tahun ini --}}
            <div
                class="w-full rounded-xl bg-white/70 p-6 dark:bg-slate-800 dark:bg-opacity-60 dark:backdrop-blur dark:backdrop-filter">
                {{-- 1-A.1 Header --}}
                <div class="flex justify-between border-b-2 border-slate-600/70 pb-3 dark:border-slate-300/70">
                    {{-- 1-A. 1.1 Header Title --}}
                    <div class="flex flex-col">
                        <h5 class="w-full text-xl font-bold text-slate-800 dark:text-slate-100">Data Retur Pita Cukai
                        </h5>
                        <span class="text-sm font-light text-slate-600 dark:text-slate-400">Periode 2022</span>
                    </div>
                    {{-- 1-A. 1.2 Filter --}}
                    <div class="my-auto flex text-slate-600 dark:text-slate-300">
                        {{-- 1-A. 1.1 Filter Team  --}}
                        <select
                            class="inline-block rounded-l-md border-blue-500 bg-slate-100/80 text-sm focus:bg-opacity-100 dark:bg-slate-700 dark:bg-opacity-20">
                            <option>Team</option>
                            <option>Team</option>
                            <option>Team</option>
                        </select>
                        {{-- 1-A. 1.2 Filter Nama / NP --}}
                        <select
                            class="inline-block border-blue-500 bg-slate-100/80 text-sm focus:bg-opacity-100 dark:bg-slate-700 dark:bg-opacity-20">
                            <option>NP / Nama</option>
                        </select>
                        {{-- 1-A. 1.3 Filter Tahun --}}
                        <select
                            class="inline-block border-blue-500 bg-slate-100/80 text-sm focus:bg-opacity-100 dark:bg-slate-700 dark:bg-opacity-20">
                            <option value="2022" selected>2022</option>
                        </select>
                        {{-- 1-A. 1.4 Reset --}}
                        <button type="button" data-mdb-ripple="true" data-mdb-ripple-color="light"
                            class="rounded-r-md bg-blue-500 px-3 py-2.5 text-xs font-medium uppercase leading-tight text-blue-50 shadow-md transition duration-150 ease-in-out hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg">
                            CLEAR
                        </button>
                    </div>
                </div>
                {{-- ** 1-A.1 End Header ** --}}

                {{-- 1-A.2 Canvas / Grafik Kelolosan Tahun --}}
                <div class="relative flex h-[80vh] w-full flex-col justify-center mt-6">
                    <canvas id="quaUnit" name="quaUnit"></canvas>
                </div>
                {{-- ** 1-A.2 Canvas / Grafik Kelolosan Tahun ** --}}
            </div>
        </div>
    </div>
@endsection

@section('plugin-js')
    <link rel="stylesheet" href="{{ asset('plugins/daterangepicker.css') }}">
    <script src="{{ asset('plugins/jquery-3.6.1.min.js') }}"></script>
    <script src="{{ asset('plugins/moment.min.js') }}"></script>
    <script src="{{ asset('plugins/daterangepicker.min.js') }}"></script>
    <script src="{{ asset('chart.js/chart.min.js') }}"></script>
@endsection

@section('script-js')
    <script>
        var dataChart = {
            date: [1, 2, 3, 4, 5, 6],
            data: [3, 4, 2, 8, 9, 6],
        }
    </script>
    @push('js')
        <script src="{{ asset('js/performance/qua-unit.js') }}"></script>
        <script src="{{ asset('component/chart/qua-unit.js') }}"></script>
    @endpush
@endsection
