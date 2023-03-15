<div class="overflow-hidden -mx-4 -mt-6 rounded-t-lg">
    <table class="min-w-full table-auto">
        {{-- Header Table --}}
        <thead
            class="text-sm font-bold border-b-2 border-slate-300 text-slate-700 dark:border-slate-500 dark:text-slate-400 pb-4 bg-slate-200">
            <tr>
                {{-- 2.1.1 Index --}}
                <th scope="col" class="pt-6 pb-1.5 px-2 leading-tight text-center border-slate-300 dark:border-slate-500">
                    No
                </th>
                {{-- 2.1.2 Nomor Pokok --}}
                <th scope="col" class="pt-6 pb-1.5  px-2 leading-tight text-left border-slate-300 dark:border-slate-500 ">
                    NP / Nama
                </th>
                {{-- 2.1.4 Tanggal CK3 --}}
                <th scope="col" class="pt-6 pb-1.5  px-2 leading-tight text-left border-slate-300 dark:border-slate-500">
                    Periode CK3
                </th>
                {{-- 2.1.5 Jenis Barang --}}
                <th scope="col" class="pt-6 pb-1.5  px-2 leading-tight text-center border-slate-300 dark:border-slate-500">
                    Produk
                </th>
                {{-- 2.1.7 Total Retur --}}
                <th scope="col" class="pt-6 pb-1.5  px-4 leading-tight border-slate-300 dark:border-slate-500 text-end">
                    Total Retur
                </th>
                {{-- 2.1.6 Jenis Retur --}}
                <th scope="col" class="pt-6 pb-1.5  px-2 leading-tight text-center border-slate-300 dark:border-slate-500">
                    Jenis Retur
                </th>
            </tr>
        </thead>

        {{-- Table Body --}}
        <tbody>
            @forelse ($dataTable as $data)
            <tr
                class="transition duration-300 ease-in-out border-b border-slate-300 text-slate-800 hover:bg-slate-400 hover:bg-opacity-10 dark:text-slate-100">
                {{-- Index Coloumn --}}
                <td
                    class="py-1.5 px-2 leading-tight text-sm font-medium text-center whitespace-nowrap text-slate-700 dark:border-slate-500 dark:text-slate-100">
                    {{ $dataTable->firstItem() + $loop->index }}
                </td>

                {{-- Identitas --}}
                <td
                    class="py-1.5 px-2 leading-tight text-sm whitespace-nowrap text-slate-600 dark:border-slate-500 dark:text-slate-100 w-fit">
                    <div class="flex flex-col gap-1">
                        <span class="font-medium text-slate-700">
                            {{ $data->np_user }}
                        </span>
                        {{ $data->userDetails->nama }}
                    </div>
                </td>

                {{-- Tgl Ck3 --}}
                <td
                    class="py-1.5 px-2 leading-tight text-sm  whitespace-nowrap text-slate-700 dark:border-slate-500 dark:text-slate-100">
                    {{ Carbon\Carbon::parse($data->tgl_ck3)->format('d F Y') }}
                </td>

                {{-- Jenis Produk --}}
                <td
                    class="py-1.5 px-2 leading-tight text-sm text-center whitespace-nowrap text-slate-700 dark:border-slate-500 dark:text-slate-100">
                    {{ $data->jenis }}
                </td>

                {{-- Total Kelolosan --}}
                <td
                    class="py-1.5 px-2 leading-tight text-sm text-right whitespace-nowrap text-slate-700 dark:border-slate-500 dark:text-slate-100">
                    {{ number_format($data->jml_retur,0) }} Lbr
                </td>

                {{-- Jenis Kelolosan --}}
                <td
                    class="py-1.5 px-4 leading-tight text-sm text-center whitespace-nowrap text-slate-700 dark:border-slate-500 dark:text-slate-100">
                    <div class="flex flex-wrap gap-2 justifiy-end items-center">
                            @foreach ($jenisRetur as $jenis)
                                @if ($data->$jenis == !null)
                                    <span
                                        class="inline-block whitespace-nowrap rounded-full bg-red-600  py-1 px-2.5 text-center align-baseline text-xs font-bold leading-none text-slate-100">
                                        {{ $jenis }}
                                    </span>
                                @endif
                            @endforeach
                    </div>
                </td>
            </tr>
            @empty
            <tr class="border-b-2">
                <td colspan="6"
                    class="py-6 px-2 leading-tight text-sm text-center whitespace-nowrap text-slate-700 dark:border-slate-500 dark:text-slate-100">
                    No Data
                </td>
            </tr>
            @endforelse
        </tbody>
    </table>
</div>

{{-- 3.0 Footer --}}
<div
    class="px-10 pt-2 pb-3 overflow-hidden bg-inerhit border-slate-300 text-slate-700 dark:border-slate-500 dark:bg-slate-700 dark:bg-opacity-50 dark:text-slate-100">
    {{ $dataTable->links('vendor.livewire.tailwind') }}
</div>
