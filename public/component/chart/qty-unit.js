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
                backgroundColor: 'rgba(59, 130, 246, 1)',
                // [
                //     '#60a5fa','#3b82f6','#2563eb','#3b82f6','#60a5fa','#60a5fa','#3b82f6','#2563eb','#3b82f6','#60a5fa','#60a5fa','#3b82f6','#2563eb','#3b82f6','#60a5fa',
                //     '#60a5fa','#3b82f6','#2563eb','#3b82f6','#60a5fa','#60a5fa','#3b82f6','#2563eb','#3b82f6','#60a5fa','#60a5fa','#3b82f6','#2563eb','#3b82f6','#60a5fa',
                //     '#60a5fa','#3b82f6','#2563eb','#3b82f6','#60a5fa','#60a5fa','#3b82f6','#2563eb','#3b82f6','#60a5fa','#60a5fa','#3b82f6','#2563eb','#3b82f6','#60a5fa',
                //     '#60a5fa','#3b82f6','#2563eb','#3b82f6','#60a5fa','#60a5fa','#3b82f6','#2563eb','#3b82f6','#60a5fa','#60a5fa','#3b82f6','#2563eb','#3b82f6','#60a5fa',
                // ],
                borderColor: 'rgba(59, 130, 246, 0.8)',
                borderWidth: 1
            }]
        },
        options: {
            maintainAspectRatio: false,
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
};
