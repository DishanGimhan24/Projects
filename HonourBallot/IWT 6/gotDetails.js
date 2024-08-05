document.addEventListener('DOMContentLoaded', function () {
    var ctx1 = document.getElementById('myChart').getContext('2d');

    var data1 = {
        labels: ['brown', 'Blue', 'darkblue', 'black'],
        datasets: [{
            data: [12, 19, 8, 65],
            backgroundColor: ['brown', 'Blue', 'darkblue', 'black']
        }]
    };

    var myChart1 = new Chart(ctx1, {
        type: 'pie',
        data: data1,
        options: {
            plugins: {
                legend: {
                    position: 'left',
                    padding: {
                        left: 50,
                        right: 50,
                        top: 50,
                        bottom: 0
                    }
                }
            }
        }
    });
});
