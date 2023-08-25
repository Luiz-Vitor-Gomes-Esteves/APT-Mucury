<script src="https://www.gstatic.com/charts/loader.js"></script>

<div id="userCountChart" style="width:100%; max-width:600px; height:500px;"></div>

<script>
    google.charts.load('current', {packages: ['corechart']});
    google.charts.setOnLoadCallback(drawUserCountChart);

    function drawUserCountChart() {
        // Obtém os dados dinâmicos do PHP
        const dynamicData = @json($usersChartData);

        // Cria um array de dados com os dados dinâmicos
        const data = new google.visualization.DataTable();
        data.addColumn('string', 'Date');
        data.addColumn('number', 'User Count');
        data.addRows(dynamicData);

        // Defina as opções do gráfico
        const options = {
            title: 'Usuários cadastrados em um período de tempo',
            hAxis: {title: 'Data'},
            vAxis: {title: 'Quantidade'},
            legend: 'none'
        };

        // Crie e desenhe o gráfico
        const chart = new google.visualization.LineChart(document.getElementById('userCountChart'));
        chart.draw(data, options);
    }
</script>
