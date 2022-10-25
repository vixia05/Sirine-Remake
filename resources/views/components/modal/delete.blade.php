<form>
    @method('PUT')
    @csrf
    <!-- Back Shadow -->
    <div x-show="deleteModal" x-transition.opacity x-transition:leave.delay.300ms
        class="fixed inset-0 z-[2000] flex flex-col items-center justify-center bg-black/30">
        <div x-show="deleteModal" x-transition.duration.350ms @click.away="deleteModal = false"
            class="relative w-3/4 max-w-2xl rounded-2xl bg-slate-100/80 px-6 py-10 backdrop-blur-lg backdrop-filter dark:bg-slate-800/90">

            <div class="mb-3">
                <h3 class="border-b-2 dark:border-slate-100/80 border-slate-800/60 text-center pb-2 text-3xl text-slate-900/60 dark:text-slate-50">Delete</h3>
            </div>

            <!-- Button Footer -->
            <div class="mt-7 flex justify-end space-x-4">
                <button type="submit" wire:click="destroy"
                    class="rounded-md bg-blue-600 px-2 py-1 text-blue-50 shadow-lg shadow-blue-600/30 brightness-125">Delete</button>
            </div>
        </div>
    </div>
</form>
