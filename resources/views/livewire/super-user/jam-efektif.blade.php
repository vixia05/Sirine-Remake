<div class="container py-10 mx-auto"
     x-data="{deleteModal: false, editModal: false, addTarget: false}"
     @keydown.escape="{deleteModal = false; editModal = false; addTarget = false}">
     {{-- Modalt --}}
        <x-modal.add-target/>
        <x-modal.edit-jamEfektif/>
        <x-modal.delete-jamEfektif/>
    {{-- @include('components.modal.update-target') --}}
    {{-- Content --}}
    <x-card-scale>
        {{-- Card Title --}}
        <x-slot name="title">
            Target & Jam Efektif
        </x-slot>

        {{-- Body --}}
        <div class="px-4 pb-4">
            @if(session('saved'))
            <div
                class="p-2 my-3 text-center text-green-100 bg-green-500 rounded shadow-lg brightness-110 shadow-green-500/50">
                <h5 class="text-2xl">Jenis Kerusakan {{ session('saved') }} Berhasil Di Ubah</h5>
            </div>
            @endif
            @if(session('deleted'))
            <div
                class="p-2 my-3 text-center text-red-100 bg-red-500 rounded shadow-lg brightness-110 shadow-red-500/50">
                <h5 class="text-2xl">Data Produksi {{ session('deleted') }} Berhasil Di Hapus</h5>
            </div>
            @endif
            {{-- 1.0 Filter & Search Section --}}
            <div
                class="p-4 text-sm border-y bg-inerhit border-slate-300 bg-opacity-30 dark:border-slate-500 dark:bg-slate-700 dark:bg-opacity-50">
                <div class="flex flex-wrap justify-between gap-3">
                    {{-- Search --}}
                    <div class="relative flex flex-wrap gap-3">
                        <div class="relative">
                            <input type="text" wire:model="search"
                                class="py-2 pl-10 pr-4 text-xs font-medium text-gray-600 transition duration-150 ease-out border border-t rounded shadow border-slate-400 focus:shadow-md focus:shadow-blue-500/30 focus:border-blue-500 focus:ring-blue-600 focus:outline-none focus:ring-1 hover:border-blue-500"
                                placeholder="Search...">
                            <div class="absolute top-0 left-0 inline-flex items-center pt-2 pl-2 text-gray-500">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" viewBox="0 0 20 20"
                                    fill="currentColor">
                                    <path fill-rule="evenodd"
                                        d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                                        clip-rule="evenodd" />
                                </svg>
                            </div>
                        </div>
                    </div>
                    {{-- Tambah Target --}}
                    <div>
                        <button @click.prevent='addTarget = true'
                            class="flex gap-2 px-2 py-1 text-white bg-green-400 border-2 rounded-md border-green-500/30 brightness-110 hover:shadow-lg hover:shadow-green-400/30 hover:brightness-125">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M19.5 14.25v-2.625a3.375 3.375 0 00-3.375-3.375h-1.5A1.125 1.125 0 0113.5 7.125v-1.5a3.375 3.375 0 00-3.375-3.375H8.25m0 12.75h7.5m-7.5 3H12M10.5 2.25H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 00-9-9z" />
                            </svg>
                            <span>Tambah Target</span>
                        </button>
                    </div>
                </div>
            </div>
            {{-- End Filter & Search --}}
            {{-- 2.0 Table --}}
            <div
                class="overflow-hidden border-t border-slate-400 bg-inherit dark:border-slate-500 dark:bg-slate-700 dark:bg-opacity-50">
                <div class="flex flex-col">
                    <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
                        <div class="inline-block min-w-full sm:px-6 lg:px-8">
                            <div class="overflow-hidden">
                                <table class="min-w-full">
                                    {{-- 2.1 Header Table --}}
                                    <thead
                                        class="text-sm font-bold border-b-2 border-slate-300 text-slate-700 dark:border-slate-500 dark:text-slate-400">
                                        <tr>
                                            {{-- 2.1.1 Index --}}
                                            <th scope="col"
                                                class="p-3 text-center border-slate-300 dark:border-slate-500">
                                                No
                                            </th>
                                            {{-- 2.1.2 Workstation --}}
                                            <th scope="col"
                                                class="p-3 text-center border-slate-300 dark:border-slate-500">
                                                Workstation
                                            </th>
                                            {{-- 2.1.2 Gilir --}}
                                            <th scope="col"
                                                class="p-3 text-center border-slate-300 dark:border-slate-500">
                                                Gilir
                                            </th>
                                            {{-- 2.1.3 Jam Efektif --}}
                                            <th scope="col"
                                                class="p-3 text-end border-slate-300 dark:border-slate-500">
                                                Jam Efektif
                                            </th>
                                            {{-- 2.1.4 Target / Jam --}}
                                            <th scope="col"
                                                class="p-3 text-end border-slate-300 dark:border-slate-500">
                                                Target / Jam
                                            </th>
                                            {{-- 2.1.5 Target / Hari --}}
                                            <th scope="col"
                                                class="p-3 text-end border-slate-300 dark:border-slate-500">
                                                Target / Hari
                                            </th>
                                            {{-- 2.1.8 Seksi --}}
                                            <th scope="col"
                                                class="p-3 text-center border-slate-300 dark:border-slate-500">
                                                Seksi
                                            </th>
                                            {{-- 2.1.9 Action --}}
                                            <th scope="col"
                                                class="px-4 py-2 text-center border-b border-slate-400 dark:border-slate-500">
                                                Action
                                            </th>
                                        </tr>
                                    </thead>
                                    {{-- 2.2 Body Table --}}
                                    <tbody>
                                            <x-loading></x-loading>
                                        @forelse ($data as $datas)
                                        <tr
                                            class="transition duration-300 ease-in-out border-b border-slate-300 text-slate-800 hover:bg-slate-400 hover:bg-opacity-10 dark:text-slate-100">
                                            {{-- Nomor --}}
                                            <td
                                                class="p-3 text-sm font-medium text-center whitespace-nowrap text-slate-700 dark:border-slate-500 dark:text-slate-100">

                                            </td>
                                            {{-- Workstation --}}
                                            <td
                                                class="p-3 text-sm text-center whitespace-nowrap text-slate-700 dark:border-slate-500 dark:text-slate-100">
                                                {{ $datas->workstation->workstation }}
                                            </td>
                                            {{-- Gilir --}}
                                            <td
                                                class="p-3 text-sm font-light text-center whitespace-nowrap text-slate-700 dark:border-slate-500 dark:text-slate-100">
                                                {{ $datas->gilir }}
                                            </td>
                                            {{-- Jam Efektif --}}
                                            <td
                                                class="p-3 text-sm font-light text-right whitespace-nowrap text-slate-700 dark:border-slate-500 dark:text-slate-100">
                                                {{ $datas->jam_efektif }} Jam
                                            </td>
                                            {{-- Target / Jam --}}
                                            <td
                                                class="p-3 text-sm font-light text-right whitespace-nowrap text-slate-700 dark:border-slate-500 dark:text-slate-100">
                                                {{ number_format($datas->target,0) }} / {{ $datas->satuan }}
                                            </td>
                                            {{-- Target / Hari --}}
                                            <td
                                                class="p-3 text-sm font-light text-right whitespace-nowrap text-slate-700 dark:border-slate-500 dark:text-slate-100">
                                                {{ number_format($datas->target * $datas->jam_efektif,0) }} / {{ $datas->satuan }}
                                            </td>
                                            {{-- Seksi --}}
                                            <td
                                                class="p-3 text-sm font-light text-center whitespace-nowrap text-slate-700 dark:border-slate-500 dark:text-slate-100">
                                                {{ $datas->seksi->seksi }}
                                            </td>
                                            {{-- Action--}}
                                            <td
                                                class="p-3 text-sm font-light text-center whitespace-nowrap text-slate-700 dark:border-slate-500 dark:text-slate-100">
                                                <div class="flex justify-center gap-2">
                                                    <button type="button" data-mdb-ripple="true"
                                                        @click.prevent="editModal = true"
                                                        wire:click='edit({{ $datas->po_hcts }})'
                                                        data-mdb-ripple-color="light"
                                                        class="inline-block px-2 py-1.5 text-sm font-semibold transition duration-150 drop-shadow-md  brightness-150 shadow-green-500/50 ease-in-out bg-green-600 rounded shadow-md leading-tighttext-slate-200 hover:bg-green-600 hover:shadow-lg focus:bg-green-600 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-green-700 active:shadow-lg">
                                                        <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg"
                                                            viewBox="0 0 20 20" fill="currentColor">
                                                            <path
                                                                d="M17.414 2.586a2 2 0 00-2.828 0L7 10.172V13h2.828l7.586-7.586a2 2 0 000-2.828z" />
                                                            <path fill-rule="evenodd"
                                                                d="M2 6a2 2 0 012-2h4a1 1 0 010 2H4v10h10v-4a1 1 0 112 0v4a2 2 0 01-2 2H4a2 2 0 01-2-2V6z"
                                                                clip-rule="evenodd" />
                                                        </svg>
                                                    </button>
                                                    <button type="button" data-mdb-ripple="true"
                                                        @click.prevent="deleteModal = true"
                                                        wire:click='delete({{ $datas->po_hcts }})'
                                                        data-mdb-ripple-color="light"
                                                        class="inline-block px-2 py-1.5 text-sm font-semibold transition duration-150 drop-shadow-md  brightness-150 shadow-red-500/50 ease-in-out bg-red-600 rounded shadow-md leading-tighttext-slate-200 hover:bg-red-600 hover:shadow-lg focus:bg-red-600 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-red-700 active:shadow-lg">
                                                        <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg"
                                                            viewBox="0 0 20 20" fill="currentColor">
                                                            <path fill-rule="evenodd"
                                                                d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z"
                                                                clip-rule="evenodd" />
                                                        </svg>
                                                    </button>
                                                </div>
                                            </td>
                                        </tr>
                                        @empty
                                        <tr
                                            class="transition duration-300 ease-in-out border-b border-slate-300 text-slate-800 hover:bg-slate-400 hover:bg-opacity-10 dark:text-slate-100">
                                            <td colspan="11"
                                                class="p-3 text-lg font-medium text-center whitespace-nowrap text-slate-700 dark:border-slate-500 dark:text-slate-100">
                                                Tidak Ada Record
                                            </td>
                                        </tr>
                                        @endforelse
                                    </tbody>
                                </table>
                                {{-- End Table --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {{-- 3.0 Footer --}}
            <div
                class="px-10 pt-2 pb-3 overflow-hidden border-b rounded-b bg-inerhit border-slate-300 text-slate-700 dark:border-slate-500 dark:bg-slate-700 dark:bg-opacity-50 dark:text-slate-100">
                {{-- {{ $data->links('vendor.livewire.tailwind') }} --}}
            </div>
            {{-- End Footer --}}
        </div>
    </x-card-scale>
</div>
