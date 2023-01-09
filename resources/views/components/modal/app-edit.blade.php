@method('put')
@csrf
<!-- Back Shadow -->
<div x-show="editModal" x-transition.opacity x-transition:leave.delay.300ms
    class="fixed inset-0 z-[2000] flex flex-col items-center justify-center bg-black/50">
    <div x-show="editModal" x-transition.duration.350ms @click.away="editModal = false"
        @keyup.escape="editModal = false"
        class="relative w-3/4 max-w-2xl px-8 py-4 rounded-lg  bg-gradient-to-br from-slate-50 via-slate-100 to-slate-50 dark:backdrop-blur-sm dark:backdrop-filter dark:bg-slate-800 dark:from-transparent dark:to-transparent dark:bg-opacity-70">
        {{-- 1. Header Modal --}}
        <div class="mb-3">
            <h3
                class="text-center pt-5 pb-3 mb-6 text-xl font-bold border-b-2 border-slate-600 text-slate-600 dark:border-slate-100 dark:text-slate-100">
                Edit {{ $title }}</h3>
        </div>
        {{-- 2. Modal Content --}}
            {{ $slot }}
        <div class="mt-7 flex justify-end gap-4">
            {{-- 3. Close Button --}}
            <button @click.prevent="editModal = false" data-mdb-ripple="true" data-mdb-ripple-color="light"
                class="rounded-md px-3 bg-violet-600 py-2 text-sm tracking-wide text-violet-50 shadow-lg shadow-blue-600/30 brightness-125">Close</button>
            {{-- 4. Simpan Button --}}
            <button type="button" @click.prevent="editModal = false"  data-mdb-ripple="true" data-mdb-ripple-color="light" wire:click='update'
                class="rounded-md bg-blue-600 px-3 py-2 text-sm tracking-wide text-blue-50 shadow-lg shadow-blue-600/30 brightness-125">Simpan</button>
        </div>
    </div>
</div>
