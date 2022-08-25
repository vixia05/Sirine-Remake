<form>
    <div wire:ignore.self
        class="fixed top-0 left-0 hidden w-full h-full overflow-x-hidden overflow-y-auto outline-none modal fade"
        id="modalDelete" tabindex="-1" aria-labelledby="modalDelete" aria-modal="true" role="dialog">
        <div class="relative w-auto pointer-events-none modal-dialog modal-dialog-centered">
            <div
                class="relative flex flex-col w-full text-current bg-white border-none rounded-md shadow-lg outline-none pointer-events-auto modal-content bg-clip-padding">
                <div
                    class="flex items-center justify-between flex-shrink-0 p-4 border-b border-gray-200 modal-header rounded-t-md bg-slate-600">
                    <h5 class="text-xl font-medium leading-normal text-white" id="exampleModalScrollableLabel">
                        Delete User
                    </h5>
                    <button type="button"
                        class="box-content w-4 h-4 p-1 text-black border-none rounded-none opacity-50 btn-close focus:shadow-none focus:outline-none focus:opacity-100 hover:text-black hover:opacity-75 hover:no-underline"
                        data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="relative p-4 modal-body">
                    <h5 class="text-xl font-medium leading-normal text-gray-700" id="exampleModalScrollableLabel">
                        Apa anda yakin ingin menghapus user <br> <span
                            class="text-xl font-bold leading-normal text-gray-700"
                            wire:model="name">{{ $name }}</span> ?
                    </h5>
                    <input type="hidden" wire:model="data_id" />
                </div>
                <div
                    class="flex flex-wrap items-center justify-end flex-shrink-0 p-4 border-t border-gray-200 modal-footer rounded-b-md">
                    <button type="button"
                        class="inline-block px-6 py-2.5 bg-sky-400 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-sky-500 hover:shadow-lg focus:bg-sky-500 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-sky-600 active:shadow-lg transition duration-150 ease-in-out"
                        data-bs-dismiss="modal">
                        Close
                    </button>
                    <button type="button" wire:click="destroy({{ $data_id }})"
                        class="inline-block px-6 py-2.5 bg-red-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-red-700 hover:shadow-lg focus:bg-red-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-red-800 active:shadow-lg transition duration-150 ease-in-out ml-1"
                        data-bs-dismiss="modal">
                        Delete
                    </button>
                </div>
            </div>
        </div>
    </div>
</form>
