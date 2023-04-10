<?php

include_once "modeles/fonctionsAccesBDD.php";

$lepdo=connectionBDD();

include_once "vues/stats.php";

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