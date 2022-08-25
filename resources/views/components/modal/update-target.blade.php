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
                        Edit Target Harian
                    </h5>
                    <button type="button"
                        class="box-content w-4 h-4 p-1 text-black border-none rounded-none opacity-50 btn-close focus:shadow-none focus:outline-none focus:opacity-100 hover:text-black hover:opacity-75 hover:no-underline"
                        data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="relative p-4 modal-body">
                    <div class="mb-2">
                        <label for="divisi"
                            class="inline-block py-1 font-medium text-center text-gray-600">Divisi</label>
                        <input type="text" maxlength="4"
                            class="w-full mt-1 mb-2 leading-tight text-center text-gray-700 bg-gray-200 border-none rounded focus:ring-0"
                            id="divisi" value="SBU Produk Non Uang" disabled>
                    </div>
                    <div class="grid grid-cols-2 gap-4">
                        <div>
                            <label for="unit"
                                class="inline-block py-1 font-medium text-center text-gray-600">Unit</label>
                            <input type="text" maxlength="4"
                                class="w-full mt-1 mb-2 leading-tight text-center text-gray-700 bg-gray-200 border-none rounded focus:ring-0"
                                id="unit" wire:model="unit" disabled>
                        </div>
                        <div>
                            <label for="group"
                                class="inline-block py-1 font-medium text-center text-gray-600">Group</label>
                            <div
                                class="mt-1 mb-2 transition duration-300 border-b-2 rounded-md hover:border-sky-400 hover:shadow-md focus-within:border-sky-500 focus-within:shadow-md">
                                <input type="text" min="1" maxlength="4" wire:model="group"
                                    class="w-full text-base leading-tight text-center text-gray-700 border-none focus:ring-0"
                                    id="group" required>
                            </div>
                        </div>
                    </div>
                    <div class="mt-2">
                        <label for="gilir"
                            class="inline-block py-1 font-medium text-center text-gray-600">Gilir</label>
                        <div
                            class="mt-1 mb-2 transition duration-300 border-b-2 rounded-md hover:border-sky-400 hover:shadow-md focus-within:border-sky-500 focus-within:shadow-md">
                            <input type="number" min="1" wire:model="gilir"
                                class="w-full text-base leading-tight text-center text-gray-700 border-none focus:ring-0"
                                id="gilir" required>
                        </div>
                    </div>
                    <div class="mt-2">
                        <label for="target" class="inline-block py-1 font-medium text-center text-gray-600">Target
                            Lbr/Jam</label>
                        <div
                            class="mt-1 mb-2 transition duration-300 border-b-2 rounded-md hover:border-sky-400 hover:shadow-md focus-within:border-sky-500 focus-within:shadow-md">
                            <input type="number" min="0" wire:model="target"
                                class="w-full text-base leading-tight text-center text-gray-700 border-none focus:ring-0"
                                id="target" required>
                        </div>
                    </div>
                </div>
                <div
                    class="flex flex-wrap items-center justify-end flex-shrink-0 p-4 border-t border-gray-200 modal-footer rounded-b-md">
                    <button type="button"
                        class="inline-block px-6 py-2.5 bg-sky-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-sky-700 hover:shadow-lg focus:bg-sky-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-sky-800 active:shadow-lg transition duration-150 ease-in-out"
                        data-bs-dismiss="modal">
                        Close
                    </button>
                    <button type="button" wire:click="update"
                        class="inline-block px-6 py-2.5 bg-green-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-green-700 hover:shadow-lg focus:bg-green-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-green-800 active:shadow-lg transition duration-150 ease-in-out ml-1"
                        data-bs-dismiss="modal">
                        Save
                    </button>
                </div>
            </div>
        </div>
    </div>
</form>
