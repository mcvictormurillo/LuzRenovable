<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no initial-scale=1.0 maximum-scale=1.0, minimum-scale=1.0">
    <title>Luz Renovable|Login</title>
    <link rel="stylesheet" href="css/estilos.css" type="text/css" media="all" />
    <link rel="stylesheet" href="css/union2.css" type="text/css" media="all" />
    <link href="https://file.myfontastic.com/NGrnUeBnEQFSAECP5qEMcH/icons.css" rel="stylesheet"/>
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
	
  
</head>

<header class="header">
      <div class="contenedor">
        <h5 class="logo">Luz Renovable</h5>
        <span class="icon-menu" id="btn-menu"></span>
        <nav class="nav" id="nav">
          <ul class="menu">
            <li class="menu__item"><a href="inicioAdmin.php" class="menu__link ">Inicio</a></li>
            <li class="menu__item"><a href="serviciosAdmin.php" class="menu__link">Servicios</a></li>
            <li class="menu__item"><a href="registroAdmin.php" class="menu__link">Registrate</a></li>
            <li class="menu__item"><a href="ListarUsuarios.php" class="menu__link">ListarUsuarios</a></li>
             <!--<li class="menu__item"><a href="ListarPagina.php" class="menu__link">ListarPagina</a></li>-->>
            <li class="menu__item"><a href="cerrar_sesion.php" class="menu__link">Cerrar Sesion</a></li>
            
          </ul>
        </nav>
      </div>
    </header>

<body>
  
<form action="ListarPagina.php" method="post" >
        <h2>VARIABLES CLIMATICAS</h2>     
        <label for="id"></label>        
        <input type="text" name="id"  placeholder="ID..." required ></br>   
        <button type="submit" id="boton" name="botonListar">Listar Variables</button>
        <button type="submit" id="boton" name="botonListarValores">Valores Sensores</button>  
</form>

<script type="text/javascript">
function mostrar() {
    $('#container').highcharts({
        chart: {
            type: 'bar'
        },
        title: {
            text: 'Último Registro'
        },
        subtitle: {
            text: 'LUz Renovable'
        },
        xAxis: {
            categories: [
                <?php
                    $id = $_POST['id'];
                    require_once ('conexionbd.php');
                    $conexion = conectar();
                    $sql= "SELECT * FROM valoressensores where id='$id';";
                    $result = mysqli_query($conexion,$sql);                               
                    while($consulta = mysqli_fetch_array($result)){
                ?> 

                [<?php  echo $id?>],

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
                text: 'Valor',
                align: 'high'
            },
            labels: {
                overflow: 'justify'
            }
        },
        tooltip: {
            valueSuffix: ' '
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
            borderWidth: 10,
            backgroundColor: ((Highcharts.theme && Highcharts.theme.legendBackgroundColor) || '#FFFFFF'),
            shadow: true
        },
        credits: {
            enabled: false
        },
        series: [{
            name: 'Valor',
            data: [

                <?php
                    require_once ('conexionbd.php');
                    $conexion = conectar();
                    $sql= "SELECT * FROM valoressensores where id='$id' ORDER BY Tiempo DESC LIMIT 1;";
                    $result = mysqli_query($conexion,$sql);                               
                    while($consulta = mysqli_fetch_array($result)){
                ?> 
                [<?php  echo $consulta['Temp']?>],
                [<?php  echo $consulta['Hum']?>],
                [<?php  echo $consulta['Lum']?>],
                [<?php  echo $consulta['SenT']?>],
                
                

                <?php
                    }
                ?>
            ]
        }]
    });
};
		</script>
<script src="Highcharts-4.1.5/js/highcharts.js"></script>
<script src="Highcharts-4.1.5/js/highcharts-3d.js"></script>
<script src="Highcharts-4.1.5/js/modules/exporting.js"></script>
<div id="container" style="width: 80%;margin-top:10px;margin:auto;"></div>
</body>
</html>


<?php

if(isset($_POST['botonListar']))
{
        require_once ('conexionbd.php');
        $conexion = conectar();
        $id = $_POST['id'];
        $sql= "SELECT * FROM pagina WHERE id='$id';";
        if ($result = mysqli_query($conexion,$sql)) {
            
                echo"
                    <table class=\"show-transport\">
                    <thead>
                        <tr>
                            <th><center>ID</center></td>    
                            <th><center>TEM- MAX</center></td>
                            <th><center>HUME-MAX</center></th>
                            <th><center>LUM-MAX</center></th>
                            <th><center>TEM- MIN</center></td>
                            <th><center>HUME-MIN</center></th>
                            <th><center>LUM-MIN</center></th>
                            <th><center>ACTUADOR-1</center></th>
                            <th><center>ACTUADOR-2</center></th>
                            <th><center>ACTUADOR-3</center></th>
                            
                            
                        </tr>
                    </thead>
                    <tbody>";
                        while($consulta = mysqli_fetch_array($result))
                        { 
                   echo"

                    <tr>
                        <td class=\"td-show-transport\"><center>".$consulta['id']."</center></td>
                        <td class=\"td-show-transport\"><center>".$consulta['temp_max']."</center></td>
                        <td class=\"td-show-transport\"><center>".$consulta['hum_max']."</center></td>
                        <td class=\"td-show-transport\"><center>".$consulta['lum_max']."</center></td>
                        <td class=\"td-show-transport\"><center>".$consulta['temp_min']."</center></td>
                        <td class=\"td-show-transport\"><center>".$consulta['hum_min']."</center></td>
                        <td class=\"td-show-transport\"><center>".$consulta['lum_min']."</center></td>
                        <td class=\"td-show-transport\"><center>".$consulta['act1']."</center></td>
                        <td class=\"td-show-transport\"><center>".$consulta['act2']."</center></td>
                        <td class=\"td-show-transport\"><center>".$consulta['act3']."</center></td>

                    </tr>";                    
            }
            echo"
            <t/body>
            </table>    
                 
            ";       
        } 
        else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conexion);
        } 
        mysqli_close($conexion);      
}

if(isset($_POST['botonListarValores']))
{
        require_once ('conexionbd.php');
        $conexion = conectar();
        $id = $_POST['id'];
        $sql= "SELECT * FROM valoressensores WHERE id='$id';";
        if ($result = mysqli_query($conexion,$sql)) {
            //8395298
                echo"
                    <table class=\"show-transport\">
                    <thead>
                        <tr>
                            <th><center>ID</center></td>    
                            <th><center>TIEMPO</center></td>
                            <th><center>TEMPERATURA</center></th>
                            <th><center>HUMEDAD</center></th>
                            <th><center>LUMINOSIDAD</center></td>
                            <th><center>SENT</center></th>
 
                        </tr>
                    </thead>
                    <tbody>";
                        while($consulta = mysqli_fetch_array($result))
                        { 
                   echo"

                    <tr>
                        <td class=\"td-show-transport\"><center>".$consulta['Id']."</center></td>
                        <td class=\"td-show-transport\"><center>".$consulta['Tiempo']."</center></td>
                        <td class=\"td-show-transport\"><center>".$consulta['Temp']."</center></td>
                        <td class=\"td-show-transport\"><center>".$consulta['Hum']."</center></td>
                        <td class=\"td-show-transport\"><center>".$consulta['Lum']."</center></td>
                        <td class=\"td-show-transport\"><center>".$consulta['SenT']."</center></td>
                        

                    </tr>";                    
            }
            echo"
            <t/body>
            </table>    
                 
            ";       
        } 
        else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conexion);
        } 
        mysqli_close($conexion);
        echo "<script>";
        echo "mostrar();";
        echo "</script>";      
}


?>

