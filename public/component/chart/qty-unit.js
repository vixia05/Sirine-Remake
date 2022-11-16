function load_chart()
{
    const ctxQty = document.getElementById('qtyUnit');
    const qtyUnit = new Chart(ctxQty, {
        type: 'bar',
        data: {
            labels: @json($labels),
            datasets: @json($dataset)
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
