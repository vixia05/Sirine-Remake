@extends('layouts.app')
@section('content')
    <div class="py-6">
        <div class="mx-auto sm:px-6 lg:px-8">
            <div class="grid grid-cols-3 gap-3">
                <div class="col-span-2">
                    <div class="bg-white rounded-xl drop-shadow-md overflow-hidden px-6 py-4 h-full">
                        <h5 class="text-gray-900 text-xl font-bold py-2 mb-6">Daily Performance Overview</h5>
                        <div class="pt-10 object-cover">
                            <canvas id="qtyIndividu" name="qtyIndividu" class="min-w-full"></canvas>
                        </div>
                    </div>
                </div>
                <div class="grid grid-rows-2 gap-3">
                    <div class="bg-white rounded-xl drop-shadow-md overflow-hidden px-6 pt-4">
                        <h6 class="text-gray-900 text-lg font-bold py-2">Yearly Performance Overview</h6>
                        <div class="pt-6 object-cover">
                            <canvas id="qtyIndividuYear" name="qtyIndividuYear" class="min-w-full"></canvas>
                        </div>
                    </div>
                    <div class="bg-white rounded-xl drop-shadow-md overflow-hidden px-6 py-4">
                        <h6 class="text-gray-900 text-lg font-bold py-2 mb-6">Standar Verifikasi Pita Cukai (Dalam
                            Keadaan
                            Baik & Rusak)</h6>
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
