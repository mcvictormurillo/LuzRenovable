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
            <li class="menu__item"><a href="inicioAdmin.php" class="menu__link">Inicio</a></li>
            <li class="menu__item"><a href="serviciosAdmin.php" class="menu__link">Servicios</a></li>
            <li class="menu__item"><a href="registroAdmin.php" class="menu__link">Registrate</a></li>
            <li class="menu__item"><a href="ListarUsuarios.php" class="menu__link select">ListarUsuarios</a></li>
            <li class="menu__item"><a href="ListarPagina.php" class="menu__link">ListarPagina</a></li>
            <li class="menu__item"><a href="cerrar_sesion.php" class="menu__link">Cerrar Sesion</a></li>
            
          </ul>
        </nav>
      </div>
    </header>

<body>  
<form  action="ListarUsuarios.php" method="post" >
        <h2>LISTAR</h2>     
        <span><label for="id"></label>        
        <input type="text" name="id"  placeholder="ID..." required >  
        <button type="submit" id="boton" name="botonListar">Listar Usuarios</button></span>  
</form>
</body>
</html>


<?php

if(isset($_POST['botonListar']))
{
        require_once ('conexionbd.php');
        $conexion = conectar();
        $id = $_POST['id'];
        
        $sql= "SELECT * FROM usuarios WHERE id='$id';";
        if ($result = mysqli_query($conexion,$sql)) {
            
            while($consulta = mysqli_fetch_array($result))
            {
                   echo"
                    <table class=\"show-transport\">
                        
                        <tr>   
                            <th ><center>Id</center></th> 
                            <th ><center>Nombre</center></th>
                            <th ><center>Apellidos</center></th>
                            <th ><center>Email</center></th>
                            <th ><center>Telefono</center></th>
                            <th ><center>Edad</center></th>
                            <th ><center>Dirección</center></th>
                            <th ><center>País</center></th>
                            <th ><center>Estrato</center></th>
                            <th ><center>Servicio</center></th>                   
                            
                        </tr>          

                    <tr>
                        <td class=\"td-show-transport\"><center>".$consulta['id']."</center></td>
                        <td class=\"td-show-transport\"><center>".$consulta['nombre']."</center></td>
                        <td class=\"td-show-transport\"><center>".$consulta['apellidos']."</center></td>
                        <td class=\"td-show-transport\"><center>".$consulta['email']."</center></td>
                        <td class=\"td-show-transport\"><center>".$consulta['telefono']."</center></td>
                        <td class=\"td-show-transport\"><center>".$consulta['edad']."</center></td>
                        <td class=\"td-show-transport\"><center>".$consulta['direccion']."</center></td>
                        <td class=\"td-show-transport\"><center>".$consulta['pais']."</center></td>
                        <td class=\"td-show-transport\"><center>".$consulta['estrato']."</center></td>
                        <td class=\"td-show-transport\"><center>".$consulta['servicio']."</center></td>              

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

