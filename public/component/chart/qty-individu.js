function load_chart()
{
    const ctxQty = document.getElementById('qtyIndividu');

    const qtyIndividu = new Chart(ctxQty, {
        type: 'bar',
        data: {
            labels: dataChart.date,
            datasets: [{
                label: 'Hasil Verifikasi',
                data: dataChart.data,
                backgroundColor: 'rgba(59, 130, 246, 1)',
                borderColor: 'rgba(54, 162, 235, 0.5)',
                borderWidth: 1
            }]
        },
        options: {
            maintainAspectRatio: false,
            plugins:{
                legend: {
                    display:false,
                },
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
                label: 'Jumlah Verifikasi',
                data: dataChart.dataYear,
                backgroundColor: 'rgba(59, 130, 246, 1)',
                borderColor: 'rgba(59, 130, 246, 0.5)',
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
}
