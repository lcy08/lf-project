<div class="bg-white p-6 rounded-lg shadow">
    <h2 class="text-xl font-semibold mb-4">Energy Consumption</h2>
    <div id="energyChart"></div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function () {
    var energyOptions = {
    series: [{
        name: 'Energy Consumption',
        data: {!! json_encode($energyData->pluck('EnergyConsumption_kWh')) !!}
    }],
    chart: {
        height: 350,
        type: 'line',
        zoom: {
            enabled: false
        }
    },
    dataLabels: {
        enabled: false
    },
    stroke: {
        curve: 'straight'
    },
    title: {
        text: 'Energy Consumption Trends',
        align: 'left'
    },
    grid: {
        row: {
            colors: ['#f3f3f3', 'transparent'],
            opacity: 0.5
        },
    },
    xaxis: {
        categories: {!! json_encode($energyData->pluck('Month')) !!},
    },
    yaxis: {
        min: 40000,
        max: 50000
    }
};

var energyChart = new ApexCharts(document.querySelector("#energyChart"), energyOptions);
energyChart.render();
    });
</script>