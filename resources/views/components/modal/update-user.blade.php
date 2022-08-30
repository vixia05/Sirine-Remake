<form>
    <div wire:ignore.self
        class="modal fade fixed top-0 left-0 hidden h-full w-full overflow-y-auto overflow-x-hidden outline-none"
        id="modalUpdate" tabindex="-1" aria-labelledby="modalUpdate" aria-modal="true" role="dialog">
        <div class="modal-dialog modal-dialog-centered pointer-events-none relative w-auto">
            <div
                class="modal-content pointer-events-auto relative flex w-full flex-col rounded-md border-none bg-white bg-clip-padding text-current shadow-lg outline-none">
                <div
                    class="modal-header flex flex-shrink-0 items-center justify-between rounded-t-md border-b border-gray-200 bg-green-500 p-4">
                    <h5 class="text-xl font-medium leading-normal text-white" id="exampleModalScrollableLabel">
                        User <span wire:model="name">{{ $name }}</span>
                    </h5>
                    <button type="button"
                        class="btn-close box-content h-4 w-4 rounded-none border-none p-1 text-black opacity-50 hover:text-black hover:no-underline hover:opacity-75 focus:opacity-100 focus:shadow-none focus:outline-none"
                        data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body relative p-4">
                    <div class="grid grid-cols-2 gap-4">
                        <div>
                            <label for="np" class="inline-block py-1 text-center font-medium text-gray-600">Nomor
                                Pegawai</label>
                            <div
                                class="mt-1 mb-2 rounded-md border-b-2 transition duration-150 focus-within:border-blue-600 focus-within:shadow-md hover:border-blue-400 hover:shadow-md">
                                <input type="text" maxlength="4" wire:model="np"
                                    class="w-full border-none text-center text-base leading-tight text-gray-700 focus:ring-0"
                                    id="np" name="np" required>
                            </div>
                        </div>
                        <div>
                            <label for="nama"
                                class="inline-block py-1 text-center font-medium text-gray-600">Nama</label>
                            <input type="text" maxlength="4"
                                class="mt-1 mb-2 w-full rounded border-none bg-gray-200 text-center leading-tight text-gray-700 focus:ring-0"
                                id="name" name="name" wire:model="name" disabled>
                        </div>
                    </div>
                    <div class="mt-2">
                        <label for="divisi"
                            class="inline-block py-1 text-center font-medium text-gray-600">Divisi</label>
                        <input type="text" maxlength="4"
                            class="mt-1 mb-2 w-full rounded border-none bg-gray-200 text-center leading-tight text-gray-700 focus:ring-0"
                            id="divisi" name="divisi" value="SBU Produk Non Uang" disabled>
                    </div>
                    <div class="mt-2">
                        <label for="role"
                            class="inline-block py-1 text-center font-medium text-gray-600">Role</label>
                        <div class="flex justify-center">
                            <div class="mb-3 w-full">
                                <select
                                    class="form-select m-0 block w-full appearance-none rounded border border-solid border-gray-300 bg-white bg-clip-padding bg-no-repeat px-3 py-1.5 text-base font-normal text-gray-700 transition duration-150 ease-in-out focus:border-blue-600 focus:bg-white focus:text-gray-700 focus:outline-none"
                                    id="role" name="role" wire:model="role">
                                    <option selected>Role</option>
                                    <option value="1" selected>User</option>
                                    <option value="2">Admin</option>
                                    <option value="3">Super User</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                <div
                    class="modal-footer flex flex-shrink-0 flex-wrap items-center justify-end rounded-b-md border-t border-gray-200 p-4">
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
