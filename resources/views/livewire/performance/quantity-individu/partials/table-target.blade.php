<div class="w-full px-6 py-4 overflow-hidden bg-white rounded-2xl drop-shadow-sm dark:bg-slate-800 dark:bg-opacity-60 dark:backdrop-blur-sm dark:backdrop-filter"
    x-show='mainContent' x-transition:enter.duration.700ms x-transition:leave.duration.700ms>
    <h6 class="py-2 mb-1 font-bold text-md text-slate-800 dark:text-slate-100">Standar Verifikasi Pita
        Cukai (Dalam
        Keadaan
        Baik & Rusak)
    </h6>
    {{-- Table Target harian --}}
    <div class="row-span-3 overflow-hidden bg-inerhit">
        <div class="flex flex-col">
            <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
                <div class="inline-block min-w-full sm:px-6 lg:px-8">
                    <div class="overflow-hidden border rounded shadow-md border-slate-400 dark:border-slate-500">
                        <table class="min-w-full border-slate-400 dark:border-slate-500">
                            {{-- 2.1 Header Table --}}
                            <thead
                                class="text-sm font-bold border-b-2 border-slate-400 text-slate-700 dark:border-slate-500 dark:text-slate-400">
                                <tr>
                                    {{-- 2.1.1 Index --}}
                                    <th scope="col" class="p-3 text-center border-slate-300 dark:border-slate-500">
                                        Jam Kerja
                                    </th>
                                    {{-- 2.1.1 Index --}}
                                    <th scope="col" class="p-3 text-center border-slate-300 dark:border-slate-500">
                                        Standar Verifikasi PCHT
                                    </th>
                                    {{-- 2.1.1 Index --}}
                                    <th scope="col" class="p-3 text-center border-slate-300 dark:border-slate-500">
                                        Standar Verifikasi MMEA
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                {{-- 1.0 Tidak Lembur --}}
                                <tr
                                    class="transition duration-300 ease-in-out border-b border-slate-300 text-slate-800 hover:bg-slate-400 hover:bg-opacity-10 dark:text-slate-100">
                                    <td
                                        class="p-3 text-sm text-center whitespace-nowrap text-slate-700 dark:border-slate-500 dark:text-slate-100">
                                        Tidak Lembur
                                    </td>
                                    <td
                                        class="p-3 text-sm text-center whitespace-nowrap text-slate-700 dark:border-slate-500 dark:text-slate-100">
                                        15.000 Lbr / Hari
                                    </td>
                                    <td
                                        class="p-3 text-sm text-center whitespace-nowrap text-slate-700 dark:border-slate-500 dark:text-slate-100">
                                        6.000 Lbr / Hari
                                    </td>
                                </tr>
                                {{-- 2.0 Lembur Awal --}}
                                <tr
                                    class="transition duration-300 ease-in-out border-b border-slate-300 text-slate-800 hover:bg-slate-400 hover:bg-opacity-10 dark:text-slate-100">
                                    <td
                                        class="p-3 text-sm text-center whitespace-nowrap text-slate-700 dark:border-slate-500 dark:text-slate-100">
                                        Lembur Awal
                                    </td>
                                    <td
                                        class="p-3 text-sm text-center whitespace-nowrap text-slate-700 dark:border-slate-500 dark:text-slate-100">
                                        20.000 Lbr / Hari
                                    </td>
                                    <td
                                        class="p-3 text-sm text-center whitespace-nowrap text-slate-700 dark:border-slate-500 dark:text-slate-100">
                                        8.000 Lbr / Hari
                                    </td>
                                </tr>
                                {{-- 3.0 Lembur Akhir --}}
                                <tr
                                    class="transition duration-300 ease-in-out border-b border-slate-300 text-slate-800 hover:bg-slate-400 hover:bg-opacity-10 dark:text-slate-100">
                                    <td
                                        class="p-3 text-sm text-center whitespace-nowrap text-slate-700 dark:border-slate-500 dark:text-slate-100">
                                        Lembur Akhir
                                    </td>
                                    <td
                                        class="p-3 text-sm text-center whitespace-nowrap text-slate-700 dark:border-slate-500 dark:text-slate-100">
                                        22.500 Lbr / Hari
                                    </td>
                                    <td
                                        class="p-3 text-sm text-center whitespace-nowrap text-slate-700 dark:border-slate-500 dark:text-slate-100">
                                        9.000 Lbr / Hari
                                    </td>
                                </tr>
                                {{-- 3.0 Lembur Awal Akhir --}}
                                <tr
                                    class="transition duration-300 ease-in-out border-b border-slate-300 text-slate-800 hover:bg-slate-400 hover:bg-opacity-10 dark:text-slate-100">
                                    <td
                                        class="p-3 text-sm text-center whitespace-nowrap text-slate-700 dark:border-slate-500 dark:text-slate-100">
                                        Lembur Awal Akhir
                                    </td>
                                    <td
                                        class="p-3 text-sm text-center whitespace-nowrap text-slate-700 dark:border-slate-500 dark:text-slate-100">
                                        27.500 Lbr / Hari
                                    </td>
                                    <td
                                        class="p-3 text-sm text-center whitespace-nowrap text-slate-700 dark:border-slate-500 dark:text-slate-100">
                                        11.000 Lbr / Hari
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
