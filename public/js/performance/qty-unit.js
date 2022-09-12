$(document).ready(function(){
    $.ajax({
        url:"",
        type:"Get",
        datatype:"Json",
        success:function(data)
        {
            dataChart = {
                date : data.date,
                data : data.data,
            }

            load_chart();
        }
    })
})
