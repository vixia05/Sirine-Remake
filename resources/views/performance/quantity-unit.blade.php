@section('title', 'Qty Unit')
@extends('layouts.app')
@section('content')
    <div class="relative flex flex-col justify-center px-8 py-6">
        <div class="w-full px-4 py-3 bg-white shadow rounded-t-xl drop-shadow-md">
            <div class="flex justify-between pb-3 border-b-2">
                <div class="flex flex-col">
                    <h5 class="w-full text-xl font-bold text-gray-700">Hasil Produksi Unit
                        Verifikasi Pita Cukai</h5>
                    <span class="text-sm font-light text-gray-500">Periode September 2022</span>
                </div>
                <div class="flex justify-end my-auto">
                    <select class="py-2 pl-2 text-sm font-bold text-gray-700 border-blue-400 rounded-l min-w-fit"
                        id="team" name="team">
                        <option selected>Team</option>
                        <option>Verifikasi Pita Cukai Team A</option>
                    </select>
                    <select class="py-2 pl-2 text-sm font-bold text-gray-700 border-blue-400 min-w-fit" id="mode"
                        name="mode">
                        <option selected>Tipe</option>
                        <option value="1">Pencapaian Target</option>
                        <option value="2">Jumlah Verifikasi</option>
                        <option value="3">Rata-Rata</option>
                    </select>
                    {{-- <div id="dateRange" class="py-2 pl-2 text-sm font-bold text-gray-700 border-blue-400 min-w-fit">
                        <i class="fa fa-calendar"></i>&nbsp;
                        <span></span> <i class="fa fa-caret-down"></i>
                    </div> --}}
                    <input type="text" class="px-4 py-2 text-xs font-medium text-gray-700 border-blue-400 min-w-fit"
                        id="dateRange" name="dateRange" placeholder="Periode" />
                    <button type="button" data-mdb-ripple="true" data-mdb-ripple-color="light"
                        class="inline-block px-3 py-2 text-sm font-semibold leading-tight text-white transition duration-150 ease-in-out bg-blue-500 rounded-r shadow-md hover:bg-blue-600 hover:shadow-lg focus:bg-blue-600 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-700 active:shadow-lg">Reset</button>
                </div>
            </div>
        </div>
        <div
            class="flex min-h-[80vh] w-full flex-col overflow-hidden rounded-b-xl bg-white px-8 py-2 shadow drop-shadow-md">
            <canvas id="qtyUnit" name="qtyUnit" class="flex-grow mt-6"></canvas>
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
        <script src="{{ asset('js/performance/qty-unit.js') }}"></script>
        <script src="{{ asset('component/chart/qty-unit.js') }}"></script>
    @endpush
@endsection
