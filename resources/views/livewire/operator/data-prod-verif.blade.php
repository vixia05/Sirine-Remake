<div class="grid grid-cols-1" x-data="{editModal : false, deleteModal : false}">
    <form>
        @include('components.modal.edit-retur')
    </form>
    <form>
        @include('components.modal.delete-retur')
    </form>
    <div class="w-full rounded-md bg-white/70 dark:bg-slate-800 dark:bg-opacity-60 dark:backdrop-blur-sm dark:backdrop-filter">
        {{-- Header --}}
        <div class="px-10 py-4">
            <h4 class="my-auto font-sans text-2xl font-semibold leading-tight text-slate-800 dark:text-slate-100">DATA KELOLOSAN</h4>
        </div>
        {{-- Body --}}
        <div class="px-4 pb-4">
            {{-- 1.0 Filter & Search Section --}}
            <div
                class="px-4 py-4 border rounded-t bg-inerhit border-slate-400 bg-opacity-30 dark:border-slate-500 dark:bg-slate-700 dark:bg-opacity-50">
                <div class="flex flex-wrap justify-between gap-3">
                    {{-- Filter NP --}}
                    <div class="flex flex-row border border-blue-600 rounded-md brightness-110 dark:focus-within:shadow-lg dark:focus-within:shadow-blue-600/30 dark:focus-within:brightness-125">
                        <div class="px-2 py-1 rounded-l-md dark:bg-slate-800 dark:bg-opacity-50">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" class="w-6 h-6 text-blue-600">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M15.75 6a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0zM4.501 20.118a7.5 7.5 0 0114.998 0A17.933 17.933 0 0112 21.75c-2.676 0-5.216-.584-7.499-1.632z" />
                            </svg>
                        </div>
                        <select
                            class="w-full text-xs font-medium border-none rounded-r-md dark:bg-slate-800 dark:bg-opacity-50 dark:text-slate-100 dark:focus:bg-opacity-100 focus:border-none focus:ring-0"
                            wire:model="npUser">
                            <option value="0" class="text-center">-- NP/Nama --</option>
                            @foreach ($listNp as $np)
                                <option value="{{ $np->np_user }}">{{ $np->nama }} </option>
                            @endforeach
                        </select>
                    </div>
                    {{-- Filter Date Range --}}
                    <div class="flex flex-row border border-blue-600 rounded-md brightness-110 dark:focus-within:shadow-lg dark:focus-within:shadow-blue-600/30 dark:focus-within:brightness-125">
                        <div class="px-2 py-1 rounded-l-md dark:bg-slate-800 dark:bg-opacity-50">
                          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6 text-blue-600">
                            <path d="M12.75 12.75a.75.75 0 11-1.5 0 .75.75 0 011.5 0zM7.5 15.75a.75.75 0 100-1.5.75.75 0 000 1.5zM8.25 17.25a.75.75 0 11-1.5 0 .75.75 0 011.5 0zM9.75 15.75a.75.75 0 100-1.5.75.75 0 000 1.5zM10.5 17.25a.75.75 0 11-1.5 0 .75.75 0 011.5 0zM12 15.75a.75.75 0 100-1.5.75.75 0 000 1.5zM12.75 17.25a.75.75 0 11-1.5 0 .75.75 0 011.5 0zM14.25 15.75a.75.75 0 100-1.5.75.75 0 000 1.5zM15 17.25a.75.75 0 11-1.5 0 .75.75 0 011.5 0zM16.5 15.75a.75.75 0 100-1.5.75.75 0 000 1.5zM15 12.75a.75.75 0 11-1.5 0 .75.75 0 011.5 0zM16.5 13.5a.75.75 0 100-1.5.75.75 0 000 1.5z" />
                            <path fill-rule="evenodd" d="M6.75 2.25A.75.75 0 017.5 3v1.5h9V3A.75.75 0 0118 3v1.5h.75a3 3 0 013 3v11.25a3 3 0 01-3 3H5.25a3 3 0 01-3-3V7.5a3 3 0 013-3H6V3a.75.75 0 01.75-.75zm13.5 9a1.5 1.5 0 00-1.5-1.5H5.25a1.5 1.5 0 00-1.5 1.5v7.5a1.5 1.5 0 001.5 1.5h13.5a1.5 1.5 0 001.5-1.5v-7.5z" clip-rule="evenodd" />
                          </svg>
                        </div>
                        <input type="text" id="dateRange" name="dateRange"
                            class="text-xs w-full font-medium border-none rounded-r-md dark:bg-slate-800 dark:bg-opacity-50 dark:text-slate-100 dark:focus:bg-opacity-100 focus:border-none focus:ring-0"
                            placeholder="Periode" />
                    </div>
                    {{-- Search --}}
                    <div class="relative flex flex-wrap gap-3">
                        <input type="text" wire:model="search"
                            class="py-2 pl-10 pr-4 text-xs font-medium text-gray-600 border-t rounded-lg shadow focus:border-gray-400 focus:outline-none focus:ring-0"
                            placeholder="Search...">
                        <div class="absolute top-0 left-0 inline-flex items-center pt-2 pl-2 text-gray-500">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" viewBox="0 0 20 20"
                                fill="currentColor">
                                <path fill-rule="evenodd"
                                    d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                                    clip-rule="evenodd" />
                            </svg>
                        </div>
                        {{-- Button Export --}}
                        <div>
                            <button wire:click='exportExcel'
                             class="flex gap-2 px-2 py-1 text-green-400 border-2 border-green-400 rounded-md brightness-110 hover:shadow-lg hover:shadow-green-400/30 hover:brightness-125">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                    stroke="currentColor" class="w-5 h-5">
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
                class="row-span-3 overflow-hidden border-x border-slate-400 bg-inerhit dark:border-slate-500 dark:bg-slate-700 dark:bg-opacity-50 ">
                <div class="flex flex-col">
                    <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
                        <div class="inline-block min-w-full sm:px-6 lg:px-8">
                            <div class="overflow-hidden">
                                <table class="min-w-full">
                                    {{-- 2.1 Header Table --}}
                                    <thead class="text-base font-bold border-b border-slate-400 dark:border-slate-500 text-slate-600 dark:text-slate-400">
                                        <tr>
                                            {{-- 2.1.1 Index --}}
                                            <th scope="col" class="px-4 py-2 text-center border-r border-slate-400 dark:border-slate-500">
                                                No
                                            </th>
                                            {{-- 2.1.2 Nomor Pokok --}}
                                            <th scope="col" class="px-4 py-2 text-center border-r border-slate-400 dark:border-slate-500">
                                                OBC
                                            </th>
                                            {{-- 2.1.2 Nomor Pokok --}}
                                            <th scope="col" class="px-4 py-2 text-center border-r border-slate-400 dark:border-slate-500">
                                                Nomor PO
                                            </th>
                                            {{-- 2.1.3 Nama --}}
                                            <th scope="col" class="px-4 py-2 text-center border-r border-slate-400 dark:border-slate-500">
                                                Jumlah Cetak
                                            </th>
                                            {{-- 2.1.4 Tanggal CK3 --}}
                                            <th scope="col" class="px-4 py-2 text-center border-r border-slate-400 dark:border-slate-500">
                                                Baik Periksa
                                            </th>
                                            {{-- 2.1.5 Jenis Barang --}}
                                            <th scope="col" class="px-4 py-2 text-center border-r border-slate-400 dark:border-slate-500">
                                                Rusak Periksa
                                            </th>
                                            {{-- 2.1.6 Jenis Retur --}}
                                            <th scope="col" class="px-4 py-2 text-center border-r border-slate-400 dark:border-slate-500">
                                                WIP / Sisa Baik
                                            </th>
                                            {{-- 2.1.7 Total Retur --}}
                                            <th scope="col" class="px-4 py-2 text-center border-r border-slate-400 dark:border-slate-500">
                                                Jenis Kerusakan
                                            </th>
                                            {{-- 2.1.8 Action --}}
                                            <th scope="col" class="px-4 py-2 text-center border-r border-slate-400 dark:border-slate-500">
                                                Keterangan
                                            </th>
                                            {{-- 2.1.8 Action --}}
                                            <th scope="col" class="px-4 py-2 text-center border-r border-slate-400 dark:border-slate-500">
                                                Petugas
                                            </th>
                                            {{-- 2.1.8 Action --}}
                                            <th scope="col" class="px-4 py-2 text-center border-r border-slate-400 dark:border-slate-500">
                                                Mesin
                                            </th>
                                            {{-- 2.1.8 Action --}}
                                            <th scope="col" class="px-4 py-2 text-center border-b border-slate-400 dark:border-slate-500">
                                                Action
                                            </th>
                                        </tr>
                                    </thead>
                                    {{-- 2.2 Body Table --}}
                                    <tbody>
                                        @foreach ($data as $datas)

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
                class="px-10 py-2 overflow-hidden border-b rounded-b border-x border-slate-400 bg-inerhit dark:border-slate-500 dark:bg-slate-700 dark:bg-opacity-50 text-slate-800 dark:text-slate-100 ">
                {{-- {{ $data->links('vendor.livewire.tailwind') }} --}}
            </div>
            {{-- End Footer --}}
        </div>
    </div>
</div>

@section('plugin-js')
    <link rel="stylesheet" href="{{ asset('plugins/daterangepicker.css') }}">
    <script src="{{ asset('plugins/jquery-3.6.1.min.js') }}"></script>
    <script src="{{ asset('plugins/moment.min.js') }}"></script>
    <script src="{{ asset('plugins/daterangepicker.min.js') }}"></script>
@endsection

@push('js')
    <script>
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
                @this.set('endDate',end.format('YYYY-MM-DD'));;
            });
    </script>
@endpush
