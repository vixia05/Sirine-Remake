<div class="container mx-auto py-10">
    <x-card-scale>
        {{-- A. Header & Filter --}}
        <div class="border-b-2 border-slate-600 /70 dark:border-slate-300/70 pb-4 mb-4 -mt-4">
            <h3 class="text-center font-mono text-2xl font-semibold text-slate-600 dark:text-slate-300">REPORT PERFORMANCE</h3>
        </div>
        {{-- 1.0 Biodata --}}
        <div class="flex justify-start space-x-6">
            {{-- 1.1 Image user --}}
            <div class="my-auto max-w-sm rounded-lg">
                <img class="rounded" src="{{ asset('img/Avatar/default.jpg') }}" alt="" />
            </div>
            <div class="flex w-1/4 flex-col space-y-1">
                {{-- 1.2 Periode Report --}}
                <label for=""
                    class="inline-block py-1 text-sm font-medium text-slate-700 dark:text-slate-200">Periode</label>
                <x-date-range />
                {{-- 1.3 Nama User --}}
                <label for="nama"
                    class="inline-block py-1 text-sm font-medium text-slate-700 dark:text-slate-200">Nama</label>
                <input type="text" disabled wire:model="namaUser"
                    class="w-full text-sm leading-tight transition duration-300 ease-in-out rounded-md bg-slate-300/80 border-slate-300/80 text-slate-600  dark:bg-slate-600 dark:bg-opacity-60 dark:text-slate-100"
                    placeholder="Nama">
                {{-- 1.4 Nomor Pokok User --}}
                <label for="" class="inline-block py-1 text-sm font-medium text-slate-700 dark:text-slate-200">Nomor
                    Pokok</label>
                <select wire:model="npUser" wire:change='retriveData'
                    class="w-full text-sm leading-tight transition duration-300 ease-in-out rounded-md border-slate-400/60 text-slate-600 hover:border-blue-500 focus:ring-blue-500/80 dark:bg-slate-600 dark:bg-opacity-60 dark:text-slate-100">
                    <option value="">NP</option>
                    @foreach ($listNp as $np)
                        <option value="{{ $np->np_user }}">{{ $np->np_user }}</option>
                    @endforeach
                </select>
                    {{-- 1.5 Workstation User --}}
                    <label for=""
                        class="inline-block py-1 text-sm font-medium text-slate-700 dark:text-slate-200">Workstation</label>
                    <input type="text" disabled wire:model="stationUser"
                        class="w-full text-sm leading-tight transition duration-300 ease-in-out rounded-md bg-slate-300/80 border-slate-300/80 text-slate-600  dark:bg-slate-600 dark:bg-opacity-60 dark:text-slate-100"
                        placeholder="Workstation">
                    {{-- 1.6 Quantitas User --}}
                    <label for=""
                        class="inline-block py-1 text-sm font-medium text-slate-700 dark:text-slate-200">Kuantitas</label>
                    <input type="text" disabled wire:model="qtyUser"
                        class="w-full text-sm leading-tight transition duration-300 ease-in-out rounded-md bg-slate-300/80 border-slate-300/80 text-slate-600  dark:bg-slate-600 dark:bg-opacity-60 dark:text-slate-100"
                        placeholder="Kuantitas">
                    {{-- 1.7 Qualitas User --}}
                    <label for=""
                        class="inline-block py-1 text-sm font-medium text-slate-700 dark:text-slate-200">Kualitas</label>
                    <input type="text" disabled wire:model="quaUser"
                        class="w-full text-sm leading-tight transition duration-300 ease-in-out rounded-md bg-slate-300/80 border-slate-300/80 text-slate-600  dark:bg-slate-600 dark:bg-opacity-60 dark:text-slate-100"
                        placeholder="Kualitas">
                    {{-- 1.8 Total Performance User --}}
                    <label for="" class="inline-block py-1 text-sm font-medium text-slate-700 dark:text-slate-200">Total
                        Performance</label>
                    <input type="text" disabled wire:model="overallPerformance"
                        class="w-full text-sm leading-tight transition duration-300 ease-in-out rounded-md bg-slate-300/80 border-slate-300/80 text-slate-600  dark:bg-slate-600 dark:bg-opacity-60 dark:text-slate-100"
                        placeholder="Performance">
            </div>
            <div class="my-auto h-full w-1/2">
                <canvas id="performancePreview"></canvas>
            </div>
        </div>
    </x-card-scale>
</div>
