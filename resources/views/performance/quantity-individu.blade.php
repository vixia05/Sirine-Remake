@extends('layouts.app')
@section('content')
    <div class="py-6">
        <div class="mx-auto sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 gap-3 md:grid-cols-3">
                <div class="col-span-1 flex md:col-span-2">
                    <div class="relative min-w-full overflow-hidden rounded-xl bg-white p-4 drop-shadow-md">
                        <div class="flex justify-between border-b-2 pb-3">
                            <div class="flex flex-col">
                                <h6 class="w-full text-lg font-bold text-gray-700">Hasil
                                    Verifikasi Pita Cukai</h6>
                                <span class="text-xs font-light text-gray-500">Periode September 2022</span>
                            </div>
                            <div class="my-auto flex flex-row flex-wrap justify-end">
                                <select
                                    class="min-w-fit rounded-l border-blue-400 py-2 pl-2 text-xs font-bold text-gray-700">
                                    <option selected>Team</option>
                                    <option>Verifikasi Pita Cukai Team A</option>
                                </select>
                                <select class="min-w-fit border-blue-400 py-2 pl-2 text-xs font-bold text-gray-700">
                                    <option selected>Tipe</option>
                                    <option value="1">Pencapaian Target</option>
                                    <option value="2">Jumlah Verifikasi</option>
                                    <option value="3">Rata-Rata</option>
                                </select>
                                <input type="text"
                                    class="min-w-fit border-blue-400 py-2 pl-2 text-xs font-bold text-gray-700"
                                    placeholder="Periode" />
                                <button type="button" data-mdb-ripple="true" data-mdb-ripple-color="light"
                                    class="inline-block rounded-r bg-blue-500 px-3 py-2 text-sm font-semibold leading-tight text-white shadow-md transition duration-150 ease-in-out hover:bg-blue-600 hover:shadow-lg focus:bg-blue-600 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-700 active:shadow-lg">Reset</button>
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
                    <div class="overflow-hidden rounded-xl bg-white px-6 pt-4 drop-shadow-md">
                        <h6 class="text-md py-2 font-bold text-gray-900">Yearly Performance Overview</h6>
                        <div class="object-cover pt-6">
                            <canvas id="qtyIndividuYear" name="qtyIndividuYear" class="min-w-full"></canvas>
                        </div>
                    </div>
                    <div class="overflow-hidden rounded-xl bg-white px-6 py-4 drop-shadow-md">
                        <h6 class="text-md mb-1 py-2 font-bold text-gray-900">Standar Verifikasi Pita Cukai (Dalam
                            Keadaan
                            Baik & Rusak)</h6>
                        <div class="flex flex-col">
                            <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
                                <div class="inline-block min-w-full py-4 sm:px-6 lg:px-8">
                                    <div class="overflow-hidden rounded-lg">
                                        <table class="min-w-full text-center">
                                            <thead class="border-b bg-gray-800">
                                                <tr>
                                                    <th scope="col" class="px-3 py-4 text-sm font-medium text-white">
                                                        Jam Kerja
                                                    </th>
                                                    <th scope="col" class="px-3 py-4 text-sm font-medium text-white">
                                                        Standar Verifikasi (RIM)
                                                    </th>
                                                    <th scope="col" class="px-3 py-4 text-sm font-medium text-white">
                                                        Standar Verifikasi (Lembar)
                                                    </th>
                                                </tr>
                                            </thead class="border-b">
                                            <tbody>
                                                <tr class="border-b bg-white">
                                                    <td
                                                        class="whitespace-nowrap px-6 py-4 text-sm font-medium text-gray-900">
                                                        Tidak Lembur</td>
                                                    <td
                                                        class="whitespace-nowrap px-6 py-4 text-sm font-light text-gray-900">
                                                        30 Rim
                                                    </td>
                                                    <td
                                                        class="whitespace-nowrap px-6 py-4 text-sm font-light text-gray-900">
                                                        15.000 Lbr
                                                    </td>
                                                </tr class="border-b bg-white">
                                                <tr class="border-b bg-white">
                                                    <td
                                                        class="whitespace-nowrap px-6 py-4 text-sm font-medium text-gray-900">
                                                        Lembur Awal</td>
                                                    <td
                                                        class="whitespace-nowrap px-6 py-4 text-sm font-light text-gray-900">
                                                        40 Rim
                                                    </td>
                                                    <td
                                                        class="whitespace-nowrap px-6 py-4 text-sm font-light text-gray-900">
                                                        20.000 Lbr
                                                    </td>
                                                </tr class="border-b bg-white">
                                                <tr class="border-b bg-white">
                                                    <td
                                                        class="whitespace-nowrap px-6 py-4 text-sm font-medium text-gray-900">
                                                        Lembur Akhir</td>
                                                    <td
                                                        class="whitespace-nowrap px-6 py-4 text-sm font-light text-gray-900">
                                                        45 Rim
                                                    </td>
                                                    <td
                                                        class="whitespace-nowrap px-6 py-4 text-sm font-light text-gray-900">
                                                        22.500 Lbr
                                                    </td>
                                                </tr class="border-b bg-white">
                                                <tr class="border-b bg-white">
                                                    <td
                                                        class="whitespace-nowrap px-6 py-4 text-sm font-medium text-gray-900">
                                                        Lembur Awal-Akhir</td>
                                                    <td
                                                        class="whitespace-nowrap px-6 py-4 text-sm font-light text-gray-900">
                                                        55 Rim
                                                    </td>
                                                    <td
                                                        class="whitespace-nowrap px-6 py-4 text-sm font-light text-gray-900">
                                                        27.500 Lbr
                                                    </td>
                                                </tr class="border-b bg-white">
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
