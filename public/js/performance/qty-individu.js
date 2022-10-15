
$(document).ready(function(){

    $.ajaxSetup({
        headers: {
                  'X-CSRF-TOKEN' : $('meta[name="csrf-token"]').attr('content')
                 }
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

    load_chart();
    // Set Variable Kosong untuk Data
    // let startDate = $('#dateRange').data('daterangepicker').startDate.format('YYYY-MM-DD');
    // let endDate   = $('#dateRange').data('daterangepicker').endDate.format('YYYY-MM-DD');
    // let team = '';
    // let mode = '';

    // Render Chart Saat Halaman Di Buka
    // $.ajax({
    //     url:"chartUnit",
    //     type:"Get",
    //     datatype:"Json",
    //     data : {
    //              startDate:startDate,
    //              endDate:endDate,
    //              team:team,
    //              mode:mode,
    //            },
    //     success:function(data)
    //     {
    //         dataChart = {
    //             date : data.date,
    //             data : data.data,
    //             label: "Jumlah Verifikasi"
    //         }

    //         load_chart();
    //     }
    // });
});

$('#team').change(function(){

    let team = $('#team').val();

    $.ajax({
        url : "npTeam",
        type :"Get",
        datatype: "Json",
        data : {
            team:team,
        },
        success:function(data)
        {
            console.log(data);
            if(data){
                $('#selectNp').empty();
                $('#selectNp').append('<option>Nama/NP</option>')
                $.each(data, function(key, np){
                    $('#selectNp').append('<option value="'+key+'">'+np+'</option>');
                });
            }
            else{
                $('#selectNp').empty();
            }
        }
    });
});

$('#selectNp').change(function(){

    let startDate = $('#dateRange').data('daterangepicker').startDate.format('YYYY-MM-DD');
    let endDate   = $('#dateRange').data('daterangepicker').endDate.format('YYYY-MM-DD');
    let npUser = $('#selectNp').val();

    $.ajax({
        url : "chartIndividu",
        type : "Get",
        datatype : "Json",
        data : {
            startDate : startDate,
            endDate : endDate,
            npUser : npUser,
        },
        success:function(data)
        {
            console.log(data.data),
            dataChart = {
                data : data.data,
                date : data.date,
            }

            $('#qtyIndividu').replaceWith('<canvas id="qtyIndividu" name="qtyIndividu"></canvas>')
            load_chart();
        }
    });
});

$('#dateRange').on('apply.daterangepicker',function(ev, picker) {

    let startDate = picker.startDate.format('YYYY-MM-DD');
    let endDate   = picker.endDate.format('YYYY-MM-DD');
    let npUser = $('#npUser').val();

    $.ajax({
        url : "chartIndividu",
        type : "Get",
        datatype : "Json",
        data : {
            startDate : startDate,
            endDate : endDate,
            npUser : npUser,
        },
        success:function(data)
        {
            console.log(data.data),
            dataChart = {
                data : data.data,
                date : data.date,
            }

            $('#qtyIndividu').replaceWith('<canvas id="qtyIndividu" name="qtyIndividu"></canvas>')
            load_chart();
        }
    });
});
