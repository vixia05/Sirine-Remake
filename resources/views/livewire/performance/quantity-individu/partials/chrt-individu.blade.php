<div class="relative w-full max-h-screen min-h-full p-4 px-4 py-4 bg-white rounded-2xl drop-shadow-sm dark:bg-slate-800 dark:bg-opacity-60 dark:backdrop-blur-sm dark:backdrop-filter md:col-span-3 md:py-6 lg:col-span-2"
    x-show='mainContent' x-transition.scale.origin.top x-transition:enter.duration.700ms
    x-transition:leave.duration.700ms>
    {{-- 1. Header --}}
    <div
        class="grid grid-rows-1 gap-3 pb-3 mb-3 border-b-2 border-slate-600/70 dark:border-slate-300 md:mb-6 md:grid-rows-2 lg:gap-0">
        {{-- 1.1 Header Title --}}
        <div class="flex flex-col">
            <h5 class="w-full text-xl font-bold text-slate-800 dark:text-slate-100">Hasil Produksi Individu
                Verifikasi Pita Cukai</h5>
            <span class="text-sm text-slate-500 dark:text-slate-400">Periode September 2022</span>
        </div>
        {{-- 1.2 Filter Chart --}}
        <div class="flex flex-wrap justify-end my-auto">
            @if (Helper::getRole() > 1)
                {{-- Filter By Team --}}
                <select id="team" name="team" wire:model='team' wire:change='listsNp()'
                    class="w-full py-2 pl-2 text-sm font-bold border-blue-400 rounded-l text-slate-700 focus:bg-opacity-100 dark:bg-slate-700 dark:bg-opacity-30 dark:text-slate-200 md:w-1/4">
                    <option selected>Team</option>
                    @foreach ($listTeam as $teams)
                        <option value="{{ $teams->id }}">{{ $teams->workstation }}</option>
                    @endforeach
                </select>
                {{-- Filter By NP / Nama --}}
                <select id="selectNp" name="selectNp" wire:model='npUser' wire:change='mainChart'
                    class="w-full py-2 pl-2 text-sm font-bold border-blue-400 text-slate-700 focus:bg-opacity-100 dark:bg-slate-700 dark:bg-opacity-30 dark:text-slate-200 md:w-1/4">
                    <option selected>Nama/NP</option>
                    @forelse ($listNp as $Nps)
                        <option value="{{ $Nps->np_user }}">{{ $Nps->nama }}</option>
                    @empty
                    @endforelse
                </select>
            @endif
            {{-- Filter Date Range --}}
            <input type="text" id="dateRange" name="dateRange"
                class="w-full px-4 py-2 text-xs font-medium border-blue-400 text-slate-700 focus:bg-opacity-100 dark:bg-slate-700 dark:bg-opacity-30 dark:text-slate-200 md:w-fit"
                placeholder="Periode" />
            {{-- Reset Filter --}}
            <button type="button" data-mdb-ripple="true" data-mdb-ripple-color="light" wire:click='clearField'
                class="inline-block w-full px-3 py-2 text-sm font-semibold leading-tight text-white transition duration-150 ease-in-out bg-blue-500 rounded-b shadow-md hover:bg-blue-600 hover:shadow-lg focus:bg-blue-600 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-700 active:shadow-lg md:w-fit md:rounded-r md:rounded-b-none">Clear</button>
        </div>
    </div>
    {{-- 2. Body Cancvas / Chart --}}
    <div class="relative flex flex-col justify-center object-cover w-full max-h-screen h-fit md:h-5/6">
        <x-flip-loading></x-flip-loading>
        <canvas wire:ignore id="qtyIndividu" name="qtyIndividu" class="max-w-full min-w-full"></canvas>
    </div>
</div>
