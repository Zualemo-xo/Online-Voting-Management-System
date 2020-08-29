<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="https://eci.gov.in/img/logo-eci.png" type="image/x-icon">

    <script src="https://code.highcharts.com/highcharts.js"></script>
    <script src="https://code.highcharts.com/modules/exporting.js"></script>
    <script src="https://code.highcharts.com/modules/export-data.js"></script>
    <script src="https://code.highcharts.com/modules/accessibility.js"></script>
    <title>2020 Election Results</title>
    <style> .center-block { display: block;margin-left: auto;margin-right: auto; }</style>
</head>
<body>
<div class="container">
    <center>
        <div id="container"></div>
    </center>
    <img class="center-block" src="https://eci.gov.in/uploads/monthly_2018_09/logo.png.7059356d074558af6c8631865fece9f4.png" width="500">
 </div>
<?php
include "config.php"; // connection file with database
$query = "SELECT candidate.firstname, candidate.lastname, COUNT(votes.candidate_id) AS Total FROM candidate LEFT JOIN votes ON candidate.candidate_id =votes.candidate_id GROUP BY candidate.candidate_id"; // get the records on which pie chart is to be drawn
$getData = $link->query($query);
?>
<script>
    // Build the chart
    Highcharts.chart('container', {
        chart: {
            plotBackgroundColor: null,
            plotBorderWidth: null,
            plotShadow: false,
            type: 'pie'
        },
        title: {
            text: 'Election Results, 2020'
        },
        tooltip: {
            pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
        },
        accessibility: {
            point: {
                valueSuffix: '%'
            }
        },
        plotOptions: {
            pie: {
                allowPointSelect: true,
                cursor: 'pointer',
                dataLabels: {
                    enabled: false
                },
                showInLegend: true
            }
        },
        series: [{
              name: 'No. of votes',
            colorByPoint: true,
            data: [
                <?php
                $data = '';
                if ($getData->num_rows>0){
                    while ($row = $getData->fetch_object()){
                        $data.='{ name:"'.$row->firstname.' '.$row->lastname.'",y:'.$row->Total.'},';
                    }
                }
                echo $data;
                ?>
            ]
        }]
    });
</script>
</body>
