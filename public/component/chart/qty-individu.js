const ctxQty = document.getElementById('qtyIndividu');
const ctxQtyYear = document.getElementById('qtyIndividuYear');
const qtyIndividu = new Chart(ctxQty, {
    type: 'bar',
    data: {
        labels: dataChart.date,
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

const qtyIndividuYear = new Chart(ctxQtyYear, {
    type: 'bar',
    data: {
        labels: dataChart.date,
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
