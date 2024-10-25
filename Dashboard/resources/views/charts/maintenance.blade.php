<div class="bg-white p-6 rounded-lg shadow">
    <h2 class="text-xl font-semibold mb-4">Maintenance Costs</h2>
    <div id="maintenanceChart"></div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function () {
    var maintenanceOptions = {
    series: [{
        name: 'Maintenance Costs',
        data: {!! json_encode($maintenanceData->pluck('TotalCosts_IDR')) !!}
    }],
    chart: {
        height: 350,
        type: 'bar',
    },
    plotOptions: {
        bar: {
            horizontal: false,
            columnWidth: '50%',
            barHeight: '70%',
            borderRadius: 4,
            dataLabels: {
                position: 'top',
            },

        }
    },
    dataLabels: {
        enabled: false
    },
    xaxis: {
        categories: {!! json_encode($maintenanceData->pluck('Month')) !!},
    },
    yaxis: {
        labels: {
            formatter: function (val) {
                return 'IDR ' + (val/1000000).toFixed(1) + 'M';
            }
        }
    }
};

var maintenanceChart = new ApexCharts(document.querySelector("#maintenanceChart"), maintenanceOptions);
maintenanceChart.render();
    });
</script>