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
                '#bfdbfe',
                '#93c5fd',
                '#60a5fa',
                '#3b82f6',
                '#2563eb',
                '#1d4ed8',
                '#1e40af',
                '#38bdf8',
                '#06b6d4',
            ],
            borderColor: '#60a5fa',
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
