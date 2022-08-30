<div class="flow-row grid">
    {{-- Header --}}
    <div class="overflow-hidden rounded-t-xl bg-slate-700 px-10 py-4 shadow-md drop-shadow-sm">
        <h4 class="my-auto text-2xl font-semibold leading-tight text-white">Data Verifikasi</h4>
    </div>
    <div class="border-b bg-white py-6 px-4 shadow-md drop-shadow-sm">
        <div class="flex justify-between">
            <div class="flex">
                <div class="rounded-l-md bg-green-400 px-2 py-2 text-sm font-bold text-white">
                    Tanggal
                </div>
                <input type="date"
                    class="rounded-r-md border border-green-400 text-xs font-medium focus:border-green-500 focus:ring-2 focus:ring-green-300">
            </div>
            <div class="relative">
                <input type="text" wire:model="search"
                    class="rounded-lg border-2 py-2 pl-10 pr-4 text-xs font-medium text-gray-600 shadow focus:border-gray-400 focus:outline-none focus:ring-0"
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
    {{-- Body / Table --}}
    <div class="row-span-3 overflow-hidden bg-white shadow-md drop-shadow-sm">
        <div class="flex flex-col">
            <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
                <div class="inline-block min-w-full py-2 sm:px-6 lg:px-8">
                    <div class="overflow-hidden">
                        <table class="min-w-full">
                            <thead class="border-b bg-white text-base font-bold text-gray-900">
                                <tr>
                                    <th scope="col" class="px-6 py-4 text-center">
                                        No
                                    </th>
                                    <th scope="col" class="px-6 py-4 text-center">
                                        NP
                                    </th>
                                    <th scope="col" class="px-6 py-4 text-center">
                                        Nama
                                    </th>
                                    <th scope="col" class="px-6 py-4 text-center">
                                        Tgl Verif
                                    </th>
                                    <th scope="col" class="px-6 py-4 text-center">
                                        Jumlah Rim / Lembar
                                    </th>
                                    <th scope="col" class="px-6 py-4 text-center">
                                        Jumlah OBC
                                    </th>
                                    <th scope="col" class="px-6 py-4 text-center">
                                        Target
                                    </th>
                                    <th scope="col" class="px-6 py-4 text-center">
                                        Lembur
                                    </th>
                                    <th scope="col" class="px-6 py-4 text-center">
                                        Keterangan
                                    </th>
                                    <th scope="col" class="px-6 py-4 text-center">
                                        Status
                                    </th>
                                    <th scope="col" class="px-6 py-4 text-center">
                                        Action
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($data as $datas)
                                    <tr class="border-b bg-white transition duration-300 ease-in-out hover:bg-gray-100">
                                        <td
                                            class="whitespace-nowrap px-6 py-4 text-center text-sm font-medium text-gray-900">
                                            {{ $data->firstItem() + $loop->index }}
                                        </td>
                                        <td
                                            class="whitespace-nowrap px-6 py-4 text-center text-sm font-light text-gray-900">
                                            {{ $datas->np_user }}
                                        </td>
                                        <td class="whitespace-nowrap px-6 py-4 text-sm font-light text-gray-900">
                                            {{ \App\Models\UserDetails::where('np_user', $datas->np_user)->value('nama') }}
                                        </td>
                                        <td class="whitespace-nowrap px-6 py-4 text-sm font-light text-gray-900">
                                            {{ Carbon\Carbon::parse($datas->tgl_verif)->format('d - F - Y') }}
                                        </td>
                                        <td class="whitespace-nowrap px-6 py-4 text-sm font-light text-gray-900">
                                            {{ number_format($datas->jml_verif / 500, 0) }} Rim /
                                            {{ number_format($datas->jml_verif, 0) }} Lbr
                                        </td>
                                        <td class="whitespace-nowrap px-6 py-4 text-sm font-light text-gray-900">
                                            {{ $datas->jml_obc }} OBC
                                        </td>
                                        <td
                                            class="whitespace-nowrap px-6 py-4 text-center text-sm font-light text-gray-900">
                                            {{ number_format($datas->target, 0) }} Rim /
                                            {{ number_format($datas->target * 500, 0) }} Lbr
                                        </td>
                                        <td
                                            class="whitespace-nowrap px-6 py-4 text-center text-sm font-light text-gray-900">
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
                                        <td
                                            class="whitespace-nowrap px-6 py-4 text-center text-sm font-light text-gray-900">
                                            {{ $datas->keterangan }}
                                        </td>
                                        <td>
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
                                        <td class="whitespace-nowrap px-6 py-4">
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
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- Footer --}}
    <div class="row-span-2 overflow-hidden rounded-b-xl bg-white px-10 py-4 shadow-md drop-shadow-sm">
        {{ $data->links() }}
    </div>
</div>
