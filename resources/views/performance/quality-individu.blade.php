@section('title', 'Quality Individu')
@extends('layouts.app')
@section('content')
    <div class="grid grid-cols">
        <div class="relative flex flex-col justify-center p-6">
            <div class="grid grid-cols-2 gap-4 lg:grid-cols-3">
                {{-- 1-A Grafik retur/kelolosan tahun ini --}}
                    <div class="w-full col-span-2 p-6 rounded-xl bg-white/70 dark:bg-slate-800 dark:bg-opacity-80 dark:backdrop-blur-md dark:backdrop-filter">
                        {{-- 1-A.1 Header --}}
                        <div class="flex justify-between pb-3 border-b-2 border-slate-600 dark:border-slate-300">
                            {{-- 1-A. 1.1 Header Title --}}
                            <div class="flex flex-col">
                                <h5 class="w-full text-xl font-bold text-slate-800 dark:text-slate-100">Data Retur Pita Cukai</h5>
                                <span class="text-sm text-slate-500 dark:text-slate-400">Periode 2022</span>
                            </div>
                            {{-- 1-A. 1.2 Filter --}}
                            <div class="flex my-auto text-slate-800 dark:text-slate-100">
                                {{-- 1-A. 1.1 Filter Team  --}}
                                <select
                                    class="inline-block text-sm border-blue-500 rounded-l-md bg-slate-100 dark:bg-slate-700 dark:bg-opacity-20 focus:bg-opacity-100">
                                    <option>Team</option>
                                    <option>Team</option>
                                    <option>Team</option>
                                </select>
                                {{-- 1-A. 1.2 Filter Nama / NP --}}
                                <select
                                    class="inline-block text-sm border-blue-500 bg-slate-100 dark:bg-slate-700 dark:bg-opacity-20 focus:bg-opacity-100">
                                    <option>NP / Nama</option>
                                </select>
                                {{-- 1-A. 1.3 Filter Tahun --}}
                                <select
                                    class="inline-block text-sm border-blue-500 bg-slate-100 dark:bg-slate-700 dark:bg-opacity-20 focus:bg-opacity-100">
                                    <option value="2022" selected>2022</option>
                                </select>
                                {{-- 1-A. 1.4 Reset --}}
                                <button type="button" data-mdb-ripple="true" data-mdb-ripple-color="light"
                                    class=" rounded-r-md bg-blue-500 px-3 py-2.5 text-xs font-medium uppercase leading-tight text-blue-50 shadow-md transition duration-150 ease-in-out hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg">
                                    CLEAR
                                </button>
                            </div>
                        </div>
                        {{-- ** 1-A.1 End Header ** --}}

                        {{-- 1-A.2 Canvas / Grafik Kelolosan Tahun --}}
                        <div class="relative h-[80vh] w-full flex flex-col justify-center">
                            <canvas id="quaIndividu" name="quaIndividu"></canvas>
                        </div>
                        {{-- ** 1-A.2 Canvas / Grafik Kelolosan Tahun ** --}}
                    </div>
                <div class="grid grid-rows-2 gap-4">
                {{-- 1-B.2 Kelolosan Tahunan --}}
                    <div class="w-full p-6 rounded-xl bg-white/70 dark:bg-slate-800 dark:bg-opacity-80 dark:backdrop-blur-md dark:backdrop-filter">
                        {{-- Header --}}
                        <div class="flex flex-col pb-3 border-b-2 border-slate-600 dark:border-slate-300">
                            <h5 class="w-full text-xl font-bold text-slate-800 dark:text-slate-100">Jenis Retur User</h5>
                            <span class="text-sm text-slate-500 dark:text-slate-400">Periode 2022</span>
                        </div>
                        {{-- Chart --}}
                        <div class="relative flex justify-center pt-6 mx-auto h-80 w-80">
                            <canvas id="typeIndividu" name="typeIndividu"></canvas>
                        </div>
                    </div>
                    <div class="w-full p-6 rounded-xl bg-white/70 dark:bg-slate-800 dark:bg-opacity-80 dark:backdrop-blur-md dark:backdrop-filter">
                        {{-- Header --}}
                        <div class="flex flex-col pb-3 border-b-2 border-slate-600 dark:border-slate-300">
                            <h5 class="w-full text-xl font-bold text-slate-800 dark:text-slate-100">Jenis Retur Unit</h5>
                            <span class="text-sm text-slate-500 dark:text-slate-400">Periode 2022</span>
                        </div>
                        {{-- Chart --}}
                        <div class="relative flex flex-col justify-center pt-6 mx-auto h-80 w-80">
                            <canvas id="typeUnit" name="typeUnit"></canvas>
                        </div>
                    </div>
                </div>
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
            sumRetur : @json($data['sumRetur']),
            returUsr : @json($data['returUsr']),
            returUnt : @json($data['returUnt']),
        }
    </script>
    @push('js')
        <script src="{{ asset('js/performance/qua-individu.js') }}"></script>
        <script src="{{ asset('component/chart/qua-individu.js') }}"></script>
    @endpush
@endsection
