<div class="py-6">
    <div class="mx-auto px-4 lg:px-8">
        <div class="grid grid-cols-1 gap-0 md:gap-3 space-y-3 md:grid-cols-3">
            {{-- A. Card Hasil Verifikasi Individu --}}
            <div
                class="relative p-4 w-full rounded-md bg-gradient-to-br from-slate-50 via-slate-100 to-slate-50  dark:bg-slate-800 dark:from-transparent dark:to-transparent dark:bg-opacity-60 dark:backdrop-blur-sm dark:backdrop-filter md:col-span-3 lg:col-span-2">
                {{-- 1. Header --}}
                <div
                    class="grid grid-rows-1 gap-3 lg:gap-0 md:grid-rows-2 pb-3 mb-3 md:mb-6 border-b-2 border-slate-600/70 dark:border-slate-300">
                    {{-- 1.1 Header Title --}}
                    <div class="flex flex-col">
                        <h5 class="w-full text-xl font-bold text-slate-800 dark:text-slate-100">Hasil Produksi Individu
                            Verifikasi Pita Cukai</h5>
                        <span class="text-sm text-slate-500 dark:text-slate-400">Periode September 2022</span>
                    </div>
                    {{-- 1.2 Filter Chart --}}
                    <div class="my-auto flex justify-end flex-wrap">
                        @if (Helper::getRole() > 1)
                        {{-- Filter By Team --}}
                        <select id="team" name="team" wire:model='team' wire:change='listsNp()'
                            class="w-full md:w-1/4 rounded-l border-blue-400 py-2 pl-2 text-sm font-bold text-slate-700 focus:bg-opacity-100 dark:bg-slate-700 dark:bg-opacity-30 dark:text-slate-200">
                            <option selected>Team</option>
                            @foreach ($listTeam as $teams)
                                <option value="{{ $teams->id }}">{{ $teams->workstation }}</option>
                            @endforeach
                        </select>
                        {{-- Filter By NP / Nama --}}
                        <select id="selectNp" name="selectNp" wire:model='npUser' wire:change='mainChart'
                            class="w-full md:w-1/4 border-blue-400 py-2 pl-2 text-sm font-bold text-slate-700 focus:bg-opacity-100 dark:bg-slate-700 dark:bg-opacity-30 dark:text-slate-200">
                            <option selected>Nama/NP</option>
                            @forelse ($listNp as $Nps)
                                <option value="{{ $Nps->np_user }}">{{ $Nps->nama }}</option>
                            @empty

                            @endforelse
                        </select>
                        @endif
                        {{-- Filter Date Range --}}
                        <input type="text" id="dateRange" name="dateRange"
                            class="w-full md:w-fit border-blue-400 px-4 py-2 text-xs font-medium text-slate-700 focus:bg-opacity-100 dark:bg-slate-700 dark:bg-opacity-30 dark:text-slate-200"
                            placeholder="Periode" />
                        {{-- Reset Filter --}}
                        <button type="button" data-mdb-ripple="true" data-mdb-ripple-color="light" wire:click='clearField'
                            class="inline-block rounded-b md:rounded-r md:rounded-b-none w-full md:w-fit bg-blue-500 px-3 py-2 text-sm font-semibold leading-tight text-white shadow-md transition duration-150 ease-in-out hover:bg-blue-600 hover:shadow-lg focus:bg-blue-600 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-700 active:shadow-lg">Clear</button>
                    </div>
                </div>
                {{-- 2. Body Cancvas / Chart --}}
                <div class="relative flex flex-col justify-center object-cover w-full h-fit md:h-5/6">
                    <canvas wire:ignore id="qtyIndividu" name="qtyIndividu"></canvas>
                </div>
            </div>
            {{-- End A. Card Hasil Verifikasi Individu --}}

            <div class="grid md:grid-cols-2 lg:grid-cols-1 col-span-3 lg:col-span-1 gap-3">
                {{-- B. Card Hasil Verifikasi Unit --}}
                <div
                    class="p-4 px-6 overflow-hidden w-full rounded-md bg-gradient-to-br from-slate-50 via-slate-100 to-slate-50  dark:bg-slate-800 dark:from-transparent dark:to-transparent dark:bg-opacity-60 dark:backdrop-blur-sm dark:backdrop-filter">
                    <div class="pb-3 border-b-2 border-slate-600/70 dark:border-slate-300">
                        <div class="flex flex-col">
                            <h6 class="w-full text-lg font-bold text-slate-800 dark:text-slate-100">Verifikasi Pita
                                Cukai</h6>
                            <span class="text-xs text-slate-500 dark:text-slate-400">2022</span>
                        </div>
                    </div>
                    <div class="object-cover w-full pt-6 h-fit md:h-5/6">
                        <canvas wire:ignore id="qtyIndividuYear" name="qtyIndividuYear"></canvas>
                    </div>
                </div>
                {{-- End B. Card Hasil Verifikasi Unit --}}

                {{-- C. Card Standar Verifikasi Individu --}}
                <div
                    class="px-6 py-4 overflow-hidden w-full rounded-md bg-gradient-to-br from-slate-50 via-slate-100 to-slate-50  dark:bg-slate-800 dark:from-transparent dark:to-transparent dark:bg-opacity-60 dark:backdrop-blur-sm dark:backdrop-filter">
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
                                    <div
                                        class="overflow-hidden border rounded shadow-md border-slate-400 dark:border-slate-500">
                                        <table class="min-w-full border-slate-400 dark:border-slate-500">
                                            {{-- 2.1 Header Table --}}
                                            <thead
                                                class="text-sm font-bold border-b border-slate-400 text-slate-600 dark:border-slate-500 dark:text-slate-400 dark:bg-slate-800">
                                                <tr>
                                                    {{-- 2.1.1 Index --}}
                                                    <th scope="col"
                                                        class="px-4 py-2 text-center border-r border-slate-400 dark:border-slate-500">
                                                        Jam Kerja
                                                    </th>
                                                    {{-- 2.1.1 Index --}}
                                                    <th scope="col"
                                                        class="px-4 py-2 text-center border-r border-slate-400 dark:border-slate-500">
                                                        Standar Verifikasi PCHT
                                                    </th>
                                                    {{-- 2.1.1 Index --}}
                                                    <th scope="col"
                                                        class="px-4 py-2 text-center border-b border-slate-400 dark:border-slate-500">
                                                        Standar Verifikasi MMEA
                                                    </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                {{-- 1.0 Tidak Lembur --}}
                                                <tr
                                                    class="transition duration-300 ease-in-out hover:bg-slate-400 hover:bg-opacity-10">
                                                    <td
                                                        class="px-4 py-2 text-sm text-center border-b border-r border-slate-400 text-slate-800 dark:border-slate-500 dark:text-slate-100">
                                                        Tidak Lembur
                                                    </td>
                                                    <td
                                                        class="px-4 py-2 text-sm text-center border border-slate-400 text-slate-800 dark:border-slate-500 dark:text-slate-100">
                                                        15.000 Lbr / Hari
                                                    </td>
                                                    <td
                                                        class="px-4 py-2 text-sm text-center border-b border-l border-slate-400 text-slate-800 dark:border-slate-500 dark:text-slate-100">
                                                        6.000 Lbr / Hari
                                                    </td>
                                                </tr>
                                                {{-- 2.0 Lembur Awal --}}
                                                <tr
                                                    class="transition duration-300 ease-in-out hover:bg-slate-400 hover:bg-opacity-10">
                                                    <td
                                                        class="px-4 py-2 text-sm text-center border-b border-r border-slate-400 text-slate-800 dark:border-slate-500 dark:text-slate-100">
                                                        Lembur Awal
                                                    </td>
                                                    <td
                                                        class="px-4 py-2 text-sm text-center border border-slate-400 text-slate-800 dark:border-slate-500 dark:text-slate-100">
                                                        20.000 Lbr / Hari
                                                    </td>
                                                    <td
                                                        class="px-4 py-2 text-sm text-center border-b border-l border-slate-400 text-slate-800 dark:border-slate-500 dark:text-slate-100">
                                                        8.000 Lbr / Hari
                                                    </td>
                                                </tr>
                                                {{-- 3.0 Lembur Akhir --}}
                                                <tr
                                                    class="transition duration-300 ease-in-out hover:bg-slate-400 hover:bg-opacity-10">
                                                    <td
                                                        class="px-4 py-2 text-sm text-center border-b border-r border-slate-400 text-slate-800 dark:border-slate-500 dark:text-slate-100">
                                                        Lembur Akhir
                                                    </td>
                                                    <td
                                                        class="px-4 py-2 text-sm text-center border border-slate-400 text-slate-800 dark:border-slate-500 dark:text-slate-100">
                                                        22.500 Lbr / Hari
                                                    </td>
                                                    <td
                                                        class="px-4 py-2 text-sm text-center border-b border-l border-slate-400 text-slate-800 dark:border-slate-500 dark:text-slate-100">
                                                        9.000 Lbr / Hari
                                                    </td>
                                                </tr>
                                                {{-- 3.0 Lembur Awal Akhir --}}
                                                <tr
                                                    class="transition duration-300 ease-in-out hover:bg-slate-400 hover:bg-opacity-10">
                                                    <td
                                                        class="px-4 py-2 text-sm text-center border-r border-slate-400 text-slate-800 dark:border-slate-500 dark:text-slate-100">
                                                        Lembur Awal Akhir
                                                    </td>
                                                    <td
                                                        class="px-4 py-2 text-sm text-center border-r border-slate-400 text-slate-800 dark:border-slate-500 dark:text-slate-100">
                                                        27.500 Lbr / Hari
                                                    </td>
                                                    <td
                                                        class="px-4 py-2 text-sm text-center border-slate-400 text-slate-800 dark:border-slate-500 dark:text-slate-100">
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
            </div>
            {{-- End C.Table Target Pita Cukai --}}

            {{-- D. Table Rekap Evaluasi --}}
            <div class="col-span-1 md:col-span-3">
                <div
                    class="relative p-4 w-full rounded-md bg-gradient-to-br from-slate-50 via-slate-100 to-slate-50  dark:bg-slate-800 dark:from-transparent dark:to-transparent dark:bg-opacity-60 dark:backdrop-blur-sm dark:backdrop-filter">
                    <div class="grid grid-rows-1 gap-3 lg:gap-0">
                        <h6 class="w-full text-lg font-bold text-slate-800 dark:text-slate-100">Rekap Verifikasi</h6>
                    </div>
                    {{-- D-1.Table --}}
                    <div
                        class="mt-4 overflow-hidden border rounded bg-inerhit border-x border-slate-400 bg-opacity-30 dark:border-slate-500 dark:bg-slate-700 dark:bg-opacity-50">
                        <div class="flex flex-col">
                            <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
                                <div class="inline-block min-w-full sm:px-6 lg:px-8">
                                    <div class="overflow-hidden">
                                        <table class="min-w-full">
                                            {{-- 1. Header Table --}}
                                            <thead
                                                class="text-base font-bold border-b border-slate-400 text-slate-600 dark:border-slate-400 dark:text-slate-400">
                                                <tr>
                                                    {{-- 1.1 Index --}}
                                                    <th scope="col"
                                                        class="px-4 py-2 text-center border-r border-slate-400 dark:border-slate-400">
                                                        No
                                                    </th>
                                                    {{-- 1.2 Nomor Pokok --}}
                                                    <th scope="col"
                                                        class="px-4 py-2 text-center border-r border-slate-400 dark:border-slate-400">
                                                        NP / Nama
                                                    </th>
                                                    {{-- 1.4 Tanggal Verifikasi --}}
                                                    <th scope="col"
                                                        class="px-4 py-2 text-center border-r border-slate-400 dark:border-slate-400">
                                                        Tgl Verif
                                                    </th>
                                                    {{-- 1.5 Pendapatan Lembar --}}
                                                    <th scope="col"
                                                        class="px-4 py-2 text-center border-r border-slate-400 dark:border-slate-400">
                                                        Jumlah Lembar
                                                    </th>
                                                    {{-- 1.6 Pendapatan OBC --}}
                                                    <th scope="col"
                                                        class="px-4 py-2 text-center border-r border-slate-400 dark:border-slate-400">
                                                        Jumlah OBC
                                                    </th>
                                                    {{-- 1.7 Target --}}
                                                    <th scope="col"
                                                        class="px-4 py-2 text-center border-r border-slate-400 dark:border-slate-400">
                                                        Target
                                                    </th>
                                                    {{-- 1.8 Lembur --}}
                                                    <th scope="col"
                                                        class="px-4 py-2 text-center border-r border-slate-400 dark:border-slate-400">
                                                        Lembur
                                                    </th>
                                                    {{-- 1.9 Keterangan --}}
                                                    <th scope="col"
                                                        class="px-4 py-2 text-center border-r border-slate-400 dark:border-slate-400">
                                                        Keterangan
                                                    </th>
                                                </tr>
                                            </thead>
                                            {{-- 2. Body Table --}}
                                            <tbody>
                                                @foreach ($data as $table)
                                                <tr
                                                    class="tracking-wide transition duration-300 ease-in-out hover:bg-slate-400 hover:bg-opacity-10">
                                                    {{-- 2.1 Indexing --}}
                                                    <td
                                                        class="px-4 py-2 text-sm font-medium text-center whitespace-nowrap border-y border-slate-400 text-slate-800 dark:border-slate-500 dark:text-slate-100">
                                                            <span>{{ $data->firstItem() + $loop->index }}</span>
                                                    </td>
                                                    {{-- 2.2 Nomor Pokok --}}
                                                    <td
                                                        class="px-4 py-2 text-sm border border-slate-400 text-slate-800 dark:border-slate-500 dark:text-slate-100">
                                                        <div class="flex flex-col gap-1">
                                                            <span class="font-bold">{{ $table->np_user }}</span>
                                                            <span>{{ $table->UserDetails->nama }}</span>
                                                        </div>
                                                    </td>
                                                    {{-- 2.4 Tanggal Verifikasi --}}
                                                    <td
                                                        class="px-4 py-2 text-sm text-center border border-slate-400 text-slate-800 dark:border-slate-500 dark:text-slate-100">
                                                        {{ $table->tgl_verif }}
                                                    </td>
                                                    {{-- 2.5 Pendapatan Lembar --}}
                                                    <td
                                                        class="px-4 py-2 text-sm text-right border border-slate-400 text-slate-800 dark:border-slate-500 dark:text-slate-100">
                                                        {{ number_format($table->jml_verif,0) }} Lbr
                                                    </td>
                                                    {{-- 2.6 Pendapatan OBC --}}
                                                    <td
                                                        class="px-4 py-2 text-sm text-right border border-slate-400 text-slate-800 dark:border-slate-500 dark:text-slate-100">
                                                        {{ $table->jml_obc }} OBC
                                                    </td>
                                                    {{-- 2.7 Target --}}
                                                    <td
                                                        class="px-4 py-2 text-sm text-right border border-slate-400 text-slate-800 dark:border-slate-500 dark:text-slate-100">
                                                        {{ number_format($table->target * 500,0) }} Lbr
                                                    </td>
                                                    {{-- 2.8 Lembur --}}
                                                    <td
                                                        class="px-4 py-2 text-sm text-center border border-slate-400 text-slate-800 dark:border-slate-500 dark:text-slate-100">
                                                        @if($table->lembur == 0)
                                                        -
                                                        @elseif ($table->lembur == 1)
                                                        Awal
                                                        @elseif ($table->lembur == 2)
                                                        Akhir
                                                        @elseif ($table->lembur == 3)
                                                        Awal Akhir
                                                        @endif
                                                    </td>
                                                    {{-- 2.9 Keterangan --}}
                                                    <td
                                                        class="px-4 py-2 text-sm border border-slate-400 text-slate-800 dark:border-slate-500 dark:text-slate-100">
                                                        {{ $table->keterangan }}
                                                    </td>
                                                </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        {{-- 3.0 Footer --}}
                        <div
                            class="px-10 py-2 overflow-hidden rounded-b bg-inerhit border-slate-400 text-slate-800 dark:border-slate-500 dark:bg-slate-700 dark:bg-opacity-50 dark:text-slate-100">
                            {{ $data->links('vendor.livewire.tailwind') }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
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
                        @this.mainChart();

                    });
                })
        </script>
    {{-- Main Chart --}}
        <script>
            document.addEventListener('livewire:load', function () {
                    const mainChart = new Chart(
                        document.getElementById('qtyIndividu'), {
                            type: 'bar',
                            data: {
                                labels: @json($labels),
                                datasets: @json($dataset)
                            },
                            options: {
                                maintainAspectRatio: false,
                                plugins: {
                                    legend: {
                                        display: false,
                                    },
                                },
                                scales: {
                                    x: {
                                        display:true,
                                        },
                                    y: {
                                        display:true,
                                        }
                                    },
                            },
                        }
                    );

                    const yearChart = new Chart(
                        document.getElementById('qtyIndividuYear'), {
                            type: 'bar',
                            data: {
                                labels: @json($labels),
                                datasets: @json($dataset)
                            },
                            options: {
                                maintainAspectRatio: false,
                                plugins: {
                                    legend: {
                                        display: false,
                                    },
                                },
                                scales: {
                                    x: {
                                        display:true,
                                        },
                                    y: {
                                        display:true,
                                        }
                                    },
                            },
                        }
                    );

                    Livewire.on('updateMainChart', data => {
                        mainChart.data = data;
                        mainChart.update();
                    });

                    Livewire.on('updateYearChart', data => {
                        yearChart.data = data;
                        yearChart.update();
                    });
            })
        </script>
    {{-- <script src="{{ asset('js/performance/qty-individu.js') }}"></script>
    <script src="{{ asset('component/chart/qty-individu.js') }}"></script> --}}
@endpush


