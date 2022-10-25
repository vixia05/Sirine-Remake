<div x-data="{deleteModal: false}"
    @keydown.escape="deleteModal = false"
    x-cloak
    class="flex justify-center">
    @include('components.modal.delete')
    <div
        class="w-full rounded-md bg-white/70 dark:bg-slate-800 dark:bg-opacity-60 dark:backdrop-blur-sm dark:backdrop-filter">
        {{-- Header --}}
        <div class="px-10 py-4">
            <h4 class="my-auto font-sans text-2xl font-semibold leading-tight text-slate-800 dark:text-slate-100">DATA
                VERIFIKASI</h4>
        </div>
        {{-- Body --}}
        <div class="px-4 pb-4">
            {{-- 1.0 Filter & Search Section --}}
            <div
                class="px-4 py-4 border rounded-t bg-inerhit border-slate-400 bg-opacity-30 dark:border-slate-500 dark:bg-slate-700 dark:bg-opacity-50">
                <div class="flex justify-between">
                    {{-- Filter NP --}}
                    <div class="flex flex-row border border-blue-600 rounded-md brightness-110 dark:focus-within:shadow-lg dark:focus-within:shadow-blue-600/30 dark:focus-within:brightness-125">
                        <div class="w-full px-2 py-1 rounded-l-md dark:bg-slate-800 dark:bg-opacity-50">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" class="w-6 h-6 text-blue-600">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M15.75 6a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0zM4.501 20.118a7.5 7.5 0 0114.998 0A17.933 17.933 0 0112 21.75c-2.676 0-5.216-.584-7.499-1.632z" />
                            </svg>
                        </div>
                        <select
                            class="text-xs font-medium border-none rounded-r-md dark:bg-slate-800 dark:bg-opacity-50 dark:text-slate-100 dark:focus:bg-opacity-100 focus:border-none focus:ring-0"
                            wire:model="npUser">
                            <option value="0" class="text-center">-- NP/Nama --</option>
                            @foreach ($listNp as $np)
                                <option value="{{ $np->np_user }}">{{ $np->nama }} </option>
                            @endforeach
                        </select>
                    </div>
                    {{-- Search --}}
                    <div class="relative flex gap-2">
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
                class="overflow-hidden bg-inerhit border-x border-slate-400 bg-opacity-30 dark:border-slate-500 dark:bg-slate-700 dark:bg-opacity-50">
                <div class="flex flex-col">
                    <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
                        <div class="inline-block min-w-full sm:px-6 lg:px-8">
                            <div class="overflow-hidden">
                                <table class="min-w-full">
                                    {{-- 2.1 Header Table --}}
                                    <thead
                                        class="text-base font-bold border-b border-slate-400 text-slate-600 dark:border-slate-400 dark:text-slate-400">
                                        <tr>
                                            {{-- 2.1.1 Index --}}
                                            <th scope="col"
                                                class="px-4 py-2 text-center border-r border-slate-400 dark:border-slate-400">
                                                No
                                            </th>
                                            {{-- 2.1.2 Nomor Pokok --}}
                                            <th scope="col"
                                                class="px-4 py-2 text-center border-r border-slate-400 dark:border-slate-400">
                                                NP
                                            </th>
                                            {{-- 2.1.3 Nama --}}
                                            <th scope="col"
                                                class="px-4 py-2 text-center border-r border-slate-400 dark:border-slate-400">
                                                Nama
                                            </th>
                                            {{-- 2.1.4 Tanggal Verifikasi --}}
                                            <th scope="col"
                                                class="px-4 py-2 text-center border-r border-slate-400 dark:border-slate-400">
                                                Tgl Verif
                                            </th>
                                            {{-- 2.1.5 Pendapatan Lembar --}}
                                            <th scope="col"
                                                class="px-4 py-2 text-center border-r border-slate-400 dark:border-slate-400">
                                                Jumlah Rim / Lembar
                                            </th>
                                            {{-- 2.1.6 Pendapatan OBC --}}
                                            <th scope="col"
                                                class="px-4 py-2 text-center border-r border-slate-400 dark:border-slate-400">
                                                Jumlah OBC
                                            </th>
                                            {{-- 2.1.7 Target --}}
                                            <th scope="col"
                                                class="px-4 py-2 text-center border-r border-slate-400 dark:border-slate-400">
                                                Target
                                            </th>
                                            {{-- 2.1.8 Lembur --}}
                                            <th scope="col"
                                                class="px-4 py-2 text-center border-r border-slate-400 dark:border-slate-400">
                                                Lembur
                                            </th>
                                            {{-- 2.1.9 Keterangan --}}
                                            <th scope="col"
                                                class="px-4 py-2 text-center border-r border-slate-400 dark:border-slate-400">
                                                Keterangan
                                            </th>
                                            {{-- 2.1.10 Status Approval --}}
                                            <th scope="col"
                                                class="px-4 py-2 text-center border-r border-slate-400 dark:border-slate-400">
                                                Status
                                            </th>
                                            {{-- 2.1.11 Action --}}
                                            <th scope="col"
                                                class="px-4 py-2 text-center border-b border-slate-400 dark:border-slate-400">
                                                Action
                                            </th>
                                        </tr>
                                    </thead>
                                    {{-- 2.2 Body Table --}}
                                    <tbody>
                                        @foreach ($data as $datas)
                                            <tr
                                                class="tracking-wide transition duration-300 ease-in-out hover:bg-slate-400 hover:bg-opacity-10">
                                                {{-- 2.2.1 Index Coloumn --}}
                                                <td
                                                    class="px-4 py-2 text-sm font-medium text-center whitespace-nowrap border-y border-slate-400 text-slate-700 dark:border-slate-400 dark:text-slate-200">
                                                    {{ $data->firstItem() + $loop->index }}
                                                </td>
                                                {{-- 2.2.2 Np User Coloumn --}}
                                                <td
                                                    class="px-4 py-2 text-sm text-center border whitespace-nowrap border-slate-400 text-slate-700 dark:border-slate-400 dark:text-slate-200">
                                                    {{ $datas->np_user }}
                                                </td>
                                                {{-- 2.2.3 Nama User Coloumn --}}
                                                <td
                                                    class="px-4 py-2 text-sm text-center border border-slate-400 text-slate-700 dark:border-slate-400 dark:text-slate-200">
                                                    {{ \App\Models\UserDetails::where('np_user', $datas->np_user)->value('nama') }}
                                                </td>
                                                {{-- 2.2.4 Tanggal Verifikasi Coloumn --}}
                                                <td
                                                    class="px-4 py-2 text-sm text-center border whitespace-nowrap border-slate-400 text-slate-700 dark:border-slate-400 dark:text-slate-200">
                                                    {{ Carbon\Carbon::parse($datas->tgl_verif)->format('d-F-Y') }}
                                                </td>
                                                {{-- 2.2.5 Jumlah Verifikasi Coloumn --}}
                                                <td
                                                    class="px-4 py-2 text-sm text-center border whitespace-nowrap border-slate-400 text-slate-700 dark:border-slate-400 dark:text-slate-200">
                                                    {{ number_format($datas->jml_verif / 500, 0) }} Rim /
                                                    {{ number_format($datas->jml_verif, 0) }} Lbr
                                                </td>
                                                {{-- 2.2.6 Jumlah OBC Coloumn --}}
                                                <td
                                                    class="px-4 py-2 text-sm text-center border whitespace-nowrap border-slate-400 text-slate-700 dark:border-slate-400 dark:text-slate-200">
                                                    {{ $datas->jml_obc }} OBC
                                                </td>
                                                {{-- 2.2.7 Target Coloumn --}}
                                                <td
                                                    class="px-4 py-2 text-sm text-center border whitespace-nowrap border-slate-400 text-slate-700 dark:border-slate-400 dark:text-slate-200">
                                                    {{ number_format($datas->target, 0) }} Rim /
                                                    {{ number_format($datas->target * 500, 0) }} Lbr
                                                </td>
                                                {{-- 2.2.8 Lembur Coloumn --}}
                                                <td
                                                    class="px-4 py-2 text-sm text-center border whitespace-nowrap border-slate-400 text-slate-700 dark:border-slate-400 dark:text-slate-200">
                                                    @if ($datas->lembur === 0)
                                                        -
                                                    @elseif($datas->lembur === 1)
                                                        Awal
                                                    @elseif($datas->lembur === 2)
                                                        Akhir
                                                    @elseif($datas->lembur === 3)
                                                        Awal Akhir
                                                    @endif
                                                </td>
                                                {{-- 2.2.9 Keterangan Coloumn --}}
                                                <td
                                                    class="px-4 py-2 text-sm text-center border whitespace-nowrap border-slate-400 text-slate-700 dark:border-slate-400 dark:text-slate-200">
                                                    {{ $datas->keterangan }}
                                                </td>
                                                {{-- 2.2.10 Status Approval Coloumn --}}
                                                <td
                                                    class="px-4 py-2 text-sm text-center border whitespace-nowrap border-slate-400 text-slate-200 dark:border-slate-400">
                                                    @if ($datas->validation === 0)
                                                        <span
                                                            class="inline-block whitespace-nowrap rounded-full bg-blue-600 py-1 px-2.5 text-center align-baseline text-xs font-bold leading-none text-slate-200">
                                                            Waiting For Approval
                                                        </span>
                                                    @elseif ($datas->validation === 1)
                                                        <span
                                                            class="inline-block whitespace-nowrap rounded-full bg-green-600 py-1 px-2.5 text-center align-baseline text-xs font-bold leading-none text-slate-200">
                                                            Approved
                                                        </span>
                                                    @else
                                                        <span
                                                            class="inline-block whitespace-nowrap rounded-full bg-red-600 py-1 px-2.5 text-center align-baseline text-xs font-bold leading-none text-slate-200">
                                                            Rejected
                                                        </span>
                                                    @endif
                                                </td>
                                                {{-- 2.2.11 Action Coloumn --}}
                                                <td
                                                    class="px-4 py-2 text-sm text-center whitespace-nowrap border-y border-slate-400 text-slate-200 dark:border-slate-400">
                                                    <div class="flex justify-center">
                                                        <button type="button" data-mdb-ripple="true"
                                                            @click.prevent="deleteModal = true"
                                                            wire:click='show({{ $datas->id }})'
                                                            data-mdb-ripple-color="light"
                                                            class="inline-block px-2 py-1.5 text-sm font-semibold transition duration-150 drop-shadow-md  brightness-150 shadow-red-500/50 ease-in-out bg-red-600 rounded shadow-md leading-tighttext-slate-200 hover:bg-red-600 hover:shadow-lg focus:bg-red-600 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-red-700 active:shadow-lg">
                                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-5 h-5">
                                                                <path fill-rule="evenodd" d="M8.75 1A2.75 2.75 0 006 3.75v.443c-.795.077-1.584.176-2.365.298a.75.75 0 10.23 1.482l.149-.022.841 10.518A2.75 2.75 0 007.596 19h4.807a2.75 2.75 0 002.742-2.53l.841-10.52.149.023a.75.75 0 00.23-1.482A41.03 41.03 0 0014 4.193V3.75A2.75 2.75 0 0011.25 1h-2.5zM10 4c.84 0 1.673.025 2.5.075V3.75c0-.69-.56-1.25-1.25-1.25h-2.5c-.69 0-1.25.56-1.25 1.25v.325C8.327 4.025 9.16 4 10 4zM8.58 7.72a.75.75 0 00-1.5.06l.3 7.5a.75.75 0 101.5-.06l-.3-7.5zm4.34.06a.75.75 0 10-1.5-.06l-.3 7.5a.75.75 0 101.5.06l.3-7.5z" clip-rule="evenodd" />
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
                class="px-10 py-2 overflow-hidden border-b rounded-b bg-inerhit border-x border-slate-400 bg-opacity-30 text-slate-200 dark:border-slate-500 dark:bg-slate-700 dark:bg-opacity-50">
                {{ $data->links('vendor.livewire.tailwind') }}
            </div>
            {{-- End Footer --}}
        </div>
    </div>
</div>
