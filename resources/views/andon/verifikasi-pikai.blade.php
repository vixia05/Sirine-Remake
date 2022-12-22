@section('title', 'Verifikasi Pita Cukai')
@extends('layouts.andon')
@section('content')
    <div x-data="{ verifPcht : '{{ number_format($verifPcht['harian'],0) }}',
                    active: 1,
                    loop() {
                            setInterval(() => {
                                this.active = this.active === 4 ? 1 : this.active + 1;
                            }, 15000)
                            },
                 }"
        x-init="loop">

        {{-- 1. Hasil Periksa PCHT --}}
        <div x-show="active == 1"
             x-transition:enter="transition ease-out duration-1000"
             x-transition:enter-start="opacity-0 scale-90"
             x-transition:enter-end="opacity-100 scale-100"
             x-transition:leave="transition ease-in duration-1000"
             x-transition:leave-start="opacity-100 scale-100"
             x-transition:leave-end="opacity-0 scale-90"
             class="absolute flex flex-col justify-center w-full min-h-screen gap-2 px-4 pt-4">
            <div
                class="relative h-[40vh] w-full overflow-hidden rounded-lg bg-slate-800 bg-opacity-80 px-6 pt-2 pb-3 shadow-md shadow-slate-500/40 drop-shadow-lg backdrop-blur backdrop-filter">
                <h3 class="pb-2 text-4xl font-bold text-center border-b-2 text-slate-300">Periksa <span
                        class="text-emerald-300 brightness-125">PCHT</span> Hari Ini</h3>
                <div class="relative flex flex-col justify-center h-full -mt-5">
                    <h1 class="font-bold text-center text-9xl text-emerald-500 brightness-200" x-text="verifPcht"></h1>
                </div>
            </div>
            <div class="grid h-[50vh] w-full grid-cols-2 gap-2">
                <div class="flex flex-col gap-2 h-fit">
                    <div
                        class="h-[25vh] overflow-hidden rounded-lg bg-slate-800 bg-opacity-80 px-6 pt-2 pb-3 shadow-md shadow-slate-500/40 drop-shadow-lg backdrop-blur backdrop-filter">
                        <h6 class="pb-2 text-2xl font-bold border-b-2 text-slate-300"><span
                                class="text-green-300">Baik</span> Periksa </h6>
                        <div class="flex flex-col justify-center">
                            <div>
                                <h4 class="text-6xl font-bold text-right text-green-500 brightness-150">{{ number_format($verifPcht['baik'],0) }}</h4>
                            </div>
                        </div>
                    </div>
                    <div
                        class="h-[25vh] rounded-lg bg-slate-800 bg-opacity-80 px-6 pt-2 pb-3 shadow-md shadow-slate-500/40 drop-shadow-lg backdrop-blur backdrop-filter">
                        <h6 class="pb-2 text-2xl font-bold border-b-2 text-slate-300"><span
                                class="text-red-300">Rusak</span> Periksa </h6>
                        <div class="flex flex-col justify-center">
                            <h4 class="text-6xl font-bold text-right text-red-500 brightness-150">{{ number_format($verifPcht['rusak'],0) }}</h4>
                        </div>
                    </div>
                </div>
                <div
                    class="px-6 pt-2 pb-3 rounded-lg shadow-md bg-slate-800 bg-opacity-80 shadow-slate-500/40 drop-shadow-lg backdrop-blur backdrop-filter">
                    <h3 class="pb-3 text-4xl font-bold text-center border-b-2 text-slate-300"><span
                            class="text-orange-500 brightness-125">Inschiet</span></h3>
                    <div class="flex flex-col justify-center h-full gap-2">
                        <h1 class="font-bold text-center text-orange-300 text-9xl brightness-125">{{ number_format($verifPcht['inschiet'],2) }} %</h1>
                    </div>
                </div>
            </div>
        </div>

        {{-- 2. Total Order Pcht --}}
        <div x-show="active == 2"
             x-transition:enter="transition ease-out duration-1000"
             x-transition:enter-start="opacity-0 scale-90"
             x-transition:enter-end="opacity-100 scale-100"
             x-transition:leave="transition ease-in duration-1000"
             x-transition:leave-start="opacity-100 scale-100"
             x-transition:leave-end="opacity-0 scale-90"
             class="absolute flex flex-col justify-center w-screen min-h-screen gap-2 px-4 pt-4">
            <div
                class="relative h-[40vh] w-full overflow-hidden rounded-lg bg-slate-800 bg-opacity-80 px-6 pt-2 pb-3 shadow-md shadow-slate-500/40 drop-shadow-lg backdrop-blur backdrop-filter">
                <h3 class="pb-2 text-4xl font-bold text-center border-b-2 text-slate-300">Total Order <span
                        class="text-blue-500 brightness-125">PCHT</span> {{ today()->format('F') }}</h3>
                <div class="relative flex flex-col justify-center h-full -mt-5">
                    <h1 class="font-bold text-center text-blue-300 text-9xl brightness-125">{{ number_format($orderPcht['total'],0) }}</h1>
                </div>
            </div>
            <div class="grid h-[50vh] w-full grid-cols-2 gap-2">
                <div
                    class="h-[25vh] overflow-hidden rounded-lg bg-slate-800 bg-opacity-80 px-6 pt-2 pb-3 shadow-md shadow-slate-500/40 drop-shadow-lg backdrop-blur backdrop-filter">
                    <h6 class="pb-2 text-2xl font-bold border-b-2 text-slate-300">Sisa Order <span
                            class="text-green-500 brightness-200">Non-Personal</span></h6>
                    <div class="flex flex-col justify-center">
                        <div>
                            <h4 class="text-6xl font-bold text-right text-green-300 brightness-125">{{ number_format($orderPcht['sisaNP'],0) }}</h4>
                        </div>
                    </div>
                </div>
                <div
                    class="h-[25vh] rounded-lg bg-slate-800 bg-opacity-80 px-6 pt-2 pb-3 shadow-md shadow-slate-500/40 drop-shadow-lg backdrop-blur backdrop-filter">
                    <h6 class="pb-2 text-2xl font-bold border-b-2 text-slate-300">Sisa Order <span
                            class="text-violet-500 brightness-125">Personal</span></h6>
                    <div class="flex flex-col justify-center">
                        <h4 class="text-6xl font-bold text-right text-violet-300 brightness-125">{{ number_format($orderPcht['sisaP'],0) }}</h4>
                    </div>
                </div>
                <div
                    class="h-[25vh] overflow-hidden rounded-lg bg-slate-800 bg-opacity-80 px-6 pt-2 pb-3 shadow-md shadow-slate-500/40 drop-shadow-lg backdrop-blur backdrop-filter">
                    <h6 class="pb-2 text-2xl font-bold text-left border-b-2 text-slate-300">Sisa Order <span
                            class="text-cyan-500 brightness-200">PCHT</span> {{ today()->format('F') }} </h6>
                    <div class="flex flex-col justify-center">
                        <h4 class="text-6xl font-bold text-right text-cyan-300 brightness-125">{{ number_format($orderPcht['sisaAll'],0) }}</h4>
                    </div>
                </div>
                <div
                    class="h-[25vh] overflow-hidden rounded-lg bg-slate-800 bg-opacity-80 px-6 pt-2 pb-3 shadow-md shadow-slate-500/40 drop-shadow-lg backdrop-blur backdrop-filter">
                    <h6 class="pb-2 text-2xl font-bold text-left border-b-2 text-slate-300"> <span
                            class="text-orange-600 brightness-200">WIP PCHT</span> {{ today()->format('F') }} </h6>
                    <div class="flex flex-col justify-center">
                        <h4 class="text-6xl font-bold text-right text-orange-300 brightness-125">{{ number_format($orderPcht['wip'],0) }}</h4>
                    </div>
                </div>
            </div>
        </div>

        {{-- 3. Periksa Mmea --}}
        <div x-show="active == 3"
             x-transition:enter="transition ease-out duration-1000"
             x-transition:enter-start="opacity-0 scale-90"
             x-transition:enter-end="opacity-100 scale-100"
             x-transition:leave="transition ease-in duration-1000"
             x-transition:leave-start="opacity-100 scale-100"
             x-transition:leave-end="opacity-0 scale-90"
             class="absolute flex flex-col justify-center w-screen min-h-screen gap-2 px-4 pt-4">
            <div
                class="relative h-[40vh] w-full overflow-hidden rounded-lg bg-slate-800 bg-opacity-80 px-6 pt-2 pb-3 shadow-md shadow-slate-500/40 drop-shadow-lg backdrop-blur backdrop-filter">
                <h3 class="pb-2 text-4xl font-bold text-center border-b-2 text-slate-300">Periksa <span
                        class="text-yellow-500 brightness-125">MMEA</span> Hari Ini</h3>
                <div class="relative flex flex-col justify-center h-full -mt-5">
                    <h1 class="font-bold text-center text-yellow-200 text-9xl brightness-125">{{ number_format($verifMmea['harian'],0) }}</h1>
                </div>
            </div>
            <div class="grid h-[50vh] w-full grid-cols-2 gap-2">
                <div class="flex flex-col gap-2 h-fit">
                    <div
                        class="h-[25vh] overflow-hidden rounded-lg bg-slate-800 bg-opacity-80 px-6 pt-2 pb-3 shadow-md shadow-slate-500/40 drop-shadow-lg backdrop-blur backdrop-filter">
                        <h6 class="pb-2 text-2xl font-bold border-b-2 text-slate-300"><span
                                class="text-green-500 brightness-200">Baik</span> Periksa </h6>
                        <div class="flex flex-col justify-center">
                            <div>
                                <h4 class="text-6xl font-bold text-right text-green-300 brightness-125">{{ number_format($verifMmea['baik'],0) }}</h4>
                            </div>
                        </div>
                    </div>
                    <div
                        class="h-[25vh] rounded-lg bg-slate-800 bg-opacity-80 px-6 pt-2 pb-3 shadow-md shadow-slate-500/40 drop-shadow-lg backdrop-blur backdrop-filter">
                        <h6 class="pb-2 text-2xl font-bold border-b-2 text-slate-300"><span
                                class="text-red-500 brightness-125">Rusak</span> Periksa </h6>
                        <div class="flex flex-col justify-center">
                            <h4 class="text-6xl font-bold text-right text-red-300 brightness-125">{{ number_format($verifMmea['rusak'],0) }}</h4>
                        </div>
                    </div>
                </div>
                <div
                    class="px-6 pt-2 pb-3 rounded-lg shadow-md bg-slate-800 bg-opacity-80 shadow-slate-500/40 drop-shadow-lg backdrop-blur backdrop-filter">
                    <h3 class="pb-3 text-4xl font-bold text-center border-b-2 text-slate-300"><span
                            class="text-orange-500 brightness-125">Inschiet</span></h3>
                    <div class="flex flex-col justify-center h-full gap-2">
                        <h1 class="font-bold text-center text-orange-100 text-9xl brightness-125">{{ number_format($verifMmea['inschiet'],2) }} %</h1>
                    </div>
                </div>
            </div>
        </div>

        {{-- Total Order MMEA --}}
        <div x-show="active == 4"
             x-transition:enter="transition ease-out duration-1000"
             x-transition:enter-start="opacity-0 scale-90"
             x-transition:enter-end="opacity-100 scale-100"
             x-transition:leave="transition ease-in duration-1000"
             x-transition:leave-start="opacity-100 scale-100"
             x-transition:leave-end="opacity-0 scale-90"
             class="absolute flex flex-col justify-center w-screen min-h-screen gap-2 px-4 pt-4">
            <div
                class="relative h-[40vh] w-full overflow-hidden rounded-lg bg-slate-800 bg-opacity-80 px-6 pt-2 pb-3 shadow-md shadow-slate-500/40 drop-shadow-lg backdrop-blur backdrop-filter">
                <h3 class="pb-2 text-4xl font-bold text-center border-b-2 text-slate-300">Total Order <span
                        class="text-yellow-500 brightness-125">MMEA</span> {{ today()->format('F') }}</h3>
                <div class="relative flex flex-col justify-center h-full -mt-5">
                    <h1 class="font-bold text-center text-yellow-300 text-9xl brightness-125">{{ number_format($orderMmea['total'],0) }}</h1>
                </div>
            </div>
            <div class="grid h-[50vh] w-full grid-cols-2 gap-2">
                <div
                    class="h-[25vh] overflow-hidden rounded-lg bg-slate-800 bg-opacity-80 px-6 pt-2 pb-3 shadow-md shadow-slate-500/40 drop-shadow-lg backdrop-blur backdrop-filter">
                    <h6 class="pb-2 text-2xl font-bold border-b-2 text-slate-300">Sisa Order <span
                            class="text-rose-500 brightness-200">MMEA</span></h6>
                    <div class="flex flex-col justify-center">
                        <div>
                            <h4 class="text-6xl font-bold text-right text-rose-300 brightness-125">{{ number_format($orderMmea['sisaMmea'],0) }}</h4>
                        </div>
                    </div>
                </div>
                <div
                    class="h-[25vh] rounded-lg bg-slate-800 bg-opacity-80 px-6 pt-2 pb-3 shadow-md shadow-slate-500/40 drop-shadow-lg backdrop-blur backdrop-filter">
                    <h6 class="pb-2 text-2xl font-bold border-b-2 text-slate-300">Sisa Order <span
                            class="text-emerald-500 brightness-125">HPTL \ REL</span></h6>
                    <div class="flex flex-col justify-center">
                        <h4 class="text-6xl font-bold text-right text-emerald-300 brightness-125">{{ number_format($orderMmea['sisaHptl'],0) }}</h4>
                    </div>
                </div>
                <div
                    class="h-[25vh] overflow-hidden rounded-lg bg-slate-800 bg-opacity-80 px-6 pt-2 pb-3 shadow-md shadow-slate-500/40 drop-shadow-lg backdrop-blur backdrop-filter">
                    <h6 class="pb-2 text-2xl font-bold text-left border-b-2 text-slate-300">Sisa Order <span
                            class="text-yellow-400 brightness-200">MMEA + HPTL</span></h6>
                    <div class="flex flex-col justify-center">
                        <h4 class="text-6xl font-bold text-right text-yellow-200 brightness-125">{{ number_format($orderMmea['sisaAll'],0) }}</h4>
                    </div>
                </div>
                <div
                    class="h-[25vh] overflow-hidden rounded-lg bg-slate-800 bg-opacity-80 px-6 pt-2 pb-3 shadow-md shadow-slate-500/40 drop-shadow-lg backdrop-blur backdrop-filter">
                    <h6 class="pb-2 text-2xl font-bold text-left border-b-2 text-slate-300"> <span
                            class="text-orange-600 brightness-200">WIP MMEA + HPTL</span></h6>
                    <div class="flex flex-col justify-center">
                        <h4 class="text-6xl font-bold text-right text-orange-200 brightness-125">{{ number_format($orderMmea['wip'],0) }}</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
