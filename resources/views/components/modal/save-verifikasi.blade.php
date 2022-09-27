<form>
    <div wire:ignore.self
        class="fixed top-0 left-0 hidden w-full h-full overflow-x-hidden overflow-y-auto outline-none modal fade"
        id="modalVerifikasi" tabindex="-1" aria-labelledby="modalVerifikasi" aria-modal="true" role="dialog">
        <div class="relative w-auto pointer-events-none modal-dialog modal-dialog-centered z-50">
            <div
                class="relative flex flex-col w-full text-current border-none rounded-md shadow-lg outline-none pointer-events-auto modal-content bg-clip-padding">
                <div
                    class="flex items-center justify-between flex-shrink-0 p-4 bg-green-500 border-b border-gray-200 rounded-md modal-header">
                    <h5 class="text-xl font-medium leading-normal text-white" id="exampleModalScrollableLabel">
                        @if (session()->has('saveModal'))
                            Data Berhasil Di Simpan
                        @endif
                        <span wire:model="name"></span>
                    </h5>
                    <button type="button"
                        class="box-content w-4 h-4 p-1 text-black border-none rounded-none opacity-50 btn-close hover:text-black hover:no-underline hover:opacity-75 focus:opacity-100 focus:shadow-none focus:outline-none"
                        data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
            </div>
        </div>
    </div>
</form>
