<div
    class="overflow-hidden mx-4 border-t border-slate-400 bg-inherit dark:border-slate-500 dark:bg-slate-700 dark:from-transparent dark:to-transparent dark:bg-opacity-50">
    <div class="flex flex-col">
        <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
            <div class="inline-block min-w-full sm:px-4 lg:px-8">
                <div class="overflow-hidden">
                    <table class="min-w-full">
                        <thead
                            class="text-sm font-bold border-b border-slate-400 text-slate-700 dark:border-slate-500 dark:text-slate-400">
                            <tr
                                class="border border-slate-400 rounded-md bg-gradient-to-br from-green-200 to-emerald-300 brightness-105">
                                <th colspan="17"
                                    class=" py-1 text-lg text-slate-700 drop-shadow-lg shadow-slate-200/30">Pita
                                    Cukai MMEA & HPTL {{ today()->format('F Y') }}</th>
                            </tr>
                            <tr class="border border-slate-400 rounded-md bg-cyan-100">
                                <th class="px-3 py-1 text-center border-slate-400 dark:border-slate-500 border-l" scope="col"
                                    rowspan="3">
                                    Tanggal
                                </th>
                                <th class="px-3 py-1 text-center border-slate-400 dark:border-slate-500 border-l" scope="col"
                                    rowspan="3">
                                    Terima Dari Khazwal
                                </th>
                                <th class="px-3 py-1 text-center border-slate-400 dark:border-slate-500 border-l border-b"
                                    scope="col" colspan="2">
                                    Non-Personal
                                </th>
                                <th class="px-3 py-1 text-center border-slate-400 dark:border-slate-500 border-l border-b"
                                    scope="col" colspan="2">
                                    Personal
                                </th>
                                <th class="px-3 py-1 text-center border-slate-400 dark:border-slate-500 border-l border-b"
                                    scope="col" colspan="3">
                                    Total
                                </th>
                                <th class="px-3 py-1 text-center border-slate-400 dark:border-slate-500 border-l" scope="col"
                                    rowspan="3">
                                    Total Verifikasi
                                </th>
                                <th class="px-3 py-1 text-center max-w-[10rem] border-slate-400 dark:border-slate-500 border-l"
                                    scope="col" rowspan="3">
                                    Saldo Akhir Verifikasi (WIP)
                                </th>
                                <th class="px-3 py-1 text-center border-slate-400 dark:border-slate-500 border-l" scope="col"
                                    rowspan="3">
                                    Jumlah Kemas
                                </th>
                                <th class="px-3 py-1 text-center border-slate-400 dark:border-slate-500 border-l" scope="col"
                                    rowspan="3">
                                    Jumlah Kirim
                                </th>
                                <th class="px-3 py-1 text-center border-slate-400 dark:border-slate-500 border-x" scope="col"
                                    rowspan="3">
                                    Kemas, Belum Kirim
                                </th>
                            </tr>
                            <tr class="border border-slate-400 rounded-md bg-cyan-100">
                                <th class="px-3 py-1 text-center border-slate-400 dark:border-slate-500 border-l" scope="col">
                                    Baik
                                </th>
                                <th class="px-3 py-1 text-center border-slate-400 dark:border-slate-500 border-l" scope="col">
                                    Rusak
                                </th>
                                <th class="px-3 py-1 text-center border-slate-400 dark:border-slate-500 border-l" scope="col">
                                    Baik
                                </th>
                                <th class="px-3 py-1 text-center border-slate-400 dark:border-slate-500 border-l" scope="col">
                                    Rusak
                                </th>
                                <th class="px-3 py-1 text-center border-slate-400 dark:border-slate-500 border-l" scope="col">
                                    Baik
                                </th>
                                <th class="px-3 py-1 text-center border-slate-400 dark:border-slate-500 border-l" scope="col">
                                    Rusak
                                </th>
                                <th class="px-3 py-1 text-center border-slate-400 dark:border-slate-500 border-l" scope="col">
                                    % Incshiet
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($dataMmea as $key => $data)
                            <tr
                                class="px-3 py-1 text-center border-slate-400 dark:border-slate-500 border-b border-x hover:bg-green-100/80 transition ease-in-out duration-150">
                                {{-- Tanggal --}}
                                <td
                                    class="px-3 py-1 text-xs text-center  whitespace-nowrap border-slate-400 text-slate-900 dark:border-slate-500 dark:text-slate-100 border-r">
                                    {{ $key }}
                                </td>
                                {{-- Cetak Harian --}}
                                <td
                                    class="pl-6 pr-2 py-1 text-xs text-right  whitespace-nowrap border-slate-400 text-slate-900 dark:border-slate-500 dark:text-slate-100 border-r">
                                    {{ number_format($data['cetakHarian'],0) }}
                                </td>
                                {{-- Baik NP --}}
                                <td
                                    class="pl-6 pr-2 py-1 text-xs text-right  whitespace-nowrap border-slate-400 text-emerald-900 dark:border-slate-500 dark:text-slate-100 border-r">
                                    {{ number_format($data['hcsMmea'],0) }}
                                </td>
                                {{-- Rusak NP --}}
                                <td
                                    class="pl-6 pr-2 py-1 text-xs text-right  whitespace-nowrap border-slate-400 text-slate-900 dark:border-slate-500 dark:text-slate-100 border-r">
                                    {{ number_format($data['hctsMmea'],0) }}
                                </td>
                                {{-- Baik P --}}
                                <td
                                    class="pl-6 pr-2 py-1 text-xs text-right  whitespace-nowrap border-slate-400 text-slate-900 dark:border-slate-500 dark:text-slate-100 border-r">
                                    {{ number_format($data['hcsHptl'],0) }}
                                </td>
                                {{-- Rusak P --}}
                                <td
                                    class="pl-6 pr-2 py-1 text-xs text-right  whitespace-nowrap border-slate-400 text-slate-900 dark:border-slate-500 dark:text-slate-100 border-r">
                                    {{ number_format($data['hctsHptl'],0) }}
                                </td>
                                {{-- Baik Total --}}
                                <td
                                    class="pl-6 pr-2 py-1 text-xs text-right  whitespace-nowrap border-slate-400 text-slate-900 dark:border-slate-500 dark:text-slate-100 border-r">
                                    {{ number_format($data['hcsPerekat'],0) }}
                                </td>
                                {{-- Rusak Total --}}
                                <td
                                    class="pl-6 pr-2 py-1 text-xs text-right  whitespace-nowrap border-slate-400 text-slate-900 dark:border-slate-500 dark:text-slate-100 border-r">
                                    {{ number_format($data['hctsPerekat'],0) }}
                                </td>
                                {{-- Incshiet Harian --}}
                                <td
                                    class="pl-6 pr-2 py-1 text-xs text-right font-medium whitespace-nowrap border-slate-400 text-red-700 dark:border-slate-500 dark:text-slate-100 border-r">
                                    {{ number_format($data['inscPerekat'],2) }} %
                                </td>
                                {{-- Total Verifikasi --}}
                                <td
                                    class="pl-6 pr-2 py-1 text-xs text-right  whitespace-nowrap border-slate-400 text-slate-900 dark:border-slate-500 dark:text-slate-100 border-r">
                                    {{ number_format($data['totalPerekat'],0) }}
                                </td>
                                {{-- WIP --}}
                                <td
                                    class="pl-6 pr-2 py-1 text-xs text-right  whitespace-nowrap border-slate-400 text-slate-900 dark:border-slate-500 dark:text-slate-100 border-r">
                                    {{ number_format($data['wipMmea'],0) }}
                                </td>
                                {{-- Jumlah Kemas --}}
                                <td
                                    class="pl-6 pr-2 py-1 text-xs text-right  whitespace-nowrap border-slate-400 text-slate-900 dark:border-slate-500 dark:text-slate-100 border-r">
                                    {{ number_format($data['kemasPerekat'],0) }}
                                </td>
                                {{-- Jumlah Kirim --}}
                                <td
                                    class="pl-6 pr-2 py-1 text-xs text-right  whitespace-nowrap border-slate-400 text-slate-900 dark:border-slate-500 dark:text-slate-100 border-r">
                                    {{ number_format($data['pengiriman'],0) }}
                                </td>
                                {{-- Stock Barang --}}
                                <td
                                    class="pl-6 pr-2 py-1 text-xs text-right  whitespace-nowrap border-slate-400 text-slate-900 dark:border-slate-500 dark:text-slate-100 border-r">
                                    {{ number_format($data['stockKirim'],0) }}
                                </td>
                            </tr>
                            @endforeach
                            {{-- Row Total MMEA --}}
                            <tr
                                class="px-3 py-1 bg-yellow-300 text-center border-slate-600 dark:border-slate-500 border-b border-t-2 border-l border-x hover:bg-yellow-100/80 transition ease-in-out duration-150">
                                <td colspan="2"
                                    class="px-3 py-1 text-xs font-semibold text-center whitespace-nowrap border-slate-600 text-slate-900 dark:border-slate-500 dark:text-slate-100 border-r">
                                    Akumulasi
                                </td>
                                {{-- Akm Baik MMEA --}}
                                <td
                                    class="px-3 py-1 text-xs font-semibold text-right whitespace-nowrap border-slate-600 text-slate-900 dark:border-slate-500 dark:text-slate-100 border-r">
                                    {{ number_format($akmMmea['hcsMmea'],0) }}
                                </td>
                                {{-- Akm Rusak MMEA --}}
                                <td
                                    class="px-3 py-1 text-xs font-semibold text-right whitespace-nowrap border-slate-600 text-slate-900 dark:border-slate-500 dark:text-slate-100 border-r">
                                    {{ number_format($akmMmea['hctsMmea'],0) }}
                                </td>
                                {{-- Akm Baik HPTL --}}
                                <td
                                    class="px-3 py-1 text-xs font-semibold text-right whitespace-nowrap border-slate-600 text-slate-900 dark:border-slate-500 dark:text-slate-100 border-r">
                                    {{ number_format($akmMmea['hcsHptl'],0) }}
                                </td>
                                {{-- Akm Rusak HPTL --}}
                                <td
                                    class="px-3 py-1 text-xs font-semibold text-right whitespace-nowrap border-slate-600 text-slate-900 dark:border-slate-500 dark:text-slate-100 border-r">
                                    {{ number_format($akmMmea['hctsHptl'],0) }}
                                </td>
                                {{-- Akm Baik PC Perekat --}}
                                <td
                                    class="px-3 py-1 text-xs font-semibold text-right whitespace-nowrap border-slate-600 text-slate-900 dark:border-slate-500 dark:text-slate-100 border-r">
                                    {{ number_format($akmMmea['hcsPerekat'],0) }}
                                </td>
                                {{-- Akm Rusak PC Perekat --}}
                                <td
                                    class="px-3 py-1 text-xs font-semibold text-right whitespace-nowrap border-slate-600 text-slate-900 dark:border-slate-500 dark:text-slate-100 border-r">
                                    {{ number_format($akmMmea['hctsPerekat'],0) }}
                                </td>
                                {{-- Akm Inschiet PC Perekat --}}
                                <td
                                    class="px-3 py-1 text-xs font-semibold text-right whitespace-nowrap border-slate-600 text-slate-900 dark:border-slate-500 dark:text-slate-100 border-r">
                                    {{ number_format($akmMmea['inscMmea'],2) }} %
                                </td>
                                {{-- Akm Verifikasi --}}
                                <td
                                    class="px-3 py-1 text-xs font-semibold text-right whitespace-nowrap border-slate-600 text-slate-900 dark:border-slate-500 dark:text-slate-100 border-r">
                                    {{ number_format($akmMmea['verifMmea'],0) }}
                                </td>
                                <td
                                    class="px-3 py-1 text-xs font-semibold text-right whitespace-nowrap border-slate-600 text-slate-900 dark:border-slate-500 dark:text-slate-100 border-r">
                                </td>
                                {{-- Akm Kemas --}}
                                <td
                                    class="px-3 py-1 text-xs font-semibold text-right whitespace-nowrap border-slate-600 text-slate-900 dark:border-slate-500 dark:text-slate-100 border-r">
                                    {{ number_format($akmMmea['kemasMmea'],0) }}
                                </td>
                                {{-- Akm Kirim --}}
                                <td
                                    class="px-3 py-1 text-xs font-semibold text-right whitespace-nowrap border-slate-600 text-slate-900 dark:border-slate-500 dark:text-slate-100 border-r">
                                    {{ number_format($akmMmea['kirimMmea'],0) }}
                                </td>
                                {{-- --}}
                                <td
                                    class="px-3 py-1 text-xs font-semibold text-right whitespace-nowrap border-slate-600 text-slate-900 dark:border-slate-500 dark:text-slate-100 border-r">

                                </td>
                            </tr>
                            {{-- Row Total PCHT --}}
                            <tr
                                class="px-3 py-1 bg-blue-200 drop-shadow-lg text-center border-slate-600 dark:border-slate-500 border-b border-x  transition ease-in-out duration-150">
                                <td colspan="2"
                                    class="px-3 py-1 text-xs font-semibold text-center whitespace-nowrap border-slate-600 text-slate-900 dark:border-slate-500 dark:text-slate-100 border-r">
                                    Order PCHT (Rencet)
                                </td>
                                <td colspan="2"
                                    class="px-3 py-1 text-xs font-semibold text-right whitespace-nowrap border-slate-600 text-slate-900 dark:border-slate-500 dark:text-slate-100 border-r">
                                    {{ number_format($akmMmea['orderMmea'],0) }}
                                </td>
                                <td colspan="2"
                                    class="px-3 py-1 text-xs font-semibold text-center whitespace-nowrap border-slate-600 text-slate-900 dark:border-slate-500 dark:text-slate-100 border-r">
                                    Sisa Order PCHT (Rencet)
                                </td>
                                <td colspan="2"
                                    class="px-3 py-1 text-xs font-semibold text-right whitespace-nowrap border-slate-600 text-slate-900 dark:border-slate-500 dark:text-slate-100 border-r">
                                    {{ number_format($akmMmea['sisaMmea'],0) }}
                                </td>
                                <td
                                    class="px-3 py-1 text-xs font-semibold text-center whitespace-nowrap border-slate-600 text-slate-900 dark:border-slate-500 dark:text-slate-100 border-r">
                                    OBC PCHT
                                </td>
                                <td
                                    class="px-3 py-1 text-xs font-semibold text-right whitespace-nowrap border-slate-600 text-slate-900 dark:border-slate-500 dark:text-slate-100 border-r">
                                    {{ number_format($akmMmea['obcMmea'],0) }} OBC
                                </td>
                                <td
                                    class="px-3 py-1 text-xs font-semibold text-center whitespace-nowrap border-slate-600 text-slate-900 dark:border-slate-500 dark:text-slate-100 border-r">
                                    Sisa OBC PCHT
                                </td>
                                <td
                                    class="px-3 py-1 text-xs font-semibold text-right whitespace-nowrap border-slate-600 text-slate-900 dark:border-slate-500 dark:text-slate-100 border-r">
                                    {{ number_format($akmMmea['sisaObcMmea'],0) }} OBC
                                </td>
                                <td
                                    class="px-3 py-1 text-xs font-semibold text-center whitespace-nowrap border-slate-600 text-slate-900 dark:border-slate-500 dark:text-slate-100 border-r">
                                    Jatuh Tempo Terdekat
                                </td>
                                <td
                                    class="px-3 py-1 text-xs font-semibold text-right whitespace-nowrap border-slate-600 text-slate-900 dark:border-slate-500 dark:text-slate-100 border-r">
                                    {{ $akmMmea['tglJt'] }} = {{ number_format($akmMmea['jmlJtMmea'],0) }} LK
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div
                    class="px-10 py-1 overflow-hidden border-b rounded-b bg-inerhit border-slate-400 text-slate-700 dark:border-slate-500 dark:bg-slate-700 dark:from-transparent dark:to-transparent dark:bg-opacity-50 dark:text-slate-100">
                    {{-- {{ $dataPcht->links('vendor.livewire.tailwind') }} --}}
                </div>
            </div>
        </div>
    </div>
</div>
