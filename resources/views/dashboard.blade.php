@section('title', 'Dashboard')
@extends('layouts.app')
@section('content')
<div class="py-6">
    <div class="px-6 mx-auto lg:px-8">
        {{-- 1.0 Order Detail --}}
        <div class="grid grid-cols-2 lg:grid-cols-4 gap-4">
            {{-- 1.1 Order Pcht --}}
            <x-card-scale>
                <div class="flex flex-col items-center justify-between h-full w-full gap-2 md:flex-row">
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
            </x-card-scale>
            {{-- 1.2 Sisa Order PCHT --}}
            <x-card-scale>
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
            </x-card-scale>
            {{-- 1.3 Order Mmea --}}
            <x-card-scale>
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
            </x-card-scale>
            {{-- 1.4 Sisa Order Mmea --}}
            <x-card-scale>
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
            </x-card-scale>
        </div>

        {{-- 2.0 Inschiet & Verifikasi PCHT --}}
        <div class="grid grid-cols-4 gap-2 mt-5 md:gap-4">
            <div class="grid grid-flow-col col-span-4 grid-rows-2 gap-3 lg:col-span-1">
                {{-- 2.1 Inschiet Pcht --}}
                <div class="row-span-2 lg:row-span-1">
                    <x-card-scale>
                        <h5 class="font-sans text-lg text-center text-slate-800 dark:text-slate-300">
                            INSCHIET PCHT
                        </h5>
                        <div class="flex flex-col items-center justify-center">
                            <div class="w-1/3 h-auto my-auto mt-1 md:max-w-[7rem]">
                                <canvas id="inscPcht" name="inscPcht" class="flex-grow p-4"></canvas>
                            </div>
                            <h3 class="pl-4 text-3xl leading-tight text-slate-600 dark:text-slate-100">
                                {{ number_format($inschiet['insPcht'], 2) }} %
                            </h3>
                        </div>
                    </x-card-scale>
                </div>

                {{-- 2.2 Inschiet Mmea --}}
                <div class="row-span-2 lg:row-span-1">
                    <x-card-scale>
                        <h5 class="font-sans text-lg text-center text-slate-800 dark:text-slate-300">INSCHIET MMEA</h5>
                        <div class="flex flex-col items-center justify-center">
                            <div class="w-1/3 h-auto my-auto mt-1 md:max-w-[7rem]">
                                <canvas id="inscMmea" name="inscMmea" class="flex-grow p-4"></canvas>
                            </div>
                            <h3 class="pl-4 text-3xl leading-tight text-slate-600 dark:text-slate-100">
                                {{ number_format($inschiet['insMmea'], 2) }} %
                            </h3>
                        </div>
                    </x-card-scale>
                </div>
            </div>

            {{-- Grafik Pendapatan PCHT --}}
            <div class="col-span-4 lg:col-span-3">
                <x-card-scale>
                    <h5
                        class="mt-0 mb-4 text-xl font-medium leading-tight text-center text-slate-800 dark:text-slate-300">
                        Verifikasi PCHT
                    </h5>
                    <div>
                        <canvas id="pchtDaily" name="pchtDaily" class="max-w-full max-h-96 min-h-fit"></canvas>
                    </div>
                </x-card-scale>
            </div>
        </div>

        {{-- 3.0 Verifikasi MMEA & Retur --}}
        <div class="grid grid-cols-4 gap-4 mt-5">
            <div class="col-span-4 lg:col-span-3">
                <x-card-scale>
                    <h5
                        class="mt-0 mb-4 text-xl font-medium leading-tight text-center text-slate-800 dark:text-slate-300">
                        Verifikasi MMEA
                    </h5>
                    <div>
                        <canvas id="mmeaDaily" name="mmeaDaily" class="max-w-full max-h-96 min-h-fit"></canvas>
                    </div>
                </x-card-scale>
            </div>
            <div class="grid grid-flow-col col-span-4 grid-rows-2 gap-3 lg:col-span-1">
                {{-- 2.1 Inschiet Pcht --}}
                <x-card-scale>
                    <h5 class="font-sans text-lg text-center text-slate-800 dark:text-slate-300">
                        Retur PCHT
                    </h5>
                    <div class="flex justify-center">
                        <h3 class="my-auto text-3xl leading-tight text-slate-600 dark:text-slate-100">
                            {{-- {{ number_format($inschiet['insPcht'], 2) }} % --}}
                        </h3>
                    </div>
                </x-card-scale>
                {{-- 2.2 Inschiet Mmea --}}
                <x-card-scale>
                    <h5 class="font-sans text-lg text-center text-slate-800 dark:text-slate-300">Retur MMEA</h5>
                    <div class="flex justify-center">
                        <h3 class="my-auto text-3xl leading-tight text-right text-slate-600 dark:text-slate-100">
                            {{-- {{ number_format($inschiet['insMmea'], 2) }} % --}}
                        </h3>
                    </div>
                </x-card-scale>
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
