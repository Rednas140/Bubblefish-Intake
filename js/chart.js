google.charts.load('current', {'packages':['corechart']});
google.charts.setOnLoadCallback(drawChart);

function drawChart() {
  var data = google.visualization.arrayToDataTable([
    ['Year', 'Aantal websites', 'Aantal koppelingen', 'Actieve koppelingen', 'Inactieve koppelingen'],
    ['2015', 8, 8, 8, 0],
    ['2016', 10, 16, 12, 0],
    ['2017', 15, 20, 17, 2],
    ['2018', 26, 32, 28, 0],
    ['2019', 30, 38, 34, 4],
    ['2020', 36, 45, 41, 4]
  ]);

  var options = {
    legend: { 
        position: 'bottom',
        alignment: 'start',
        maxLines: 5,
 },
    colors: ['#eab77c', '#b496ee', '#7fd6c4', '#df899f'],
    chartArea:{top:'10%', left: '15%', width: '100%', height: '65%'},
    vAxis: {
        maxValue: 100,
        gridlines: {
            count: 4
        }
    
    },
    width: 700,
    height: 400,
    forceIFrame: true
  };

  var chart = new google.visualization.LineChart(document.getElementById('curve_chart'));

  chart.draw(data, options);
}