
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



