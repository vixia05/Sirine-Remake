@section('title', 'Dashboard')
@extends('layouts.app')
@section('content')
    <div class="py-6">
        <div class="px-6 mx-auto lg:px-8">
            {{-- 1.0 Order Detail --}}
            <div class="grid grid-cols-2 gap-2 md:gap-4 lg:grid-cols-4">
                {{-- 1.1 Order Pcht --}}
                <div
                    class="order-1 px-2 py-4 overflow-hidden bg-gradient-to-br from-slate-100 via-slate-100 to-slate-200 rounded-lg dark:bg-slate-900 dark:from-transparent dark:to-transparent dark:bg-opacity-40 dark:backdrop-blur-sm dark:backdrop-filter md:py-4 md:px-6">
                    <div class="flex flex-col items-center justify-between h-full gap-2 md:flex-row">
                        <div class="my-1 text-center md:text-left">
                            <h6 class="mb-2 font-sans text-sm text-slate-800 dark:text-slate-300">
                                ORDER PCHT
                            </h6>
                            <h3 class="my-auto text-3xl text-slate-600 dark:text-slate-100">
                                {{ number_format($order['orderPcht']) }}
                            </h3>
                        </div>
                        <div class="w-1/3 h-auto my-auto md:w-1/4">
                            <canvas id="orderPcht" name="orderPcht" class="flex-grow"></canvas>
                        </div>
                    </div>
                </div>
                {{-- 1.2 Sisa Order PCHT --}}
                <div
                    class="order-3 px-2 py-4 overflow-hidden bg-gradient-to-br from-slate-100 via-slate-100 to-slate-200  md:order-2 rounded-lg backdrop-filter dark:bg-slate-900 dark:from-transparent dark:to-transparent dark:bg-opacity-40 dark:backdrop-blur-sm dark:backdrop-filter md:py-4 md:px-6">
                    <div class="flex flex-col items-center justify-between h-full gap-2 md:flex-row">
                        <div class="my-1 text-center md:text-left">
                            <h6 class="mb-2 font-sans text-sm text-slate-800 dark:text-slate-300">
                                SISA PCHT
                            </h6>
                            <h3 class="my-auto text-3xl text-slate-600 dark:text-slate-100">
                                {{ number_format($order['sisaOrderPcht'], 0) }}
                            </h3>
                        </div>
                        <div class="w-1/3 h-auto my-auto md:w-1/4">
                            <canvas id="sisaPcht" name="sisaPcht" class="flex-grow p-2"></canvas>
                        </div>
                    </div>
                </div>
                {{-- 1.3 Order Mmea --}}
                <div
                    class="order-2 px-2 py-4 overflow-hidden bg-gradient-to-br from-slate-100 via-slate-100 to-slate-200  md:order-3 rounded-lg backdrop-filter dark:bg-slate-900 dark:from-transparent dark:to-transparent dark:bg-opacity-40 dark:backdrop-blur-sm dark:backdrop-filter md:py-4 md:px-6">
                    <div class="flex flex-col items-center justify-between h-full gap-2 md:flex-row">
                        <div class="my-1 text-center md:text-left">
                            <h6 class="mb-2 font-sans text-sm text-slate-800 dark:text-slate-300">
                                ORDER MMEA
                            </h6>
                            <h3 class="my-auto text-3xl text-slate-600 dark:text-slate-100">
                                {{ number_format($order['orderMmea'], 0) }}
                            </h3>
                        </div>
                        <div class="w-1/3 h-auto my-auto md:w-1/4">
                            <canvas id="orderMmea" name="orderMmea" class="flex-grow"></canvas>
                        </div>
                    </div>
                </div>
                {{-- 1.4 Sisa Order Mmea --}}
                <div
                    class="order-4 px-2 py-4 overflow-hidden bg-gradient-to-br from-slate-100 via-slate-100 to-slate-200  rounded-lg backdrop-filter dark:bg-slate-900 dark:from-transparent dark:to-transparent dark:bg-opacity-40 dark:backdrop-blur-sm dark:backdrop-filter md:py-4 md:px-6">
                    <div class="flex flex-col items-center justify-between h-full gap-2 md:flex-row">
                        <div class="my-1 text-center md:text-left">
                            <h6 class="mb-2 font-sans text-sm text-slate-800 dark:text-slate-300">
                                SISA MMEA
                            </h6>
                            <h3 class="my-auto text-3xl text-slate-600 dark:text-slate-100">
                                {{ number_format($order['sisaOrderMmea'], 0) }}
                            </h3>
                        </div>
                        <div class="w-1/3 h-auto my-auto md:w-1/4">
                            <canvas id="sisaMmea" name="sisaMmea" class="flex-grow p-2"></canvas>
                        </div>
                    </div>
                </div>
            </div>
            {{-- 2.0 Inschiet & Verifikasi PCHT --}}
            <div class="grid grid-cols-4 gap-2 mt-5 md:gap-4">
                <div class="grid grid-flow-col col-span-4 grid-rows-2 gap-3 lg:col-span-1">
                    {{-- 2.1 Inschiet Pcht --}}
                    <div
                        class="row-span-2 px-8 py-4 overflow-hidden bg-gradient-to-br from-slate-100 via-slate-100 to-slate-200  shadow-sm dark:backdrop-blur-smbackdrop-filter rounded-lg dark:bg-slate-900 dark:from-transparent dark:to-transparent dark:bg-opacity-40 lg:row-span-1">
                        <h5 class="font-sans text-lg text-center text-slate-800 dark:text-slate-300">
                            INSCHIET PCHT
                        </h5>
                        <div class="flex flex-col items-center justify-center">
                            <div class="w-1/3 h-auto my-auto mt-1 md:w-1/2">
                                <canvas id="inscPcht" name="inscPcht" class="flex-grow p-4"></canvas>
                            </div>
                            <h3 class="pl-4 text-3xl leading-tight text-slate-600 dark:text-slate-100">
                                {{ number_format($inschiet['insPcht'], 2) }} %
                            </h3>
                        </div>
                    </div>
                    {{-- 2.2 Inschiet Mmea --}}
                    <div
                        class="h-full row-span-2 px-8 py-4 overflow-hidden bg-gradient-to-br from-slate-100 via-slate-100 to-slate-200  shadow-sm dark:backdrop-blur-smbackdrop-filter rounded-lg dark:bg-slate-900 dark:from-transparent dark:to-transparent dark:bg-opacity-40 lg:row-span-1">
                        <h5 class="font-sans text-lg text-center text-slate-800 dark:text-slate-300">INSCHIET MMEA</h5>
                        <div class="flex flex-col items-center justify-center">
                            <div class="w-1/3 h-auto my-auto mt-1 md:w-1/2">
                                <canvas id="inscMmea" name="inscMmea" class="flex-grow p-4"></canvas>
                            </div>
                            <h3 class="pl-4 text-3xl leading-tight text-slate-600 dark:text-slate-100">
                                {{ number_format($inschiet['insMmea'], 2) }} %
                            </h3>
                        </div>
                    </div>
                </div>
                <div class="col-span-4 lg:col-span-3">
                    <div
                        class="h-full px-8 py-4 overflow-hidden bg-gradient-to-br from-slate-100 via-slate-100 to-slate-200  shadow-sm dark:backdrop-blur-smbackdrop-filter rounded-lg dark:bg-slate-900 dark:from-transparent dark:to-transparent dark:bg-opacity-40">
                        <h5
                            class="mt-0 mb-4 text-xl font-medium leading-tight text-center text-slate-800 dark:text-slate-300">
                            Verifikasi PCHT
                        </h5>
                        <div>
                            <canvas id="pchtDaily" name="pchtDaily" class="max-w-full max-h-96 min-h-fit"></canvas>
                        </div>
                    </div>
                </div>
            </div>
            {{-- 3.0 Verifikasi MMEA & Retur --}}
            <div class="grid grid-cols-4 gap-4 mt-5">
                <div class="col-span-4 lg:col-span-3">
                    <div
                        class="h-full px-8 py-4 overflow-hidden bg-gradient-to-br from-slate-100 via-slate-100 to-slate-200  shadow-sm dark:backdrop-blur-smbackdrop-filter rounded-lg dark:bg-slate-900 dark:from-transparent dark:to-transparent dark:bg-opacity-40">
                        <h5
                            class="mt-0 mb-4 text-xl font-medium leading-tight text-center text-slate-800 dark:text-slate-300">
                            Verifikasi MMEA
                        </h5>
                        <div>
                            <canvas id="mmeaDaily" name="mmeaDaily" class="max-w-full max-h-96 min-h-fit"></canvas>
                        </div>
                    </div>
                </div>
                <div class="grid grid-flow-col col-span-4 grid-rows-2 gap-3 lg:col-span-1">
                    {{-- 2.1 Inschiet Pcht --}}
                    <div
                        class="row-span-2 px-8 py-4 overflow-hidden bg-gradient-to-br from-slate-100 via-slate-100 to-slate-200  shadow-sm dark:backdrop-blur-smbackdrop-filter rounded-lg dark:bg-slate-900 dark:from-transparent dark:to-transparent dark:bg-opacity-40 lg:row-span-1">
                        <h5 class="font-sans text-lg text-center text-slate-800 dark:text-slate-300">
                            Retur PCHT
                        </h5>
                        <div class="flex justify-center">
                            <h3 class="my-auto text-3xl leading-tight text-slate-600 dark:text-slate-100">
                                {{-- {{ number_format($inschiet['insPcht'], 2) }} % --}}
                            </h3>
                        </div>
                    </div>
                    {{-- 2.2 Inschiet Mmea --}}
                    <div
                        class="h-full row-span-2 px-8 py-4 overflow-hidden bg-gradient-to-br from-slate-100 via-slate-100 to-slate-200  shadow-sm dark:backdrop-blur-smbackdrop-filter rounded-lg dark:bg-slate-900 dark:from-transparent dark:to-transparent dark:bg-opacity-40 lg:row-span-1">
                        <h5 class="font-sans text-lg text-center text-slate-800 dark:text-slate-300">Retur MMEA</h5>
                        <div class="flex justify-center">
                            <h3 class="my-auto text-3xl leading-tight text-right text-slate-600 dark:text-slate-100">
                                {{-- {{ number_format($inschiet['insMmea'], 2) }} % --}}
                            </h3>
                        </div>
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
            inscPcht: @json($inschiet['insPcht']),
            dateMmea: @json($chartMmea['dateMmea']),
            dataMmea: @json($chartMmea['dataMmea']),
            inscMmea: @json($inschiet['insMmea']),
        };
    </script>
    @push('js')
        <script src="{{ asset('js/dashboard.js') }}"></script>
        <script src="{{ asset('component/chart/dashboard-pcht.js') }}"></script>
    @endpush

@endsection
