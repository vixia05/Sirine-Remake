@extends('layouts.app')
@section('content')
    <div class="py-6">
        <div class="mx-auto sm:px-6 lg:px-8">
            {{-- 1.0 Order Detail --}}
            <div class="grid grid-cols-4 gap-4">
                <div class="rounded-2xl bg-white shadow-sm drop-shadow-md py-4 px-8 overflow-hidden">
                    <span class="font-medium leading-tight text-xl my-2 text-gray-700">Order Pcht</span>
                    <h3 class="font-bold leading-tight text-3xl my-7 text-right">
                        {{ number_format($order['orderPcht'], 0) }} Lbr
                    </h3>
                </div>
                <div class="rounded-2xl bg-white shadow-sm drop-shadow-md py-4 px-8 overflow-hidden">
                    <span class="font-medium leading-tight text-xl my-2 text-gray-700">Order MMEA</span>
                    <h3 class="font-bold leading-tight text-3xl my-7 text-right">
                        {{ number_format($order['orderMmea'], 0) }} Lbr</h3>
                </div>
                <div class="rounded-2xl bg-white shadow-sm drop-shadow-md py-4 px-8 overflow-hidden">
                    <span class="font-medium leading-tight text-xl my-2 text-gray-700">Sisa Order PCHT</span>
                    <h3 class="font-bold leading-tight text-3xl my-7 text-right">
                        {{ number_format($order['sisaOrderPcht'], 0) }} Lbr</h3>
                </div>
                <div class="rounded-2xl bg-white shadow-sm drop-shadow-md py-4 px-8 overflow-hidden">
                    <span class="font-medium leading-tight text-xl my-2 text-gray-700">Sisa Order MMEA</span>
                    <h3 class="font-bold leading-tight text-3xl my-7 text-right">
                        {{ number_format($order['sisaOrderMmea'], 0) }} Lbr</h3>
                </div>
            </div>
            {{-- 2.0 Inschiet & Verifikasi PCHT --}}
            <div class="grid grid-cols-4 gap-4 mt-5">
                <div class="grid grid-rows-2 gap-3">
                    <div class="rounded-2xl bg-white shadow-sm drop-shadow-md py-4 px-8 overflow-hidden">
                        <span class="font-medium leading-tight text-xl my-2 text-gray-700">Inschiet PCHT</span>
                        <h3 class="font-bold leading-tight text-3xl text-right my-16">
                            {{ number_format($inschiet['insPcht'], 2) }} %
                        </h3>
                    </div>
                    <div class="rounded-2xl bg-white shadow-sm drop-shadow-md py-4 px-8 overflow-hidden">
                        <span class="font-medium leading-tight text-xl my-2 text-gray-700">Inschiet MMEA</span>
                        <h3 class="font-bold leading-tight text-3xl my-16 text-right">
                            {{ number_format($inschiet['insMmea'], 2) }} %
                        </h3>
                    </div>
                </div>
                <div class="col-span-3">
                    <div class="rounded-2xl bg-white shadow-sm drop-shadow-md py-4 px-8 h-full overflow-hidden">
                        <h5 class="font-medium leading-tight text-xl mt-0 mb-4 text-gray-700 text-center">Verifikasi PCHT
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
                    <div class="rounded-2xl bg-white shadow-sm drop-shadow-md py-4 px-8 h-full overflow-hidden">
                        <h5 class="font-medium leading-tight text-xl mt-0 mb-4 text-gray-700 text-center">Verifikasi MMEA
                        </h5>
                        <div>
                            <canvas id="mmeaDaily" name="mmeaDaily" class="max-w-full max-h-96 min-h-fit"></canvas>
                        </div>
                    </div>
                </div>
                <div class="grid grid-rows-2 gap-3">
                    <div class="rounded-2xl bg-white shadow-sm drop-shadow-md py-4 px-8 overflow-hidden">
                        <span class="font-medium leading-tight text-xl my-2 text-gray-700">Retur PCHT</span>
                        <h3 class="font-bold leading-tight text-3xl my-16 text-right">0 Lbr
                        </h3>
                    </div>
                    <div class="rounded-2xl bg-white shadow-sm drop-shadow-md py-4 px-8 overflow-hidden">
                        <span class="font-medium leading-tight text-xl my-2 text-gray-700">Retur MMEA</span>
                        <h3 class="font-bold leading-tight text-3xl my-16 text-right">0 Lbr
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
