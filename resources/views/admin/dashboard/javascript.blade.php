<script>
    const ctx = document.getElementById('myChart').getContext('2d');
    const myChart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: ['Jan', 'Feb', 'Mar', 'Apr', 'Mei', 'Jun', 'Jul', 'Aug', 'Sep', 'Okt', 'Nov', 'Des'],
            datasets: [{
                label: '# Article {{ $tahun }}',
                data: [
                    {!! json_encode($jan) !!}, 
                    {!! json_encode($feb) !!}, 
                    {!! json_encode($mar) !!}, 
                    {!! json_encode($apr) !!}, 
                    {!! json_encode($mei) !!}, 
                    {!! json_encode($jun) !!}, 
                    {!! json_encode($jul) !!}, 
                    {!! json_encode($aug) !!}, 
                    {!! json_encode($sep) !!}, 
                    {!! json_encode($okt) !!}, 
                    {!! json_encode($nov) !!}, 
                    {!! json_encode($des) !!}
                ],
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
</script>