@section('title', 'Quality Unit')
@extends('layouts.app')
@section('content')
    <div class="grid grid-cols">
        <div class="relative flex flex-col justify-center p-6">
            {{-- 1-A Grafik retur/kelolosan tahun ini --}}
            <div
                class="w-full p-6 rounded-xl bg-white/70 dark:bg-slate-800 dark:bg-opacity-60 dark:backdrop-blur dark:backdrop-filter">
                {{-- 1-A.1 Header --}}
                <div class="flex justify-between pb-3 border-b-2 border-slate-600/70 dark:border-slate-300/70">
                    {{-- 1-A. 1.1 Header Title --}}
                    <div class="flex flex-col">
                        <h5 class="w-full text-xl font-bold text-slate-800 dark:text-slate-100">Data Retur Pita Cukai
                        </h5>
                        <span class="text-sm font-light text-slate-600 dark:text-slate-400">Periode 2022</span>
                    </div>
                    {{-- 1-A. 1.2 Filter --}}
                    <div class="flex my-auto text-slate-600 dark:text-slate-300">
                        {{-- 1-A. 1.3 Filter Tahun --}}
                        <select
                            class="inline-block text-sm border-blue-500 rounded-l-md bg-slate-100/80 focus:bg-opacity-100 dark:bg-slate-700 dark:bg-opacity-20">
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
    @push('js')
    <script>
        var dataChart = {
            data: @json($data),
        }
    </script>
        {{-- <script src="{{ asset('js/performance/qua-unit.js') }}"></script> --}}
        <script src="{{ asset('component/chart/qua-unit.js') }}"></script>
    @endpush
@endsection
