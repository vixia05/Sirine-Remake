<form method="post" action="{{ route('profile.store') }}">
    @method('POST')
    @csrf
    <!-- Back Shadow -->
    <div x-show="passwordModal" x-transition.opacity x-transition:leave.delay.300ms
        class="fixed inset-0 z-[2000] flex flex-col items-center justify-center bg-black/30">
        <div x-show="passwordModal" x-transition.duration.350ms @click.away="passwordModal = false"
            class="relative w-3/4 max-w-2xl px-8 py-4 rounded-lg bg-gradient-to-br from-slate-50 via-slate-100 to-slate-50 dark:backdrop-blur-sm dark:backdrop-filter dark:bg-slate-800 dark:from-transparent dark:to-transparent dark:bg-opacity-70">
            <div class="mb-3">
                <h3
                    class="pb-2 text-3xl text-center border-b-2 dark:border-slate-100/80 border-slate-800/60 text-slate-900/60 dark:text-slate-50">
                    UBAH PASSWORD</h3>
            </div>
            <!-- Modal Content -->
            <div class="flex flex-col mb-2">
                <label for="oldPass" class="inline-block py-1 font-medium text-slate-600 dark:text-slate-200">Password Lama</label>
                <input type="password" id="oldPass" name="oldPass"
                    class="w-full leading-tight transition duration-300 ease-in-out rounded-md border-slate-400/60 text-slate-600 hover:border-blue-500 focus:ring-blue-500/80 dark:bg-slate-600 dark:bg-opacity-60 dark:text-slate-100">
            </div>
            <div class="flex flex-col mb-2">
                <label for="newPass" class="inline-block py-1 font-medium text-slate-600 dark:text-slate-200">Password Baru</label>
                <input type="password" id="newPass" name="newPass"
                    class="w-full leading-tight transition duration-300 ease-in-out rounded-md border-slate-400/60 text-slate-600 hover:border-blue-500 focus:ring-blue-500/80 dark:bg-slate-600 dark:bg-opacity-60 dark:text-slate-100">
            </div>
            <div class="flex flex-col mb-2">
                <label for="confPass" class="inline-block py-1 font-medium text-slate-600 dark:text-slate-200">Ulangi Password Baru</label>
                <input type="password" id="confPass" name="confPass"
                    class="w-full leading-tight transition duration-300 ease-in-out rounded-md border-slate-400/60 text-slate-600 hover:border-blue-500 focus:ring-blue-500/80 dark:bg-slate-600 dark:bg-opacity-60 dark:text-slate-100">
            </div>
            <!-- Button Footer -->
            <div class="flex justify-end space-x-4 mt-7">
                <button type="submit"
                    class="px-2 py-1 bg-blue-600 rounded-md shadow-lg text-blue-50 shadow-blue-600/30 brightness-125">Submit</button>
            </div>
        </div>
    </div>
</form>
