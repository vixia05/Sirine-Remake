<div class="flex justify-center">
    <div class="w-full rounded-md bg-white/70 dark:bg-slate-800 dark:bg-opacity-60 dark:backdrop-blur-sm dark:backdrop-filter">
        {{-- Header --}}
        <div class="px-10 py-4">
            <h4 class="my-auto font-sans text-2xl font-semibold leading-tight text-slate-800 dark:text-slate-100">DATA KELOLOSAN</h4>
        </div>
        {{-- Body --}}
        <div class="px-4 pb-4">
            {{-- 1.0 Filter & Search Section --}}
            <div class="rounded-t border border-slate-400 bg-inerhit dark:border-slate-500 dark:bg-slate-700 dark:bg-opacity-50 px-4 py-6 ">
                <div class="flex justify-start">
                    <div class="relative">
                        <input type="text" wire:model="search"
                            class="rounded-lg border-t py-2 pl-10 pr-4 text-xs font-medium text-gray-600 shadow focus:border-gray-400 focus:outline-none focus:ring-0"
                            placeholder="Search...">
                        <div class="absolute top-0 left-0 inline-flex items-center pt-2 pl-2 text-gray-500">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20"
                                fill="currentColor">
                                <path fill-rule="evenodd"
                                    d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                                    clip-rule="evenodd" />
                            </svg>
                        </div>
                    </div>
                </div>
            </div>
            {{-- End Filter & Search --}}
            {{-- 2.0 Table --}}
            <div
                class="row-span-3 overflow-hidden border-x border-slate-400 bg-inerhit dark:border-slate-500 dark:bg-slate-700 dark:bg-opacity-50 ">
                <div class="flex flex-col">
                    <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
                        <div class="inline-block min-w-full sm:px-6 lg:px-8">
                            <div class="overflow-hidden">
                                <table class="min-w-full">
                                    {{-- 2.1 Header Table --}}
                                    <thead class="border-b border-slate-400 dark:border-slate-500 text-base font-bold text-slate-600 dark:text-slate-400">
                                        <tr>
                                            {{-- 2.1.1 Index --}}
                                            <th scope="col" class="border-r border-slate-400 dark:border-slate-500 px-4 py-2 text-center">
                                                No
                                            </th>
                                            {{-- 2.1.2 Nomor Pokok --}}
                                            <th scope="col" class="border-r border-slate-400 dark:border-slate-500 px-4 py-2 text-center">
                                                NP
                                            </th>
                                            {{-- 2.1.3 Nama --}}
                                            <th scope="col" class="border-r border-slate-400 dark:border-slate-500 px-4 py-2 text-center">
                                                Nama
                                            </th>
                                            {{-- 2.1.4 Tanggal CK3 --}}
                                            <th scope="col" class="border-r border-slate-400 dark:border-slate-500 px-4 py-2 text-center">
                                                Periode CK3
                                            </th>
                                            {{-- 2.1.5 Jenis Barang --}}
                                            <th scope="col" class="border-r border-slate-400 dark:border-slate-500 px-4 py-2 text-center">
                                                Produk
                                            </th>
                                            {{-- 2.1.6 Jenis Retur --}}
                                            <th scope="col" class="border-r border-slate-400 dark:border-slate-500 px-4 py-2 text-center">
                                                Jenis Retur
                                            </th>
                                            {{-- 2.1.7 Total Retur --}}
                                            <th scope="col" class="border-r border-slate-400 dark:border-slate-500 px-4 py-2 text-center">
                                                Total Retur
                                            </th>
                                            {{-- 2.1.8 Action --}}
                                            <th scope="col" class="border-b border-slate-400 dark:border-slate-500 px-4 py-2 text-center">
                                                Action
                                            </th>
                                        </tr>
                                    </thead>
                                    {{-- 2.2 Body Table --}}
                                    <tbody>
                                        @foreach ($data as $datas)
                                            <tr
                                                class="transition duration-300 ease-in-out hover:bg-slate-400 hover:bg-opacity-10">
                                                {{-- 2.2.1 Index Coloumn --}}
                                                <td
                                                    class="whitespace-nowrap border-y border-slate-400 dark:border-slate-500 px-4 py-2 text-center text-sm text-slate-800 dark:text-slate-100">
                                                    {{ $data->firstItem() + $loop->index }}
                                                </td>
                                                {{-- 2.2.2 Np User Coloumn --}}
                                                <td
                                                    class="whitespace-nowrap border border-slate-400 dark:border-slate-500 px-4 py-2 text-center text-sm text-slate-800 dark:text-slate-100">
                                                    {{ $datas->np_user }}
                                                </td>
                                                {{-- 2.2.3 Nama User Coloumn --}}
                                                <td
                                                    class="border border-slate-400 dark:border-slate-500 px-4 py-2 text-center text-sm text-slate-800 dark:text-slate-100">
                                                    {{ $datas->nama_user }}
                                                </td>
                                                {{-- 2.2.4 Tanggal CK3 Coloumn --}}
                                                <td
                                                    class="whitespace-nowrap border border-slate-400 dark:border-slate-500 px-4 py-2 text-center text-sm text-slate-800 dark:text-slate-100">
                                                    {{ Carbon\Carbon::parse($datas->tgl_cek)->format('d-F-Y') }}
                                                </td>
                                                {{-- 2.2.5 Jenis Product Coloumn --}}
                                                <td
                                                    class="whitespace-nowrap border border-slate-400 dark:border-slate-500 px-4 py-2 text-center text-sm text-slate-800 dark:text-slate-100">
                                                    {{ $datas->jenis }}
                                                </td>
                                                {{-- 2.2.6 Jenis Retur Coloumn --}}
                                                <td
                                                    class="border border-slate-400 dark:border-slate-500 px-4 py-2 text-center text-sm text-slate-800 dark:text-slate-100">
                                                    <div class="flex flex-wrap justify-center space-x-2">
                                                        @if ($datas->blobor == !null)
                                                            <span
                                                                class="inline-block whitespace-nowrap rounded-full bg-red-600 py-1 px-2.5 text-center align-baseline text-xs font-bold leading-none text-slate-100">
                                                                Blobor
                                                            </span>
                                                        @endif
                                                        @if ($datas->hologram == !null)
                                                            <span
                                                                class="inline-block whitespace-nowrap rounded-full bg-red-600 py-1 px-2.5 text-center align-baseline text-xs font-bold leading-none text-slate-100">
                                                                Hologram
                                                            </span>
                                                        @endif
                                                        @if ($datas->blobor == !null)
                                                            <span
                                                                class="inline-block whitespace-nowrap rounded-full bg-red-600 py-1 px-2.5 text-center align-baseline text-xs font-bold leading-none text-slate-100">
                                                                Blobor
                                                            </span>
                                                        @endif
                                                        @if ($datas->miss_reg == !null)
                                                            <span
                                                                class="inline-block whitespace-nowrap rounded-full bg-red-600 py-1 px-2.5 text-center align-baseline text-xs font-bold leading-none text-slate-100">
                                                                Miss Register
                                                            </span>
                                                        @endif
                                                        @if ($datas->noda == !null)
                                                            <span
                                                                class="inline-block whitespace-nowrap rounded-full bg-red-600 py-1 px-2.5 text-center align-baseline text-xs font-bold leading-none text-slate-100">
                                                                Noda
                                                            </span>
                                                        @endif
                                                        @if ($datas->plooi == !null)
                                                            <span
                                                                class="inline-block whitespace-nowrap rounded-full bg-red-600 py-1 px-2.5 text-center align-baseline text-xs font-bold leading-none text-slate-100">
                                                                Plooi
                                                            </span>
                                                        @endif
                                                        @if ($datas->blur == !null)
                                                            <span
                                                                class="inline-block whitespace-nowrap rounded-full bg-red-600 py-1 px-2.5 text-center align-baseline text-xs font-bold leading-none text-slate-100">
                                                                Blur
                                                            </span>
                                                        @endif
                                                        @if ($datas->gradasi == !null)
                                                            <span
                                                                class="inline-block whitespace-nowrap rounded-full bg-red-600 py-1 px-2.5 text-center align-baseline text-xs font-bold leading-none text-slate-100">
                                                                Gradasi
                                                            </span>
                                                        @endif
                                                        @if ($datas->terpotong == !null)
                                                            <span
                                                                class="inline-block whitespace-nowrap rounded-full bg-red-600 py-1 px-2.5 text-center align-baseline text-xs font-bold leading-none text-slate-100">
                                                                Terpotong
                                                            </span>
                                                        @endif
                                                        @if ($datas->tipis == !null)
                                                            <span
                                                                class="inline-block whitespace-nowrap rounded-full bg-red-600 py-1 px-2.5 text-center align-baseline text-xs font-bold leading-none text-slate-100">
                                                                Tipis
                                                            </span>
                                                        @endif
                                                        @if ($datas->sobek == !null)
                                                            <span
                                                                class="inline-block whitespace-nowrap rounded-full bg-red-600 py-1 px-2.5 text-center align-baseline text-xs font-bold leading-none text-slate-100">
                                                                Sobek
                                                            </span>
                                                        @endif
                                                        @if ($datas->botak == !null)
                                                            <span
                                                                class="inline-block whitespace-nowrap rounded-full bg-red-600 py-1 px-2.5 text-center align-baseline text-xs font-bold leading-none text-slate-100">
                                                                Botak
                                                            </span>
                                                        @endif
                                                        @if ($datas->tercampur == !null)
                                                            <span
                                                                class="inline-block whitespace-nowrap rounded-full bg-red-600 py-1 px-2.5 text-center align-baseline text-xs font-bold leading-none text-slate-100">
                                                                Tercampur
                                                            </span>
                                                        @endif
                                                        @if ($datas->diecut == !null)
                                                            <span
                                                                class="inline-block whitespace-nowrap rounded-full bg-red-600 py-1 px-2.5 text-center align-baseline text-xs font-bold leading-none text-slate-100">
                                                                Diecut
                                                            </span>
                                                        @endif
                                                    </div>
                                                </td>
                                                {{-- 2.2.7 Total Retur Coloumn --}}
                                                <td
                                                    class="whitespace-nowrap border border-slate-400 dark:border-slate-500 px-4 py-2 text-center text-sm text-slate-800 dark:text-slate-100">
                                                    {{ $datas->jml_retur }}
                                                </td>
                                                {{-- 2.2.11 Action Coloumn --}}
                                                <td
                                                    class="border-y border-slate-400 dark:border-slate-500 px-4 py-2 text-center text-sm text-slate-800 dark:text-slate-100">
                                                    <div class="flex justify-center space-x-2">
                                                        <button type="button" type="button" data-mdb-ripple="true"
                                                            data-mdb-ripple-color="light"
                                                            class="inline-block rounded bg-green-500 px-3 py-2 text-sm font-semibold leading-tight  text-slate-100 shadow-md transition duration-150 ease-in-out hover:bg-green-600 hover:shadow-lg focus:bg-green-600 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-green-700 active:shadow-lg">
                                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5"
                                                                viewBox="0 0 20 20" fill="currentColor">
                                                                <path
                                                                    d="M17.414 2.586a2 2 0 00-2.828 0L7 10.172V13h2.828l7.586-7.586a2 2 0 000-2.828z" />
                                                                <path fill-rule="evenodd"
                                                                    d="M2 6a2 2 0 012-2h4a1 1 0 010 2H4v10h10v-4a1 1 0 112 0v4a2 2 0 01-2 2H4a2 2 0 01-2-2V6z"
                                                                    clip-rule="evenodd" />
                                                            </svg>
                                                        </button>
                                                        <button type="button" type="button" data-mdb-ripple="true"
                                                            data-mdb-ripple-color="light"
                                                            class="inline-block rounded bg-red-500 px-3 py-2 text-sm font-semibold leading-tight text-slate-100 shadow-md transition duration-150 ease-in-out hover:bg-red-600 hover:shadow-lg focus:bg-red-600 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-red-700 active:shadow-lg">
                                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5"
                                                                viewBox="0 0 20 20" fill="currentColor">
                                                                <path fill-rule="evenodd"
                                                                    d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z"
                                                                    clip-rule="evenodd" />
                                                            </svg>
                                                        </button>
                                                    </div>
                                                </td>
                                            </tr>
                                        @endforeach
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
                class="overflow-hidden rounded-b border-x border-b border-slate-400 bg-inerhit dark:border-slate-500 dark:bg-slate-700 dark:bg-opacity-50 px-10 py-2 text-slate-800 dark:text-slate-100 ">
                {{ $data->links('vendor.livewire.tailwind') }}
            </div>
            {{-- End Footer --}}
        </div>
    </div>
</div>
