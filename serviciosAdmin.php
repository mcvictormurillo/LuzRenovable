<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no initial-scale=1.0 maximum-scale=1.0, minimum-scale=1.0">
    <title>Luz Renovable|Login</title>
    <link rel="stylesheet" href="css/estilos.css" type="text/css" media="all" />
    <link rel="stylesheet" href="css/union2.css" type="text/css" media="all" />
    <link href="https://file.myfontastic.com/NGrnUeBnEQFSAECP5qEMcH/icons.css" rel="stylesheet"/>
</head>

<header class="header">
      <div class="contenedor">
        <h5 class="logo">Luz Renovable</h5>
        <span class="icon-menu" id="btn-menu"></span>
        <nav class="nav" id="nav">
          <ul class="menu">
            <li class="menu__item"><a href="inicioAdmin.php" class="menu__link ">Inicio</a></li>
            <li class="menu__item"><a href="serviciosAdmin.php" class="menu__link select">Servicios</a></li>
            <li class="menu__item"><a href="registroAdmin.php" class="menu__link">Registrate</a></li>
            <li class="menu__item"><a href="ListarUsuarios.php" class="menu__link">ListarUsuarios</a></li>
            <li class="menu__item"><a href="ListarPagina.php" class="menu__link">ListarPagina</a></li>
            <li class="menu__item"><a href="cerrar_sesion.php" class="menu__link">Cerrar Sesion</a></li>
            
          </ul>
        </nav>
      </div>
    </header>

<body>
<form  action="serviciosAdmin.php" method="post" >
        <h2>Fijar Valor</h2>     
        <span><label for="id"></label>        
        <select name="select" class="seleccionar">
            <option value="temp_max">Temp_Max</option>
            <option value="Hum_max">Hum_Max</option>
            <option value="Lum_max">Lum_Max</option>
            <option value="temp_min">Temp_Minx</option>
            <option value="Hum_min">Hum_Min</option>
            <option value="Lum_min">Lum_Min</option>            
        </select>
        <input type="text" name="id"  placeholder="ID..." required >  
        <input type="text" name="valor"  placeholder="Valor..." required ></br>
        <button type="submit" id="boton" name="botonFijar">Fijar</button></span>  
</form>
  


<?php
if(isset($_POST['botonFijar']))
{
    require_once ('conexionbd.php');
    $conexion = conectar();
    
    $id= $_POST["id"];
    $campoTabla=$_POST["select"];
    $valor=$_POST["valor"];
    
    

        $sql="UPDATE pagina SET $campoTabla ='$valor' WHERE id = '$id';";
        if (mysqli_query($conexion,$sql)) {
            //echo "<br/>New record created successfully";
            echo '<script language="javascript">alert("Acción Exitosa");</script>'; 
        } 
        else {
        //echo "Error: " . $sql . "<br>" . mysqli_error($conexion);
        echo '<script language="javascript">alert("Error");</script>'; 
        }

        mysqli_close($conexion);
}
?>
