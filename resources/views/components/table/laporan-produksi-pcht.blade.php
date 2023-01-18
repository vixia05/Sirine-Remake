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
                                    Cukai Hasil Tembakau {{ today()->format('F Y') }}</th>
                            </tr>
                            <tr class="border border-slate-400 rounded-md bg-cyan-100">
                                <th class="px-3 py-1 text-center border-slate-400 dark:border-slate-500 border-l" scope="col"
                                    rowspan="3">
                                    Tanggal
                                </th>
                                <th class="px-3 py-1 max-w-[8rem] text-center border-slate-400 dark:border-slate-500 border-l" scope="col"
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
                            @foreach ($dataPcht as $key => $data)
                            <tr
                                class="px-3 py-1 text-center border-slate-400 dark:border-slate-500 border-b border-x hover:bg-green-100/80 transition ease-in-out duration-150">
                                {{-- Tanggal --}}
                                <td
                                    class="px-3 py-1 text-xs text-center  whitespace-nowrap border-slate-400 text-slate-900 dark:border-slate-500 dark:text-slate-100 border-r">
                                    {{ $key }}
                                </td>
                                {{-- Cetak Harian --}}
                                <td
                                    class="pl-6 pr-2 py-1 text-xs text-right font-medium  whitespace-nowrap border-slate-400 text-slate-900 dark:border-slate-500 dark:text-slate-100 border-r">
                                    {{ number_format($data['cetakHarian'],0) }}
                                </td>
                                {{-- Baik NP --}}
                                <td
                                    class="pl-6 pr-2 py-1 text-xs text-right font-medium  whitespace-nowrap border-slate-400 text-emerald-900 dark:border-slate-500 dark:text-slate-100 border-r">
                                    {{ number_format($data['hcsNP'],0) }}
                                </td>
                                {{-- Rusak NP --}}
                                <td
                                    class="pl-6 pr-2 py-1 text-xs text-right font-medium  whitespace-nowrap border-slate-400 text-slate-900 dark:border-slate-500 dark:text-slate-100 border-r">
                                    {{ number_format($data['hctsNP'],0) }}
                                </td>
                                {{-- Baik P --}}
                                <td
                                    class="pl-6 pr-2 py-1 text-xs text-right font-medium  whitespace-nowrap border-slate-400 text-slate-900 dark:border-slate-500 dark:text-slate-100 border-r">
                                    {{ number_format($data['hcsP'],0) }}
                                </td>
                                {{-- Rusak P --}}
                                <td
                                    class="pl-6 pr-2 py-1 text-xs text-right font-medium  whitespace-nowrap border-slate-400 text-slate-900 dark:border-slate-500 dark:text-slate-100 border-r">
                                    {{ number_format($data['hctsP'],0) }}
                                </td>
                                {{-- Baik Total --}}
                                <td
                                    class="pl-6 pr-2 py-1 text-xs text-right font-medium  whitespace-nowrap border-slate-400 text-slate-900 dark:border-slate-500 dark:text-slate-100 border-r">
                                    {{ number_format($data['hcsPcht'],0) }}
                                </td>
                                {{-- Rusak Total --}}
                                <td
                                    class="pl-6 pr-2 py-1 text-xs text-right font-medium  whitespace-nowrap border-slate-400 text-slate-900 dark:border-slate-500 dark:text-slate-100 border-r">
                                    {{ number_format($data['hctsPcht'],0) }}
                                </td>
                                {{-- Total Verifikasi --}}
                                <td
                                    class="pl-6 pr-2 py-1 text-xs text-right font-medium text-red-700  whitespace-nowrap border-slate-400 dark:border-slate-500 dark:text-slate-100 border-r">
                                    {{ number_format($data['inscPCHT'],2) }} %
                                </td>
                                {{-- Incshiet Harian --}}
                                <td
                                    class="pl-6 pr-2 py-1 text-xs text-right font-medium whitespace-nowrap border-slate-400 text-slate-900 dark:border-slate-500 dark:text-slate-100 border-r">
                                    {{ number_format($data['totalPCHT'],0) }}
                                </td>
                                {{-- WIP --}}
                                <td
                                    class="pl-6 pr-2 py-1 text-xs text-right font-medium  whitespace-nowrap border-slate-400 text-slate-900 dark:border-slate-500 dark:text-slate-100 border-r">
                                    {{ number_format($data['wipPcht'],0) }}
                                </td>
                                {{-- Jumlah Kemas --}}
                                <td
                                    class="pl-6 pr-2 py-1 text-xs text-right font-medium  whitespace-nowrap border-slate-400 text-slate-900 dark:border-slate-500 dark:text-slate-100 border-r">
                                    {{ number_format($data['kemasPCHT'],0) }}
                                </td>
                                {{-- Jumlah Kirim --}}
                                <td
                                    class="pl-6 pr-2 py-1 text-xs text-right font-medium  whitespace-nowrap border-slate-400 text-slate-900 dark:border-slate-500 dark:text-slate-100 border-r">
                                    {{ number_format($data['pengiriman'],0) }}
                                </td>
                                {{-- Stock Barang --}}
                                <td
                                    class="pl-6 pr-2 py-1 text-xs text-right font-medium  whitespace-nowrap border-slate-400 text-slate-900 dark:border-slate-500 dark:text-slate-100 border-r">
                                    {{ number_format($data['stockKirim'],0) }}
                                </td>
                            </tr>
                            @endforeach
                            {{-- Row Total PCHT --}}
                            <tr
                                class="px-3 py-1 bg-yellow-300 text-center border-slate-600 dark:border-slate-500 border-b border-t-2 border-l border-x hover:bg-yellow-100/80 transition ease-in-out duration-150">
                                <td colspan="2"
                                    class="px-3 py-1 text-xs font-semibold text-center whitespace-nowrap border-slate-600 text-slate-900 dark:border-slate-500 dark:text-slate-100 border-r">
                                    Akumulasi
                                </td>
                                {{-- Akm Baik NP --}}
                                <td
                                    class="px-3 py-1 text-xs font-semibold text-right whitespace-nowrap border-slate-600 text-slate-900 dark:border-slate-500 dark:text-slate-100 border-r">
                                    {{ number_format($akmPcht['hcsNP'],0) }}
                                </td>
                                {{-- Akm Rusak NP --}}
                                <td
                                    class="px-3 py-1 text-xs font-semibold text-right whitespace-nowrap border-slate-600 text-slate-900 dark:border-slate-500 dark:text-slate-100 border-r">
                                    {{ number_format($akmPcht['hctsNP'],0) }}
                                </td>
                                {{-- Akm Baik P --}}
                                <td
                                    class="px-3 py-1 text-xs font-semibold text-right whitespace-nowrap border-slate-600 text-slate-900 dark:border-slate-500 dark:text-slate-100 border-r">
                                    {{ number_format($akmPcht['hcsP'],0) }}
                                </td>
                                {{-- Akm Rusak P --}}
                                <td
                                    class="px-3 py-1 text-xs font-semibold text-right whitespace-nowrap border-slate-600 text-slate-900 dark:border-slate-500 dark:text-slate-100 border-r">
                                    {{ number_format($akmPcht['hctsP'],0) }}
                                </td>
                                {{-- Akm Baik PCHT --}}
                                <td
                                    class="px-3 py-1 text-xs font-semibold text-right whitespace-nowrap border-slate-600 text-slate-900 dark:border-slate-500 dark:text-slate-100 border-r">
                                    {{ number_format($akmPcht['hcsPcht'],0) }}
                                </td>
                                {{-- Akm Rusak PCHT --}}
                                <td
                                    class="px-3 py-1 text-xs font-semibold text-right whitespace-nowrap border-slate-600 text-slate-900 dark:border-slate-500 dark:text-slate-100 border-r">
                                    {{ number_format($akmPcht['hctsPcht'],0) }}
                                </td>
                                {{-- Akm Inschiet PCHT --}}
                                <td
                                    class="px-3 py-1 text-xs font-semibold text-right whitespace-nowrap border-slate-600 text-slate-900 dark:border-slate-500 dark:text-slate-100 border-r">
                                    {{ number_format($akmPcht['inscPcht'],2) }} %
                                </td>
                                {{-- Akm Verifikasi --}}
                                <td
                                    class="px-3 py-1 text-xs font-semibold text-right whitespace-nowrap border-slate-600 text-slate-900 dark:border-slate-500 dark:text-slate-100 border-r">
                                    {{ number_format($akmPcht['verifPcht'],0) }}
                                </td>
                                <td
                                    class="px-3 py-1 text-xs font-semibold text-right whitespace-nowrap border-slate-600 text-slate-900 dark:border-slate-500 dark:text-slate-100 border-r">
                                </td>
                                {{-- Akm Kemas --}}
                                <td
                                    class="px-3 py-1 text-xs font-semibold text-right whitespace-nowrap border-slate-600 text-slate-900 dark:border-slate-500 dark:text-slate-100 border-r">
                                    {{ number_format($akmPcht['kemasPcht'],0) }}
                                </td>
                                {{-- Akm Kirim --}}
                                <td
                                    class="px-3 py-1 text-xs font-semibold text-right whitespace-nowrap border-slate-600 text-slate-900 dark:border-slate-500 dark:text-slate-100 border-r">
                                    {{ number_format($akmPcht['kirimPcht'],0) }}
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
                                    {{ number_format($akmPcht['orderPcht'],0) }}
                                </td>
                                <td colspan="2"
                                    class="px-3 py-1 text-xs font-semibold text-center whitespace-nowrap border-slate-600 text-slate-900 dark:border-slate-500 dark:text-slate-100 border-r">
                                    Sisa Order PCHT (Rencet)
                                </td>
                                <td colspan="2"
                                    class="px-3 py-1 text-xs font-semibold text-right whitespace-nowrap border-slate-600 text-slate-900 dark:border-slate-500 dark:text-slate-100 border-r">
                                    {{ number_format($akmPcht['sisaPcht'],0) }}
                                </td>
                                <td
                                    class="px-3 py-1 text-xs font-semibold text-center whitespace-nowrap border-slate-600 text-slate-900 dark:border-slate-500 dark:text-slate-100 border-r">
                                    OBC PCHT
                                </td>
                                <td
                                    class="px-3 py-1 text-xs font-semibold text-right whitespace-nowrap border-slate-600 text-slate-900 dark:border-slate-500 dark:text-slate-100 border-r">
                                    {{ number_format($akmPcht['obcPcht'],0) }} OBC
                                </td>
                                <td
                                    class="px-3 py-1 text-xs font-semibold text-center whitespace-nowrap border-slate-600 text-slate-900 dark:border-slate-500 dark:text-slate-100 border-r">
                                    Sisa OBC PCHT
                                </td>
                                <td
                                    class="px-3 py-1 text-xs font-semibold text-right whitespace-nowrap border-slate-600 text-slate-900 dark:border-slate-500 dark:text-slate-100 border-r">
                                    {{ number_format($akmPcht['sisaObcPcht'],0) }} OBC
                                </td>
                                <td
                                    class="px-3 py-1 text-xs font-semibold text-center whitespace-nowrap border-slate-600 text-slate-900 dark:border-slate-500 dark:text-slate-100 border-r">
                                    Jatuh Tempo Terdekat
                                </td>
                                <td
                                    class="px-3 py-1 text-xs font-semibold text-right whitespace-nowrap border-slate-600 text-slate-900 dark:border-slate-500 dark:text-slate-100 border-r">
                                    {{ $akmPcht['tglJt'] }} = {{ number_format($akmPcht['jmlJtPcht'],0) }} LK
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
