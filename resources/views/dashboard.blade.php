@section('title', 'Dashboard')
@extends('layouts.app')
@section('content')
    <div class="py-6">
        <div class="mx-auto sm:px-6 lg:px-8">
            {{-- 1.0 Order Detail --}}
            <div class="grid grid-cols-2 gap-4 lg:grid-cols-4">
                <div class="overflow-hidden rounded-2xl bg-white py-4 px-8 shadow-sm drop-shadow-md">
                    <span class="my-2 text-xl font-medium leading-tight text-gray-700">Order Pcht</span>
                    <h3 class="my-7 text-right text-3xl font-bold leading-tight">
                        {{ number_format($order['orderPcht'], 0) }} Lbr
                    </h3>
                </div>
                <div class="overflow-hidden rounded-2xl bg-white py-4 px-8 shadow-sm drop-shadow-md">
                    <span class="my-2 text-xl font-medium leading-tight text-gray-700">Order MMEA</span>
                    <h3 class="my-7 text-right text-3xl font-bold leading-tight">
                        {{ number_format($order['orderMmea'], 0) }} Lbr</h3>
                </div>
                <div class="overflow-hidden rounded-2xl bg-white py-4 px-8 shadow-sm drop-shadow-md">
                    <span class="my-2 text-xl font-medium leading-tight text-gray-700">Sisa Order PCHT</span>
                    <h3 class="my-7 text-right text-3xl font-bold leading-tight">
                        {{ number_format($order['sisaOrderPcht'], 0) }} Lbr</h3>
                </div>
                <div class="overflow-hidden rounded-2xl bg-white py-4 px-8 shadow-sm drop-shadow-md">
                    <span class="my-2 text-xl font-medium leading-tight text-gray-700">Sisa Order MMEA</span>
                    <h3 class="my-7 text-right text-3xl font-bold leading-tight">
                        {{ number_format($order['sisaOrderMmea'], 0) }} Lbr</h3>
                </div>
            </div>
            {{-- 2.0 Inschiet & Verifikasi PCHT --}}
            <div class="mt-5 grid grid-cols-4 gap-4">
                <div class="grid grid-rows-2 gap-3">
                    <div class="overflow-hidden rounded-2xl bg-white py-4 px-8 shadow-sm drop-shadow-md">
                        <span class="my-2 text-xl font-medium leading-tight text-gray-700">Inschiet PCHT</span>
                        <h3 class="my-16 text-right text-3xl font-bold leading-tight">
                            {{ number_format($inschiet['insPcht'], 2) }} %
                        </h3>
                    </div>
                    <div class="overflow-hidden rounded-2xl bg-white py-4 px-8 shadow-sm drop-shadow-md">
                        <span class="my-2 text-xl font-medium leading-tight text-gray-700">Inschiet MMEA</span>
                        <h3 class="my-16 text-right text-3xl font-bold leading-tight">
                            {{ number_format($inschiet['insMmea'], 2) }} %
                        </h3>
                    </div>
                </div>
                <div class="col-span-3">
                    <div class="h-full overflow-hidden rounded-2xl bg-white py-4 px-8 shadow-sm drop-shadow-md">
                        <h5 class="mt-0 mb-4 text-center text-xl font-medium leading-tight text-gray-700">Verifikasi PCHT
                        </h5>
                        <div>
                            <canvas id="pchtDaily" name="pchtDaily" class="max-h-96 min-h-fit max-w-full"></canvas>
                        </div>
                    </div>
                </div>
            </div>
            {{-- 3.0 Verifikasi MMEA & Retur --}}
            <div class="mt-5 grid grid-cols-4 gap-4">
                <div class="col-span-3">
                    <div class="h-full overflow-hidden rounded-2xl bg-white py-4 px-8 shadow-sm drop-shadow-md">
                        <h5 class="mt-0 mb-4 text-center text-xl font-medium leading-tight text-gray-700">Verifikasi MMEA
                        </h5>
                        <div>
                            <canvas id="mmeaDaily" name="mmeaDaily" class="max-h-96 min-h-fit max-w-full"></canvas>
                        </div>
                    </div>
                </div>
                <div class="grid grid-rows-2 gap-3">
                    <div class="overflow-hidden rounded-2xl bg-white py-4 px-8 shadow-sm drop-shadow-md">
                        <span class="my-2 text-xl font-medium leading-tight text-gray-700">Retur PCHT</span>
                        <h3 class="my-16 text-right text-3xl font-bold leading-tight">0 Lbr
                        </h3>
                    </div>
                    <div class="overflow-hidden rounded-2xl bg-white py-4 px-8 shadow-sm drop-shadow-md">
                        <span class="my-2 text-xl font-medium leading-tight text-gray-700">Retur MMEA</span>
                        <h3 class="my-16 text-right text-3xl font-bold leading-tight">0 Lbr
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
