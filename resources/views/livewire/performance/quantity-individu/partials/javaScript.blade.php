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
        document.addEventListener('livewire:load', function() {
            $('#dateRange').daterangepicker({
                ranges: {
                    'Hari Ini': [moment(), moment()],
                    'Kemarin': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
                    '7 Hari Terakhir': [moment().subtract(6, 'days'), moment()],
                    '30 Hari Terakhir': [moment().subtract(29, 'days'), moment()],
                    'Bulan Ini': [moment().startOf('month'), moment().endOf('month')],
                    'Bulan Kemarin': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1,
                        'month').endOf('month')]
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
                @this.set('startDate', start.format('YYYY-MM-DD'));
                @this.set('endDate', end.format('YYYY-MM-DD'));
                @this.mainChart();

            });
        })
    </script>
    {{-- Main Chart --}}
    <script>
        document.addEventListener('livewire:load', function() {
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
                                display: true,
                            },
                            y: {
                                display: true,
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
                                display: true,
                            },
                            y: {
                                display: true,
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
