<form>
    <div wire:ignore.self
        class="fixed top-0 left-0 hidden w-full h-full overflow-x-hidden overflow-y-auto outline-none modal fade"
        id="modalUpdate" tabindex="-1" aria-labelledby="modalUpdate" aria-modal="true" role="dialog">
        <div class="relative w-auto pointer-events-none modal-dialog modal-dialog-centered modal-lg">
            <div
                class="relative flex flex-col w-full text-current bg-white border-none rounded-md shadow-lg outline-none pointer-events-auto modal-content bg-clip-padding">
                {{-- Header --}}
                <div
                    class="flex items-center justify-between flex-shrink-0 p-4 bg-green-500 border-b border-gray-200 modal-header rounded-t-md">
                    <h5 class="text-xl font-medium leading-normal text-white" id="exampleModalScrollableLabel">
                        Profile <span wire:model="nama">{{ $nama }}</span>
                    </h5>
                    <button type="button"
                        class="box-content w-4 h-4 p-1 text-black border-none rounded-none opacity-50 btn-close hover:text-black hover:no-underline hover:opacity-75 focus:opacity-100 focus:shadow-none focus:outline-none"
                        data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                {{-- End Header --}}
                {{-- 1.0 Form --}}
                <div class="relative p-4 modal-body">
                    <div class="grid grid-cols-2 gap-4">
                        {{-- 1.1 Form NP --}}
                        <div>
                            <label for="np" class="inline-block py-1 font-medium text-center text-gray-600">Nomor
                                Pegawai</label>
                            <input type="text" maxlength="4" wire:model="np"
                                class="w-full mt-1 mb-2 leading-tight text-center text-gray-700 bg-gray-200 border-none rounded drop-shadow focus:ring-0"
                                id="np" nama="np" disabled required>
                        </div>
                        {{-- 1.2 Form Nama --}}
                        <div>
                            <label for="nama"
                                class="inline-block py-1 font-medium text-center text-gray-600">Nama</label>
                            <div
                                class="mt-1 mb-2 transition duration-150 border-2 rounded-md focus-within:border-blue-600 focus-within:shadow-md hover:border-blue-400 hover:shadow-md">
                                <input type="text"
                                    class="w-full text-base leading-tight text-center text-gray-700 border-none focus:ring-0"
                                    id="nama" nama="nama" wire:model="nama">
                            </div>
                        </div>
                    </div>
                    {{-- 1.3 Form Email --}}
                    <label for="email" class="inline-block py-1 font-medium text-center text-gray-600">E-Mail</label>
                    <div
                        class="mt-3 mb-2 transition duration-150 border-2 rounded-md focus-within:border-blue-600 focus-within:shadow-md hover:border-blue-400 hover:shadow-md">
                        <input type="text"
                            class="w-full text-base leading-tight text-center text-gray-700 border-none focus:ring-0"
                            id="email" nama="email" wire:model="email">
                    </div>
                    <div class="grid grid-cols-2 gap-4 mt-3">
                        <div class="col-span-1">
                            {{-- 1.4 Form Contact --}}
                            <label for="contact"
                                class="inline-block py-1 font-medium text-center text-gray-600">Contact</label>
                            <div
                                class="mt-2 mb-2 transition duration-150 border-2 rounded-md focus-within:border-blue-600 focus-within:shadow-md hover:border-blue-400 hover:shadow-md">
                                <input type="text"
                                    class="w-full text-base leading-tight text-center text-gray-700 border-none focus:ring-0"
                                    id="contact" nama="contact" wire:model="contact">
                            </div>
                        </div>
                        {{-- 1.5 Form Tgl Lahir --}}
                        <div class="col-span-1">
                            <label for="tglLahir"
                                class="inline-block py-1 font-medium text-center text-gray-600">Tanggal
                                Lahir</label>
                            <div
                                class="mt-2 mb-2 transition duration-150 border-2 rounded-md focus-within:border-blue-600 focus-within:shadow-md hover:border-blue-400 hover:shadow-md">
                                <input type="date"
                                    class="w-full text-base leading-tight text-center text-gray-700 border-none focus:ring-0"
                                    id="tglLahir" nama="tglLahir" wire:model="tglLahir">
                            </div>
                        </div>
                    </div>
                    {{-- 1.6 Form Divisi --}}
                    <div class="mt-3">
                        <label for="divisi"
                            class="inline-block py-1 font-medium text-center text-gray-600">Divisi</label>
                        <input type="text" maxlength="4"
                            class="w-full mt-1 mb-2 leading-tight text-center text-gray-700 bg-gray-200 border-none rounded focus:ring-0"
                            id="divisi" nama="divisi" value="SBU Produk Non Uang" disabled>
                    </div>
                    <div class="grid grid-cols-2 gap-4">
                        {{-- 1.7 Form Seksi --}}
                        <div class="mt-3">
                            <label for="seksi"
                                class="inline-block py-1 font-medium text-center text-gray-600">Seksi</label>
                            <div
                                class="mt-2 mb-2 transition duration-150 border-2 rounded-md focus-within:border-blue-600 focus-within:shadow-md hover:border-blue-400 hover:shadow-md">
                                <select class="w-full text-base leading-tight text-gray-700 border-none focus:ring-0"
                                    id="seksi" nama="seksi" wire:model="seksi">
                                    @foreach ($listSeksi as $seksis)
                                        <option value="{{ $seksis->id }}">{{ $seksis->seksi }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        {{-- 1.8 Form Unit --}}
                        <div class="mt-3">
                            <label for="unit"
                                class="inline-block py-1 font-medium text-center text-gray-600">Unit</label>
                            <div
                                class="mt-2 mb-2 transition duration-150 border-2 rounded-md focus-within:border-blue-600 focus-within:shadow-md hover:border-blue-400 hover:shadow-md">
                                <select class="w-full text-base leading-tight text-gray-700 border-none focus:ring-0"
                                    id="unit" nama="unit" wire:model="unit">
                                    @foreach ($listUnit as $units)
                                        <option value="{{ $units->id }}">{{ $units->unit }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>
                    {{-- 1.9 Form Station --}}
                    <div class="mt-3">
                        <label for="station"
                            class="inline-block py-1 font-medium text-center text-gray-600">Workstation</label>
                        <div
                            class="mt-2 mb-2 transition duration-150 border-2 rounded-md focus-within:border-blue-600 focus-within:shadow-md hover:border-blue-400 hover:shadow-md">
                            <select class="w-full text-base leading-tight text-gray-700 border-none focus:ring-0"
                                id="station" nama="station" wire:model="station">
                                @foreach ($listStation as $stations)
                                    <option value="{{ $stations->id }}">{{ $stations->workstation }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    {{-- 1.10 Form Alamat --}}
                    <label for="alamat" class="inline-block py-1 font-medium text-center text-gray-600">Alamat</label>
                    <div
                        class="mt-3 mb-2 transition duration-150 border-2 rounded-md focus-within:border-blue-600 focus-within:shadow-md hover:border-blue-400 hover:shadow-md">
                        <textarea class="w-full text-base leading-tight text-gray-700 border-none focus:ring-0" id="alamat" nama="alamat"
                            wire:model="alamat"></textarea>
                    </div>
                </div>
                <div
                    class="flex flex-wrap items-center justify-end flex-shrink-0 p-4 border-t border-gray-200 modal-footer rounded-b-md">
                    <button type="button"
                        class="inline-block rounded bg-purple-600 px-6 py-1.5 text-xs font-medium uppercase leading-tight text-white shadow-md transition duration-150 ease-in-out hover:bg-purple-700 hover:shadow-lg focus:bg-purple-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-purple-800 active:shadow-lg"
                        data-bs-dismiss="modal">
                        Close
                    </button>
                    <button type="button" wire:click="update"
                        class="ml-1 inline-block rounded bg-blue-600 px-6 py-1.5 text-xs font-medium uppercase leading-tight text-white shadow-md transition duration-150 ease-in-out hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg"
                        data-bs-dismiss="modal">
                        Save
                    </button>
                </div>
            </div>
        </div>
    </div>
</form>
