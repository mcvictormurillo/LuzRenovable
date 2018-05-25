<!DOCTYPE HTML>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<title>Highcharts Example</title>

		<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
		<style type="text/css">
${demo.css}
		</style>
		<script type="text/javascript">
$(function () {
    $('#container').highcharts({
        chart: {
            type: 'bar'
        },
        title: {
            text: 'Reporte Diario'
        },
        subtitle: {
            text: 'LUz Renovable'
        },
        xAxis: {
            categories: [
                <?php
                    require_once ('conexionbd.php');
                    $conexion = conectar();
                    $sql= "SELECT * FROM pagina;";
                    $result = mysqli_query($conexion,$sql);                               
                    while($consulta = mysqli_fetch_array($result)){
                ?> 

                ['<?php  echo $consulta['id']?>'],

                <?php
                    }
                ?>

            ],
            title: {
                text: null
            }
        },
        yAxis: {
            min: 0,
            title: {
                text: 'Temperatura (°C)',
                align: 'high'
            },
            labels: {
                overflow: 'justify'
            }
        },
        tooltip: {
            valueSuffix: ' °C'
        },
        plotOptions: {
            bar: {
                dataLabels: {
                    enabled: true
                }
            }
        },
        legend: {
            layout: 'vertical',
            align: 'right',
            verticalAlign: 'top',
            x: -40,
            y: 100,
            floating: true,
            borderWidth: 1,
            backgroundColor: ((Highcharts.theme && Highcharts.theme.legendBackgroundColor) || '#FFFFFF'),
            shadow: true
        },
        credits: {
            enabled: false
        },
        series: [{
            name: 'Temperatura',
            data: [

                <?php
                    require_once ('conexionbd.php');
                    $conexion = conectar();
                    $sql= "SELECT * FROM pagina where id='$id';";
                    $result = mysqli_query($conexion,$sql);                               
                    while($consulta = mysqli_fetch_array($result)){
                ?> 

                [<?php  echo $consulta['temp_max']?>],

                <?php
                    }
                ?>
            ]
        }]
    });
});
		</script>
	</head>
	<body>

<script src="Highcharts-4.1.5/js/highcharts.js"></script>
<script src="Highcharts-4.1.5/js/highcharts-3d.js"></script>
<script src="Highcharts-4.1.5/js/modules/exporting.js"></script>

<div id="container" style="height: 400px"></div>
	</body>
</html>
