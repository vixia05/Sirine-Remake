<form>
    @method('put')
    @csrf
    <!-- Back Shadow -->
    <div x-show="addTarget" x-transition.opacity x-transition:leave.delay.300ms
        class="fixed inset-0 z-[2000] flex flex-col items-center justify-center bg-black/50">
        <div x-show="addTarget" x-transition.duration.350ms @click.away="addTarget = false"
            @keyup.escape="addTarget = false"
            class="relative w-3/4 max-w-2xl px-8 py-4 rounded-lg  bg-gradient-to-br from-slate-50 via-slate-100 to-slate-50 dark:backdrop-blur-sm dark:backdrop-filter dark:bg-slate-800 dark:from-transparent dark:to-transparent dark:bg-opacity-70">

            {{-- 1. Header Modal --}}
                <div class="mb-3">
                    <h3
                        class="text-center pt-5 pb-3 mb-6 text-xl font-bold border-b-2 border-slate-600 text-slate-600 dark:border-slate-100 dark:text-slate-100">
                        Jam Target & Jam Efektif</h3>
                </div>
            {{-- 2. Modal Content --}}
                <div class="my-4 flex flex-col gap-4">

                    {{-- 2.1 Gilir --}}
                    <div class="flex flex-col gap-1 w-full">
                        <label class="text-center inline-block py-1 font-medium text-slate-600 text-sm dark:text-slate-200"
                            for="gilir">Gilir</label>
                        <select wire:model='gilir' id="gilir"
                            class="w-full leading-tight text-sm border-slate-400/60 rounded-md text-slate-600 hover:border-blue-500 transition duration-300 ease-in-out focus:ring-blue-500/80 dark:bg-slate-600 dark:bg-opacity-60 dark:text-slate-100">
                            <option value="1">Pagi</option>
                            <option value="2">Sore</option>
                            <option value="3">Malam</option>
                        </select>
                    </div>

                    <div class="flex flex-row gap-4">
                        {{-- 2.2 Seksi --}}
                        <div class="flex flex-col gap-1 w-full">
                            <label class=" inline-block py-1 font-medium text-slate-600 text-sm dark:text-slate-200"
                                for="seksi">Seksi</label>
                            <select wire:model='seksi' id="seksi"
                                class="w-full leading-tight text-sm border-slate-400/60 rounded-md text-slate-600 hover:border-blue-500 transition duration-300 ease-in-out focus:ring-blue-500/80 dark:bg-slate-600 dark:bg-opacity-60 dark:text-slate-100">
                                <option value="0">-</option>
                                @foreach (\App\Models\Seksi::all()->sortBy('seksi') as $list)
                                    <option value="{{ $list->id }}">{{ $list->seksi }}</option>
                                @endforeach
                            </select>
                        </div>

                        {{-- 2.3 Unit --}}
                        <div class="flex flex-col gap-1 w-full">
                            <label class=" inline-block py-1 font-medium text-slate-600 text-sm dark:text-slate-200"
                                for="station">Workstation</label>
                            <select wire:model='station' id="station"
                                class="w-full leading-tight text-sm border-slate-400/60 rounded-md text-slate-600 hover:border-blue-500 transition duration-300 ease-in-out focus:ring-blue-500/80 dark:bg-slate-600 dark:bg-opacity-60 dark:text-slate-100">
                                <option value="0">-</option>
                                @foreach (\App\Models\Workstation::all()->sortBy('workstation') as $list)
                                    <option value="{{ $list->id }}">{{ $list->workstation }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>

                <div class="flex flex-row gap-4">
                    {{-- 2.4 Jam Efektif --}}
                    <div class="flex flex-col gap-1 w-full">
                        <label class=" inline-block py-1 font-medium text-slate-600 text-sm dark:text-slate-200"
                            for="jamEfektif">Jam Efektif</label>
                        <input type="text" wire:model='jamEfektif' id="jamEfektif"
                            class="w-full leading-tight text-sm border-slate-400/60 rounded-md text-slate-600 hover:border-blue-500 transition duration-300 ease-in-out focus:ring-blue-500/80 dark:bg-slate-600 dark:bg-opacity-60 dark:text-slate-100">
                    </div>

                    {{-- 2.5 Target / Jam --}}
                    <div class="flex flex-col gap-1 w-full">
                        <label class=" inline-block py-1 font-medium text-slate-600 text-sm dark:text-slate-200"
                            for="targetJam">Target / Jam</label>
                        <input type="text" wire:model='targetJam' id="targetJam"
                            class="w-full leading-tight text-sm border-slate-400/60 rounded-md text-slate-600 hover:border-blue-500 transition duration-300 ease-in-out focus:ring-blue-500/80 dark:bg-slate-600 dark:bg-opacity-60 dark:text-slate-100">
                    </div>

                    {{-- 2.6 Satuan --}}
                    <div class="flex flex-col gap-1 w-full">
                        <label class=" inline-block py-1 font-medium text-slate-600 text-sm dark:text-slate-200"
                            for="satuan">satuan</label>
                        <input type="text" wire:model='satuan' id="satuan"
                            class="w-full leading-tight text-sm border-slate-400/60 rounded-md text-slate-600 hover:border-blue-500 transition duration-300 ease-in-out focus:ring-blue-500/80 dark:bg-slate-600 dark:bg-opacity-60 dark:text-slate-100">
                    </div>

                </div>
            {{-- 3. Confirmation Button --}}
                <div class="mt-7 flex justify-end gap-4">
                    {{-- 3.1 Tutup Modal --}}
                        <button @click.prevent="addTarget = false" data-mdb-ripple="true" data-mdb-ripple-color="light"
                            class="rounded-md px-3 bg-violet-600 py-2 text-sm tracking-wide text-violet-50 shadow-lg shadow-blue-600/30 brightness-125">Tutup</button>
                    {{-- 3.2 Simpan --}}
                        <button type="button" @click.prevent="addTarget = false"  data-mdb-ripple="true" data-mdb-ripple-color="light" wire:click='update'
                            class="rounded-md bg-blue-600 px-3 py-2 text-sm tracking-wide text-blue-50 shadow-lg shadow-blue-600/30 brightness-125">Simpan</button>
                </div>
        </div>
    </div>
</form>
