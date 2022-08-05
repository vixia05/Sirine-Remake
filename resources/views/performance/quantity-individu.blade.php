@extends('layouts.app')
@section('content')
    <div class="py-6">
        <div class="mx-auto sm:px-6 lg:px-8">
            <div class="grid grid-cols-3 gap-3">
                <div class="col-span-2">
                    <div class="bg-white rounded-xl drop-shadow-md overflow-hidden px-6 py-4 h-full">
                        <h5 class="text-gray-900 text-xl font-bold py-2 mb-6">Daily Performance Overview</h5>
                        <div class="h-full relative">
                            <canvas id="qtyIndividu" name="qtyIndividu" class="min-w-full absolute bottom-16 right-0"></canvas>
                        </div>
                    </div>
                </div>
                <div class="grid grid-rows-2 gap-3">
                    <div class="bg-white rounded-xl drop-shadow-md overflow-hidden px-6 pt-4">
                        <h6 class="text-gray-900 text-md font-bold py-2">Yearly Performance Overview</h6>
                        <div class="pt-6 object-cover">
                            <canvas id="qtyIndividuYear" name="qtyIndividuYear" class="min-w-full"></canvas>
                        </div>
                    </div>
                    <div class="bg-white rounded-xl drop-shadow-md overflow-hidden px-6 py-4">
                        <h6 class="text-gray-900 text-md font-bold py-2 mb-1">Standar Verifikasi Pita Cukai (Dalam
                            Keadaan
                            Baik & Rusak)</h6>
                        <div class="flex flex-col">
                            <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
                                <div class="py-4 inline-block min-w-full sm:px-6 lg:px-8">
                                    <div class="overflow-hidden rounded-lg">
                                        <table class="min-w-full text-center">
                                            <thead class="border-b bg-gray-800">
                                                <tr>
                                                    <th scope="col" class="text-sm font-medium text-white px-3 py-4">
                                                        Jam Kerja
                                                    </th>
                                                    <th scope="col" class="text-sm font-medium text-white px-3 py-4">
                                                        Standar Verifikasi (RIM)
                                                    </th>
                                                    <th scope="col" class="text-sm font-medium text-white px-3 py-4">
                                                        Standar Verifikasi (Lembar)
                                                    </th>
                                                </tr>
                                            </thead class="border-b">
                                            <tbody>
                                                <tr class="bg-white border-b">
                                                    <td
                                                        class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">
                                                        Tidak Lembur</td>
                                                    <td
                                                        class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                                        30 Rim
                                                    </td>
                                                    <td
                                                        class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                                        15.000 Lbr
                                                    </td>
                                                </tr class="bg-white border-b">
                                                <tr class="bg-white border-b">
                                                    <td
                                                        class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">
                                                        Lembur Awal</td>
                                                    <td
                                                        class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                                        40 Rim
                                                    </td>
                                                    <td
                                                        class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                                        20.000 Lbr
                                                    </td>
                                                </tr class="bg-white border-b">
                                                <tr class="bg-white border-b">
                                                    <td
                                                        class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">
                                                        Lembur Akhir</td>
                                                    <td
                                                        class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                                        45 Rim
                                                    </td>
                                                    <td
                                                        class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                                        22.500 Lbr
                                                    </td>
                                                </tr class="bg-white border-b">
                                                <tr class="bg-white border-b">
                                                    <td
                                                        class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">
                                                        Lembur Awal-Akhir</td>
                                                    <td
                                                        class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                                        55 Rim
                                                    </td>
                                                    <td
                                                        class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                                        27.500 Lbr
                                                    </td>
                                                </tr class="bg-white border-b">
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
            <script src="{{ asset('component/chart/qty-individu.js') }}"></script>
        @endpush
    @endsection
