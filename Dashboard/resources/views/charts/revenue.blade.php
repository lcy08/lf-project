<div class="bg-white p-6 rounded-lg shadow">
    <h2 class="text-xl font-semibold mb-4">Revenue</h2>
    <div id="revenueChart"></div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function () {
    var revenueOptions = {
    series: [{
        name: 'Revenue',
        data: {!! json_encode($revenueData->pluck('Revenue_IDR')) !!}
    }],
    chart: {
        height: 350,
        type: 'line',
        zoom: {
            enabled: false
        }
    },
    dataLabels: {
        enabled: true,
        formatter: function (val) {
            return 'IDR ' + (val/1000000).toFixed(1) + 'M';
        },
        offsetY: -20,
        style: {
            fontSize: '12px',
            colors: ["#304758"]
        }
    },
    xaxis: {
        categories: {!! json_encode($revenueData->pluck('Month')) !!},
    },
    yaxis: {
        labels: {
            formatter: function (val) {
                return 'IDR ' + (val/1000000000).toFixed(1) + 'B';
            }
        }
    }
};

var revenueChart = new ApexCharts(document.querySelector("#revenueChart"), revenueOptions);
revenueChart.render();
    });
</script>