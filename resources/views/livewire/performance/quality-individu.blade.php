<div class="mx-auto px-4 lg:px-8 py-4 md:py-6">
    <div class="grid grid-cols-1 gap-0 md:gap-3 space-y-3 md:grid-cols-3">
        {{-- 1-A Grafik retur/kelolosan tahun ini --}}
        <div
            class="relative p-4 w-full rounded-md bg-gradient-to-br from-slate-50 via-slate-100 to-slate-50  dark:bg-slate-800 dark:from-transparent dark:to-transparent dark:bg-opacity-60 dark:backdrop-blur-sm dark:backdrop-filter md:col-span-3 lg:col-span-2">
            {{-- 1-A.1 Header --}}
            <div
                class="grid grid-rows-1 gap-3 lg:gap-0 md:grid-rows-2 pb-3 mb-3 md:mb-6 border-b-2 border-slate-600/70 dark:border-slate-300">
                {{-- 1-A. 1.1 Header Title --}}
                <div class="flex flex-col">
                    <h5 class="w-full text-xl font-bold text-slate-800 dark:text-slate-100">Data Retur Pita Cukai
                    </h5>
                    <span class="text-sm text-slate-500 dark:text-slate-400">Periode 2022</span>
                </div>
                {{-- 1-A. 1.2 Filter --}}
                <div class="my-auto flex justify-end flex-wrap text-slate-800 dark:text-slate-100">
                    @if (Helper::getRole() > 1)
                    {{-- 1-A. 1.1 Filter Team --}}
                    <select wire:model='team' wire:change='listsNp()'
                        class="w-full md:w-1/4 rounded-l border-blue-400 py-2 pl-2 text-sm font-bold text-slate-700 focus:bg-opacity-100 dark:bg-slate-700 dark:bg-opacity-30 dark:text-slate-200">
                        <option>Team</option>
                        @foreach ($listTeam as $teams)
                        <option value="{{ $teams->id }}">{{ $teams->workstation }}</option>
                        @endforeach
                    </select>
                    {{-- 1-A. 1.2 Filter Nama / NP --}}
                    <select wire:model='npUser' wire:change='updateChart'
                        class="w-full md:w-1/4 border-blue-400 py-2 pl-2 text-sm font-bold text-slate-700 focus:bg-opacity-100 dark:bg-slate-700 dark:bg-opacity-30 dark:text-slate-200">
                        <option selected>Nama/NP</option>
                        @forelse ($listNp as $Nps)
                        <option value="{{ $Nps->np_user }}">{{ $Nps->nama }}</option>
                        @empty

                        @endforelse
                    </select>
                    @endif
                    {{-- 1-A. 1.3 Filter Tahun --}}
                    <select wire:model='year' wire:change='updateChart'
                        class="w-full md:w-1/4 border-blue-400 py-2 pl-2 text-sm font-bold text-slate-700 focus:bg-opacity-100 dark:bg-slate-700 dark:bg-opacity-30 dark:text-slate-200">
                        {{-- <option value="2021" selected>2021</option> --}}
                        <option value="2022" selected>2022</option>
                    </select>
                    {{-- 1-A. 1.4 Reset --}}
                    <button type="button" data-mdb-ripple="true" data-mdb-ripple-color="light"
                        class="nline-block rounded-b md:rounded-r md:rounded-b-none w-full md:w-fit bg-blue-500 px-3 py-2 text-sm font-semibold leading-tight text-white shadow-md transition duration-150 ease-in-out hover:bg-blue-600 hover:shadow-lg focus:bg-blue-600 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-700 active:shadow-lg">
                        CLEAR
                    </button>
                </div>
            </div>
            {{-- ** 1-A.1 End Header ** --}}

            {{-- 1-A.2 Canvas / Grafik Kelolosan Tahun --}}
            <div class="relative flex flex-col justify-center object-cover w-full h-fit md:h-5/6">
                <canvas wire:ignore id="quaIndividu" name="quaIndividu"></canvas>
            </div>
            {{-- ** End Canvas / Grafik Kelolosan Tahun ** --}}
        </div>

        <div class="grid md:grid-cols-2 lg:grid-cols-1 col-span-3 lg:col-span-1 gap-3">
            {{-- 1-B.2 Kelolosan Tahunan --}}
            <div
                class="p-4 px-6 overflow-hidden w-full rounded-md bg-gradient-to-br from-slate-50 via-slate-100 to-slate-50  dark:bg-slate-800 dark:from-transparent dark:to-transparent dark:bg-opacity-60 dark:backdrop-blur-sm dark:backdrop-filter">
                {{-- Header --}}
                <div class="flex flex-col pb-3 border-b-2 border-slate-600 dark:border-slate-300">
                    <h5 class="w-full text-xl font-bold text-slate-800 dark:text-slate-100">Jenis Retur User</h5>
                    <span class="text-sm text-slate-500 dark:text-slate-400">Periode 2022</span>
                </div>
                {{-- Chart --}}
                <div class="object-cover w-full pt-6 h-fit md:h-5/6">
                    <canvas wire:ignore id="typeIndividu" name="typeIndividu"></canvas>
                </div>
            </div>
            <div
                class="p-4 px-6 overflow-hidden w-full rounded-md bg-gradient-to-br from-slate-50 via-slate-100 to-slate-50  dark:bg-slate-800 dark:from-transparent dark:to-transparent dark:bg-opacity-60 dark:backdrop-blur-sm dark:backdrop-filter">
                {{-- Header --}}
                <div class="flex flex-col pb-3 border-b-2 border-slate-600 dark:border-slate-300">
                    <h5 class="w-full text-xl font-bold text-slate-800 dark:text-slate-100">Jenis Retur Unit</h5>
                    <span class="text-sm text-slate-500 dark:text-slate-400">Periode 2022</span>
                </div>
                {{-- Chart --}}
                <div class="object-cover w-full pt-6 h-fit md:h-5/6">
                    <canvas wire:ignore id="typeUnit" name="typeUnit"></canvas>
                </div>
            </div>
        </div>
    </div>
</div>
@section('title','Quality Individu')
@section('plugin-js')
<link rel="stylesheet" href="{{ asset('plugins/daterangepicker.css') }}">
<script src="{{ asset('plugins/jquery-3.6.1.min.js') }}"></script>
<script src="{{ asset('plugins/moment.min.js') }}"></script>
<script src="{{ asset('plugins/daterangepicker.min.js') }}"></script>
<script src="{{ asset('chart.js/chart.min.js') }}"></script>
@endsection

@section('script-js')
@push('js')
<script>
    const ctxQuaIndividu  = document.getElementById('quaIndividu').getContext('2d');
            const ctxTypeIndividu = document.getElementById('typeIndividu').getContext('2d');
            const ctxTypeUnit     = document.getElementById('typeUnit').getContext('2d');

            // Total Kelolosan
            const qualityIndividu = new Chart(ctxQuaIndividu, {
                type: 'bar',
                data: {
                        labels: @json($mainLabels),
                        datasets: @json($mainDataset)
                    },
                options: {
                    maintainAspectRatio: false,
                    scales: {
                        y: {
                            beginAtZero: true
                        }
                    }
                }
            });
            // Jenis Kerusakan Individu
            const typeIndividu = new Chart(ctxTypeIndividu, {
                type: 'polarArea',
                data: {
                        labels: @json($jenisLabels),
                        datasets: @json($jenisDataset)
                },
                options: {
                    maintainAspectRatio: false,
                    plugins: {
                        legend : {
                            display : false,
                        }
                    },
                    scales: {
                        y: {
                            display : false,
                            beginAtZero: true
                        }
                    }
                }
            });
            // Chart Jenis Kerusakan Unit
            const typeUnit = new Chart(ctxTypeUnit, {
                type: 'polarArea',
                data: {
                        labels: @json($jenisLabels),
                        datasets: @json($jenisDataset)
                },
                options: {
                    maintainAspectRatio: false,
                    plugins: {
                        legend : {
                            display : false,
                        }
                    },
                    scales: {
                        y: {
                            display:false,
                            beginAtZero: true
                        }
                    }
                }
            });

            Livewire.on('updateMainChart', data => {
                            qualityIndividu.data = data;
                            qualityIndividu.update();
                        });

            Livewire.on('updateJenisIndChart', data => {
                            typeIndividu.data = data;
                            typeIndividu.update();
                        });

            Livewire.on('updateJenisUniChart', data => {
                            typeUnit.data = data;
                            typeUnit.update();
                        });
</script>

{{-- <script src="{{ asset('js/performance/qua-individu.js') }}"></script>
<script src="{{ asset('component/chart/qua-individu.js') }}"></script> --}}
@endpush
@endsection
