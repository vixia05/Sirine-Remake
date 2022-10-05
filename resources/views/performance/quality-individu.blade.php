@section('title', 'Quality Individu')
@extends('layouts.app')
@section('content')
    <div class="grid-cols grid">
        <div class="relative flex flex-col justify-center p-6">
            <div class="grid grid-cols-2 lg:grid-cols-3 gap-4">
                {{-- 1-A Grafik retur/kelolosan tahun ini --}}
                    <div class="col-span-2 w-full rounded-xl bg-slate-800 bg-opacity-60 p-6 backdrop-blur backdrop-filter">
                        {{-- 1-A.1 Header --}}
                        <div class="flex justify-between border-b-2 pb-3">
                            {{-- 1-A. 1.1 Header Title --}}
                            <div class="flex flex-col">
                                <h5 class="w-full text-xl font-bold text-slate-300">Data Retur Pita Cukai</h5>
                                <span class="text-sm font-light text-slate-300">Periode 2022</span>
                            </div>
                            {{-- 1-A. 1.2 Filter --}}
                            <div class="my-auto flex text-slate-300">
                                {{-- 1-A. 1.1 Filter Team  --}}
                                <select
                                    class="inline-block rounded-l-md border-blue-500 bg-slate-700 bg-opacity-20 text-sm focus:bg-opacity-100">
                                    <option>Team</option>
                                    <option>Team</option>
                                    <option>Team</option>
                                </select>
                                {{-- 1-A. 1.2 Filter Nama / NP --}}
                                <select
                                    class="inline-block border-blue-500 bg-slate-700 bg-opacity-20 text-sm focus:bg-opacity-100">
                                    <option>NP / Nama</option>
                                </select>
                                {{-- 1-A. 1.3 Filter Tahun --}}
                                <select
                                    class="inline-block border-blue-500 bg-slate-700 bg-opacity-20 text-sm focus:bg-opacity-100">
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
                    <div class="w-full rounded-xl bg-slate-800 bg-opacity-60 p-6 backdrop-blur-lg backdrop-filter">
                        {{-- Header --}}
                        <div class="flex flex-col border-b-2 pb-3">
                            <h5 class="w-full text-xl font-bold text-slate-300">Jenis Retur User</h5>
                            <span class="text-sm font-light text-slate-300">Periode 2022</span>
                        </div>
                        {{-- Chart --}}
                        <div class="relative flex justify-center mx-auto h-80 w-80">
                            <canvas id="typeIndividu" name="typeIndividu"></canvas>
                        </div>
                    </div>
                    <div class="w-full rounded-xl bg-slate-800 bg-opacity-60 p-6 backdrop-blur-lg backdrop-filter">
                        {{-- Header --}}
                        <div class="flex flex-col border-b-2 pb-3">
                            <h5 class="w-full text-xl font-bold text-slate-300">Jenis Retur Unit</h5>
                            <span class="text-sm font-light text-slate-300">Periode 2022</span>
                        </div>
                        {{-- Chart --}}
                        <div class="relative flex flex-col justify-center mx-auto h-80 w-80 p-4">
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
            date: [1, 2, 3, 4, 5, 6],
            data: [3, 4, 2, 8, 9, 6],
        }
    </script>
    @push('js')
        <script src="{{ asset('js/performance/qua-individu.js') }}"></script>
        <script src="{{ asset('component/chart/qua-individu.js') }}"></script>
    @endpush
@endsection
