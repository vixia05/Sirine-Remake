@section('title', 'Qty Unit')
@extends('layouts.app')
@section('content')
<div class="grid grid-cols-1">
    <div class="relative flex flex-col justify-center p-6">
        <div
            class="relative md:h-[95vh] rounded-xl bg-slate-100/80 dark:bg-slate-800 dark:bg-opacity-60 dark:backdrop-blur-lg dark:backdrop-filter">
            <div class="w-full px-4 py-3">
                {{-- 1.0 Header Section --}}
                <div
                    class="grid grid-cols-1 gap-3 pb-3 border-b-2 md:grid-cols-2 border-slate-600/70 dark:border-slate-300">
                    {{-- 1.1 Header Title --}}
                    <div class="flex flex-col md:col-span-2 lg:col-span-1">
                        <h5 class="w-full text-xl font-bold text-slate-800 dark:text-slate-100">Hasil Produksi Unit
                            Verifikasi Pita Cukai</h5>
                        <span class="text-sm text-slate-500 dark:text-slate-400">Periode September 2022</span>
                    </div>
                    <div class="flex flex-wrap justify-end my-auto md:col-span-2 lg:col-span-1">
                        <select
                            class="w-full py-2 pl-2 text-sm font-bold border-blue-400 rounded-l md:w-1/4 text-slate-700 focus:bg-opacity-100 dark:bg-slate-700 dark:bg-opacity-30 dark:text-slate-200"
                            id="team" name="team">
                            <option value="" selected>Team</option>
                            @foreach ($team as $group)
                            <option value="{{ $group->id }}">{{ $group->workstation }}</option>
                            @endforeach
                        </select>
                        <select
                            class="w-full py-2 pl-2 text-sm font-bold border-blue-400 md:w-1/4 text-slate-700 focus:bg-opacity-100 dark:bg-slate-700 dark:bg-opacity-30 dark:text-slate-200"
                            id="mode" name="mode">
                            <option value="1">Pencapaian Target</option>
                            <option value="2">Jumlah Verifikasi</option>
                            {{-- <option value="3">Rata-Rata</option> --}}
                        </select>
                        <input type="text"
                            class="w-full px-4 py-2 text-xs font-medium border-blue-400 md:w-fit text-slate-700 focus:bg-opacity-100 dark:bg-slate-700 dark:bg-opacity-30 dark:text-slate-200"
                            id="dateRange" name="dateRange" placeholder="Periode" />
                        <button type="button" data-mdb-ripple="true" data-mdb-ripple-color="light"
                            class="inline-block w-full px-3 py-2 text-sm font-semibold leading-tight text-white transition duration-150 ease-in-out bg-blue-500 rounded-b shadow-md md:rounded-r md:rounded-b-none md:w-fit hover:bg-blue-600 hover:shadow-lg focus:bg-blue-600 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-700 active:shadow-lg">Reset</button>
                    </div>
                </div>
            </div>
            <div class="relative flex justify-center flex-1 object-cover w-full p-4 mt-4 h-fit md:h-5/6">
                <canvas id="qtyUnit" name="qtyUnit"></canvas>
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
@push('js')
<script src="{{ asset('js/performance/qty-unit.js') }}"></script>
<script src="{{ asset('component/chart/qty-unit.js') }}"></script>
@endpush
@endsection
