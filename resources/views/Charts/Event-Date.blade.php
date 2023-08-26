<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<script type="text/javascript">
  google.charts.load("current", { packages: ["corechart"] });
  google.charts.setOnLoadCallback(drawChart);

  function drawChart() {
    var data = new google.visualization.DataTable();
    data.addColumn("string", "Month");
    data.addColumn("number", "Number of Events");


    var chartData = @json($chartData);

    data.addRows(chartData);

    var options = {
      title: "Número de eventos por mês(todos os anos)",
      width: 800,
      height: 500,
      legend: { position: "none" },
      hAxis: {
        title: "Meses",
      },
      vAxis: {
        title: "Quantidade",
      },
    };

    var chart = new google.visualization.ColumnChart(
      document.getElementById("columnchart_values")
    );
    chart.draw(data, options);
  }
</script>


<div id="columnchart_values" style="width: 900px; height: 500px;"></div>

