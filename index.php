<!DOCTYPE HTML>
<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>График предмета</title>
</head>
<body>
  <div id="container" style="height: 400px; min-width: 310px"></div>


  <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
  <script src="../lib/highstock.js"></script>
  <script src="../lib/exporting.js"></script>
  <script src="../lib/export-data.js"></script>
  <script type="text/javascript">
    $.getJSON('json.php', function (data) {
      // Create the chart
      Highcharts.stockChart('container', {
          rangeSelector: {
  					buttons: [{
  							type: 'minute',
  							count: 5,
  							text: '5 min'
  					}, {
  							type: 'hour',
  							count: 1,
  							text: '1h'
  					}, {
  							type: 'day',
  							count: 1,
  							text: '1D'
  					}, {
  							type: 'all',
  							count: 1,
  							text: 'All'
  					}],
  					selected: 3,
  					inputEnabled: false
          },

          title: {
              text: 'Bracers of the Cavern Luminar'
          },

          series: [{
              name: 'Количество',
              data: data,
              marker: {
                  enabled: true,
                  radius: 3
              },
              shadow: true,
              tooltip: {
                  valueDecimals: 0
              }
          }]
      });
  });
  </script>
  <?php
  require_once $_SERVER['DOCUMENT_ROOT'].'/Controllers/Db.php';
  Db::get();
  ?>
</body>
</html>
