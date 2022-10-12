<form>
    @method('PUT')
    @csrf
    <!-- Back Shadow -->
    <div x-show="passwordModal" x-transition.opacity x-transition:leave.delay.300ms
        class="fixed inset-0 z-[2000] flex flex-col items-center justify-center bg-black/30">
        <div x-show="passwordModal" x-transition.duration.350ms @click.away="passwordModal = false"
            class="relative w-3/4 max-w-2xl rounded-2xl bg-slate-100/80 px-6 py-10 backdrop-blur-lg backdrop-filter dark:bg-slate-800/90">

            <div class="mb-3">
                <h3 class="border-b-2 dark:border-slate-100/80 border-slate-800/60 text-center pb-2 text-3xl text-slate-900/60 dark:text-slate-50">UBAH PASSWORD</h3>
            </div>
            <!-- Modal Content -->
            <div class="mb-2 flex flex-col">
                <label class="mb-1 text-slate-800/90 dark:text-slate-100/90">Password Lama</label>
                <input type="password"
                    class="appearance-none rounded border-slate-300 bg-zinc-300/60 py-1 px-2 text-sm tracking-wide text-slate-800 transition duration-150 ease-in-out focus:outline-double focus:outline-2 focus:outline-blue-500 focus:ring-2 focus:ring-blue-500/40 dark:border-slate-600 dark:bg-slate-500/40 dark:text-slate-100">
            </div>
            <div class="mb-2 flex flex-col">
                <label class="mb-1 text-slate-800/90 dark:text-slate-100/90">Password Baru</label>
                <input type="password"
                    class="appearance-none rounded border-slate-300 bg-zinc-300/60 py-1 px-2 text-sm tracking-wide text-slate-800 transition duration-150 ease-in-out focus:outline-double focus:outline-2 focus:outline-blue-500 focus:ring-2 focus:ring-blue-500/40 dark:border-slate-600 dark:bg-slate-500/40 dark:text-slate-100">
            </div>
            <div class="mb-2 flex flex-col">
                <label class="mb-1 text-slate-800/90 dark:text-slate-100/90">Ulangi Password Baru</label>
                <input type="password"
                    class="appearance-none rounded border-slate-300 bg-zinc-300/60 py-1 px-2 text-sm tracking-wide text-slate-800 transition duration-150 ease-in-out focus:outline-double focus:outline-2 focus:outline-blue-500 focus:ring-2 focus:ring-blue-500/40 dark:border-slate-600 dark:bg-slate-500/40 dark:text-slate-100">
            </div>
            <!-- Button Footer -->
            <div class="mt-7 flex justify-end space-x-4">
                <button type="submit"
                    class="rounded-md bg-blue-600 px-2 py-1 text-blue-50 shadow-lg shadow-blue-600/30 brightness-125">Submit</button>
            </div>
        </div>
    </div>
</form>
