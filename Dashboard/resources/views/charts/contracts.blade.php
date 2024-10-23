<div class="bg-white p-6 rounded-lg shadow">
    <h2 class="text-xl font-semibold mb-4">Contracts Overview</h2>
    <div id="contractsChart"></div>
</div>

<script>
        document.addEventListener('DOMContentLoaded', function () {
            const contractRenewals = @json($contractData); // Pass the data to JavaScript

            console.log(contractRenewals);

            const months = contractRenewals.map(item => item.month);
            
            const expiring = contractRenewals.map(item => -item.contracts_expiring); // Negate for expiring contracts
            const renewed = contractRenewals.map(item => item.contracts_renewed);
            const newLeases = contractRenewals.map(item => item.new_leases);

            const options = {
                chart: {
                    height: 400,
                    type: 'bar',
                    stacked: true,
                    toolbar: { show: false },
                },
                colors: ['#FF4560', '#00E396', '#008FFB'], // Red for expiring, Green for renewed, Blue for new leases
                xaxis: {
                    categories: months,
                },
                plotOptions: {
                    bar: {
                        horizontal: false,
                        columnWidth: '55%',
                        endingShape: 'rounded',
                    },
                },
                dataLabels: {
                    enabled: true,
                },
                legend: {
                    position: 'top',
                    horizontalAlign: 'left',
                },
            };

            const series = [
                {
                    name: 'Contracts Expiring',
                    data: expiring,
                },
                {
                    name: 'Contracts Renewed',
                    data: renewed,
                },
                {
                    name: 'New Leases',
                    data: newLeases,
                },
            ];

            const chart = new ApexCharts(document.querySelector("#contractsChart"), {
                ...options,
                series: series,
            });

            chart.render();
        });
</script>