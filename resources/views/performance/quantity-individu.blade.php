@section('title', 'Quantity Individu')
@extends('layouts.app')
@section('content')
    <div class="py-6">
        <div class="mx-auto sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 gap-3 md:grid-cols-3">
                <div class="flex col-span-1 md:col-span-2">
                    <div
                        class="relative min-w-full p-4 overflow-hidden rounded-xl bg-slate-800 bg-opacity-60 backdrop-blur-lg">
                        <div class="flex justify-between pb-3 border-b-2">
                            <div class="flex flex-col">
                                <h6 class="w-full text-lg font-bold text-slate-100">Hasil
                                    Verifikasi Pita Cukai</h6>
                                <span class="text-xs font-light text-slate-300">Periode September 2022</span>
                            </div>
                            <div class="flex flex-row flex-wrap justify-end my-auto">
                                <select
                                    class="py-2 pl-2 text-xs font-bold text-gray-700 border-blue-400 rounded-l min-w-fit">
                                    <option selected>Team</option>
                                    <option>Verifikasi Pita Cukai Team A</option>
                                </select>
                                <select class="py-2 pl-2 text-xs font-bold text-gray-700 border-blue-400 min-w-fit">
                                    <option selected>Tipe</option>
                                    <option value="1">Pencapaian Target</option>
                                    <option value="2">Jumlah Verifikasi</option>
                                    <option value="3">Rata-Rata</option>
                                </select>
                                <input type="text"
                                    class="py-2 pl-2 text-xs font-bold text-gray-700 border-blue-400 min-w-fit"
                                    placeholder="Periode" />
                                <button type="button" data-mdb-ripple="true" data-mdb-ripple-color="light"
                                    class="inline-block px-3 py-2 text-sm font-semibold leading-tight text-white transition duration-150 ease-in-out bg-blue-500 rounded-r shadow-md hover:bg-blue-600 hover:shadow-lg focus:bg-blue-600 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-700 active:shadow-lg">Reset</button>
                            </div>
                        </div>
                        <div class="h-full max-w-full drop-shadow-md">
                            <div class="pt-[20%] pb-[10%]">
                                <canvas id="qtyIndividu" name="qtyIndividu" class="flex-auto"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="grid grid-rows-2 gap-3">
                    <div class="px-6 pt-4 overflow-hidden rounded-xl bg-slate-800 bg-opacity-60 backdrop-blur-lg">
                        <h6 class="py-2 font-bold text-md text-slate-100">Yearly Performance Overview</h6>
                        <div class="object-cover pt-6">
                            <canvas id="qtyIndividuYear" name="qtyIndividuYear" class="min-w-full"></canvas>
                        </div>
                    </div>
                    <div class="px-6 py-4 overflow-hidden rounded-xl bg-slate-800 bg-opacity-60 backdrop-blur-lg">
                        <h6 class="py-2 mb-1 font-bold text-md text-slate-100">Standar Verifikasi Pita Cukai (Dalam
                            Keadaan
                            Baik & Rusak)
                        </h6>

                        <div
                            class="row-span-3 overflow-hidden bg-slate-700 bg-opacity-60">
                            <div class="flex flex-col">
                                <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
                                    <div class="inline-block min-w-full sm:px-6 lg:px-8">
                                        <div class="overflow-hidden border rounded shadow-md border-slate-500">
                                            <table class="min-w-full border-slate-500">
                                                {{-- 2.1 Header Table --}}
                                                <thead class="text-sm font-bold border-b border-slate-500 text-slate-400">
                                                    <tr>
                                                        {{-- 2.1.1 Index --}}
                                                        <th scope="col" class="px-4 py-3 text-center border-r border-slate-500">
                                                            Jam Kerja
                                                        </th>
                                                        {{-- 2.1.1 Index --}}
                                                        <th scope="col" class="px-4 py-3 text-center border-r border-slate-500">
                                                            Standar Verifikasi PCHT
                                                        </th>
                                                        {{-- 2.1.1 Index --}}
                                                        <th scope="col" class="px-4 py-3 text-center border-r border-slate-500">
                                                            Standar Verifikasi MMEA
                                                        </th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    {{-- 1.0 Tidak Lembur --}}
                                                    <tr class="transition duration-300 ease-in-out hover:bg-slate-400 hover:bg-opacity-10">
                                                        <td class="px-4 py-3 text-sm font-light text-center border-b border-r whitespace-nowrap border-slate-500 text-slate-100">
                                                            Tidak Lembur
                                                        </td>
                                                        <td class="px-4 py-3 text-sm font-light text-center border whitespace-nowrap border-slate-500 text-slate-100">
                                                            15.000 Lbr / Hari
                                                        </td>
                                                        <td class="px-4 py-3 text-sm font-light text-center border-b border-l whitespace-nowrap border-slate-500 text-slate-100">
                                                            6.000 Lbr / Hari
                                                        </td>
                                                    </tr>
                                                    {{-- 2.0 Lembur Awal --}}
                                                    <tr class="transition duration-300 ease-in-out hover:bg-slate-400 hover:bg-opacity-10">
                                                        <td class="px-4 py-3 text-sm font-light text-center border-b border-r whitespace-nowrap border-slate-500 text-slate-100">
                                                            Lembur Awal
                                                        </td>
                                                        <td class="px-4 py-3 text-sm font-light text-center border whitespace-nowrap border-slate-500 text-slate-100">
                                                            20.000 Lbr / Hari
                                                        </td>
                                                        <td class="px-4 py-3 text-sm font-light text-center border-b border-l whitespace-nowrap border-slate-500 text-slate-100">
                                                            8.000 Lbr / Hari
                                                        </td>
                                                    </tr>
                                                    {{-- 3.0 Lembur Akhir --}}
                                                    <tr class="transition duration-300 ease-in-out hover:bg-slate-400 hover:bg-opacity-10">
                                                        <td class="px-4 py-3 text-sm font-light text-center border-b border-r whitespace-nowrap border-slate-500 text-slate-100">
                                                            Lembur Akhir
                                                        </td>
                                                        <td class="px-4 py-3 text-sm font-light text-center border whitespace-nowrap border-slate-500 text-slate-100">
                                                            22.500 Lbr / Hari
                                                        </td>
                                                        <td class="px-4 py-3 text-sm font-light text-center border-b border-l whitespace-nowrap border-slate-500 text-slate-100">
                                                            9.000 Lbr / Hari
                                                        </td>
                                                    </tr>
                                                    {{-- 3.0 Lembur Awal Akhir --}}
                                                    <tr class="transition duration-300 ease-in-out hover:bg-slate-400 hover:bg-opacity-10">
                                                        <td class="px-4 py-3 text-sm font-light text-center border-r whitespace-nowrap border-slate-500 text-slate-100">
                                                            Lembur Awal Akhir
                                                        </td>
                                                        <td class="px-4 py-3 text-sm font-light text-center border-r whitespace-nowrap border-slate-500 text-slate-100">
                                                            27.500 Lbr / Hari
                                                        </td>
                                                        <td class="px-4 py-3 text-sm font-light text-center whitespace-nowrap border-slate-500 text-slate-100">
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
