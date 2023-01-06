@section('title', 'Report Pegawai')
@extends('layouts.app')
@section('content')
    <div class="py-6">
        <div class="mx-auto sm:px-6 lg:px-8">
            <div class="grid grid-cols-2 gap-4">
                {{-- A. Header & Filter --}}
                <div class="relative col-span-2 w-full rounded-md bg-gradient-to-br from-slate-50 via-slate-100 to-slate-50  dark:bg-slate-800 dark:from-transparent dark:to-transparent dark:bg-opacity-60 dark:backdrop-blur-sm p-6 dark:backdrop-filter">
                    <div class="border-b-2 border-slate-600 /70 dark:border-slate-300/70 pb-4">
                        <h3 class="text-center font-mono text-2xl font-semibold text-slate-600 dark:text-slate-300">REPORT PERFORMANCE</h3>
                    </div>
                    {{-- 1.0 Biodata --}}
                    <div class="flex justify-start space-x-6">
                        {{-- 1.1 Image user --}}
                        <div class="my-auto max-w-sm rounded-lg">
                            <img class="rounded" src="{{ asset('img/Avatar/default.jpg') }}" alt="" />
                        </div>
                        <div class="flex w-1/4 flex-col space-y-1">
                            {{-- 1.2 Periode Report --}}
                            <label for=""
                                class="inline-block py-1 text-sm font-medium text-slate-700 dark:text-slate-200">Periode</label>
                            <input type="date"
                                class="rounded-md dark:bg-slate-800 border-slate-600 bg-zinc-100/70 text-sm leading-tight text-slate-600 dark:text-slate-300 placeholder-slate-600 dark:placeholder-slate-400 drop-shadow-md focus:outline-2 focus:ring-blue-400">
                            {{-- 1.3 Nama User --}}
                            <label for="" class="inline-block py-1 text-sm font-medium text-slate-700 dark:text-slate-200">Nama</label>
                            <input type="text"
                                class="rounded-md dark:bg-slate-800 border-slate-600 bg-zinc-100/70 text-sm leading-tight text-slate-600 dark:text-slate-300 placeholder-slate-600 dark:placeholder-slate-400 drop-shadow-md focus:outline-2 focus:ring-blue-400"
                                placeholder="Nama">
                            {{-- 1.4 Nomor Pokok User --}}
                            <label for="" class="inline-block py-1 text-sm font-medium text-slate-700 dark:text-slate-200">Nomor
                                Pokok</label>
                            <input type="text"
                                class="rounded-md dark:bg-slate-800 border-slate-600 bg-zinc-100/70 text-sm leading-tight text-slate-600 dark:text-slate-300 placeholder-slate-600 dark:placeholder-slate-400 drop-shadow-md focus:outline-2 focus:ring-blue-400"
                                placeholder="Nomor Pokok">
                            {{-- 1.5 Workstation User --}}
                            <label for=""
                                class="inline-block py-1 text-sm font-medium text-slate-700 dark:text-slate-200">Workstation</label>
                            <input type="text"
                                class="rounded-md dark:bg-slate-800 border-slate-600 bg-zinc-100/70 text-sm leading-tight text-slate-600 dark:text-slate-300 placeholder-slate-600 dark:placeholder-slate-400 drop-shadow-md focus:outline-2 focus:ring-blue-400"
                                placeholder="Workstation">
                            {{-- 1.6 Quantitas User --}}
                            <label for=""
                                class="inline-block py-1 text-sm font-medium text-slate-700 dark:text-slate-200">Kuantitas</label>
                            <input type="text"
                                class="rounded-md dark:bg-slate-800 border-slate-600 bg-zinc-100/70 text-sm leading-tight text-slate-600 dark:text-slate-300 placeholder-slate-600 dark:placeholder-slate-400 drop-shadow-md focus:outline-2 focus:ring-blue-400"
                                placeholder="Kuantitas">
                            {{-- 1.7 Qualitas User --}}
                            <label for=""
                                class="inline-block py-1 text-sm font-medium text-slate-700 dark:text-slate-200">Kualitas</label>
                            <input type="text"
                                class="rounded-md dark:bg-slate-800 border-slate-600 bg-zinc-100/70 text-sm leading-tight text-slate-600 dark:text-slate-300 placeholder-slate-600 dark:placeholder-slate-400 drop-shadow-md focus:outline-2 focus:ring-blue-400"
                                placeholder="Kualitas">
                            {{-- 1.8 Total Performance User --}}
                            <label for="" class="inline-block py-1 text-sm font-medium text-slate-700 dark:text-slate-200">Total
                                Performance</label>
                            <input type="text"
                                class="rounded-md dark:bg-slate-800 border-slate-600 bg-zinc-100/70 text-sm leading-tight text-slate-600 dark:text-slate-300 placeholder-slate-600 dark:placeholder-slate-400 drop-shadow-md focus:outline-2 focus:ring-blue-400"
                                placeholder="Performance">
                        </div>
                        <div class="my-auto h-full w-1/2">
                            <canvas id="performancePreview"></canvas>
                        </div>
                    </div>
                </div>
                {{-- End A. Header / Filter --}}

                {{-- B. Performance Monthly --}}
                <div class="relative w-full rounded-md bg-gradient-to-br from-slate-50 via-slate-100 to-slate-50  dark:bg-slate-800 dark:from-transparent dark:to-transparent dark:bg-opacity-60 dark:backdrop-blur-sm p-6 dark:backdrop-filter">
                    {{-- 1. Header --}}
                    <div class="mb-2 border-b-2 border-slate-600 /70 dark:border-slate-300/70 pb-4">
                        <h3 class="text-center font-mono text-2xl font-semibold text-slate-600 dark:text-slate-300">Performance Tahun 2022</h3>
                    </div>
                    {{-- 2. Body Canvas --}}
                    <div class="h-fit w-full">
                        <canvas id="performanceYear"></canvas>
                    </div>
                </div>

                {{-- C. Performance Weekly --}}
                <div class="relative w-full rounded-md bg-gradient-to-br from-slate-50 via-slate-100 to-slate-50  dark:bg-slate-800 dark:from-transparent dark:to-transparent dark:bg-opacity-60 dark:backdrop-blur-sm p-6 dark:backdrop-filter">
                    {{-- 1. Header --}}
                    <div class="mb-2 border-b-2 border-slate-600 /70 dark:border-slate-300/70 pb-4">
                        <h3 class="text-center font-mono text-2xl font-semibold text-slate-600 dark:text-slate-300">Performance Bulan
                            {{ now()->format('F') }}</h3>
                    </div>
                    {{-- 2. Body Canvas --}}
                    <div class="h-fit w-full">
                        <canvas id="performanceMonth"></canvas>
                    </div>
                </div>

                {{-- D. Table Rekap Evaluasi Pegawai --}}
                <div class="relative col-span-2 w-full rounded-md bg-gradient-to-br from-slate-50 via-slate-100 to-slate-50  dark:bg-slate-800 dark:from-transparent dark:to-transparent px-2 py-6 dark:bg-opacity-60 dark:backdrop-blur-sm dark:backdrop-filter">
                    <div class="overflow-x-auto px-4">
                        {{-- 1.0 Filter & Search Section --}}
                        <div
                            class="rounded-t border bg-inerhit border-slate-400 dark:border-slate-500 dark:bg-slate-700 dark:bg-opacity-50 px-4 py-6">
                            <div class="flex justify-start">
                                <div class="relative">
                                    <input type="text" wire:model="search"
                                        class="rounded-lg border-t py-2 pl-10 pr-4 text-xs font-medium text-gray-600 shadow focus:border-gray-400 focus:outline-none focus:ring-0"
                                        placeholder="Search...">
                                    <div class="absolute top-0 left-0 inline-flex items-center pt-2 pl-2 text-gray-500">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20"
                                            fill="currentColor">
                                            <path fill-rule="evenodd"
                                                d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                                                clip-rule="evenodd" />
                                        </svg>
                                    </div>
                                </div>
                            </div>
                        </div>
                        {{-- End Filter & Search --}}
                        {{-- 3. Table Body --}}
                        <div
                            class="col-span-2 border rounded-b overflow-hidden bg-inerhit border-slate-400 dark:border-slate-500 dark:bg-slate-700 dark:bg-opacity-50">
                            <div class="flex flex-col">
                                <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
                                    <div class="inline-block min-w-full sm:px-6 lg:px-8">
                                        <div class="overflow-hidden">
                                            <table class="min-w-full">
                                                {{-- 1. Header Table --}}
                                                <thead class="border-b border-slate-400 dark:border-slate-500 text-base font-bold text-slate-500 dark:text-slate-400">
                                                    <tr>
                                                        {{-- 1.1 Index --}}
                                                        <th scope="col"
                                                            class="border-r border-slate-400 dark:border-slate-500 px-4 py-3 text-center">
                                                            No
                                                        </th>
                                                        {{-- 1.2 Evaluator --}}
                                                        <th scope="col"
                                                            class="border-r border-slate-400 dark:border-slate-500 px-4 py-3 text-center">
                                                            Evaluator
                                                        </th>
                                                        {{-- 1.3 Evaluasi --}}
                                                        <th scope="col"
                                                            class="border-r border-slate-400 dark:border-slate-500 px-4 py-3 text-center">
                                                            Evaluasi
                                                        </th>
                                                        {{-- 1.4 Tanggapan --}}
                                                        <th scope="col"
                                                            class="border-r border-slate-400 dark:border-slate-500 px-4 py-3 text-center">
                                                            Tanggapan
                                                        </th>
                                                        {{-- 1.5 Status Read --}}
                                                        <th scope="col"
                                                            class="border-r border-slate-400 dark:border-slate-500 px-4 py-3 text-center">
                                                            Status
                                                        </th>
                                                        {{-- 1.6 Tanggal Evaluasi --}}
                                                        <th scope="col"
                                                            class="border-r border-slate-400 dark:border-slate-500 px-4 py-3 text-center">
                                                            Tanggal Evaluasi
                                                        </th>
                                                    </tr>
                                                </thead>
                                                {{-- 2. Body Table --}}
                                                <tbody>
                                                    {{-- 2.1 Index --}}
                                                    <tr
                                                        class="transition duration-300 ease-in-out hover:bg-slate-400 hover:bg-opacity-10">
                                                        <td
                                                            class="whitespace-nowrap border-y border-r border-slate-400 dark:border-slate-500 px-4 py-3 text-center text-sm text-slate-800 dark:text-slate-100">
                                                            1</td>
                                                        {{-- 2.2 Evaluator --}}
                                                        <td
                                                            class="whitespace-nowrap border-y border-r border-slate-400 dark:border-slate-500 px-4 py-3 text-center text-sm text-slate-800 dark:text-slate-100">
                                                            7105</td>
                                                        {{-- 2.3 Evaluasi --}}
                                                        <td
                                                            class="border-y border-r border-slate-400 dark:border-slate-500 px-4 py-3 text-sm text-slate-800 dark:text-slate-100">
                                                            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Perferendis laboriosam quibusdam, minima alias est deserunt?</td>
                                                        {{-- 2.4 Tanggapan --}}
                                                        <td
                                                            class="border-y border-r border-slate-400 dark:border-slate-500 px-4 py-3 text-sm text-slate-800 dark:text-slate-100">
                                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempore, vero.</td>
                                                        {{-- 2.5 Status Read --}}
                                                        <td
                                                            class="whitespace-nowrap border-y border-r border-slate-400 dark:border-slate-500 px-4 py-3 text-center text-xs font-medium text-slate-100">
                                                            <span class="bg-green-600 text-green-100 rounded-full py-1 px-2">Responded</span></td>
                                                        {{-- 2.6 Tanggal Evaluasi --}}
                                                        <td
                                                            class="whitespace-nowrap border-y border-slate-400 dark:border-slate-500 px-4 py-3 text-center text-sm text-slate-800 dark:text-slate-100">
                                                            06-Oktober-2022</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            {{-- 3.0 Footer --}}
                            <div
                                class="overflow-hidden bg-inerhit dark:bg-slate-700 bg-opacity-50 px-10 py-3 text-slate-800 dark:text-slate-100 shadow-md drop-shadow-sm">
                                {{-- {{ $data->links('vendor.livewire.tailwind') }} --}}
                            </div>
                            {{-- End Footer --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endsection
    @section('plugin-js')
        {{-- <link rel="stylesheet" href="{{ asset('plugins/daterangepicker.css') }}"> --}}
        <script src="{{ asset('plugins/jquery-3.6.1.min.js') }}"></script>
        <script src="{{ asset('plugins/moment.min.js') }}"></script>
        {{-- <script src="{{ asset('plugins/daterangepicker.min.js') }}"></script> --}}
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
            {{-- <script src="{{ asset('js/performance/qty-individu.js') }}"></script> --}}
            <script src="{{ asset('component/chart/report.js') }}"></script>
        @endpush
    @endsection
