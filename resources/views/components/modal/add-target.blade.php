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
