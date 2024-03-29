<div class="container mx-auto" x-data="{editModal : false, deleteModal : false}">
    <form>
        <x-modal.edit-retur />
    </form>
    <form>
        <x-modal.app-delete>
            <x-slot name="title">Kelolosan</x-slot>
        </x-modal.app-delete>
    </form>
    <x-card-scale>
        {{-- Header --}}
        <div class="px-4 py-6">
            <h4 class="my-auto font-sans text-lg font-semibold leading-tight text-slate-500 dark:text-slate-100">DATA
                KELOLOSAN</h4>
        </div>
        {{-- Body --}}
        <div class="px-4 pb-4">
            {{-- 1.0 Filter & Search Section --}}
            <div
                class="p-4 text-sm border-y bg-inerhit border-slate-300 bg-opacity-30 dark:border-slate-500 dark:bg-slate-700 dark:bg-opacity-50">
                <div class="flex flex-wrap justify-between gapy-1.5 px-2 leading-tigh">
                    {{-- Filter NP --}}
                    <div
                        class="flex gap-2 px-2 py-1 text-blue-600 transition duration-300 ease-in-out border border-blue-600 rounded focus-within:ring-1 dark:text-blue-500 dark:border-blue-500 dark:focus-within:brightness-125 focus-within:shadow-lg focus-within:shadow-blue-500/20">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="w-6 h-6 text-blue-600">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M15.75 6a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0zM4.501 20.118a7.5 7.5 0 0114.998 0A17.933 17.933 0 0112 21.75c-2.676 0-5.216-.584-7.499-1.632z" />
                        </svg>
                        <select
                            class="-my-1 -mr-2 text-xs transition duration-150 border-none rounded-r appearance-none text-slate-700 dark:border-blue-500 focus:ring-0 dark:bg-slate-800 dark:bg-opacity-10 focus:bg-opacity-100 dark:text-slate-100"
                            wire:model="npUser">
                            <option value="0" class="text-center">-- NP/Nama --</option>
                            @foreach ($listNp as $np)
                            <option value="{{ $np->np_user }}">{{ $np->nama }} </option>
                            @endforeach
                        </select>
                    </div>
                    {{-- Filter Date Range --}}
                    <div
                        class="flex gap-2 px-2 py-1 text-blue-600 transition duration-300 ease-in-out border border-blue-600 rounded focus-within:ring-1 dark:text-blue-500 dark:border-blue-500 dark:focus-within:brightness-125 focus-within:shadow-lg focus-within:shadow-blue-500/20">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                            class="w-6 h-6 text-blue-600">
                            <path
                                d="M12.75 12.75a.75.75 0 11-1.5 0 .75.75 0 011.5 0zM7.5 15.75a.75.75 0 100-1.5.75.75 0 000 1.5zM8.25 17.25a.75.75 0 11-1.5 0 .75.75 0 011.5 0zM9.75 15.75a.75.75 0 100-1.5.75.75 0 000 1.5zM10.5 17.25a.75.75 0 11-1.5 0 .75.75 0 011.5 0zM12 15.75a.75.75 0 100-1.5.75.75 0 000 1.5zM12.75 17.25a.75.75 0 11-1.5 0 .75.75 0 011.5 0zM14.25 15.75a.75.75 0 100-1.5.75.75 0 000 1.5zM15 17.25a.75.75 0 11-1.5 0 .75.75 0 011.5 0zM16.5 15.75a.75.75 0 100-1.5.75.75 0 000 1.5zM15 12.75a.75.75 0 11-1.5 0 .75.75 0 011.5 0zM16.5 13.5a.75.75 0 100-1.5.75.75 0 000 1.5z" />
                            <path fill-rule="evenodd"
                                d="M6.75 2.25A.75.75 0 017.5 3v1.5h9V3A.75.75 0 0118 3v1.5h.75a3 3 0 013 3v11.25a3 3 0 01-3 3H5.25a3 3 0 01-3-3V7.5a3 3 0 013-3H6V3a.75.75 0 01.75-.75zm13.5 9a1.5 1.5 0 00-1.5-1.5H5.25a1.5 1.5 0 00-1.5 1.5v7.5a1.5 1.5 0 001.5 1.5h13.5a1.5 1.5 0 001.5-1.5v-7.5z"
                                clip-rule="evenodd" />
                        </svg>
                        <input type="text" id="dateRange" name="dateRange"
                            class="-my-1 -mr-2 text-xs transition duration-150 border-none rounded-r appearance-none text-slate-700 dark:border-blue-500 focus:ring-0 dark:bg-slate-800 dark:bg-opacity-10 focus:bg-opacity-100 dark:text-slate-100"
                            placeholder="Periode" />
                    </div>
                    {{-- Search --}}
                    <div class="relative flex flex-wrap gapy-1.5 px-2 leading-tigh">
                        <div class="relative">
                            <input type="text" wire:model="search"
                                class="py-2 pl-10 pr-4 text-xs font-medium text-gray-600 transition duration-150 ease-out border border-t rounded shadow border-slate-400 focus:shadow-md focus:shadow-blue-500/30 focus:border-blue-500 focus:ring-blue-600 focus:outline-none focus:ring-1 hover:border-blue-500"
                                placeholder="Search...">
                            <div class="absolute top-0 left-0 inline-flex items-center pt-2 pl-2 text-gray-500">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" viewBox="0 0 20 20"
                                    fill="currentColor">
                                    <path fill-rule="evenodd"
                                        d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                                        clip-rule="evenodd" />
                                </svg>
                            </div>
                        </div>
                        {{-- Button Export --}}
                        <div>
                            <button wire:click='exportExcel'
                                class="flex gap-2 px-2 py-1 text-green-400 border-2 border-green-400 rounded-md brightness-110 hover:shadow-lg hover:shadow-green-400/30 hover:brightness-125">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
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
                class="overflow-hidden border-t border-slate-400 bg-inherit dark:border-slate-500 dark:bg-slate-700 dark:bg-opacity-50">
                <div class="flex flex-col">
                    <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
                        <div class="inline-block min-w-full sm:px-6 lg:px-8">
                            <div class="overflow-hidden">
                                <table class="min-w-full">
                                    {{-- 2.1 Header Table --}}
                                    <thead
                                        class="text-sm font-bold border-b-2 border-slate-300 text-slate-700 dark:border-slate-500 dark:text-slate-400">
                                        <tr>
                                            {{-- 2.1.1 Index --}}
                                            <th scope="col"
                                                class="py-1.5 px-2 leading-tigh text-center border-slate-300 dark:border-slate-500">
                                                No
                                            </th>
                                            {{-- 2.1.2 Nomor Pokok --}}
                                            <th scope="col"
                                                class="py-1.5 px-2 leading-tigh text-center border-slate-300 dark:border-slate-500">
                                                NP / Nama
                                            </th>
                                            {{-- 2.1.4 Tanggal CK3 --}}
                                            <th scope="col"
                                                class="py-1.5 px-2 leading-tigh text-center border-slate-300 dark:border-slate-500">
                                                Periode CK3
                                            </th>
                                            {{-- 2.1.5 Jenis Barang --}}
                                            <th scope="col"
                                                class="py-1.5 px-2 leading-tigh text-center border-slate-300 dark:border-slate-500">
                                                Produk
                                            </th>
                                            {{-- 2.1.6 Jenis Retur --}}
                                            <th scope="col"
                                                class="py-1.5 px-2 leading-tigh text-center border-slate-300 dark:border-slate-500">
                                                Jenis Retur
                                            </th>
                                            {{-- 2.1.7 Total Retur --}}
                                            <th scope="col"
                                                class="py-1.5 px-2 leading-tigh border-slate-300 dark:border-slate-500 text-end">
                                                Total Retur
                                            </th>
                                            {{-- 2.1.8 Action --}}
                                            <th scope="col"
                                                class="px-4 py-2 text-center border-b border-slate-400 dark:border-slate-500">
                                                Action
                                            </th>
                                        </tr>
                                    </thead>
                                    {{-- 2.2 Body Table --}}
                                    <tbody>
                                        @foreach ($data as $datas)
                                        <tr
                                            class="transition duration-300 ease-in-out border-b border-slate-300 text-slate-800 hover:bg-slate-400 hover:bg-opacity-10 dark:text-slate-100">
                                            {{-- 2.2.1 Index Coloumn --}}
                                            <td
                                                class="py-1.5 px-2 leading-tigh text-sm font-medium text-center whitespace-nowrap text-slate-700 dark:border-slate-500 dark:text-slate-100">
                                                {{ $data->firstItem() + $loop->index }}
                                            </td>
                                            {{-- 2.2.2 Np User Coloumn --}}
                                            <td
                                                class="py-1.5 px-2 leading-tigh text-sm whitespace-nowrap text-slate-600 dark:border-slate-500 dark:text-slate-100">
                                                <div class="flex flex-col gap-1">
                                                    <span class="font-medium text-slate-700">
                                                        {{ $datas->np_user }}
                                                    </span>
                                                    {{ $datas->userDetails->nama }}
                                                </div>
                                            </td>
                                            {{-- 2.2.4 Tanggal CK3 Coloumn --}}
                                            <td
                                                class="py-1.5 px-2 leading-tigh text-sm text-center whitespace-nowrap text-slate-700 dark:border-slate-500 dark:text-slate-100">
                                                {{ Carbon\Carbon::parse($datas->tgl_ck3)->format('d F Y') }}
                                            </td>
                                            {{-- 2.2.5 Jenis Product Coloumn --}}
                                            <td
                                                class="py-1.5 px-2 leading-tigh text-sm text-center whitespace-nowrap text-slate-700 dark:border-slate-500 dark:text-slate-100">
                                                {{ $datas->jenis }}
                                            </td>
                                            {{-- 2.2.6 Jenis Retur Coloumn --}}
                                            <td
                                                class="py-1.5 px-2 leading-tigh text-sm text-center whitespace-nowrap text-slate-700 dark:border-slate-500 dark:text-slate-100">
                                                <div class="flex flex-wrap gap-2 justifiy-start">
                                                    @if ($datas->blobor == !null)
                                                        <span
                                                            class="inline-block whitespace-nowrap rounded-full bg-red-600  py-1 px-2.5 text-center align-baseline text-xs font-bold leading-none text-slate-100">
                                                            Blobor
                                                        </span>
                                                    @endif
                                                    @if ($datas->hologram == !null)
                                                        <span
                                                            class="inline-block whitespace-nowrap rounded-full bg-red-600 py-1 px-2.5 text-center align-baseline text-xs font-bold leading-none text-slate-100">
                                                            Hologram
                                                        </span>
                                                    @endif
                                                    @if ($datas->miss_reg == !null)
                                                        <span
                                                            class="inline-block whitespace-nowrap rounded-full bg-red-600 py-1 px-2.5 text-center align-baseline text-xs font-bold leading-none text-slate-100">
                                                            Miss Register
                                                        </span>
                                                    @endif
                                                    @if ($datas->noda == !null)
                                                        <span
                                                            class="inline-block whitespace-nowrap rounded-full bg-red-600 py-1 px-2.5 text-center align-baseline text-xs font-bold leading-none text-slate-100">
                                                            Noda
                                                        </span>
                                                    @endif
                                                    @if ($datas->plooi == !null)
                                                        <span
                                                            class="inline-block whitespace-nowrap rounded-full bg-red-600 py-1 px-2.5 text-center align-baseline text-xs font-bold leading-none text-slate-100">
                                                            Plooi
                                                        </span>
                                                    @endif
                                                    @if ($datas->blur == !null)
                                                        <span
                                                            class="inline-block whitespace-nowrap rounded-full bg-red-600 py-1 px-2.5 text-center align-baseline text-xs font-bold leading-none text-slate-100">
                                                            Blur
                                                        </span>
                                                    @endif
                                                    @if ($datas->gradasi == !null)
                                                        <span
                                                            class="inline-block whitespace-nowrap rounded-full bg-red-600 py-1 px-2.5 text-center align-baseline text-xs font-bold leading-none text-slate-100">
                                                            Gradasi
                                                        </span>
                                                    @endif
                                                    @if ($datas->terpotong == !null)
                                                        <span
                                                            class="inline-block whitespace-nowrap rounded-full bg-red-600 py-1 px-2.5 text-center align-baseline text-xs font-bold leading-none text-slate-100">
                                                            Terpotong
                                                        </span>
                                                    @endif
                                                    @if ($datas->tipis == !null)
                                                    <span
                                                            class="inline-block whitespace-nowrap rounded-full bg-red-600 py-1 px-2.5 text-center align-baseline text-xs font-bold leading-none text-slate-100">
                                                            Tipis
                                                        </span>
                                                    @endif
                                                    @if ($datas->sobek == !null)
                                                        <span
                                                            class="inline-block whitespace-nowrap rounded-full bg-red-600 py-1 px-2.5 text-center align-baseline text-xs font-bold leading-none text-slate-100">
                                                            Sobek
                                                        </span>
                                                    @endif
                                                    @if ($datas->botak == !null)
                                                        <span
                                                            class="inline-block whitespace-nowrap rounded-full bg-red-600 py-1 px-2.5 text-center align-baseline text-xs font-bold leading-none text-slate-100">
                                                            Botak
                                                        </span>
                                                    @endif
                                                    @if ($datas->tercampur == !null)
                                                        <span
                                                            class="inline-block whitespace-nowrap rounded-full bg-red-600 py-1 px-2.5 text-center align-baseline text-xs font-bold leading-none text-slate-100">
                                                            Tercampur
                                                        </span>
                                                    @endif
                                                    @if ($datas->diecut == !null)
                                                        <span
                                                            class="inline-block whitespace-nowrap rounded-full bg-red-600 py-1 px-2.5 text-center align-baseline text-xs font-bold leading-none text-slate-100">
                                                            Diecut
                                                        </span>
                                                    @endif
                                                    @if ($datas->minyak == !null)
                                                        <span
                                                            class="inline-block whitespace-nowrap rounded-full bg-red-600 py-1 px-2.5 text-center align-baseline text-xs font-bold leading-none text-slate-100">
                                                            Minyak
                                                        </span>
                                                    @endif
                                                    @if ($datas->blanko == !null)
                                                        <span
                                                            class="inline-block whitespace-nowrap rounded-full bg-red-600 py-1 px-2.5 text-center align-baseline text-xs font-bold leading-none text-slate-100">
                                                            Blanko
                                                        </span>
                                                    @endif
                                                    @if ($datas->terlipat == !null)
                                                        <span
                                                            class="inline-block whitespace-nowrap rounded-full bg-red-600 py-1 px-2.5 text-center align-baseline text-xs font-bold leading-none text-slate-100">
                                                            Terlipat
                                                        </span>
                                                    @endif
                                                </div>
                                            </td>
                                            {{-- 2.2.7 Total Retur Coloumn --}}
                                            <td
                                                class="py-1.5 px-2 leading-tigh text-sm text-right whitespace-nowrap text-slate-700 dark:border-slate-500 dark:text-slate-100">
                                                {{ number_format($datas->jml_retur,0) }} Lbr
                                            </td>
                                            {{-- 2.2.11 Action Coloumn --}}
                                            <td
                                                class="px-4 py-2 text-sm text-center border-y border-slate-300 dark:border-slate-500 text-slate-800 dark:text-slate-100">
                                                <div class="flex justify-center space-x-2">
                                                    <button type="button" type="button" data-mdb-ripple="true"
                                                        @click.prevent="editModal = true"
                                                        wire:click="edit({{ $datas->id }})"
                                                        data-mdb-ripple-color="light"
                                                        class="inline-block px-3 py-2 text-sm font-semibold leading-tight transition duration-150 ease-in-out bg-green-500 rounded shadow-md text-slate-100 hover:bg-green-600 hover:shadow-lg focus:bg-green-600 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-green-700 active:shadow-lg">
                                                        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5"
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
                                                        @click.prevent="deleteModal = true"
                                                        wire:click="delete({{ $datas->id }})"
                                                        class="inline-block px-3 py-2 text-sm font-semibold leading-tight transition duration-150 ease-in-out bg-red-500 rounded shadow-md text-slate-100 hover:bg-red-600 hover:shadow-lg focus:bg-red-600 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-red-700 active:shadow-lg">
                                                        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5"
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
                class="px-10 pt-2 pb-3 overflow-hidden border-b rounded-b bg-inerhit border-slate-300 text-slate-700 dark:border-slate-500 dark:bg-slate-700 dark:bg-opacity-50 dark:text-slate-100">
                {{ $data->links('vendor.livewire.tailwind') }}
            </div>
            {{-- End Footer --}}
        </div>
    </x-card-scale>
</div>

@section('plugin-js')
<link rel="stylesheet" href="{{ asset('plugins/daterangepicker.css') }}">
<script src="{{ asset('plugins/jquery-3.6.1.min.js') }}"></script>
<script src="{{ asset('plugins/moment.min.js') }}"></script>
<script src="{{ asset('plugins/daterangepicker.min.js') }}"></script>
<script src="{{ asset('chart.js/chart.min.js') }}"></script>
@endsection

@push('js')

{{-- Datepicker --}}
<script>
    document.addEventListener('livewire:load', function () {
            $('#dateRange').daterangepicker({
                        ranges: {
                            'Hari Ini': [moment(), moment()],
                            'Kemarin': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
                            '7 Hari Terakhir': [moment().subtract(6, 'days'), moment()],
                            '30 Hari Terakhir': [moment().subtract(29, 'days'), moment()],
                            'Bulan Ini': [moment().startOf('month'), moment().endOf('month')],
                            'Bulan Kemarin': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
                        },
                        "locale": {
                            "format": "DD-MM-YYYY",
                            "separator": " - ",
                            "applyLabel": "Apply",
                            "cancelLabel": "Cancel",
                            "fromLabel": "From",
                            "toLabel": "To",
                            "customRangeLabel": "Custom",
                            "weekLabel": "W",
                            "daysOfWeek": [
                                "Min",
                                "Sen",
                                "Sel",
                                "Rab",
                                "Kam",
                                "Jum",
                                "Sab"
                            ],
                            "monthNames": [
                                "Januari",
                                "Febuari",
                                "Maret",
                                "April",
                                "Mei",
                                "Juni",
                                "Juli",
                                "Augustus",
                                "September",
                                "Oktober",
                                "November",
                                "December"
                            ],
                            "firstDay": 1
                        },
                        "startDate": moment().startOf('month'),
                        "endDate": moment().endOf('month'),
                        "opens": "auto"
                    }, function(start, end, label) {
                        @this.set('startDate',start.format('YYYY-MM-DD'));
                        @this.set('endDate',end.format('YYYY-MM-DD'));

                    });
                })
</script>
@endpush
