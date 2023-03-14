<div class="px-4 py-4 mx-auto lg:px-8 md:py-6">

    {{--** Chart Section **--}}
        <div class="grid grid-cols-1 gap-0 space-y-3 md:gap-3 md:grid-cols-3">

            {{-- Main Retur Chart --}}
                <div class="relative w-full max-h-screen min-h-full p-4 px-4 py-4 bg-white md:py-6 drop-shadow-sm rounded-2xl dark:bg-slate-800 dark:bg-opacity-60 dark:backdrop-blur-sm dark:backdrop-filter md:col-span-3 lg:col-span-2"
                        x-show='mainContent' x-transition.scale.origin.top x-transition:enter.duration.700ms
                        x-transition:leave.duration.700ms>
                        @include('livewire.performance.quality-individu.partials.main-chrt')
                </div>


            <div class="grid col-span-3 gap-3 md:grid-cols-2 lg:grid-cols-1 lg:col-span-1">

                {{-- User Retur Chart --}}
                    <div class="relative w-full max-h-screen min-h-full p-4 px-4 py-4 bg-white md:py-6 drop-shadow-sm rounded-2xl dark:bg-slate-800 dark:bg-opacity-60 dark:backdrop-blur-sm dark:backdrop-filter md:col-span-3 lg:col-span-2"
                        x-show='mainContent' x-transition.scale.origin.top x-transition:enter.duration.700ms
                        x-transition:leave.duration.700ms>
                        @include('livewire.performance.quality-individu.partials.user-chrt')
                    </div>

                {{-- Unit Retur Chart --}}
                    <div class="relative w-full max-h-screen min-h-full p-4 px-4 py-4 bg-white md:py-6 drop-shadow-sm rounded-2xl dark:bg-slate-800 dark:bg-opacity-60 dark:backdrop-blur-sm dark:backdrop-filter md:col-span-3 lg:col-span-2"
                        x-show='mainContent' x-transition.scale.origin.top x-transition:enter.duration.700ms
                        x-transition:leave.duration.700ms>
                        @include('livewire.performance.quality-individu.partials.unit-chrt')
                    </div>
            </div>

        </div>
    {{--** End Chart Section **--}}

    {{-- ** Table Section ** --}}
        <div class="col-span-1 mt-4 md:col-span-3">
            <x-card-scale>
                @include('livewire.performance.quality-individu.partials.table')
            </x-card-scale>
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
