@section('title', 'Quantity Individu')
@extends('layouts.app')
@section('content')
    <div class="py-6">
        <div class="mx-auto sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 gap-3 md:grid-cols-3">
                <div class="relative col-span-1 rounded-xl bg-slate-800 bg-opacity-60 backdrop-blur-lg md:col-span-2 p-4">
                        <div class="flex justify-between border-b-2 pb-3">
                            <div class="flex flex-col">
                                <h6 class="w-full text-lg font-bold text-slate-100">Hasil
                                    Verifikasi Pita Cukai</h6>
                                <span class="text-xs font-light text-slate-300">Periode September 2022</span>
                            </div>
                            <div class="my-auto flex flex-row flex-wrap justify-end">
                                <select
                                    class="min-w-fit rounded-l border-blue-400 py-2 pl-2 text-xs font-bold text-gray-700">
                                    <option selected>Team</option>
                                    <option>Verifikasi Pita Cukai Team A</option>
                                </select>
                                <select class="min-w-fit border-blue-400 py-2 pl-2 text-xs font-bold text-gray-700">
                                    <option selected>Nama/NP</option>
                                </select>
                                <input type="text"
                                    class="min-w-fit border-blue-400 py-2 pl-2 text-xs font-bold text-gray-700"
                                    placeholder="Periode" />
                                <button type="button" data-mdb-ripple="true" data-mdb-ripple-color="light"
                                    class="inline-block rounded-r bg-blue-500 px-3 py-2 text-sm font-semibold leading-tight text-white shadow-md transition duration-150 ease-in-out hover:bg-blue-600 hover:shadow-lg focus:bg-blue-600 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-700 active:shadow-lg">Reset</button>
                            </div>
                        </div>
                    <div class="relative h-full flex flex-col justify-center">
                        <canvas id="qtyIndividu" name="qtyIndividu" class="mt-auto pb-16"></canvas>
                    </div>
                </div>
                <div class="grid grid-rows-2 gap-3">
                    <div class="overflow-hidden rounded-xl bg-slate-800 bg-opacity-60 px-6 pt-4 backdrop-blur-lg">
                        <h6 class="text-md py-2 font-bold text-slate-100">Yearly Performance Overview</h6>
                        <div class="object-cover pt-6">
                            <canvas id="qtyIndividuYear" name="qtyIndividuYear" class="min-w-full"></canvas>
                        </div>
                    </div>
                    <div class="overflow-hidden rounded-xl bg-slate-800 bg-opacity-60 px-6 py-4 backdrop-blur-lg">
                        <h6 class="text-md mb-1 py-2 font-bold text-slate-100">Standar Verifikasi Pita Cukai (Dalam
                            Keadaan
                            Baik & Rusak)
                        </h6>

                        <div class="row-span-3 overflow-hidden bg-slate-700 bg-opacity-60">
                            <div class="flex flex-col">
                                <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
                                    <div class="inline-block min-w-full sm:px-6 lg:px-8">
                                        <div class="overflow-hidden rounded border border-slate-500 shadow-md">
                                            <table class="min-w-full border-slate-500">
                                                {{-- 2.1 Header Table --}}
                                                <thead class="border-b border-slate-500 text-sm font-bold text-slate-400">
                                                    <tr>
                                                        {{-- 2.1.1 Index --}}
                                                        <th scope="col"
                                                            class="border-r border-slate-500 px-4 py-3 text-center">
                                                            Jam Kerja
                                                        </th>
                                                        {{-- 2.1.1 Index --}}
                                                        <th scope="col"
                                                            class="border-r border-slate-500 px-4 py-3 text-center">
                                                            Standar Verifikasi PCHT
                                                        </th>
                                                        {{-- 2.1.1 Index --}}
                                                        <th scope="col"
                                                            class="border-r border-slate-500 px-4 py-3 text-center">
                                                            Standar Verifikasi MMEA
                                                        </th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    {{-- 1.0 Tidak Lembur --}}
                                                    <tr
                                                        class="transition duration-300 ease-in-out hover:bg-slate-400 hover:bg-opacity-10">
                                                        <td
                                                            class="whitespace-nowrap border-b border-r border-slate-500 px-4 py-3 text-center text-sm font-light text-slate-100">
                                                            Tidak Lembur
                                                        </td>
                                                        <td
                                                            class="whitespace-nowrap border border-slate-500 px-4 py-3 text-center text-sm font-light text-slate-100">
                                                            15.000 Lbr / Hari
                                                        </td>
                                                        <td
                                                            class="whitespace-nowrap border-b border-l border-slate-500 px-4 py-3 text-center text-sm font-light text-slate-100">
                                                            6.000 Lbr / Hari
                                                        </td>
                                                    </tr>
                                                    {{-- 2.0 Lembur Awal --}}
                                                    <tr
                                                        class="transition duration-300 ease-in-out hover:bg-slate-400 hover:bg-opacity-10">
                                                        <td
                                                            class="whitespace-nowrap border-b border-r border-slate-500 px-4 py-3 text-center text-sm font-light text-slate-100">
                                                            Lembur Awal
                                                        </td>
                                                        <td
                                                            class="whitespace-nowrap border border-slate-500 px-4 py-3 text-center text-sm font-light text-slate-100">
                                                            20.000 Lbr / Hari
                                                        </td>
                                                        <td
                                                            class="whitespace-nowrap border-b border-l border-slate-500 px-4 py-3 text-center text-sm font-light text-slate-100">
                                                            8.000 Lbr / Hari
                                                        </td>
                                                    </tr>
                                                    {{-- 3.0 Lembur Akhir --}}
                                                    <tr
                                                        class="transition duration-300 ease-in-out hover:bg-slate-400 hover:bg-opacity-10">
                                                        <td
                                                            class="whitespace-nowrap border-b border-r border-slate-500 px-4 py-3 text-center text-sm font-light text-slate-100">
                                                            Lembur Akhir
                                                        </td>
                                                        <td
                                                            class="whitespace-nowrap border border-slate-500 px-4 py-3 text-center text-sm font-light text-slate-100">
                                                            22.500 Lbr / Hari
                                                        </td>
                                                        <td
                                                            class="whitespace-nowrap border-b border-l border-slate-500 px-4 py-3 text-center text-sm font-light text-slate-100">
                                                            9.000 Lbr / Hari
                                                        </td>
                                                    </tr>
                                                    {{-- 3.0 Lembur Awal Akhir --}}
                                                    <tr
                                                        class="transition duration-300 ease-in-out hover:bg-slate-400 hover:bg-opacity-10">
                                                        <td
                                                            class="whitespace-nowrap border-r border-slate-500 px-4 py-3 text-center text-sm font-light text-slate-100">
                                                            Lembur Awal Akhir
                                                        </td>
                                                        <td
                                                            class="whitespace-nowrap border-r border-slate-500 px-4 py-3 text-center text-sm font-light text-slate-100">
                                                            27.500 Lbr / Hari
                                                        </td>
                                                        <td
                                                            class="whitespace-nowrap border-slate-500 px-4 py-3 text-center text-sm font-light text-slate-100">
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
