<div class="bg-white p-6 rounded-lg shadow">
    <h2 class="text-xl font-semibold mb-4">Occupancy Rate</h2>
    <div id="occupancyChart"></div>
</div>

<script>
    // Occupancy Rate Chart
    document.addEventListener('DOMContentLoaded', function () {
    var occupancyOptions = {
        series: [{
            name: 'Occupancy Rate',
            data: {!! json_encode($occupancyData->pluck('OccupancyRate_percent')) !!}
        }],
        chart: {
            height: 350,
            type: 'line',
            zoom: {
                enabled: false
            }
        },
        dataLabels: {
            enabled: true
        },
        stroke: {
            curve: 'straight'
        },
        title: {
            text: 'Occupancy Rate Trends',
            align: 'left'
        },
        grid: {
            row: {
                colors: ['#f3f3f3', 'transparent'],
                opacity: 0.5
            },
        },
        xaxis: {
            categories: {!! json_encode($occupancyData->pluck('Month')) !!},
        },
        yaxis: {
            min: 90,
            max: 100
        }
    };

    var occupancyChart = new ApexCharts(document.querySelector("#occupancyChart"), occupancyOptions);
    occupancyChart.render();
});
</script>