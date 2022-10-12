<form>
    <div wire:ignore.self
        class="fixed top-0 left-0 hidden w-full h-full overflow-x-hidden overflow-y-auto outline-none modal fade"
        id="modalUpdate" tabindex="-1" aria-labelledby="modalUpdate" aria-modal="true" role="dialog">
        <div class="relative w-auto pointer-events-none modal-dialog modal-lg modal-dialog-centered">
            <div
                class="relative flex flex-col w-full text-current bg-slate-100/80 px-6 py-10 backdrop-blur-lg backdrop-filter dark:bg-slate-800/90 border-none rounded-md shadow-lg outline-none pointer-events-auto modal-content bg-clip-padding">
                <div
                    class="flex items-center justify-center flex-shrink-0 p-4 border-b border-gray-200 modal-header rounded-t-md">
                    <h5 class="text-xl font-medium leading-normal text-white" id="exampleModalScrollableLabel">
                        <span wire:model="name">{{ $name }}</span>
                    </h5>
                </div>
                <div class="relative p-4 modal-body">
                    <div class="grid grid-cols-2 gap-4">
                        <div class="flex flex-col">
                            <label for="np" class="inline-block py-1 mb-2 font-medium text-center text-slate-800/90 dark:text-slate-100/90">Nomor
                                Pegawai</label>
                                <input type="text" maxlength="4" wire:model="np"
                                    class="appearance-none rounded border-slate-300 bg-zinc-300/70 py-1 px-2 tracking-wide text-slate-800 transition duration-150 ease-in-out focus:outline-double focus:outline-2 focus:outline-blue-500 focus:ring-2 focus:ring-blue-500/40 dark:border-slate-600 dark:bg-slate-500/40 dark:text-slate-100"
                                    id="np" name="np" required>
                        </div>
                        <div class="flex flex-col">
                            <label for="nama"
                                class="inline-block py-1 mb-2 font-medium text-center text-slate-800/90 dark:text-slate-100/90">Nama</label>
                            <input type="text" maxlength="4"
                                class="appearance-none rounded border-none bg-zinc-400/60 py-1 px-2 text-center tracking-wide text-slate-600 transition duration-150 ease-in-out focus:outline-double focus:outline-2 focus:outline-blue-500 focus:ring-2 focus:ring-blue-500/40 dark:bg-slate-500/20 dark:text-slate-400"
                                id="name" name="name" wire:model="name" disabled>
                        </div>
                    </div>
                    <div class="flex flex-col my-3">
                        <label for="divisi"
                            class="inline-block py-1 font-medium text-center text-slate-800/90 dark:text-slate-100/90">Divisi</label>
                        <input type="text" maxlength="4"
                            class="appearance-none rounded border-none bg-zinc-400/60 py-1 px-2 text-center tracking-wide text-slate-600 transition duration-150 ease-in-out focus:outline-double focus:outline-2 focus:outline-blue-500 focus:ring-2 focus:ring-blue-500/40 dark:bg-slate-500/20 dark:text-slate-400"
                            id="divisi" name="divisi" value="SBU Produk Non Uang" disabled>
                    </div>
                    <div class="flex flex-col justify-center mt-2">
                        <label for="role"
                            class="inline-block py-1 font-medium text-center text-slate-800/90 dark:text-slate-100/90">Role</label>
                                <select
                                    class="appearance-none rounded border-slate-300 bg-zinc-300 bg-opacity-70 focus:bg-opacity-100 py-1 px-2 tracking-wide text-slate-800 transition duration-150 ease-in-out focus:outline-double focus:outline-2 focus:outline-blue-500 focus:ring-2 focus:ring-blue-500/40 dark:border-slate-600 dark:bg-slate-500 dark:bg-opacity-40 dark:focus:bg-opacity-100 dark:text-slate-100"
                                    id="role" name="role" wire:model="role">
                                    <option selected>Role</option>
                                    <option value="1" selected>User</option>
                                    <option value="2">Admin</option>
                                    <option value="3">Super User</option>
                                </select>
                    </div>
                </div>
                <div
                    class="flex flex-wrap items-center justify-end flex-shrink-0 p-4 border-t border-gray-200 modal-footer rounded-b-md">
                    <button type="button"
                        class="inline-block rounded bg-purple-600 px-6 py-2.5 text-xs font-medium uppercase leading-tight text-white shadow-md transition duration-150 ease-in-out hover:bg-purple-700 hover:shadow-lg focus:bg-purple-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-purple-800 active:shadow-lg"
                        data-bs-dismiss="modal">
                        Close
                    </button>
                    <button type="button" wire:click="update"
                        class="ml-1 inline-block rounded bg-blue-600 px-6 py-2.5 text-xs font-medium uppercase leading-tight text-white shadow-md transition duration-150 ease-in-out hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg"
                        data-bs-dismiss="modal">
                        Save
                    </button>
                </div>
            </div>
        </div>
    </div>
</form>
