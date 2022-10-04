function load_chart()
{
const ctxQty = document.getElementById('qtyUnit');
const qtyUnit = new Chart(ctxQty, {
    type: 'bar',
    data: {
        labels: dataChart.date,
        datasets: [{
            label: 'Jumlah Verifikasi',
            data: dataChart.data,
            backgroundColor: [
                '#60a5fa','#3b82f6','#2563eb','#3b82f6','#60a5fa','#60a5fa','#3b82f6','#2563eb','#3b82f6','#60a5fa','#60a5fa','#3b82f6','#2563eb','#3b82f6','#60a5fa',
                '#60a5fa','#3b82f6','#2563eb','#3b82f6','#60a5fa','#60a5fa','#3b82f6','#2563eb','#3b82f6','#60a5fa','#60a5fa','#3b82f6','#2563eb','#3b82f6','#60a5fa',
                '#60a5fa','#3b82f6','#2563eb','#3b82f6','#60a5fa','#60a5fa','#3b82f6','#2563eb','#3b82f6','#60a5fa','#60a5fa','#3b82f6','#2563eb','#3b82f6','#60a5fa',
                '#60a5fa','#3b82f6','#2563eb','#3b82f6','#60a5fa','#60a5fa','#3b82f6','#2563eb','#3b82f6','#60a5fa','#60a5fa','#3b82f6','#2563eb','#3b82f6','#60a5fa',
            ],
            borderColor: '#1d4ed8',
            borderWidth: 1
        }]
    },
    options: {
        plugins:{
            legend :{
                display : false,
            }
        },
        scales: {
            y: {
                beginAtZero: true,
                min:0,
                max:100,
                grid:{
                    display: false
                }
            },
            x: {
                grid:{
                    display: false
                }
            },
        }
    }
});
};
