<div
    class="grid grid-rows-1 gap-3 pb-3 mb-3 border-b-2 lg:gap-0 md:grid-rows-2 md:mb-6 border-slate-600/70 dark:border-slate-300">

    {{-- Header --}}
        <div class="flex flex-col">
            <h5 class="w-full text-xl font-bold text-slate-800 dark:text-slate-100">Data Retur Pita Cukai
            </h5>
            <span class="text-sm text-slate-500 dark:text-slate-400">Periode 2022</span>
        </div>

    {{-- Filter--}}
        <div class="flex flex-wrap justify-end my-auto text-slate-800 dark:text-slate-100">
            @if (Helper::getRole() > 1)

            {{-- Team Filter --}}
                <select wire:model='team' wire:change='listsNp()'
                    class="w-full py-2 pl-2 text-sm font-bold border-blue-400 rounded-l md:w-1/4 text-slate-700 focus:bg-opacity-100 dark:bg-slate-700 dark:bg-opacity-30 dark:text-slate-200">
                    <option>Team</option>
                    @foreach ($listTeam as $teams)
                    <option value="{{ $teams->id }}">{{ $teams->workstation }}</option>
                    @endforeach
                </select>

            {{-- Nama / NP Filter --}}
                <select wire:model='npUser' wire:change='updateChart'
                    class="w-full py-2 pl-2 text-sm font-bold border-blue-400 md:w-1/4 text-slate-700 focus:bg-opacity-100 dark:bg-slate-700 dark:bg-opacity-30 dark:text-slate-200">
                    <option selected>Nama/NP</option>
                    @forelse ($listNp as $Nps)
                    <option value="{{ $Nps->np_user }}">{{ $Nps->nama }}</option>
                    @empty

                    @endforelse
                </select>
            @endif

            {{-- Tahun Filter --}}
            <select wire:model='year' wire:change='updateChart'
                class="w-full py-2 pl-2 text-sm font-bold border-blue-400 md:w-1/4 text-slate-700 focus:bg-opacity-100 dark:bg-slate-700 dark:bg-opacity-30 dark:text-slate-200">
                <option value="2023" selected>2023</option>
            </select>

            {{-- 1-A. 1.4 Reset --}}
            <button type="button" data-mdb-ripple="true" data-mdb-ripple-color="light"
                class="w-full px-3 py-2 text-sm font-semibold leading-tight text-white transition duration-150 ease-in-out bg-blue-500 rounded-b shadow-md nline-block md:rounded-r md:rounded-b-none md:w-fit hover:bg-blue-600 hover:shadow-lg focus:bg-blue-600 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-700 active:shadow-lg">
                CLEAR
            </button>
        </div>
</div>

{{-- Canvas / Grafik Kelolosan Tahun --}}
    <div class="relative flex flex-col justify-center object-cover w-full h-fit md:h-5/6">
        <canvas wire:ignore id="quaIndividu" name="quaIndividu"></canvas>
    </div>
{{-- ** End Canvas / Grafik Kelolosan Tahun ** --}}
