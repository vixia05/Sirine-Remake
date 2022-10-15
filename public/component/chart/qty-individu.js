function load_chart()
{
    const ctxQty = document.getElementById('qtyIndividu');

    const qtyIndividu = new Chart(ctxQty, {
        type: 'bar',
        data: {
            labels: dataChart.date,
            datasets: [{
                label: 'Verifikasi Pikai',
                data: dataChart.data,
                backgroundColor: [
                    'rgba(255, 99, 132, 0.2)',
                    'rgba(54, 162, 235, 0.2)',
                    'rgba(255, 206, 86, 0.2)',
                    'rgba(75, 192, 192, 0.2)',
                    'rgba(153, 102, 255, 0.2)',
                    'rgba(255, 159, 64, 0.2)'
                ],
                borderColor: [
                    'rgba(255, 99, 132, 1)',
                    'rgba(54, 162, 235, 1)',
                    'rgba(255, 206, 86, 1)',
                    'rgba(75, 192, 192, 1)',
                    'rgba(153, 102, 255, 1)',
                    'rgba(255, 159, 64, 1)'
                ],
                borderWidth: 1
            }]
        },
        options: {
            maintainAspectRatio: false,
            plugins:{
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
}
const ctxQtyYear = document.getElementById('qtyIndividuYear');

const qtyIndividuYear = new Chart(ctxQtyYear, {
    type: 'bar',
    data: {
        labels: [
            'Jan',
            'Feb',
            'Mar',
            'Apr',
            'Mei',
            'Jun',
            'Jul',
            'Agu',
            'Sep',
            'Okt',
            'Nov',
            'Des',
        ],
        datasets: [{
            label: 'Verifikasi MMEA',
            data: dataChart.data,
            backgroundColor: [
                'rgba(255, 99, 132, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(255, 206, 86, 0.2)',
                'rgba(75, 192, 192, 0.2)',
                'rgba(153, 102, 255, 0.2)',
                'rgba(255, 159, 64, 0.2)'
            ],
            borderColor: [
                'rgba(255, 99, 132, 1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255, 1)',
                'rgba(255, 159, 64, 1)'
            ],
            borderWidth: 1
        }]
    },
    options: {
        maintainAspectRatio:false,
        plugins:{
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
