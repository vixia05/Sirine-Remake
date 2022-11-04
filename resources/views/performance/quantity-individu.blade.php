@section('title', 'Quantity Individu')
@extends('layouts.app')
@section('content')
<div class="py-6">
    <div class="mx-auto px-4 lg:px-8">
        <div class="grid grid-cols-1 gap-0 md:gap-3 space-y-3 md:grid-cols-3">
            {{-- A. Card Hasil Verifikasi Individu --}}
            <div
                class="relative p-4 rounded-xl bg-white/70 dark:bg-slate-800 dark:bg-opacity-60 dark:backdrop-blur-sm dark:backdrop-filter md:col-span-3 lg:col-span-2">
                {{-- 1. Header --}}
                <div class="grid grid-rows-1 gap-3 lg:gap-0 md:grid-rows-2 pb-3 mb-3 md:mb-6 border-b-2 border-slate-600/70 dark:border-slate-300">
                    {{-- 1.1 Header Title --}}
                    <div class="flex flex-col">
                        <h5 class="w-full text-xl font-bold text-slate-800 dark:text-slate-100">Hasil Produksi Individu
                            Verifikasi Pita Cukai</h5>
                        <span class="text-sm text-slate-500 dark:text-slate-400">Periode September 2022</span>
                    </div>
                    {{-- 1.2 Filter Chart --}}
                    <div class="my-auto flex justify-end flex-wrap">
                        {{-- Filter By Team --}}
                        <select id="team" name="team"
                            class="w-full md:w-1/4 rounded-l border-blue-400 py-2 pl-2 text-sm font-bold text-slate-700 focus:bg-opacity-100 dark:bg-slate-700 dark:bg-opacity-30 dark:text-slate-200">
                            <option selected>Team</option>
                            @foreach ($team as $tm)
                            <option value="{{ $tm->id }}">{{ $tm->workstation }}</option>
                            @endforeach
                        </select>
                        {{-- Filter By NP / Nama --}}
                        <select id="selectNp" name="selectNp"
                            class="w-full md:w-1/4 border-blue-400 py-2 pl-2 text-sm font-bold text-slate-700 focus:bg-opacity-100 dark:bg-slate-700 dark:bg-opacity-30 dark:text-slate-200">
                            <option selected>Nama/NP</option>
                        </select>
                        {{-- Filter Date Range --}}
                        <input type="text" id="dateRange" name="dateRange"
                            class="w-full md:w-fit border-blue-400 px-4 py-2 text-xs font-medium text-slate-700 focus:bg-opacity-100 dark:bg-slate-700 dark:bg-opacity-30 dark:text-slate-200"
                            placeholder="Periode" />
                        {{-- Reset Filter --}}
                        <button type="button" data-mdb-ripple="true" data-mdb-ripple-color="light"
                            class="inline-block rounded-b md:rounded-r md:rounded-b-none w-full md:w-fit bg-blue-500 px-3 py-2 text-sm font-semibold leading-tight text-white shadow-md transition duration-150 ease-in-out hover:bg-blue-600 hover:shadow-lg focus:bg-blue-600 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-700 active:shadow-lg">Clear</button>
                    </div>
                </div>
                {{-- 2. Body Cancvas / Chart --}}
                <div class="relative flex flex-col justify-center object-cover w-full h-fit md:h-5/6">
                    <canvas id="qtyIndividu" name="qtyIndividu"></canvas>
                </div>
            </div>
            {{-- End A. Card Hasil Verifikasi Individu --}}

            <div class="grid md:grid-cols-2 lg:grid-cols-1 col-span-3 lg:col-span-1 gap-3">
                {{-- B. Card Hasil Verifikasi Unit --}}
                <div
                    class="p-4 px-6 overflow-hidden rounded-xl bg-white/70 dark:bg-slate-800 dark:bg-opacity-60 dark:backdrop-blur-sm dark:backdrop-filter">
                    <div class="pb-3 border-b-2 border-slate-600/70 dark:border-slate-300">
                        <div class="flex flex-col">
                            <h6 class="w-full text-lg font-bold text-slate-800 dark:text-slate-100">Verifikasi Pita
                                Cukai</h6>
                            <span class="text-xs text-slate-500 dark:text-slate-400">2022</span>
                        </div>
                    </div>
                    <div class="object-cover w-full pt-6 h-fit md:h-5/6">
                        <canvas id="qtyIndividuYear" name="qtyIndividuYear"></canvas>
                    </div>
                </div>
                {{-- End B. Card Hasil Verifikasi Unit --}}

                {{-- C. Card Standar Verifikasi Individu --}}
                <div
                    class="px-6 py-4 overflow-hidden rounded-xl bg-white/70 dark:bg-slate-800 dark:bg-opacity-60 dark:backdrop-blur-sm dark:backdrop-filter">
                    <h6 class="py-2 mb-1 font-bold text-md text-slate-800 dark:text-slate-100">Standar Verifikasi Pita
                        Cukai (Dalam
                        Keadaan
                        Baik & Rusak)
                    </h6>
                    {{-- Table Target harian --}}
                    <div class="row-span-3 overflow-hidden bg-inerhit">
                        <div class="flex flex-col">
                            <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
                                <div class="inline-block min-w-full sm:px-6 lg:px-8">
                                    <div
                                        class="overflow-hidden border rounded shadow-md border-slate-400 dark:border-slate-500">
                                        <table class="min-w-full border-slate-400 dark:border-slate-500">
                                            {{-- 2.1 Header Table --}}
                                            <thead
                                                class="text-sm font-bold border-b border-slate-400 text-slate-600 dark:border-slate-500 dark:text-slate-400 dark:bg-slate-800">
                                                <tr>
                                                    {{-- 2.1.1 Index --}}
                                                    <th scope="col"
                                                        class="px-4 py-2 text-center border-r border-slate-400 dark:border-slate-500">
                                                        Jam Kerja
                                                    </th>
                                                    {{-- 2.1.1 Index --}}
                                                    <th scope="col"
                                                        class="px-4 py-2 text-center border-r border-slate-400 dark:border-slate-500">
                                                        Standar Verifikasi PCHT
                                                    </th>
                                                    {{-- 2.1.1 Index --}}
                                                    <th scope="col"
                                                        class="px-4 py-2 text-center border-b border-slate-400 dark:border-slate-500">
                                                        Standar Verifikasi MMEA
                                                    </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                {{-- 1.0 Tidak Lembur --}}
                                                <tr
                                                    class="transition duration-300 ease-in-out hover:bg-slate-400 hover:bg-opacity-10">
                                                    <td
                                                        class="px-4 py-2 text-sm text-center border-b border-r border-slate-400 text-slate-800 dark:border-slate-500 dark:text-slate-100">
                                                        Tidak Lembur
                                                    </td>
                                                    <td
                                                        class="px-4 py-2 text-sm text-center border border-slate-400 text-slate-800 dark:border-slate-500 dark:text-slate-100">
                                                        15.000 Lbr / Hari
                                                    </td>
                                                    <td
                                                        class="px-4 py-2 text-sm text-center border-b border-l border-slate-400 text-slate-800 dark:border-slate-500 dark:text-slate-100">
                                                        6.000 Lbr / Hari
                                                    </td>
                                                </tr>
                                                {{-- 2.0 Lembur Awal --}}
                                                <tr
                                                    class="transition duration-300 ease-in-out hover:bg-slate-400 hover:bg-opacity-10">
                                                    <td
                                                        class="px-4 py-2 text-sm text-center border-b border-r border-slate-400 text-slate-800 dark:border-slate-500 dark:text-slate-100">
                                                        Lembur Awal
                                                    </td>
                                                    <td
                                                        class="px-4 py-2 text-sm text-center border border-slate-400 text-slate-800 dark:border-slate-500 dark:text-slate-100">
                                                        20.000 Lbr / Hari
                                                    </td>
                                                    <td
                                                        class="px-4 py-2 text-sm text-center border-b border-l border-slate-400 text-slate-800 dark:border-slate-500 dark:text-slate-100">
                                                        8.000 Lbr / Hari
                                                    </td>
                                                </tr>
                                                {{-- 3.0 Lembur Akhir --}}
                                                <tr
                                                    class="transition duration-300 ease-in-out hover:bg-slate-400 hover:bg-opacity-10">
                                                    <td
                                                        class="px-4 py-2 text-sm text-center border-b border-r border-slate-400 text-slate-800 dark:border-slate-500 dark:text-slate-100">
                                                        Lembur Akhir
                                                    </td>
                                                    <td
                                                        class="px-4 py-2 text-sm text-center border border-slate-400 text-slate-800 dark:border-slate-500 dark:text-slate-100">
                                                        22.500 Lbr / Hari
                                                    </td>
                                                    <td
                                                        class="px-4 py-2 text-sm text-center border-b border-l border-slate-400 text-slate-800 dark:border-slate-500 dark:text-slate-100">
                                                        9.000 Lbr / Hari
                                                    </td>
                                                </tr>
                                                {{-- 3.0 Lembur Awal Akhir --}}
                                                <tr
                                                    class="transition duration-300 ease-in-out hover:bg-slate-400 hover:bg-opacity-10">
                                                    <td
                                                        class="px-4 py-2 text-sm text-center border-r border-slate-400 text-slate-800 dark:border-slate-500 dark:text-slate-100">
                                                        Lembur Awal Akhir
                                                    </td>
                                                    <td
                                                        class="px-4 py-2 text-sm text-center border-r border-slate-400 text-slate-800 dark:border-slate-500 dark:text-slate-100">
                                                        27.500 Lbr / Hari
                                                    </td>
                                                    <td
                                                        class="px-4 py-2 text-sm text-center border-slate-400 text-slate-800 dark:border-slate-500 dark:text-slate-100">
                                                        11.000 Lbr / Hari
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {{-- End C.Table Target Pita Cukai --}}

            {{-- D. Table Rekap Evaluasi --}}
            @livewire('performance.quantity-individu')
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
<script src="{{ asset('js/performance/qty-individu.js') }}"></script>
<script src="{{ asset('component/chart/qty-individu.js') }}"></script>
@endpush
@endsection
