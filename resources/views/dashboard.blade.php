@section('title', 'Dashboard')
@extends('layouts.app')
@section('content')
    <div class="py-6">
        <div class="mx-auto sm:px-6 lg:px-8">
            {{-- 1.0 Order Detail --}}
            <div class="grid grid-cols-2 gap-4 lg:grid-cols-4">
                <div class="overflow-hidden rounded-xl bg-white dark:bg-slate-900 dark:bg-opacity-40 bg-opacity-50 px-6 py-4 backdrop-blur-sm dark:backdrop-blur-sm backdrop-filter dark:backdrop-filter">
                    <div class="flex flex-wrap justify-between">
                        <div class="my-1">
                            <h6 class="font-sans text-sm text-slate-800 dark:text-slate-300 mb-2">
                                ORDER PCHT
                            </h6>
                            <h3 class="my-auto text-3xl text-slate-600 dark:text-slate-100">
                                {{ number_format($order['orderPcht'], ) }}
                            </h3>
                        </div>
                        <div class="my-auto h-auto w-1/4">
                            <canvas id="orderPcht" name="orderPcht" class="flex-grow"></canvas>
                        </div>
                    </div>
                </div>
                <div
                    class="overflow-hidden rounded-xl bg-white dark:bg-slate-900 dark:bg-opacity-40 bg-opacity-50 px-6 py-4 shadow-sm backdrop-blur-sm dark:backdrop-blur-smbackdrop-filter">
                    <div class="flex justify-between">
                        <div class="my-1">
                            <h6 class="font-sans text-sm text-slate-800 dark:text-slate-300 mb-2">
                                SISA PCHT
                            </h6>
                            <h3 class="my-auto text-3xl text-slate-600 dark:text-slate-100">
                                {{ number_format($order['sisaOrderPcht'], 0) }}
                            </h3>
                        </div>
                        <div class="my-auto h-auto w-1/4">
                            <canvas id="sisaPcht" name="sisaPcht" class="flex-grow p-2"></canvas>
                        </div>
                    </div>
                </div>
                <div
                    class="overflow-hidden rounded-xl bg-white dark:bg-slate-900 dark:bg-opacity-40 bg-opacity-50 px-6 py-4 shadow-sm backdrop-blur-sm dark:backdrop-blur-smbackdrop-filter">
                    <div class="flex justify-between">
                        <div class="my-1">
                            <h6 class="font-sans text-sm text-slate-800 dark:text-slate-300 mb-2">
                                ORDER MMEA
                            </h6>
                            <h3 class="my-auto text-3xl text-slate-600 dark:text-slate-100">
                                {{ number_format($order['orderMmea'], 0) }}
                            </h3>
                        </div>
                        <div class="my-auto h-auto w-1/4">
                            <canvas id="orderMmea" name="orderMmea" class="flex-grow"></canvas>
                        </div>
                    </div>
                </div>
                <div
                    class="overflow-hidden rounded-xl bg-white dark:bg-slate-900 dark:bg-opacity-40 bg-opacity-50 px-6 py-4 shadow-sm backdrop-blur-sm dark:backdrop-blur-smbackdrop-filter">
                    <div class="flex justify-between">
                        <div class="my-1">
                            <h6 class="font-sans text-sm text-slate-800 dark:text-slate-300 mb-2">
                                SISA MMEA
                            </h6>
                            <h3 class="my-auto text-3xl text-slate-600 dark:text-slate-100">
                                {{ number_format($order['sisaOrderMmea'], 0) }}
                            </h3>
                        </div>
                        <div class="my-auto h-auto w-1/4">
                            <canvas id="sisaMmea" name="sisaMmea" class="flex-grow p-2"></canvas>
                        </div>
                    </div>
                </div>
            </div>
            {{-- 2.0 Inschiet & Verifikasi PCHT --}}
            <div class="mt-5 grid grid-cols-4 gap-4">
                <div class="col-span-4 grid grid-flow-col grid-rows-2 gap-3 lg:col-span-1">
                    {{-- 2.1 Inschiet Pcht --}}
                    <div
                        class="row-span-2 overflow-hidden rounded-xl bg-white dark:bg-slate-900 dark:bg-opacity-40 bg-opacity-50 px-8 py-4 shadow-sm backdrop-blur-sm dark:backdrop-blur-smbackdrop-filter lg:row-span-1">
                        <h5 class="font-sans text-lg text-slate-800 dark:text-slate-300 text-center">
                            INSCHIET PCHT
                        </h5>
                        <div class="flex justify-center">
                            <div class="my-auto h-auto w-1/2 mt-1">
                                <canvas id="inscPcht" name="inscPcht" class="flex-grow p-4"></canvas>
                            </div>
                            <h3 class="my-auto text-3xl leading-tight text-slate-600 dark:text-slate-100">
                                {{ number_format($inschiet['insPcht'], 2) }} %
                            </h3>
                        </div>
                    </div>
                    {{-- 2.2 Inschiet Mmea --}}
                    <div
                        class="row-span-2 h-full overflow-hidden rounded-xl bg-white dark:bg-slate-900 dark:bg-opacity-40 bg-opacity-50 px-8 py-4 shadow-sm backdrop-blur-sm dark:backdrop-blur-smbackdrop-filter lg:row-span-1">
                        <h5 class="font-sans text-lg text-slate-800 dark:text-slate-300 text-center">INSCHIET MMEA</h5>
                        <div class="flex justify-center">
                            <div class="my-auto h-auto w-1/2 mt-1">
                                <canvas id="inscMmea" name="inscMmea" class="flex-grow p-4"></canvas>
                            </div>
                            <h3 class="text-right text-3xl leading-tight my-auto text-slate-600 dark:text-slate-100">
                                {{ number_format($inschiet['insMmea'], 2) }} %
                            </h3>
                        </div>
                    </div>
                </div>
                <div class="col-span-4 lg:col-span-3">
                    <div
                        class="h-full overflow-hidden rounded-xl bg-white dark:bg-slate-900 dark:bg-opacity-40 bg-opacity-50 px-8 py-4 shadow-sm backdrop-blur-sm dark:backdrop-blur-smbackdrop-filter">
                        <h5 class="mt-0 mb-4 text-center text-xl font-medium leading-tight text-slate-800 dark:text-slate-300">Verifikasi PCHT
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
                    <div
                        class="h-full overflow-hidden rounded-xl bg-white dark:bg-slate-900 dark:bg-opacity-40 bg-opacity-50 px-8 py-4 shadow-sm backdrop-blur-sm dark:backdrop-blur-smbackdrop-filter">
                        <h5 class="mt-0 mb-4 text-center text-xl font-medium leading-tight text-slate-800 dark:text-slate-300">Verifikasi MMEA
                        </h5>
                        <div>
                            <canvas id="mmeaDaily" name="mmeaDaily" class="max-h-96 min-h-fit max-w-full"></canvas>
                        </div>
                    </div>
                </div>
                <div class="grid grid-rows-2 gap-3">
                    <div
                        class="overflow-hidden rounded-xl bg-white dark:bg-slate-900 dark:bg-opacity-40 bg-opacity-50 px-8 py-4 shadow-sm backdrop-blur-sm dark:backdrop-blur-smbackdrop-filter">
                        <span class="my-2 text-xl font-medium leading-tight text-slate-800 dark:text-slate-300">Retur PCHT</span>
                        <h3 class="my-16 text-right text-3xl font-bold leading-tight">0
                        </h3>
                    </div>
                    <div
                        class="overflow-hidden rounded-xl bg-white dark:bg-slate-900 dark:bg-opacity-40 bg-opacity-50 px-8 py-4 shadow-sm backdrop-blur-sm dark:backdrop-blur-smbackdrop-filter">
                        <span class="my-2 text-xl font-medium leading-tight text-slate-800 dark:text-slate-300">Retur MMEA</span>
                        <h3 class="my-16 text-right text-3xl font-bold leading-tight">0
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
