<div class="grid grid-cols-1">
    <div
        class="w-full rounded-md bg-white/70 dark:bg-slate-800 dark:bg-opacity-60 dark:backdrop-blur-sm dark:backdrop-filter">
        {{-- Header --}}
        <div class="px-10 py-4">
            <h4 class="my-auto font-sans text-2xl font-semibold leading-tight text-slate-800 dark:text-slate-100">REKAP
                EVALUASI</h4>
        </div>
        {{-- Body --}}
        <div class="px-4 pb-4 overflow-x-auto">
            {{-- 1.0 Filter & Search Section --}}
            <div
                class="px-4 py-4 border rounded-t bg-inerhit border-slate-400 bg-opacity-30 dark:border-slate-500 dark:bg-slate-700 dark:bg-opacity-50">
                <div class="flex justify-between flex-wrap gap-3">
                    {{-- Filter NP --}}
                    <div class="flex flex-row border border-blue-600 rounded-md brightness-110 dark:focus-within:shadow-lg dark:focus-within:shadow-blue-600/30 dark:focus-within:brightness-125">
                        <div class="px-2 py-1 rounded-l-md dark:bg-slate-800 dark:bg-opacity-50">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" class="w-6 h-6 text-blue-600">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M15.75 6a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0zM4.501 20.118a7.5 7.5 0 0114.998 0A17.933 17.933 0 0112 21.75c-2.676 0-5.216-.584-7.499-1.632z" />
                            </svg>
                        </div>
                        <select
                            class="w-full text-xs font-medium border-none rounded-r-md dark:bg-slate-800 dark:bg-opacity-50 dark:text-slate-100 dark:focus:bg-opacity-100 focus:border-none focus:ring-0"
                            wire:model="npUser">
                            <option value="0" class="text-center">-- NP/Nama --</option>
                            @foreach ($listNp as $np)
                                <option value="{{ $np->np_user }}">{{ $np->nama }} </option>
                            @endforeach
                        </select>
                    </div>
                    {{-- Search --}}
                    <div class="relative flex flex-wrap gap-3">
                        <input type="text" wire:model="search"
                            class="py-2 pl-10 pr-4 text-xs font-medium text-gray-600 border-t rounded-lg shadow focus:border-gray-400 focus:outline-none focus:ring-0"
                            placeholder="Search...">
                        <div class="absolute top-0 left-0 inline-flex items-center pt-2 pl-2 text-gray-500">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" viewBox="0 0 20 20"
                                fill="currentColor">
                                <path fill-rule="evenodd"
                                    d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                                    clip-rule="evenodd" />
                            </svg>
                        </div>
                        {{-- Button Export --}}
                        <div>
                            <button action="{{ route('dataPegawai.export') }}"
                             class="flex gap-2 px-2 py-1 text-green-400 border-2 border-green-400 rounded-md brightness-110 hover:shadow-lg hover:shadow-green-400/30 hover:brightness-125">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                    stroke="currentColor" class="w-5 h-5">
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
                class="row-span-3 overflow-hidden bg-inerhit border-x border-slate-400 dark:border-slate-500 dark:bg-slate-700 dark:bg-opacity-50">
                <div class="flex flex-col">
                    <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
                        <div class="inline-block min-w-full sm:px-6 lg:px-8">
                            <div class="overflow-hidden">
                                <table class="min-w-full">
                                    {{-- 2.1 Header Table --}}
                                    <thead
                                        class="text-base font-bold border-b border-slate-400 text-slate-600 dark:border-slate-500 dark:text-slate-400">
                                        <tr>
                                            {{-- 2.1.1 Index --}}
                                            <th scope="col"
                                                class="px-4 py-2 text-center border-r border-slate-400 dark:border-slate-500">
                                                No
                                            </th>
                                            {{-- 2.1.2 Nomor Pokok --}}
                                            <th scope="col"
                                                class="px-4 py-2 text-center border-r border-slate-400 dark:border-slate-500">
                                                Pegawai
                                            </th>
                                            {{-- 2.1.3 Nama --}}
                                            <th scope="col"
                                                class="px-4 py-2 text-center border-r border-slate-400 dark:border-slate-500">
                                                Kasek
                                            </th>
                                            {{-- 2.1.4 Tanggal CK3 --}}
                                            <th scope="col"
                                                class="px-4 py-2 text-center border-r border-slate-400 dark:border-slate-500">
                                                Kaun
                                            </th>
                                            {{-- 2.1.5 Jenis Barang --}}
                                            <th scope="col"
                                                class="px-4 py-2 text-center border-r border-slate-400 dark:border-slate-500">
                                                Evaluasi Kasek
                                            </th>
                                            {{-- 2.1.6 Jenis Retur --}}
                                            <th scope="col"
                                                class="px-4 py-2 text-center border-r border-slate-400 dark:border-slate-500">
                                                Evaluasi Kaun
                                            </th>
                                            {{-- 2.1.7 Total Retur --}}
                                            <th scope="col"
                                                class="px-4 py-2 text-center border-r border-slate-400 dark:border-slate-500">
                                                Tanggapan Pegawai
                                            </th>
                                            {{-- 2.1.7 Total Retur --}}
                                            <th scope="col"
                                                class="px-4 py-2 text-center border-r border-slate-400 dark:border-slate-500">
                                                Status
                                            </th>
                                            {{-- 2.1.7 Total Retur --}}
                                            <th scope="col"
                                                class="px-4 py-2 text-center border-r border-slate-400 dark:border-slate-500">
                                                Tanggal Evaluasi
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
                                        @foreach ($data as $datas)
                                            <tr
                                                class="transition duration-300 ease-in-out hover:bg-slate-400 hover:bg-opacity-10">
                                                {{-- 2.2.1 Index Coloumn --}}
                                                <td
                                                    class="px-4 py-2 text-sm font-medium text-center whitespace-nowrap border-y border-slate-400 text-slate-800 dark:border-slate-500 dark:text-slate-100">
                                                    {{ $data->firstItem() + $loop->index }}
                                                </td>
                                                {{-- 2.2.2 Np User Coloumn --}}
                                                <td
                                                    class="px-4 py-2 text-sm text-center border border-slate-400 text-slate-800 dark:border-slate-500 dark:text-slate-100">
                                                    <div class="flex flex-col justify-center">
                                                        <div>{{ $datas->np_user }}</div>
                                                        <span
                                                            class="block rounded-full bg-blue-600 py-1 px-3.5 text-center align-baseline text-xs font-medium leading-none text-white">
                                                            {{ $datas->nama_user }}
                                                        </span>
                                                    </div>
                                                </td>
                                                {{-- 2.2.3 Nama User Coloumn --}}
                                                <td
                                                    class="px-4 py-2 text-sm text-center border border-slate-400 text-slate-800 dark:border-slate-500 dark:text-slate-100">
                                                    <div class="flex flex-col justify-center space-y-1">
                                                        {{ $datas->np_kasek }}
                                                        <div
                                                            class="mt-1 rounded-full bg-blue-600 py-1 px-3.5 text-center align-baseline text-xs font-medium leading-none text-white">
                                                            {{ $datas->nama_kasek }}
                                                        </div>
                                                    </div>
                                                </td>
                                                {{-- 2.2.3 Nama User Coloumn --}}
                                                <td
                                                    class="px-4 py-2 text-sm text-center border border-slate-400 text-slate-800 dark:border-slate-500 dark:text-slate-100">
                                                    <div class="flex flex-col justify-center">
                                                        <span>{{ $datas->np_kaun }}</span>
                                                        <span
                                                            class="block rounded-full bg-blue-600 py-1 px-3.5 text-center align-baseline text-xs font-medium leading-none text-white">
                                                            {{ $datas->nama_kaun }}
                                                        </span>
                                                    </div>
                                                </td>
                                                {{-- 2.2.3 Nama User Coloumn --}}
                                                <td
                                                    class="w-1/6 px-4 py-2 text-sm text-center border border-slate-400 text-slate-800 dark:border-slate-500 dark:text-slate-100">
                                                    <span class="line-clamp-2">{{ $datas->eva_kasek }}</span>
                                                </td>
                                                {{-- 2.2.3 Nama User Coloumn --}}
                                                <td
                                                    class="w-1/6 px-4 py-2 text-sm text-center border border-slate-400 text-slate-800 dark:border-slate-500 dark:text-slate-100">
                                                    <span class="line-clamp-2">{{ $datas->eva_kaun }}</span>
                                                </td>
                                                {{-- 2.2.3 Nama User Coloumn --}}
                                                <td
                                                    class="w-1/6 px-4 py-2 text-sm text-center border border-slate-400 text-slate-800 dark:border-slate-500 dark:text-slate-100">
                                                    <span class="line-clamp-2">{{ $datas->response }}</span>
                                                </td>
                                                {{-- 2.2.3 Nama User Coloumn --}}
                                                <td
                                                    class="w-1/6 px-4 py-2 text-sm text-center border border-slate-400 text-slate-800 dark:border-slate-500 dark:text-slate-100">
                                                    <span class="line-clamp-2">{{ $datas->status }}</span>
                                                </td>
                                                {{-- 2.2.4 Tanggal CK3 Coloumn --}}
                                                <td
                                                    class="px-4 py-2 text-sm text-center border whitespace-nowrap border-slate-400 text-slate-800 dark:border-slate-500 dark:text-slate-100">
                                                    {{ Carbon\Carbon::parse($datas->post_date)->format('d-F-Y') }}
                                                </td>
                                                {{-- 2.2.11 Action Coloumn --}}
                                                <td
                                                    class="px-4 py-2 text-sm text-center whitespace-nowrap border-y border-slate-400 text-slate-800 dark:border-slate-500 dark:text-slate-100">
                                                    <div class="flex justify-center space-x-2">
                                                        <button type="button" type="button" data-mdb-ripple="true"
                                                            data-mdb-ripple-color="light"
                                                            class="inline-block px-3 py-2 text-sm font-semibold leading-tight transition duration-150 ease-in-out bg-green-500 rounded shadow-md text-slate-100 hover:bg-green-600 hover:shadow-lg focus:bg-green-600 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-green-700 active:shadow-lg">
                                                            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5"
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
                                                            class="inline-block px-3 py-2 text-sm font-semibold leading-tight transition duration-150 ease-in-out bg-red-500 rounded shadow-md text-slate-100 hover:bg-red-600 hover:shadow-lg focus:bg-red-600 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-red-700 active:shadow-lg">
                                                            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5"
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
                class="px-10 py-2 overflow-hidden border-b rounded-b bg-inerhit border-x border-slate-400 text-slate-800 dark:border-slate-500 dark:bg-slate-700 dark:bg-opacity-50 dark:text-slate-100">
                {{ $data->links('vendor.livewire.tailwind') }}
            </div>
            {{-- End Footer --}}
        </div>
    </div>
</div>
