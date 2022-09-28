function chartOrderPcht()
{
    const ctxOrderPcht = document.getElementById('orderPcht');
    const orderPcht = new Chart(ctxOrderPcht, {
        type: 'doughnut',
        data: {
            labels: ['Terkirim','Sisa'],
            datasets: [{
                data : [65,35],
            }]
        },
    });
}

// Call Chart PCHT
const ctxPcht = document.getElementById('pchtDaily');
const pchtDaily = new Chart(ctxPcht, {
    type: 'bar',
    data: {
        labels: dataChart.datePcht,
        datasets: [{
            label: 'Verifikasi Pcht',
            data: dataChart.dataPcht,
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
        scales: {
            y: {
                beginAtZero: true
            }
        }
    }
});

// Call Chart Mmea
const ctxMmea = document.getElementById('mmeaDaily');
const mmeaDaily = new Chart(ctxMmea, {
    type: 'bar',
    data: {
        labels: dataChart.dateMmea,
        datasets: [{
            label: 'Performance By Quantity',
            data: dataChart.dataMmea,
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
        scales: {
            y: {
                beginAtZero: true
            }
        }
    }
});

