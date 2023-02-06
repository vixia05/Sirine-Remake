<div wire:poll.keep-alive.10s='prioritas'
    class="overflow-hidden drop-shadow-md border-t rounded-md my-auto border-slate-300 bg-inherit dark:border-slate-500 dark:bg-slate-700 dark:from-transparent dark:to-transparent dark:bg-opacity-50">
    <div class="flex flex-col">
        <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
            <div class="inline-block min-w-full sm:px-4 lg:px-8">
                <div class="overflow-hidden rounded-b-md">
                    <table class="min-w-full">
                        <thead
                            class="text-sm font-bold border-slate-300 text-slate-700 dark:border-slate-500 dark:text-slate-400">
                            <tr class="border-b border-x border-slate-300 bg-emerald-200 brightness-105">
                                <th class="px-3 py-1 text-center border-slate-300 dark:border-slate-500 text-green-900 brightness-110"
                                    scope="col">
                                    Produk
                                </th>
                                <th class="px-3 py-1 text-center border-slate-300 dark:border-slate-500 text-green-900 brightness-110"
                                    scope="col">
                                    OBC
                                </th>
                                <th class="px-3 py-1 text-center border-slate-300 dark:border-slate-500 text-green-900 brightness-110"
                                    scope="col">
                                    PO Terakhir
                                </th>
                                <th class="px-3 py-1 text-center border-slate-300 dark:border-slate-500 text-green-900 brightness-110"
                                    scope="col">
                                    Jatuh Tempo
                                </th>
                                <th class="px-3 py-1 text-center border-slate-300 dark:border-slate-500 text-green-900 brightness-110"
                                    scope="col">
                                    Cetak
                                </th>
                                <th class="px-3 py-1 text-center border-slate-300 dark:border-slate-500 text-green-900 brightness-110"
                                    scope="col">
                                    Jml Order
                                </th>
                                <th class="px-3 py-1 text-center border-slate-300 dark:border-slate-500 text-green-900 brightness-110"
                                    scope="col">
                                    Sisa
                                </th>
                                <th class="px-3 py-1 text-center border-slate-300 dark:border-slate-500 text-green-900 brightness-110"
                                    scope="col">
                                    Action
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            {{-- Row PCHT --}}
                            <tr
                                class="px-3 py-1  text-center border-slate-300 dark:border-slate-500 border-b border-x transition ease-in-out duration-150 bg-blue-100">
                                <td
                                    class="px-3 font-medium py-1 text-xs text-center  whitespace-nowrap border-slate-300 text-slate-900 dark:border-slate-500 dark:text-slate-100 ">
                                    PCHT
                                </td>
                                <td
                                    class="px-3 font-medium py-1 text-xs text-center  whitespace-nowrap border-slate-300 text-slate-900 dark:border-slate-500 dark:text-slate-100 ">
                                    {{ $prioPcht['no_obc'] }}
                                </td>
                                <td
                                    class="font-medium px-3 py-1 text-xs text-center  whitespace-nowrap border-slate-300 text-slate-900 dark:border-slate-500 dark:text-slate-100 ">
                                    {{ $prioPcht['no_po'] }}
                                </td>
                                <td
                                    class="font-medium px-3 py-1 text-xs text-center  whitespace-nowrap border-slate-300 text-slate-900 dark:border-slate-500 dark:text-slate-100 ">
                                    {{ $prioPcht['tgl_jt'] }}
                                </td>
                                <td
                                    class="px-3 py-1 text-xs text-center  whitespace-nowrap border-slate-300 text-slate-900 dark:border-slate-500 dark:text-slate-100 ">
                                    @if ($diffPcht < 6)
                                    <span
                                        class="rounded-full bg-green-500 px-3 py-1 drop-shadow-md text-green-50 font-medium brightness-110">
                                        {{ $diffPcht }} Days Ago
                                    </span>
                                    @else
                                    <span
                                        class="rounded-full bg-yellow-400 px-3 py-1 drop-shadow-md text-yellow-900 font-medium brightness-110">
                                        {{ $diffPcht }} Days Ago
                                    </span>
                                    @endif
                                </td>
                                <td
                                    class="font-medium px-3 py-1 text-xs text-center  whitespace-nowrap border-slate-300 text-slate-900 dark:border-slate-500 dark:text-slate-100 ">
                                    {{ number_format($prioPcht['jml_order']) }}
                                </td>
                                <td
                                    class="font-medium px-3 py-1 text-xs text-center  whitespace-nowrap border-slate-300 text-slate-900 dark:border-slate-500 dark:text-slate-100 ">

                                </td>
                                <td
                                    class="px-3 py-2 text-xs text-center  whitespace-nowrap border-slate-300 text-slate-900 dark:border-slate-500 dark:text-slate-100 ">
                                    <button type="button" data-mdb-ripple="true" data-mdb-ripple-color="light"
                                        class="inline-block px-2 py-1 font-semibold transition duration-150  brightness-150 shadow-blue-500/50 ease-in-out bg-blue-600 rounded shadow-md leading-tight text-slate-200 hover:bg-blue-600 hover:shadow-lg focus:bg-blue-600 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-700 active:shadow-lg">
                                        More
                                    </button>
                                </td>
                            </tr>

                            {{-- Row MMEA --}}
                            <tr
                                class="px-3 py-1 text-center border-slate-300 dark:border-slate-500 border-b border-x transition ease-in-out duration-150 bg-yellow-100">
                                <td
                                    class="font-medium px-3 py-1 text-xs text-center  whitespace-nowrap border-slate-300 text-slate-900 dark:border-slate-500 dark:text-slate-100 ">
                                    MMEA
                                </td><td
                                class="px-3 font-medium py-1 text-xs text-center  whitespace-nowrap border-slate-300 text-slate-900 dark:border-slate-500 dark:text-slate-100 ">
                                {{ $prioMmea['no_obc'] }}
                            </td>
                            <td
                                class="font-medium px-3 py-1 text-xs text-center  whitespace-nowrap border-slate-300 text-slate-900 dark:border-slate-500 dark:text-slate-100 ">
                                {{ $prioMmea['no_po'] }}
                            </td>
                            <td
                                class="font-medium px-3 py-1 text-xs text-center  whitespace-nowrap border-slate-300 text-slate-900 dark:border-slate-500 dark:text-slate-100 ">
                                {{ $prioMmea['tgl_jt'] }}
                            </td>
                            <td
                                class="px-3 py-1 text-xs text-center  whitespace-nowrap border-slate-300 text-slate-900 dark:border-slate-500 dark:text-slate-100 ">
                                @if ($diffMmea < 4)
                                <span
                                    class="rounded-full bg-green-500 px-3 py-1 drop-shadow-md text-green-50 font-medium brightness-110">
                                    {{ $diffMmea }} Days Ago
                                </span>
                                @else
                                <span
                                    class="rounded-full bg-yellow-400 px-3 py-1 drop-shadow-md text-yellow-900 font-medium brightness-110">
                                    {{ $diffMmea }} Days Ago
                                </span>
                                @endif
                            </td>
                            <td
                                class="font-medium px-3 py-1 text-xs text-center  whitespace-nowrap border-slate-300 text-slate-900 dark:border-slate-500 dark:text-slate-100 ">
                                {{ number_format($prioMmea['jml_order']) }}
                            </td>
                            <td
                                class="font-medium px-3 py-1 text-xs text-center  whitespace-nowrap border-slate-300 text-slate-900 dark:border-slate-500 dark:text-slate-100 ">

                            </td>
                            <td
                                class="px-3 py-2 text-xs text-center  whitespace-nowrap border-slate-300 text-slate-900 dark:border-slate-500 dark:text-slate-100 ">
                                <button type="button" data-mdb-ripple="true" data-mdb-ripple-color="light"
                                    class="inline-block px-2 py-1 font-semibold transition duration-150  brightness-150 shadow-blue-500/50 ease-in-out bg-blue-600 rounded shadow-md leading-tight text-slate-200 hover:bg-blue-600 hover:shadow-lg focus:bg-blue-600 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-700 active:shadow-lg">
                                    More
                                </button>
                            </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
