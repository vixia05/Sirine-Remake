@method('put')
@csrf
<!-- Back Shadow -->
<div x-show="editModal" x-transition.opacity x-transition:leave.delay.300ms
    class="fixed inset-0 z-[2000] flex flex-col items-center justify-center bg-black/50">
    <div x-show="editModal" x-transition.duration.350ms @click.away="editModal = false"
        @keyup.escape="editModal = false"
        class="relative w-3/4 max-w-2xl rounded-2xl bg-slate-100/80 px-6 py-10 backdrop-blur-lg backdrop-filter dark:bg-slate-800/90">
        {{-- 1. Header Modal --}}
        <div class="mb-3">
            <h3
                class="border-b-2 dark:border-slate-100/80 border-slate-800/60 text-center pb-2 text-3xl text-slate-900/60 dark:text-slate-50">
                EDIT @yield('modal-title')</h3>
        </div>
        {{-- 2. Modal Content --}}
        @yield('edit-modal-content')
        {{-- 4. Simpan Button --}}
        <div class="mt-7 flex justify-end gap-4">
            <button @click.prevent="editModal = false" data-mdb-ripple="true" data-mdb-ripple-color="light"
                class="rounded-md px-3 bg-violet-600 py-2 text-sm tracking-wide text-violet-50 shadow-lg shadow-blue-600/30 brightness-125">Close</button>
            <button type="submit" data-mdb-ripple="true" data-mdb-ripple-color="light"
                class="rounded-md bg-blue-600 px-3 py-2 text-sm tracking-wide text-blue-50 shadow-lg shadow-blue-600/30 brightness-125">Simpan</button>
        </div>
    </div>
</div>
