<form method="post" action="{{ route('updateOrder.pcht') }}" enctype="multipart/form-data">
    @method('post')
    @csrf
    {{-- 1. Modal Update Pcht --}}
    <div x-show="updatePcht" x-transition.opacity x-transition:leave.delay.300ms
        class="fixed inset-0 z-[2000] flex flex-col items-center justify-center bg-black/50">
        <div x-show="updatePcht" x-transition.duration.350ms @click.away="updatePcht = false"
            @keyup.escape="updatePcht = false"
            class="relative w-3/4 max-w-2xl rounded-2xl bg-slate-100/80 px-10 py-10 backdrop-blur-lg backdrop-filter dark:bg-slate-800/90">
            {{-- 1. Header Modal --}}
            <div class="mb-3">
                <h3
                    class="border-b-2 dark:border-slate-100/80 border-slate-800/60 text-center pb-2 text-3xl text-slate-900/60 dark:text-slate-50">
                    Update Order Pcht</h3>
            </div>
            <label class="p-4 mx-auto">
                <input type="file" name="file" class="text-sm mt-2 text-grey-500 w-full focus:ring-0 active:ring-0 focus:outline-none text-slate-50
                    file:mr-5 file:py-3 file:px-10
                    file:rounded-full file:border-0
                    file:text-md file:font-semibold  file:text-white
                    file:bg-gradient-to-r file:from-blue-600 file:to-emerald-600
                    hover:file:cursor-pointer hover:file:opacity-80
                " />
            </label>
            <div class="mt-7 flex justify-end gap-4">
                {{-- 3. Close Button --}}
                <button @click.prevent="updatePcht = false" data-mdb-ripple="true" data-mdb-ripple-color="light"
                    class="rounded-md px-3 bg-violet-600 py-2 text-sm tracking-wide text-violet-50 shadow-lg shadow-blue-600/30 brightness-125">Close</button>
                {{-- 4. Simpan Button --}}
                <button type="btn" data-mdb-ripple="true" data-mdb-ripple-color="light"
                    class="rounded-md bg-blue-600 px-3 py-2 text-sm tracking-wide text-blue-50 shadow-lg shadow-blue-600/30 brightness-125">Simpan</button>
            </div>
        </div>
    </div>
</form>
<form method="post" action="{{ route('updateOrder.mmea') }}" enctype="multipart/form-data">
    @method('post')
    @csrf
    {{-- 2. Modal Update MMEA --}}
    <div x-show="updateMmea" x-transition.opacity x-transition:leave.delay.300ms
        class="fixed inset-0 z-[2000] flex flex-col items-center justify-center bg-black/50">
        <div x-show="updateMmea" x-transition.duration.350ms @click.away="updateMmea = false"
            @keyup.escape="updateMmea = false"
            class="relative w-3/4 max-w-2xl rounded-2xl bg-slate-100/80 px-10 py-10 backdrop-blur-lg backdrop-filter dark:bg-slate-800/90">
            {{-- 1. Header Modal --}}
            <div class="mb-3">
                <h3
                    class="border-b-2 dark:border-slate-100/80 border-slate-800/60 text-center pb-2 text-3xl text-slate-900/60 dark:text-slate-50">
                    Update Order MMEA</h3>
            </div>
            <label class="p-4 mx-auto">
                <input type="file" name="file" class="text-sm mt-2 text-grey-500 w-full focus:ring-0 active:ring-0 focus:outline-none text-slate-50
                file:mr-5 file:py-3 file:px-10
                file:rounded-full file:border-0
                file:text-md file:font-semibold  file:text-white
                file:bg-gradient-to-r file:from-blue-600 file:to-amber-600
                hover:file:cursor-pointer hover:file:opacity-80
            " />
            </label>
            <div class="mt-7 flex justify-end gap-4">
                {{-- 3. Close Button --}}
                <button @click.prevent="updateMmea = false" data-mdb-ripple="true" data-mdb-ripple-color="light"
                    class="rounded-md px-3 bg-violet-600 py-2 text-sm tracking-wide text-violet-50 shadow-lg shadow-blue-600/30 brightness-125">Close</button>
                {{-- 4. Simpan Button --}}
                <button type="submit" data-mdb-ripple="true" data-mdb-ripple-color="light"
                    class="rounded-md bg-blue-600 px-3 py-2 text-sm tracking-wide text-blue-50 shadow-lg shadow-blue-600/30 brightness-125">Simpan</button>
            </div>
        </div>
    </div>
</form>
