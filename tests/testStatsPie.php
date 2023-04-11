<?php

include_once "../modeles/fonctionsAccesBDD.php";
$lepdo=connectionBDD();
include_once "../vues/stats.php";

if (isset($_POST['sub'])) {
  $date1=$_POST['date1'];
  $date2=$_POST['date2'];
  $statsPrix=getStatsPrix($lepdo, $date1, $date2);
  var_dump($statsPrix);
}else {
  $statsPrix=getStatsPrix($lepdo, NULL, NULL);
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
            foreach ($statsPrix as $uneStat) {
                echo "['".$uneStat['prixMin']."--".$uneStat['prixMax']."',".$uneStat['COUNT(tranchePrix)']."],";
            }
          ?>
          /*
          ['Work',     11],
          ['Eat',      2],
          ['Commute',  2],
          ['Watch TV', 2],
          ['Sleep',    7]
          */
        ]);

        var options = {
          title: ''
        };

        var chart = new google.visualization.PieChart(document.getElementById('piePrix'));

        chart.draw(data, options);
      }
    </script>