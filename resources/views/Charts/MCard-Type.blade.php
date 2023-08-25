<script src="https://www.gstatic.com/charts/loader.js"></script>
<div id="myChart" style="width:100%; max-width:600px; height:500px;"></div>
<!--Puxa a biblioteca e seta o tamanho do grafico-->

<script>
//Carrega a biblioteca
    google.charts.load('current', {'packages':['corechart']});
    google.charts.setOnLoadCallback(drawChart);
//Preenche
    function drawChart() {
        // Set Data
        var data = new google.visualization.DataTable();
        data.addColumn('string', 'Type'); //O que mandei para cá
        data.addColumn('number', 'Count');
        data.addRows(@json($chartData));

        // Set Options
        var options = {
            title: 'Tipos de Mucury Card'
        };

        // Draw
        var chart = new google.visualization.PieChart(document.getElementById('myChart'));
        chart.draw(data, options);
    }
</script>
