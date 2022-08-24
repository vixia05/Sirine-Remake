<form>
    <div wire:ignore.self
        class="fixed top-0 left-0 hidden w-full h-full overflow-x-hidden overflow-y-auto outline-none modal fade"
        id="modalUpdate" tabindex="-1" aria-labelledby="modalUpdate" aria-modal="true" role="dialog">
        <div class="relative w-auto pointer-events-none modal-dialog modal-dialog-centered">
            <div
                class="relative flex flex-col w-full text-current bg-white border-none rounded-md shadow-lg outline-none pointer-events-auto modal-content bg-clip-padding">
                <div
                    class="flex items-center justify-between flex-shrink-0 p-4 border-b border-gray-200 modal-header rounded-t-md bg-slate-600">
                    <h5 class="text-xl font-medium leading-normal text-white" id="exampleModalScrollableLabel">
                        User <span wire:model="name">{{ $name }}</span>
                    </h5>
                    <button type="button"
                        class="box-content w-4 h-4 p-1 text-black border-none rounded-none opacity-50 btn-close focus:shadow-none focus:outline-none focus:opacity-100 hover:text-black hover:opacity-75 hover:no-underline"
                        data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="relative p-4 modal-body">
                    <div class="grid grid-cols-2 gap-4">
                        <div>
                            <label for="np" class="inline-block py-1 font-medium text-center text-gray-600">Nomor
                                Pegawai</label>
                            <div
                                class="mt-1 mb-2 transition duration-150 border-b-2 rounded-md hover:border-blue-400 hover:shadow-md focus-within:border-blue-600 focus-within:shadow-md">
                                <input type="text" maxlength="4" wire:model="np"
                                    class="w-full text-base leading-tight text-center text-gray-700 border-none focus:ring-0"
                                    id="np" name="np" required>
                            </div>
                        </div>
                        <div>
                            <label for="nama"
                                class="inline-block py-1 font-medium text-center text-gray-600">Nama</label>
                            <input type="text" maxlength="4"
                                class="w-full mt-1 mb-2 leading-tight text-center text-gray-700 bg-gray-200 border-none rounded focus:ring-0"
                                id="name" name="name" wire:model="name" disabled>
                        </div>
                    </div>
                    <div class="mt-2">
                        <label for="divisi"
                            class="inline-block py-1 font-medium text-center text-gray-600">Divisi</label>
                        <input type="text" maxlength="4"
                            class="w-full mt-1 mb-2 leading-tight text-center text-gray-700 bg-gray-200 border-none rounded focus:ring-0"
                            id="divisi" name="divisi" value="SBU Produk Non Uang" disabled>
                    </div>
                    <div class="mt-2">
                        <label for="role"
                            class="inline-block py-1 font-medium text-center text-gray-600">Role</label>
                        <div class="flex justify-center">
                            <div class="w-full mb-3">
                                <select
                                    class="form-select appearance-none
                                    block
                                    w-full
                                    px-3
                                    py-1.5
                                    text-base
                                    font-normal
                                    text-gray-700
                                    bg-white bg-clip-padding bg-no-repeat
                                    border border-solid border-gray-300
                                    rounded
                                    transition
                                    duration-150
                                    ease-in-out
                                    m-0
                                    focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
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
                    class="flex flex-wrap items-center justify-end flex-shrink-0 p-4 border-t border-gray-200 modal-footer rounded-b-md">
                    <button type="button"
                        class="inline-block px-6 py-2.5 bg-purple-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-purple-700 hover:shadow-lg focus:bg-purple-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-purple-800 active:shadow-lg transition duration-150 ease-in-out"
                        data-bs-dismiss="modal">
                        Close
                    </button>
                    <button type="button" wire:click="update"
                        class="inline-block px-6 py-2.5 bg-blue-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out ml-1"
                        data-bs-dismiss="modal">
                        Save
                    </button>
                </div>
            </div>
        </div>
    </div>
</form>
