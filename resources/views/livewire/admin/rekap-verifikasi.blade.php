<div class="flex justify-center">
    <div
        class="w-full rounded-md bg-white/70 dark:backdrop-blur-sm dark:backdrop-filter dark:bg-slate-800 dark:bg-opacity-60">
        {{-- Header --}}
        <div class="px-10 py-4">
            <h4 class="my-auto font-sans text-2xl font-semibold leading-tight text-slate-800 dark:text-slate-100">DATA
                VERIFIKASI</h4>
        </div>
        {{-- Body --}}
        <div class="px-4 pb-4">
            {{-- 1.0 Filter & Search Section --}}
            <div
            class="bg-inerhit rounded-t border border-slate-400 bg-opacity-30 px-4 py-6 dark:border-slate-500 dark:bg-slate-700 dark:bg-opacity-50">
            <div class="flex justify-between">
                {{-- Filter NP --}}
                    <div class="flex flex-row border rounded-md border-blue-600 brightness-110">
                        <div class="py-1 px-4 w-full dark:bg-slate-700 rounded-l-md dark:bg-opacity-30">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-blue-600">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M18 18.72a9.094 9.094 0 003.741-.479 3 3 0 00-4.682-2.72m.94 3.198l.001.031c0 .225-.012.447-.037.666A11.944 11.944 0 0112 21c-2.17 0-4.207-.576-5.963-1.584A6.062 6.062 0 016 18.719m12 0a5.971 5.971 0 00-.941-3.197m0 0A5.995 5.995 0 0012 12.75a5.995 5.995 0 00-5.058 2.772m0 0a3 3 0 00-4.681 2.72 8.986 8.986 0 003.74.477m.94-3.197a5.971 5.971 0 00-.94 3.197M15 6.75a3 3 0 11-6 0 3 3 0 016 0zm6 3a2.25 2.25 0 11-4.5 0 2.25 2.25 0 014.5 0zm-13.5 0a2.25 2.25 0 11-4.5 0 2.25 2.25 0 014.5 0z" />
                              </svg>
                        </div>
                        <select class="border-none rounded-r-md text-sm font-medium dark:bg-slate-700 dark:bg-opacity-30 dark:text-slate-100 dark:focus:bg-opacity-100"
                            wire:model="filterNp">
                            @foreach ($npUser as $np)
                                <option value="{{ $np }}">{{ $np }}</option>
                            @endforeach
                        </select>
                    </div>
                    {{-- Search --}}
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
                class="bg-inerhit overflow-hidden border-x border-slate-400 bg-opacity-30 dark:border-slate-500 dark:bg-slate-700 dark:bg-opacity-50">
                <div class="flex flex-col">
                    <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
                        <div class="inline-block min-w-full sm:px-6 lg:px-8">
                            <div class="overflow-hidden">
                                <table class="min-w-full">
                                    {{-- 2.1 Header Table --}}
                                    <thead
                                        class="border-b border-slate-400 text-base font-bold text-slate-600 dark:border-slate-400 dark:text-slate-400">
                                        <tr>
                                            {{-- 2.1.1 Index --}}
                                            <th scope="col"
                                                class="border-r border-slate-400 px-4 py-2 text-center dark:border-slate-400">
                                                No
                                            </th>
                                            {{-- 2.1.2 Nomor Pokok --}}
                                            <th scope="col"
                                                class="border-r border-slate-400 px-4 py-2 text-center dark:border-slate-400">
                                                NP
                                            </th>
                                            {{-- 2.1.3 Nama --}}
                                            <th scope="col"
                                                class="border-r border-slate-400 px-4 py-2 text-center dark:border-slate-400">
                                                Nama
                                            </th>
                                            {{-- 2.1.4 Tanggal Verifikasi --}}
                                            <th scope="col"
                                                class="border-r border-slate-400 px-4 py-2 text-center dark:border-slate-400">
                                                Tgl Verif
                                            </th>
                                            {{-- 2.1.5 Pendapatan Lembar --}}
                                            <th scope="col"
                                                class="border-r border-slate-400 px-4 py-2 text-center dark:border-slate-400">
                                                Jumlah Rim / Lembar
                                            </th>
                                            {{-- 2.1.6 Pendapatan OBC --}}
                                            <th scope="col"
                                                class="border-r border-slate-400 px-4 py-2 text-center dark:border-slate-400">
                                                Jumlah OBC
                                            </th>
                                            {{-- 2.1.7 Target --}}
                                            <th scope="col"
                                                class="border-r border-slate-400 px-4 py-2 text-center dark:border-slate-400">
                                                Target
                                            </th>
                                            {{-- 2.1.8 Lembur --}}
                                            <th scope="col"
                                                class="border-r border-slate-400 px-4 py-2 text-center dark:border-slate-400">
                                                Lembur
                                            </th>
                                            {{-- 2.1.9 Keterangan --}}
                                            <th scope="col"
                                                class="border-r border-slate-400 px-4 py-2 text-center dark:border-slate-400">
                                                Keterangan
                                            </th>
                                            {{-- 2.1.10 Status Approval --}}
                                            <th scope="col"
                                                class="border-r border-slate-400 px-4 py-2 text-center dark:border-slate-400">
                                                Status
                                            </th>
                                            {{-- 2.1.11 Action --}}
                                            <th scope="col"
                                                class="border-b border-slate-400 px-4 py-2 text-center dark:border-slate-400">
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
                                                    class="whitespace-nowrap border-y border-slate-400 px-4 py-2 text-center text-sm font-medium text-slate-700 dark:border-slate-400 dark:text-slate-200">
                                                    {{ $data->firstItem() + $loop->index }}
                                                </td>
                                                {{-- 2.2.2 Np User Coloumn --}}
                                                <td
                                                    class="whitespace-nowrap border border-slate-400 px-4 py-2 text-center text-sm text-slate-700 dark:border-slate-400 dark:text-slate-200">
                                                    {{ $datas->np_user }}
                                                </td>
                                                {{-- 2.2.3 Nama User Coloumn --}}
                                                <td
                                                    class="border border-slate-400 px-4 py-2 text-center text-sm text-slate-700 dark:border-slate-400 dark:text-slate-200">
                                                    {{ \App\Models\UserDetails::where('np_user', $datas->np_user)->value('nama') }}
                                                </td>
                                                {{-- 2.2.4 Tanggal Verifikasi Coloumn --}}
                                                <td
                                                    class="whitespace-nowrap border border-slate-400 px-4 py-2 text-center text-sm text-slate-700 dark:border-slate-400 dark:text-slate-200">
                                                    {{ Carbon\Carbon::parse($datas->tgl_verif)->format('d-F-Y') }}
                                                </td>
                                                {{-- 2.2.5 Jumlah Verifikasi Coloumn --}}
                                                <td
                                                    class="whitespace-nowrap border border-slate-400 px-4 py-2 text-center text-sm text-slate-700 dark:border-slate-400 dark:text-slate-200">
                                                    {{ number_format($datas->jml_verif / 500, 0) }} Rim /
                                                    {{ number_format($datas->jml_verif, 0) }} Lbr
                                                </td>
                                                {{-- 2.2.6 Jumlah OBC Coloumn --}}
                                                <td
                                                    class="whitespace-nowrap border border-slate-400 px-4 py-2 text-center text-sm text-slate-700 dark:border-slate-400 dark:text-slate-200">
                                                    {{ $datas->jml_obc }} OBC
                                                </td>
                                                {{-- 2.2.7 Target Coloumn --}}
                                                <td
                                                    class="whitespace-nowrap border border-slate-400 px-4 py-2 text-center text-sm text-slate-700 dark:border-slate-400 dark:text-slate-200">
                                                    {{ number_format($datas->target, 0) }} Rim /
                                                    {{ number_format($datas->target * 500, 0) }} Lbr
                                                </td>
                                                {{-- 2.2.8 Lembur Coloumn --}}
                                                <td
                                                    class="whitespace-nowrap border border-slate-400 px-4 py-2 text-center text-sm text-slate-700 dark:border-slate-400 dark:text-slate-200">
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
                                                    class="whitespace-nowrap border border-slate-400 px-4 py-2 text-center text-sm text-slate-700 dark:border-slate-400 dark:text-slate-200">
                                                    {{ $datas->keterangan }}
                                                </td>
                                                {{-- 2.2.10 Status Approval Coloumn --}}
                                                <td
                                                    class="whitespace-nowrap border border-slate-400 px-4 py-2 text-center text-sm text-slate-200 dark:border-slate-400">
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
                                                    class="whitespace-nowrap border-y border-slate-400 px-4 py-2 text-center text-sm text-slate-200 dark:border-slate-400">
                                                    <div class="flex justify-center space-x-2">
                                                        <button type="button" type="button" data-mdb-ripple="true"
                                                            data-mdb-ripple-color="light"
                                                            class="inline-block rounded bg-green-500 px-3 py-2 text-sm font-semibold leading-tight text-slate-200 shadow-md transition duration-150 ease-in-out hover:bg-green-600 hover:shadow-lg focus:bg-green-600 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-green-700 active:shadow-lg">
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
                                                            class="leading-tighttext-slate-200 inline-block rounded bg-red-500 px-3 py-2 text-sm font-semibold shadow-md transition duration-150 ease-in-out hover:bg-red-600 hover:shadow-lg focus:bg-red-600 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-red-700 active:shadow-lg">
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
                class="bg-inerhit overflow-hidden rounded-b border-x border-b border-slate-400 bg-opacity-30 px-10 py-2 text-slate-200 dark:border-slate-500 dark:bg-slate-700 dark:bg-opacity-50">
                {{ $data->links('vendor.livewire.tailwind') }}
            </div>
            {{-- End Footer --}}
        </div>
    </div>
</div>
