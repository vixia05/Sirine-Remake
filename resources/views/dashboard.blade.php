@section('title', 'Dashboard')
@extends('layouts.app')
@section('content')
    <div class="py-6">
        <div class="mx-auto sm:px-6 lg:px-8">
            {{-- 1.0 Order Detail --}}
            <div class="grid grid-cols-2 gap-4 lg:grid-cols-4">
                <div
                    class="px-4 py-4 overflow-hidden rounded-xl bg-slate-800 bg-opacity-60 backdrop-blur-sm backdrop-filter">
                    <div class="flex flex-col justify-start">
                        <h6 class="text-base font-semibold text-slate-300">
                            JUMLAH ORDER
                        </h6>
                        <div class="flex justify-start space-x-2">
                            <canvas id="orderPcht" name="orderPcht"></canvas>
                            <h3 class="py-1 text-3xl font-normal text-slate-100">
                                14.000.000
                            </h3>
                        </div>
                    </div>
                </div>
                <div
                    class="px-4 py-4 overflow-hidden shadow-sm rounded-xl bg-slate-800 bg-opacity-60 backdrop-blur-sm backdrop-filter">
                </div>
                <div
                    class="px-4 py-4 overflow-hidden shadow-sm rounded-xl bg-slate-800 bg-opacity-60 backdrop-blur-sm backdrop-filter">
                </div>
                <div
                    class="px-4 py-4 overflow-hidden shadow-sm rounded-xl bg-slate-800 bg-opacity-60 backdrop-blur-sm backdrop-filter">
                </div>
            </div>
            {{-- 2.0 Inschiet & Verifikasi PCHT --}}
            <div class="grid grid-cols-4 gap-4 mt-5">
                <div class="grid grid-rows-2 gap-3">
                    <div
                        class="px-8 py-4 overflow-hidden shadow-sm rounded-xl bg-slate-800 bg-opacity-60 backdrop-blur-sm backdrop-filter">
                        <span class="my-2 text-xl font-medium leading-tight text-gray-300">Inschiet PCHT</span>
                        <h3 class="my-16 text-3xl font-bold leading-tight text-right">
                            {{ number_format($inschiet['insPcht'], 2) }} %
                        </h3>
                    </div>
                    <div
                        class="px-8 py-4 overflow-hidden shadow-sm rounded-xl bg-slate-800 bg-opacity-60 backdrop-blur-sm backdrop-filter">
                        <span class="my-2 text-xl font-medium leading-tight text-gray-300">Inschiet MMEA</span>
                        <h3 class="my-16 text-3xl font-bold leading-tight text-right">
                            {{ number_format($inschiet['insMmea'], 2) }} %
                        </h3>
                    </div>
                </div>
                <div class="col-span-3">
                    <div
                        class="h-full px-8 py-4 overflow-hidden shadow-sm rounded-xl bg-slate-800 bg-opacity-60 backdrop-blur-sm backdrop-filter">
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
                    <div
                        class="h-full px-8 py-4 overflow-hidden shadow-sm rounded-xl bg-slate-800 bg-opacity-60 backdrop-blur-sm backdrop-filter">
                        <h5 class="mt-0 mb-4 text-xl font-medium leading-tight text-center text-gray-300">Verifikasi MMEA
                        </h5>
                        <div>
                            <canvas id="mmeaDaily" name="mmeaDaily" class="max-w-full max-h-96 min-h-fit"></canvas>
                        </div>
                    </div>
                </div>
                <div class="grid grid-rows-2 gap-3">
                    <div
                        class="px-8 py-4 overflow-hidden shadow-sm rounded-xl bg-slate-800 bg-opacity-60 backdrop-blur-sm backdrop-filter">
                        <span class="my-2 text-xl font-medium leading-tight text-gray-300">Retur PCHT</span>
                        <h3 class="my-16 text-3xl font-bold leading-tight text-right">0 Lbr
                        </h3>
                    </div>
                    <div
                        class="px-8 py-4 overflow-hidden shadow-sm rounded-xl bg-slate-800 bg-opacity-60 backdrop-blur-sm backdrop-filter">
                        <span class="my-2 text-xl font-medium leading-tight text-gray-300">Retur MMEA</span>
                        <h3 class="my-16 text-3xl font-bold leading-tight text-right">0 Lbr
                        </h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('plugin-js')
    <script src="{{ asset('plugins/jquery-3.6.1.min.js') }}"></script>
    <script src="{{ asset('chart.js/chart.min.js') }}"></script>
@endsection

@section('script-js')
    <script>
        var dataChart = {
            datePcht: @json($chartPcht['datePcht']),
            dataPcht: @json($chartPcht['dataPcht']),
            dateMmea: @json($chartMmea['dateMmea']),
            dataMmea: @json($chartMmea['dataMmea']),
        };
    </script>
    @push('js')
        <script src="{{ asset('js/dashboard.js') }}"></script>
        <script src="{{ asset('component/chart/dashboard-pcht.js') }}"></script>
    @endpush

@endsection
