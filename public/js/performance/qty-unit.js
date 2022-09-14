
$(document).ready(function(){

    $.ajaxSetup({
        headers: {
                  'X-CSRF-TOKEN' : $('meta[name="csrf-token"]').attr('content')
                 }
    });

    // Set Variable Kosong untuk Data
    let startDate = '';
    let endDate = '';
    let team = '';
    let mode = '';

    // Render Chart Saat Halaman Di Buka
    $.ajax({
        url:"chartUnit",
        type:"Get",
        datatype:"Json",
        data : {
                 startDate:startDate,
                 endDate:endDate,
                 team:team,
                 mode:mode,
               },
        success:function(data)
        {
            dataChart = {
                date : data.date,
                data : data.data,
            }

            load_chart();
        }
    });
});

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
  console.log('New date range selected: ' + start.format('YYYY-MM-DD') + ' to ' + end.format('YYYY-MM-DD') + ' (predefined range: ' + label + ')');
});

$('#team').change(function(){
    let startDate = $('#dateRange').data('daterangepicker').startDate.format('YYYY-MM-DD');;
    let endDate   = $('#dateRange').data('daterangepicker').endDate.format('YYYY-MM-DD');;
    let team = $('#team').val();
    let mode = $('#mode').val();

    // Render Chart Saat Halaman Di Buka
    $.ajax({
            url:"chartUnit",
            type:"Get",
            datatype:"Json",
            data : {
                     startDate:startDate,
                     endDate:endDate,
                     team:team,
                     mode:mode,
                   },
            success:function(data)
            {
                console.log(data)
                dataChart = {
                    date : data.date,
                    data : data.data,
                }

                // Replace Chart dengan yang Baru
                $('#qtyUnit').replaceWith('<canvas id="qtyUnit" name="qtyUnit" class="mt-6"></canvas>')
                load_chart();
            }
        });

})



