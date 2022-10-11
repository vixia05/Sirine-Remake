Chart.overrides.doughnut.plugins.legend.display = false;

// 1.0 Mini Chart Order PCHT
    const ctxOrderPcht = document.getElementById('orderPcht');
    const orderPcht = new Chart(ctxOrderPcht, {
        type: 'bar',
        data: {
            labels: [1,2,3,4,5,6,7],
            datasets: [{
                data : [65,35,25,30,31,32,41],
                backgroundColor: [
                    '#38bdf8',
                    '#38bdf8',
                    '#38bdf8',
                    '#38bdf8',
                    '#38bdf8',
                    '#38bdf8',
                    '#2563eb'
                ],
                borderWidth: 1,
            }]
        },
        options: {
            plugins: {
                legend: {
                    display: false,
                },
            },
            scales: {
                x: {
                    display:false,
                    },
                y: {
                    display:false,
                    }
                },
        },
    });

// 2.0 Mini Chart Sisa Order Pcht
    const ctxSisaPcht = document.getElementById('sisaPcht');
    const sisaPcht = new Chart(ctxSisaPcht, {
        type: 'doughnut',
        data: {
            labels: ['Terkirim','Sisa'],
            datasets: [{
                data : [65,35],
                backgroundColor: ['rgba(68, 239, 239, 0.4)','rgba(239, 68, 68, 0.4)'],
                borderColor: ['rgba(68, 239, 239, 0.8)','rgba(239, 68, 68, 0.8)'],
                borderWidth: 1,
            }]
        },
    });

// 3.0 Mini Chart Order MMEA
    const ctxOrderMmea = document.getElementById('orderMmea');
    const orderMmea = new Chart(ctxOrderMmea, {
        type: 'bar',
        data: {
            labels: [1,2,3,4,5,6,7],
            datasets: [{
                data : [65,35,25,30,31,32,41],
                backgroundColor: [
                    '#fde047',
                    '#fde047',
                    '#fde047',
                    '#fde047',
                    '#fde047',
                    '#fde047',
                    '#ca8a04'
                ],
                borderWidth: 1,
            }]
        },
        options: {
            plugins: {
                legend: {
                    display: false,
                },
            },
            scales: {
                x: {
                    display:false,
                    },
                y: {
                    display:false,
                    }
                },
        },
    });

// 4.0 Mini Chart Sisa MMEA
    const ctxSisaMmea = document.getElementById('sisaMmea');
    const sisaMmea = new Chart(ctxSisaMmea, {
        type: 'doughnut',
        data: {
            labels: ['Terkirim','Sisa'],
            datasets: [{
                data : [65,35],
                backgroundColor: ['rgba(68, 239, 239, 0.4)','rgba(239, 68, 68, 0.4)'],
                borderColor: ['rgba(68, 239, 239, 0.8)','rgba(239, 68, 68, 0.8)'],
                borderWidth: 1,
            }]
        },
    });

// 5.0 inschiet Pcht
    const ctxInscPcht = document.getElementById('inscPcht');
    const inscPcht = new Chart(ctxInscPcht, {
        type: 'doughnut',
        data: {
            labels: ['Baik','Rusak'],
            datasets: [{
                data : [100 - dataChart.inscPcht,dataChart.inscPcht],
                backgroundColor: ['rgba(68, 239, 239, 0.4)','rgba(239, 68, 68, 0.4)'],
                borderColor: ['rgba(68, 239, 239, 0.8)','rgba(239, 68, 68, 0.8)'],
                borderWidth: 1,
            }]
        },
    });

// 6.0 Inschiet MMEA
    const ctxInscMmea = document.getElementById('inscMmea');
    const InscMmea = new Chart(ctxInscMmea, {
        type: 'doughnut',
        data: {
            labels: ['Baik','Rusak'],
            datasets: [{
                data : [100 - dataChart.inscMmea,dataChart.inscMmea],
                backgroundColor: ['rgba(68, 239, 239, 0.4)','rgba(239, 68, 68, 0.4)'],
                borderColor: ['rgba(68, 239, 239, 0.8)','rgba(239, 68, 68, 0.8)'],
                borderWidth: 1,
            }]
        },
    });

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
            label: 'Verifikasi MMEA',
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

