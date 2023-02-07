<div class="grid grid-cols-1 px-10 py-10" x-data="{editModal : false, deleteModal : false}">
    {{-- Edit Modal --}}
    <form>
        <x-modal.edit-checklist />
    </form>
    {{-- Delete Modal --}}
    <form>
        <x-modal.app-delete>
            <x-slot name="title">
                <span>PO </span>
                <span class="dark:text-red-400 font-semibold">{{ $confPo }}</span>
            </x-slot>
        </x-modal.app-delete>
    </form>
    {{-- Content --}}
    <x-card-scale>
        {{-- Card Title --}}
        <x-slot name="title">
            DATA PPRODUKSI VERIFIKASI
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
                    {{-- Filter NP --}}
                    <div
                        class="flex gap-2 px-2 py-1 transition duration-300 ease-in-out focus-within:ring-1 text-blue-600 border-blue-600 dark:text-blue-500 border dark:border-blue-500 rounded dark:focus-within:brightness-125 focus-within:shadow-lg focus-within:shadow-blue-500/20">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="w-6 h-6 text-blue-600">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M3.375 19.5h17.25m-17.25 0a1.125 1.125 0 01-1.125-1.125M3.375 19.5h7.5c.621 0 1.125-.504 1.125-1.125m-9.75 0V5.625m0 12.75v-1.5c0-.621.504-1.125 1.125-1.125m18.375 2.625V5.625m0 12.75c0 .621-.504 1.125-1.125 1.125m1.125-1.125v-1.5c0-.621-.504-1.125-1.125-1.125m0 3.75h-7.5A1.125 1.125 0 0112 18.375m9.75-12.75c0-.621-.504-1.125-1.125-1.125H3.375c-.621 0-1.125.504-1.125 1.125m19.5 0v1.5c0 .621-.504 1.125-1.125 1.125M2.25 5.625v1.5c0 .621.504 1.125 1.125 1.125m0 0h17.25m-17.25 0h7.5c.621 0 1.125.504 1.125 1.125M3.375 8.25c-.621 0-1.125.504-1.125 1.125v1.5c0 .621.504 1.125 1.125 1.125m17.25-3.75h-7.5c-.621 0-1.125.504-1.125 1.125m8.625-1.125c.621 0 1.125.504 1.125 1.125v1.5c0 .621-.504 1.125-1.125 1.125m-17.25 0h7.5m-7.5 0c-.621 0-1.125.504-1.125 1.125v1.5c0 .621.504 1.125 1.125 1.125M12 10.875v-1.5m0 1.5c0 .621-.504 1.125-1.125 1.125M12 10.875c0 .621.504 1.125 1.125 1.125m-2.25 0c.621 0 1.125.504 1.125 1.125M13.125 12h7.5m-7.5 0c-.621 0-1.125.504-1.125 1.125M20.625 12c.621 0 1.125.504 1.125 1.125v1.5c0 .621-.504 1.125-1.125 1.125m-17.25 0h7.5M12 14.625v-1.5m0 1.5c0 .621-.504 1.125-1.125 1.125M12 14.625c0 .621.504 1.125 1.125 1.125m-2.25 0c.621 0 1.125.504 1.125 1.125m0 1.5v-1.5m0 0c0-.621.504-1.125 1.125-1.125m0 0h7.5" />
                        </svg>
                        <select
                            class="-my-1 -mr-2 text-xs text-slate-700 transition duration-150 dark:border-blue-500 border-none rounded-r appearance-none focus:ring-0 dark:bg-slate-800 dark:bg-opacity-10 focus:bg-opacity-100 dark:text-slate-100"
                            wire:model="produk">
                            <option value="PCHT">PCHT</option>
                            <option value="MMEA">MMEA</option>
                        </select>
                    </div>
                    {{-- Filter Date Range --}}
                    <div
                        class="flex gap-2 px-2 py-1 transition duration-300 ease-in-out focus-within:ring-1 text-blue-600 border-blue-600 dark:text-blue-500 border dark:border-blue-500 rounded dark:focus-within:brightness-125 focus-within:shadow-lg focus-within:shadow-blue-500/20">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                            class="w-6 h-6 text-blue-600">
                            <path
                                d="M12.75 12.75a.75.75 0 11-1.5 0 .75.75 0 011.5 0zM7.5 15.75a.75.75 0 100-1.5.75.75 0 000 1.5zM8.25 17.25a.75.75 0 11-1.5 0 .75.75 0 011.5 0zM9.75 15.75a.75.75 0 100-1.5.75.75 0 000 1.5zM10.5 17.25a.75.75 0 11-1.5 0 .75.75 0 011.5 0zM12 15.75a.75.75 0 100-1.5.75.75 0 000 1.5zM12.75 17.25a.75.75 0 11-1.5 0 .75.75 0 011.5 0zM14.25 15.75a.75.75 0 100-1.5.75.75 0 000 1.5zM15 17.25a.75.75 0 11-1.5 0 .75.75 0 011.5 0zM16.5 15.75a.75.75 0 100-1.5.75.75 0 000 1.5zM15 12.75a.75.75 0 11-1.5 0 .75.75 0 011.5 0zM16.5 13.5a.75.75 0 100-1.5.75.75 0 000 1.5z" />
                            <path fill-rule="evenodd"
                                d="M6.75 2.25A.75.75 0 017.5 3v1.5h9V3A.75.75 0 0118 3v1.5h.75a3 3 0 013 3v11.25a3 3 0 01-3 3H5.25a3 3 0 01-3-3V7.5a3 3 0 013-3H6V3a.75.75 0 01.75-.75zm13.5 9a1.5 1.5 0 00-1.5-1.5H5.25a1.5 1.5 0 00-1.5 1.5v7.5a1.5 1.5 0 001.5 1.5h13.5a1.5 1.5 0 001.5-1.5v-7.5z"
                                clip-rule="evenodd" />
                        </svg>
                        <input type="text" id="dateRange" name="dateRange"
                            class="-my-1 -mr-2 text-xs text-slate-700 transition duration-150 dark:border-blue-500 border-none rounded-r appearance-none focus:ring-0 dark:bg-slate-800 dark:bg-opacity-10 focus:bg-opacity-100 dark:text-slate-100"
                            placeholder="Periode" />
                    </div>
                    {{-- Search --}}
                    <div class="relative flex flex-wrap gap-3">
                        <div class="relative">
                            <input type="text" wire:model="search"
                                class="py-2 pl-10 pr-4 text-xs font-medium text-gray-600 border-t rounded border border-slate-400 shadow focus:shadow-md focus:shadow-blue-500/30 focus:border-blue-500 focus:ring-blue-600 focus:outline-none focus:ring-1 hover:border-blue-500 transition ease-out duration-150"
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
                        {{-- Button Export --}}
                        <div>
                            <button wire:click='exportExcel'
                                class="flex gap-2 px-2 py-1 text-green-400 border-2 border-green-400 rounded-md brightness-110 hover:shadow-lg hover:shadow-green-400/30 hover:brightness-125">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M19.5 14.25v-2.625a3.375 3.375 0 00-3.375-3.375h-1.5A1.125 1.125 0 0113.5 7.125v-1.5a3.375 3.375 0 00-3.375-3.375H8.25m0 12.75h7.5m-7.5 3H12M10.5 2.25H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 00-9-9z" />
                                </svg>
                                <span>Excel</span>
                            </button>
                        </div>
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
                                            {{-- 2.1.2 Nomor Pokok --}}
                                            <th scope="col"
                                                class="p-3 text-center border-slate-300 dark:border-slate-500">
                                                OBC
                                            </th>
                                            {{-- 2.1.2 Nomor Pokok --}}
                                            <th scope="col"
                                                class="p-3 text-center border-slate-300 dark:border-slate-500">
                                                Nomor PO
                                            </th>
                                            {{-- 2.1.3 Nama --}}
                                            <th scope="col"
                                                class="p-3 text-center border-slate-300 dark:border-slate-500">
                                                Jumlah Cetak
                                            </th>
                                            {{-- 2.1.4 Tanggal CK3 --}}
                                            <th scope="col"
                                                class="p-3 text-center border-slate-300 dark:border-slate-500">
                                                Baik Periksa
                                            </th>
                                            {{-- 2.1.5 Jenis Barang --}}
                                            <th scope="col"
                                                class="p-3 text-center border-slate-300 dark:border-slate-500">
                                                Rusak Periksa
                                            </th>
                                            {{-- 2.1.7 Total Retur --}}
                                            <th scope="col"
                                                class="p-3 text-center border-slate-300 dark:border-slate-500">
                                                Jenis Kerusakan
                                            </th>
                                            {{-- 2.1.8 Action --}}
                                            <th scope="col"
                                                class="p-3 text-center border-slate-300 dark:border-slate-500">
                                                Keterangan
                                            </th>
                                            {{-- 2.1.8 Action --}}
                                            <th scope="col"
                                                class="p-3 text-center border-slate-300 dark:border-slate-500">
                                                Petugas
                                            </th>
                                            {{-- 2.1.8 Action --}}
                                            <th scope="col"
                                                class="p-3 text-center border-slate-300 dark:border-slate-500">
                                                Mesin
                                            </th>
                                            {{-- 2.1.8 Action --}}
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
                                            class="transition border-b duration-300 ease-in-out  border-slate-300 text-slate-800 hover:bg-slate-400 hover:bg-opacity-10 dark:text-slate-100">
                                            {{-- Nomor --}}
                                            <td
                                                class="p-3 text-sm text-center font-medium whitespace-nowrap text-slate-700 dark:border-slate-500 dark:text-slate-100">
                                                {{ $data->firstItem() + $loop->index }}
                                            </td>
                                            {{-- OBC --}}
                                            <td
                                                class="p-3 text-sm text-center whitespace-nowrap text-slate-700 dark:border-slate-500 dark:text-slate-100">
                                                {{ $datas->no_obc }}
                                            </td>
                                            {{-- Nomor PO --}}
                                            <td
                                                class="p-3 text-sm text-center font-light whitespace-nowrap text-slate-700 dark:border-slate-500 dark:text-slate-100">
                                                {{ $datas->po_hcts }}
                                            </td>
                                            {{-- Jumlah Cetak --}}
                                            <td
                                                class="p-3 text-sm text-right font-light whitespace-nowrap text-slate-700 dark:border-slate-500 dark:text-slate-100">
                                                {{ number_format($datas->rencet,0) }}
                                            </td>
                                            {{-- Baik Verifikasi --}}
                                            <td
                                                class="p-3 text-sm text-right font-light whitespace-nowrap text-slate-700 dark:border-slate-500 dark:text-slate-100">
                                                {{ number_format($datas->hcs_verif,) }}
                                            </td>
                                            {{-- Rusak Verifikasi --}}
                                            <td
                                                class="p-3 text-sm text-right font-light whitespace-nowrap text-slate-700 dark:border-slate-500 dark:text-slate-100">
                                                {{ number_format($datas->hcts_verif,0) }}
                                            </td>
                                            {{-- Jenis Kerusakan --}}
                                            <td
                                                class="flex flex-wrap justify-start gap-2 px-4 py-2 text-sm text-center dark:border-slate-500 text-slate-800 dark:text-slate-100">
                                                @if ($datas->blobor == !null)
                                                <span
                                                    class="inline-block whitespace-nowrap rounded-full bg-red-600  py-1 px-2.5 text-center align-baseline text-xs font-bold leading-none text-slate-100">
                                                    Blobor ( {{ $datas->blobor }} )
                                                </span>
                                                @endif
                                                @if ($datas->hologram == !null)
                                                <span
                                                    class="inline-block whitespace-nowrap rounded-full bg-red-600 py-1 px-2.5 text-center align-baseline text-xs font-bold leading-none text-slate-100">
                                                    Hologram ({{ $datas->hologram }})
                                                </span>
                                                @endif
                                                @if ($datas->miss_reg == !null)
                                                <span
                                                    class="inline-block whitespace-nowrap rounded-full bg-red-600 py-1 px-2.5 text-center align-baseline text-xs font-bold leading-none text-slate-100">
                                                    Miss Register ({{ $datas->miss_reg }})
                                                </span>
                                                @endif
                                                @if ($datas->noda == !null)
                                                <span
                                                    class="inline-block whitespace-nowrap rounded-full bg-red-600 py-1 px-2.5 text-center align-baseline text-xs font-bold leading-none text-slate-100">
                                                    Noda ({{ $datas->noda }})
                                                </span>
                                                @endif
                                                @if ($datas->plooi == !null)
                                                <span
                                                    class="inline-block whitespace-nowrap rounded-full bg-red-600 py-1 px-2.5 text-center align-baseline text-xs font-bold leading-none text-slate-100">
                                                    Plooi ({{ $datas->plooi }})
                                                </span>
                                                @endif
                                                @if ($datas->blur == !null)
                                                <span
                                                    class="inline-block whitespace-nowrap rounded-full bg-red-600 py-1 px-2.5 text-center align-baseline text-xs font-bold leading-none text-slate-100">
                                                    Blur ({{ $datas->blur }})
                                                </span>
                                                @endif
                                                @if ($datas->gradasi == !null)
                                                <span
                                                    class="inline-block whitespace-nowrap rounded-full bg-red-600 py-1 px-2.5 text-center align-baseline text-xs font-bold leading-none text-slate-100">
                                                    Gradasi ({{ $datas->gradasi }})
                                                </span>
                                                @endif
                                                @if ($datas->terpotong == !null)
                                                <span
                                                    class="inline-block whitespace-nowrap rounded-full bg-red-600 py-1 px-2.5 text-center align-baseline text-xs font-bold leading-none text-slate-100">
                                                    Terpotong ({{ $datas->terpotong }})
                                                </span>
                                                @endif
                                                @if ($datas->tipis == !null)
                                                <span
                                                    class="inline-block whitespace-nowrap rounded-full bg-red-600 py-1 px-2.5 text-center align-baseline text-xs font-bold leading-none text-slate-100">
                                                    Tipis ({{ $datas->tipis }})
                                                </span>
                                                @endif
                                                @if ($datas->sobek == !null)
                                                <span
                                                    class="inline-block whitespace-nowrap rounded-full bg-red-600 py-1 px-2.5 text-center align-baseline text-xs font-bold leading-none text-slate-100">
                                                    Sobek ({{ $datas->sobek }})
                                                </span>
                                                @endif
                                                @if ($datas->botak == !null)
                                                <span
                                                    class="inline-block whitespace-nowrap rounded-full bg-red-600 py-1 px-2.5 text-center align-baseline text-xs font-bold leading-none text-slate-100">
                                                    Botak ({{ $datas->botak }})
                                                </span>
                                                @endif
                                                @if ($datas->tercampur == !null)
                                                <span
                                                    class="inline-block whitespace-nowrap rounded-full bg-red-600 py-1 px-2.5 text-center align-baseline text-xs font-bold leading-none text-slate-100">
                                                    Tercampur ({{ $datas->tercampur }})
                                                </span>
                                                @endif
                                                @if ($datas->diecut == !null)
                                                <span
                                                    class="inline-block whitespace-nowrap rounded-full bg-red-600 py-1 px-2.5 text-center align-baseline text-xs font-bold leading-none text-slate-100">
                                                    Diecut ({{ $datas->diecut }})
                                                </span>
                                                @endif
                                            </td>
                                            {{-- Keterangan --}}
                                            <td
                                                class="p-3 text-sm text-center font-light whitespace-nowrap text-slate-700 dark:border-slate-500 dark:text-slate-100">
                                                {{ $datas->keterangan }}
                                            </td>
                                            {{-- Petugas --}}
                                            <td
                                                class="p-3 text-sm text-center font-light whitespace-nowrap text-slate-700 dark:border-slate-500 dark:text-slate-100">
                                                {{ $datas->petugas1 }} | {{ $datas->petugas2 }}
                                            </td>
                                            {{-- Mesin --}}
                                            <td
                                                class="p-3 text-sm text-center font-light whitespace-nowrap text-slate-700 dark:border-slate-500 dark:text-slate-100">
                                                @if ($datas->mesin == !null)
                                                {{ \App\Models\Mesin::where('kode_mesin',$datas->mesin)->value('mesin')
                                                }}
                                                @else
                                                -
                                                @endif
                                            </td>
                                            {{-- --}}
                                            <td
                                                class="p-3 text-sm text-center font-light whitespace-nowrap text-slate-700 dark:border-slate-500 dark:text-slate-100">
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
                                            class="transition border-b duration-300 ease-in-out  border-slate-300 text-slate-800 hover:bg-slate-400 hover:bg-opacity-10 dark:text-slate-100">
                                            <td colspan="11"
                                                class="p-3 text-lg text-center font-medium whitespace-nowrap text-slate-700 dark:border-slate-500 dark:text-slate-100">
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
                {{ $data->links('vendor.livewire.tailwind') }}
            </div>
            {{-- End Footer --}}
        </div>
    </x-card-scale>
</div>

@section('plugin-js')
<link rel="stylesheet" href="{{ asset('plugins/daterangepicker.css') }}">
<script src="{{ asset('plugins/jquery-3.6.1.min.js') }}"></script>
<script src="{{ asset('plugins/moment.min.js') }}"></script>
<script src="{{ asset('plugins/daterangepicker.min.js') }}"></script>
@endsection

@push('js')
<script>
    $('#dateRange').daterangepicker({
                ranges: {
                    'Hari Ini': [moment(), moment()],
                    'Kemarin': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
                    '7 Hari Terakhir': [moment().subtract(6, 'days'), moment()],
                    '30 Hari Terakhir': [moment().subtract(29, 'days'), moment()],
                    'Bulan Ini': [moment().startOf('month'), moment().endOf('month')],
                    'Bulan Kemarin': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
                },
                "locale": {
                    "format": "DD-MM-YYYY",
                    "separator": " - ",
                    "applyLabel": "Apply",
                    "cancelLabel": "Cancel",
                    "fromLabel": "From",
                    "toLabel": "To",
                    "customRangeLabel": "Custom",
                    "weekLabel": "W",
                    "daysOfWeek": [
                        "Min",
                        "Sen",
                        "Sel",
                        "Rab",
                        "Kam",
                        "Jum",
                        "Sab"
                    ],
                    "monthNames": [
                        "Januari",
                        "Febuari",
                        "Maret",
                        "April",
                        "Mei",
                        "Juni",
                        "Juli",
                        "Augustus",
                        "September",
                        "Oktober",
                        "November",
                        "December"
                    ],
                    "firstDay": 1
                },
                "startDate": moment(),
                "endDate": moment(),
                "opens": "auto"
            }, function(start, end, label) {
                @this.set('startDate',start.format('YYYY-MM-DD'));
                @this.set('endDate',end.format('YYYY-MM-DD'));;
            });
</script>
@endpush
