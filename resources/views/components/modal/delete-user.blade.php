<form>
    <div wire:ignore.self
        class="modal fade fixed top-0 left-0 hidden h-full w-full overflow-y-auto overflow-x-hidden outline-none"
        id="modalDelete" tabindex="-1" aria-labelledby="modalDelete" aria-modal="true" role="dialog">
        <div class="modal-dialog modal-dialog-centered pointer-events-none relative w-auto">
            <div
                class="modal-content pointer-events-auto relative flex w-full flex-col rounded-md border-none bg-white bg-clip-padding text-current shadow-lg outline-none">
                <div
                    class="modal-header flex flex-shrink-0 items-center justify-between rounded-t-md border-b border-gray-200 bg-red-500 p-4">
                    <h5 class="text-xl font-medium leading-normal text-white" id="exampleModalScrollableLabel">
                        Delete User
                    </h5>
                    <button type="button"
                        class="btn-close box-content h-4 w-4 rounded-none border-none p-1 text-black opacity-50 hover:text-black hover:no-underline hover:opacity-75 focus:opacity-100 focus:shadow-none focus:outline-none"
                        data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body relative p-4">
                    <h5 class="text-xl font-medium leading-normal text-gray-700" id="exampleModalScrollableLabel">
                        Apa anda yakin ingin menghapus user <br> <span
                            class="text-xl font-bold leading-normal text-gray-700"
                            wire:model="name">{{ $name }}</span> ?
                    </h5>
                    <input type="hidden" wire:model="data_id" />
                </div>
                <div
                    class="modal-footer flex flex-shrink-0 flex-wrap items-center justify-end rounded-b-md border-t border-gray-200 p-4">
                    <button type="button"
                        class="inline-block rounded bg-sky-400 px-6 py-2.5 text-xs font-medium uppercase leading-tight text-white shadow-md transition duration-150 ease-in-out hover:bg-sky-500 hover:shadow-lg focus:bg-sky-500 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-sky-600 active:shadow-lg"
                        data-bs-dismiss="modal">
                        Close
                    </button>
                    <button type="button" wire:click="destroy({{ $data_id }})"
                        class="ml-1 inline-block rounded bg-red-600 px-6 py-2.5 text-xs font-medium uppercase leading-tight text-white shadow-md transition duration-150 ease-in-out hover:bg-red-700 hover:shadow-lg focus:bg-red-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-red-800 active:shadow-lg"
                        data-bs-dismiss="modal">
                        Delete
                    </button>
                </div>
            </div>
        </div>
    </div>
</form>
