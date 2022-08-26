<form>
    <div wire:ignore.self
        class="modal fade fixed top-0 left-0 hidden h-full w-full overflow-y-auto overflow-x-hidden outline-none"
        id="modalUpdate" tabindex="-1" aria-labelledby="modalUpdate" aria-modal="true" role="dialog">
        <div class="modal-dialog modal-dialog-centered pointer-events-none relative w-auto">
            <div
                class="modal-content pointer-events-auto relative flex w-full flex-col rounded-md border-none bg-white bg-clip-padding text-current shadow-lg outline-none">
                <div
                    class="modal-header flex flex-shrink-0 items-center justify-between rounded-t-md border-b border-gray-200 bg-slate-600 p-4">
                    <h5 class="text-xl font-medium leading-normal text-white" id="exampleModalScrollableLabel">
                        Edit Target Harian
                    </h5>
                    <button type="button"
                        class="btn-close box-content h-4 w-4 rounded-none border-none p-1 text-black opacity-50 hover:text-black hover:no-underline hover:opacity-75 focus:opacity-100 focus:shadow-none focus:outline-none"
                        data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body relative p-4">
                    <div class="mb-2">
                        <label for="divisi"
                            class="inline-block py-1 text-center font-medium text-gray-600">Divisi</label>
                        <input type="text" maxlength="4"
                            class="mt-1 mb-2 w-full rounded border-none bg-gray-200 text-center leading-tight text-gray-700 focus:ring-0"
                            id="divisi" value="SBU Produk Non Uang" disabled>
                    </div>
                    <div class="grid grid-cols-2 gap-4">
                        <div>
                            <label for="unit"
                                class="inline-block py-1 text-center font-medium text-gray-600">Unit</label>
                            <input type="text" maxlength="4"
                                class="mt-1 mb-2 w-full rounded border-none bg-gray-200 text-center leading-tight text-gray-700 focus:ring-0"
                                id="unit" wire:model="unit" disabled>
                        </div>
                        <div>
                            <label for="group"
                                class="inline-block py-1 text-center font-medium text-gray-600">Group</label>
                            <div
                                class="mt-1 mb-2 rounded-md border-b-2 transition duration-300 focus-within:border-sky-500 focus-within:shadow-md hover:border-sky-400 hover:shadow-md">
                                <input type="text" min="1" maxlength="4" wire:model="group"
                                    class="w-full border-none text-center text-base leading-tight text-gray-700 focus:ring-0"
                                    id="group" required>
                            </div>
                        </div>
                    </div>
                    <div class="mt-2">
                        <label for="gilir"
                            class="inline-block py-1 text-center font-medium text-gray-600">Gilir</label>
                        <div
                            class="mt-1 mb-2 rounded-md border-b-2 transition duration-300 focus-within:border-sky-500 focus-within:shadow-md hover:border-sky-400 hover:shadow-md">
                            <input type="number" min="1" wire:model="gilir"
                                class="w-full border-none text-center text-base leading-tight text-gray-700 focus:ring-0"
                                id="gilir" required>
                        </div>
                    </div>
                    <div class="mt-2">
                        <label for="target" class="inline-block py-1 text-center font-medium text-gray-600">Target
                            Lbr/Jam</label>
                        <div
                            class="mt-1 mb-2 rounded-md border-b-2 transition duration-300 focus-within:border-sky-500 focus-within:shadow-md hover:border-sky-400 hover:shadow-md">
                            <input type="number" min="0" wire:model="target"
                                class="w-full border-none text-center text-base leading-tight text-gray-700 focus:ring-0"
                                id="target" required>
                        </div>
                    </div>
                </div>
                <div
                    class="modal-footer flex flex-shrink-0 flex-wrap items-center justify-end rounded-b-md border-t border-gray-200 p-4">
                    <button type="button"
                        class="inline-block rounded bg-sky-600 px-6 py-2.5 text-xs font-medium uppercase leading-tight text-white shadow-md transition duration-150 ease-in-out hover:bg-sky-700 hover:shadow-lg focus:bg-sky-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-sky-800 active:shadow-lg"
                        data-bs-dismiss="modal">
                        Close
                    </button>
                    <button type="button" wire:click="update"
                        class="ml-1 inline-block rounded bg-green-600 px-6 py-2.5 text-xs font-medium uppercase leading-tight text-white shadow-md transition duration-150 ease-in-out hover:bg-green-700 hover:shadow-lg focus:bg-green-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-green-800 active:shadow-lg"
                        data-bs-dismiss="modal">
                        Save
                    </button>
                </div>
            </div>
        </div>
    </div>
</form>
