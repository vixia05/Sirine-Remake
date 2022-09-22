@section('title', 'Dashboard')
@extends('layouts.app')
@section('content')
    <div class="py-6">
        <div class="mx-auto sm:px-6 lg:px-8">
            {{-- 1.0 Order Detail --}}
            <div class="grid grid-cols-2 gap-4 lg:grid-cols-4">
                <div class="px-8 py-4 overflow-hidden bg-white bg-opacity-20 backdrop-filter backdrop-blur-sm rounded-2xl">
                    <span class="my-2 text-xl font-medium leading-tight text-gray-300">Order Pcht</span>
                    <h3 class="text-3xl font-bold leading-tight text-right my-7">
                        {{ number_format($order['orderPcht'], 0) }} Lbr
                    </h3>
                </div>
                <div class="px-8 py-4 overflow-hidden bg-white shadow-sm bg-opacity-20 backdrop-filter backdrop-blur-sm rounded-2xl">
                    <span class="my-2 text-xl font-medium leading-tight text-gray-300">Order MMEA</span>
                    <h3 class="text-3xl font-bold leading-tight text-right my-7">
                        {{ number_format($order['orderMmea'], 0) }} Lbr</h3>
                </div>
                <div class="px-8 py-4 overflow-hidden bg-white shadow-sm bg-opacity-20 backdrop-filter backdrop-blur-sm rounded-2xl">
                    <span class="my-2 text-xl font-medium leading-tight text-gray-300">Sisa Order PCHT</span>
                    <h3 class="text-3xl font-bold leading-tight text-right my-7">
                        {{ number_format($order['sisaOrderPcht'], 0) }} Lbr</h3>
                </div>
                <div class="px-8 py-4 overflow-hidden bg-white shadow-sm bg-opacity-20 backdrop-filter backdrop-blur-sm rounded-2xl">
                    <span class="my-2 text-xl font-medium leading-tight text-gray-300">Sisa Order MMEA</span>
                    <h3 class="text-3xl font-bold leading-tight text-right my-7">
                        {{ number_format($order['sisaOrderMmea'], 0) }} Lbr</h3>
                </div>
            </div>
            {{-- 2.0 Inschiet & Verifikasi PCHT --}}
            <div class="grid grid-cols-4 gap-4 mt-5">
                <div class="grid grid-rows-2 gap-3">
                    <div class="px-8 py-4 overflow-hidden bg-white shadow-sm bg-opacity-20 backdrop-filter backdrop-blur-sm rounded-2xl">
                        <span class="my-2 text-xl font-medium leading-tight text-gray-300">Inschiet PCHT</span>
                        <h3 class="my-16 text-3xl font-bold leading-tight text-right">
                            {{ number_format($inschiet['insPcht'], 2) }} %
                        </h3>
                    </div>
                    <div class="px-8 py-4 overflow-hidden bg-white shadow-sm bg-opacity-20 backdrop-filter backdrop-blur-sm rounded-2xl">
                        <span class="my-2 text-xl font-medium leading-tight text-gray-300">Inschiet MMEA</span>
                        <h3 class="my-16 text-3xl font-bold leading-tight text-right">
                            {{ number_format($inschiet['insMmea'], 2) }} %
                        </h3>
                    </div>
                </div>
                <div class="col-span-3">
                    <div class="h-full px-8 py-4 overflow-hidden bg-white shadow-sm bg-opacity-20 backdrop-filter backdrop-blur-sm rounded-2xl">
                        <h5 class="mt-0 mb-4 text-xl font-medium leading-tight text-center text-gray-300">Verifikasi PCHT
                        </h5>
                        <div>
                            <canvas id="pchtDaily" name="pchtDaily" class="max-w-full max-h-96 min-h-fit"></canvas>
                        </div>
                    </div>
                </div>
            </div>
            {{-- 3.0 Verifikasi MMEA & Retur --}}
            <div class="grid grid-cols-4 gap-4 mt-5">
                <div class="col-span-3">
                    <div class="h-full px-8 py-4 overflow-hidden bg-white shadow-sm bg-opacity-20 backdrop-filter backdrop-blur-sm rounded-2xl">
                        <h5 class="mt-0 mb-4 text-xl font-medium leading-tight text-center text-gray-300">Verifikasi MMEA
                        </h5>
                        <div>
                            <canvas id="mmeaDaily" name="mmeaDaily" class="max-w-full max-h-96 min-h-fit"></canvas>
                        </div>
                    </div>
                </div>
                <div class="grid grid-rows-2 gap-3">
                    <div class="px-8 py-4 overflow-hidden bg-white shadow-sm bg-opacity-20 backdrop-filter backdrop-blur-sm rounded-2xl">
                        <span class="my-2 text-xl font-medium leading-tight text-gray-300">Retur PCHT</span>
                        <h3 class="my-16 text-3xl font-bold leading-tight text-right">0 Lbr
                        </h3>
                    </div>
                    <div class="px-8 py-4 overflow-hidden bg-white shadow-sm bg-opacity-20 backdrop-filter backdrop-blur-sm rounded-2xl">
                        <span class="my-2 text-xl font-medium leading-tight text-gray-300">Retur MMEA</span>
                        <h3 class="my-16 text-3xl font-bold leading-tight text-right">0 Lbr
                        </h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('script-js')
    <script>
        var dataChart = {
            datePcht: @json($chartPcht['datePcht']),
            dataPcht: @json($chartPcht['dataPcht']),
            dateMmea: @json($chartMmea['dateMmea']),
            dataMmea: @json($chartMmea['dataMmea']),
        }
    </script>
    @push('js')
        <script src="{{ asset('component/chart/pcht-daily.js') }}"></script>
        <script src="{{ asset('component/chart/mmea-daily.js') }}"></script>
    @endpush
@endsection
