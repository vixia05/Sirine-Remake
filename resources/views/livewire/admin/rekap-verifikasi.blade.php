<div class="flex justify-center">
    <div class="w-full rounded-md bg-slate-800 bg-opacity-60 backdrop-blur-sm backdrop-filter">
        {{-- Header --}}
        <div class="px-10 py-4">
            <h4 class="my-auto font-sans text-2xl font-semibold leading-tight text-white">Data Verifikasi</h4>
        </div>
        {{-- Body --}}
        <div class="px-4 pb-4">
        {{-- 1.0 Filter & Search Section --}}
        <div class="border border-slate-500 bg-slate-700 bg-opacity-50 px-4 py-6 shadow-md drop-shadow-sm rounded-t">
            <div class="flex justify-start">
                <div class="relative">
                    <input type="text" wire:model="search"
                        class="rounded-lg border-t py-2 pl-10 pr-4 text-xs font-medium text-gray-600 shadow focus:border-gray-400 focus:outline-none focus:ring-0"
                        placeholder="Search...">
                    <div class="absolute top-0 left-0 inline-flex items-center pt-2 pl-2 text-gray-500">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
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
        <div class="row-span-3 overflow-hidden border-x border-slate-500 bg-slate-700 bg-opacity-50 shadow-md drop-shadow-sm">
            <div class="flex flex-col">
                <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
                    <div class="inline-block min-w-full sm:px-6 lg:px-8">
                        <div class="overflow-hidden">
                            <table class="min-w-full">
                                {{-- 2.1 Header Table --}}
                                <thead class="border-b border-slate-500 text-base font-bold text-gray-400">
                                    <tr>
                                        {{-- 2.1.1 Index --}}
                                        <th scope="col" class="border-r border-slate-500 px-4 py-3 text-center">
                                            No
                                        </th>
                                        {{-- 2.1.2 Nomor Pokok --}}
                                        <th scope="col" class="border-r border-slate-500 px-4 py-3 text-center">
                                            NP
                                        </th>
                                        {{-- 2.1.3 Nama --}}
                                        <th scope="col" class="border-r border-slate-500 px-4 py-3 text-center">
                                            Nama
                                        </th>
                                        {{-- 2.1.4 Tanggal Verifikasi --}}
                                        <th scope="col" class="border-r border-slate-500 px-4 py-3 text-center">
                                            Tgl Verif
                                        </th>
                                        {{-- 2.1.5 Pendapatan Lembar --}}
                                        <th scope="col" class="border-r border-slate-500 px-4 py-3 text-center">
                                            Jumlah Rim / Lembar
                                        </th>
                                        {{-- 2.1.6 Pendapatan OBC --}}
                                        <th scope="col" class="border-r border-slate-500 px-4 py-3 text-center">
                                            Jumlah OBC
                                        </th>
                                        {{-- 2.1.7 Target --}}
                                        <th scope="col" class="border-r border-slate-500 px-4 py-3 text-center">
                                            Target
                                        </th>
                                        {{-- 2.1.8 Lembur --}}
                                        <th scope="col" class="border-r border-slate-500 px-4 py-3 text-center">
                                            Lembur
                                        </th>
                                        {{-- 2.1.9 Keterangan --}}
                                        <th scope="col" class="border-r border-slate-500 px-4 py-3 text-center">
                                            Keterangan
                                        </th>
                                        {{-- 2.1.10 Status Approval --}}
                                        <th scope="col" class="border-r border-slate-500 px-4 py-3 text-center">
                                            Status
                                        </th>
                                        {{-- 2.1.11 Action --}}
                                        <th scope="col" class="border-r border-slate-500 px-4 py-3 text-center">
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
                                                class="whitespace-nowrap border-y border-slate-500 px-4 py-3 text-center text-sm font-medium text-white">
                                                {{ $data->firstItem() + $loop->index }}
                                            </td>
                                            {{-- 2.2.2 Np User Coloumn --}}
                                            <td
                                                class="whitespace-nowrap border border-slate-500 px-4 py-3 text-center text-sm font-light text-white">
                                                {{ $datas->np_user }}
                                            </td>
                                            {{-- 2.2.3 Nama User Coloumn --}}
                                            <td class="border border-slate-500 px-4 py-3 text-center text-sm font-light text-white">
                                                {{ \App\Models\UserDetails::where('np_user', $datas->np_user)->value('nama') }}
                                            </td>
                                            {{-- 2.2.4 Tanggal Verifikasi Coloumn --}}
                                            <td class="whitespace-nowrap border border-slate-500 px-4 py-3 text-center text-sm font-light text-white">
                                                {{ Carbon\Carbon::parse($datas->tgl_verif)->format('d-F-Y') }}
                                            </td>
                                            {{-- 2.2.5 Jumlah Verifikasi Coloumn --}}
                                            <td class="whitespace-nowrap border border-slate-500 px-4 py-3 text-center text-sm font-light text-white">
                                                {{ number_format($datas->jml_verif / 500, 0) }} Rim /
                                                {{ number_format($datas->jml_verif, 0) }} Lbr
                                            </td>
                                            {{-- 2.2.6 Jumlah OBC Coloumn --}}
                                            <td class="whitespace-nowrap border border-slate-500 px-4 py-3 text-center text-sm font-light text-white">
                                                {{ $datas->jml_obc }} OBC
                                            </td>
                                            {{-- 2.2.7 Target Coloumn --}}
                                            <td
                                                class="whitespace-nowrap border border-slate-500 px-4 py-3 text-center text-sm font-light text-white">
                                                {{ number_format($datas->target, 0) }} Rim /
                                                {{ number_format($datas->target * 500, 0) }} Lbr
                                            </td>
                                            {{-- 2.2.8 Lembur Coloumn --}}
                                            <td
                                                class="whitespace-nowrap border border-slate-500 px-4 py-3 text-center text-sm font-light text-white">
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
                                                class="whitespace-nowrap border border-slate-500 px-4 py-3 text-center text-sm font-light text-white">
                                                {{ $datas->keterangan }}
                                            </td>
                                            {{-- 2.2.10 Status Approval Coloumn --}}
                                            <td class="whitespace-nowrap border border-slate-500 px-4 py-3 text-center text-sm font-light text-white">
                                                @if ($datas->validation === 0)
                                                    <span
                                                        class="inline-block whitespace-nowrap rounded-full bg-blue-600 py-1 px-2.5 text-center align-baseline text-xs font-bold leading-none text-white">
                                                        Waiting For Approval
                                                    </span>
                                                @elseif ($datas->validation === 1)
                                                    <span
                                                        class="inline-block whitespace-nowrap rounded-full bg-green-600 py-1 px-2.5 text-center align-baseline text-xs font-bold leading-none text-white">
                                                        Approved
                                                    </span>
                                                @else
                                                    <span
                                                        class="inline-block whitespace-nowrap rounded-full bg-red-600 py-1 px-2.5 text-center align-baseline text-xs font-bold leading-none text-white">
                                                        Rejected
                                                    </span>
                                                @endif
                                            </td>
                                            {{-- 2.2.11 Action Coloumn --}}
                                            <td class="whitespace-nowrap border border-slate-500 px-4 py-3 text-center text-sm font-light text-white">
                                                <div class="flex justify-center space-x-2">
                                                    <button type="button" type="button" data-mdb-ripple="true"
                                                        data-mdb-ripple-color="light"
                                                        class="inline-block rounded bg-green-500 px-3 py-2 text-sm font-semibold leading-tight text-white shadow-md transition duration-150 ease-in-out hover:bg-green-600 hover:shadow-lg focus:bg-green-600 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-green-700 active:shadow-lg">
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
                                                        class="inline-block rounded bg-red-500 px-3 py-2 text-sm font-semibold leading-tight text-white shadow-md transition duration-150 ease-in-out hover:bg-red-600 hover:shadow-lg focus:bg-red-600 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-red-700 active:shadow-lg">
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
        <div class="overflow-hidden rounded-b border-b border-x border-slate-500 bg-slate-700 bg-opacity-50 px-10 py-3 text-white shadow-md drop-shadow-sm">
            {{ $data->links('vendor.livewire.tailwind') }}
        </div>
        {{-- End Footer --}}
    </div>
    </div>
</div>
