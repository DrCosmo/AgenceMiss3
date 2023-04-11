<?php

include_once "modeles/fonctionsAccesBDD.php";

$lepdo=connectionBDD();

include_once "vues/stats.php";

if (isset($_POST['sub'])) {
  $date1=$_POST['date1'];
  $date2=$_POST['date2'];
}

?>

<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {

        var data = google.visualization.arrayToDataTable([
          ['TranchePrix', 'NbRecherche'],
          <?php
            foreach (getStatsPrix($lepdo) as $uneStat) {
                echo "['".$uneStat['prixMin']."--".$uneStat['prixMax']."',".$uneStat['COUNT(tranchePrix)']."],";
            }
          ?>
        ]);

        var options = {
          title: ''
        };

        var chart = new google.visualization.PieChart(document.getElementById('piePrix'));

        chart.draw(data, options);
      }
    </script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['surface', 'Recherches par surface'],
          <?php
            foreach (getSurface($lepdo) as $uneStat) {
              echo "['".$uneStat['surface']."',".$uneStat['COUNT(surface)']."],";
            }
          ?>
        ]);

        var options = {
          curveType: 'function',
          legend: { position: 'bottom' }
        };

        var chart = new google.visualization.BarChart(document.getElementById('chartSurface'));
        chart.draw(data, options);
      }
    </script>