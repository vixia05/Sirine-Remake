<div class="container mx-auto py-10">
    <x-card>
        {{-- Header --}}
        <x-slot name="title">
            <h4
                class="my-auto font-sans text-lg font-semibold leading-tight text-slate-500 dark:text-slate-100 text-center">
                Monitoring Produksi Pita Cukai</h4>
        </x-slot>
        {{-- Filter --}}
        <div class="flex justify-between p-4">
            <x-date-range>
                <x-slot name="lable">
                    Periode
                </x-slot>
            </x-date-range>
        </div>
        {{-- Table --}}
        <div
            class="overflow-hidden mx-4 border-t border-slate-400 bg-inherit dark:border-slate-500 dark:bg-slate-700 dark:from-transparent dark:to-transparent dark:bg-opacity-50">
            <div class="flex flex-col">
                <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
                    <div class="inline-block min-w-full sm:px-4 lg:px-8">
                        <div class="overflow-hidden">
                            <table class="min-w-full">
                                <thead
                                    class="text-sm font-bold border-b border-slate-400 text-slate-700 dark:border-slate-500 dark:text-slate-400">
                                    <tr class="border border-slate-400 rounded-md bg-gradient-to-br from-green-200 to-emerald-300 brightness-105">
                                        <th colspan="17" class=" py-1 text-lg text-slate-700 drop-shadow-lg shadow-slate-200/30">Pita Cukai Non-Perekat {{ today()->format('F Y') }}</th>
                                    </tr>
                                    <tr class="border border-slate-400 rounded-md bg-cyan-100">
                                        <th class="p-3 text-center border-slate-400 dark:border-slate-500 border-l" scope="col" rowspan="3">
                                            Tanggal
                                        </th>
                                        <th class="p-3 text-center border-slate-400 dark:border-slate-500 border-l" scope="col" rowspan="3">
                                            Hasil Cetak
                                        </th>
                                        <th class="p-3 text-center border-slate-400 dark:border-slate-500 border-l border-b" scope="col" colspan="3">
                                            Baik Periksa
                                        </th>
                                        <th class="p-3 text-center border-slate-400 dark:border-slate-500 border-l border-b" scope="col" colspan="3">
                                            Rusak Periksa
                                        </th>
                                        <th class="p-3 text-center border-slate-400 dark:border-slate-500 border-l border-b" scope="col" colspan="3">
                                            Total Periksa
                                        </th>
                                        <th class="p-3 text-center border-slate-400 dark:border-slate-500 border-l" scope="col" rowspan="3">
                                            % Incshiet
                                        </th>
                                        <th class="p-3 text-center border-slate-400 dark:border-slate-500 border-l" scope="col" rowspan="3">
                                            Saldo Akhir Verifikasi (WIP)
                                        </th>
                                        <th class="p-3 text-center border-slate-400 dark:border-slate-500 border-l" scope="col" rowspan="3">
                                            Jumlah Kemas
                                        </th>
                                        <th class="p-3 text-center border-slate-400 dark:border-slate-500 border-l" scope="col" rowspan="3">
                                            Jumlah Kirim
                                        </th>
                                        <th class="p-3 text-center border-slate-400 dark:border-slate-500 border-x" scope="col" rowspan="3">
                                            Kemas, Belum Kirim
                                        </th>
                                    </tr>
                                    <tr class="border border-slate-400 rounded-md bg-cyan-100">
                                        <th class="p-3 text-center border-slate-400 dark:border-slate-500 border-l" scope="col">
                                            NP
                                        </th>
                                        <th class="p-3 text-center border-slate-400 dark:border-slate-500 border-l" scope="col">
                                            P
                                        </th>
                                        <th class="p-3 text-center border-slate-400 dark:border-slate-500 border-l" scope="col">
                                            Total
                                        </th>
                                        <th class="p-3 text-center border-slate-400 dark:border-slate-500 border-l" scope="col">
                                            NP
                                        </th>
                                        <th class="p-3 text-center border-slate-400 dark:border-slate-500 border-l" scope="col">
                                            P
                                        </th>
                                        <th class="p-3 text-center border-slate-400 dark:border-slate-500 border-l" scope="col">
                                            Total
                                        </th>
                                        <th class="p-3 text-center border-slate-400 dark:border-slate-500 border-l" scope="col">
                                            NP
                                        </th>
                                        <th class="p-3 text-center border-slate-400 dark:border-slate-500 border-l" scope="col">
                                            P
                                        </th>
                                        <th class="p-3 text-center border-slate-400 dark:border-slate-500 border-l" scope="col">
                                            Total
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($test as $key => $data)
                                    <tr class="p-3 text-center border-slate-400 dark:border-slate-500 border-b border-x">
                                        {{-- Tanggal --}}
                                        <td class="px-3 py-2 text-sm text-center font-light whitespace-nowrap border-slate-400 text-slate-700 dark:border-slate-500 dark:text-slate-100 border-r">
                                            {{ $key }}
                                        </td>
                                        {{-- Cetak Harian --}}
                                        <td class="px-3 py-2 text-sm text-center font-light whitespace-nowrap border-slate-400 text-slate-700 dark:border-slate-500 dark:text-slate-100 border-r">
                                            0
                                        </td>
                                        {{-- Baik NP --}}
                                        <td class="px-3 py-2 text-sm text-right font-light whitespace-nowrap border-slate-400 text-slate-700 dark:border-slate-500 dark:text-slate-100 border-r">
                                            {{ number_format($data['hcsNP'],0) }}
                                        </td>
                                        {{-- Baik P --}}
                                        <td class="px-3 py-2 text-sm text-right font-light whitespace-nowrap border-slate-400 text-slate-700 dark:border-slate-500 dark:text-slate-100 border-r">
                                            {{ number_format($data['hcsP'],0) }}
                                        </td>
                                        {{-- Baik Total --}}
                                        <td class="px-3 py-2 text-sm text-right font-light whitespace-nowrap border-slate-400 text-slate-700 dark:border-slate-500 dark:text-slate-100 border-r">
                                            {{ number_format($data['hcsPcht'],0) }}
                                        </td>
                                        {{-- Rusak NP --}}
                                        <td class="px-3 py-2 text-sm text-right font-light whitespace-nowrap border-slate-400 text-slate-700 dark:border-slate-500 dark:text-slate-100 border-r">
                                            {{ number_format($data['hctsNP'],0) }}
                                        </td>
                                        {{-- Rusak P --}}
                                        <td class="px-3 py-2 text-sm text-right font-light whitespace-nowrap border-slate-400 text-slate-700 dark:border-slate-500 dark:text-slate-100 border-r">
                                            {{ number_format($data['hctsP'],0) }}
                                        </td>
                                        {{-- Rusak Total --}}
                                        <td class="px-3 py-2 text-sm text-right font-light whitespace-nowrap border-slate-400 text-slate-700 dark:border-slate-500 dark:text-slate-100 border-r">
                                            {{ number_format($data['hctsPcht'],0) }}
                                        </td>
                                        {{-- Incshiet Total --}}
                                        <td class="px-3 py-2 text-sm text-right font-light whitespace-nowrap border-slate-400 text-slate-700 dark:border-slate-500 dark:text-slate-100 border-r">
                                            0
                                        </td>
                                        <td class="px-3 py-2 text-sm text-right font-light whitespace-nowrap border-slate-400 text-slate-700 dark:border-slate-500 dark:text-slate-100 border-r">
                                            0
                                        </td>
                                        <td class="px-3 py-2 text-sm text-right font-light whitespace-nowrap border-slate-400 text-slate-700 dark:border-slate-500 dark:text-slate-100 border-r">
                                            0
                                        </td>
                                        <td class="px-3 py-2 text-sm text-right font-light whitespace-nowrap border-slate-400 text-slate-700 dark:border-slate-500 dark:text-slate-100 border-r">
                                            0
                                        </td>
                                        <td class="px-3 py-2 text-sm text-right font-light whitespace-nowrap border-slate-400 text-slate-700 dark:border-slate-500 dark:text-slate-100 border-r">
                                            0
                                        </td>
                                        <td class="px-3 py-2 text-sm text-right font-light whitespace-nowrap border-slate-400 text-slate-700 dark:border-slate-500 dark:text-slate-100 border-r">
                                            0
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        <div
                            class="px-10 py-2 overflow-hidden border-b rounded-b bg-inerhit border-slate-400 text-slate-700 dark:border-slate-500 dark:bg-slate-700 dark:from-transparent dark:to-transparent dark:bg-opacity-50 dark:text-slate-100">
                            {{-- {{ $data->links('vendor.livewire.tailwind') }} --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </x-card>
</div>
