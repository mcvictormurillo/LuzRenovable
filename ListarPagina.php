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
            <li class="menu__item"><a href="serviciosAdmin.php" class="menu__link">Servicios</a></li>
            <li class="menu__item"><a href="registroAdmin.php" class="menu__link">Registrate</a></li>
            <li class="menu__item"><a href="ListarUsuarios.php" class="menu__link">ListarUsuarios</a></li>
            <li class="menu__item"><a href="ListarPagina.php" class="menu__link select">ListarPagina</a></li>
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
        <button type="submit" id="boton" name="botonListar">Listar Usuarios</button>  
</form>
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
            
            while($consulta = mysqli_fetch_array($result))
            {
        

                    
                        
                    echo"
                    <table class=\"show-transport\">
                        
                        <tr>    
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
                  
                   

                    <tr>
                        <td class=\"td-show-transport\"><center>".$consulta['temp_max']."</center></td>
                        <td class=\"td-show-transport\"><center>".$consulta['hum_max']."</center></td>
                        <td class=\"td-show-transport\"><center>".$consulta['lum_max']."</center></td>
                        <td class=\"td-show-transport\"><center>".$consulta['temp_min']."</center></td>
                        <td class=\"td-show-transport\"><center>".$consulta['hum_min']."</center></td>
                        <td class=\"td-show-transport\"><center>".$consulta['lum_min']."</center></td>
                        <td class=\"td-show-transport\"><center>".$consulta['act1']."</center></td>
                        <td class=\"td-show-transport\"><center>".$consulta['act2']."</center></td>
                        <td class=\"td-show-transport\"><center>".$consulta['act3']."</center></td>

                    </tr>
                      
                        
                     
                     
                    
                </table>    
                 
                ";               
            }       
        } 
        else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conexion);
        } 
        mysqli_close($conexion);      
}


?>

