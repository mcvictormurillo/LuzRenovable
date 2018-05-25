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
             <!--<li class="menu__item"><a href="ListarPagina.php" class="menu__link">ListarPagina</a></li>-->
            <li class="menu__item"><a href="cerrar_sesion.php" class="menu__link">Cerrar Sesion</a></li>
            
          </ul>
        </nav>
      </div>
    </header>

<body>  

<div>
    <form  action="ListarUsuarios.php" method="post" >
            <h2>USUARIOS</h2>     
                   
            <input type="text" name="id" placeholder="ID..."  >  
            <button type="submit" id="boton" name="botonListar">Listar Usuario</button> 
            <button type="submit" id="boton" name="botonListarTodos">Listar Todos</button>  
    </form>
</div>



<div>
    <form  action="ListarUsuarios.php" method="post" >
            <h2>USUARIO Y SENSORES</h2>     
            <label for="idUsuario">ID-Usuario</label>        
            <input type="text" name="idUsuario"  placeholder="ID..."  >

            <label for="idSensor">ID.Sensor</label>        
            <input type="text" name="idSensor"  placeholder="ID..."  >

            <button type="submit" id="boton" name="botonAsignar">Asignar</button>
            <button type="submit" id="boton" name="botonListarSensorUsuario">Listar</button>             
            <button type="submit" id="boton" name="botonCambiarEstado">Cambiar Estado</button>
            <button type="submit" id="boton" name="botonListarTodosUS">Listar Todos</button>
    </form>
</div>

<div>
    <form  action="ListarUsuarios.php" method="post" >
            <h2>SENSORES</h2>     
            <label for="idSensor">ID.Sensor</label>        
            <input type="text" name="idSensorU"  placeholder="ID..."  >

            <button type="submit" id="boton" name="botonListarS">Listar</button>
            <button type="submit" id="boton" name="botonListarTodosS">Listar Todos</button>             
            
    </form>
</div>
</body>
</html>


<?php

if(isset($_POST['botonListar']))
{
        require_once ('conexionbd.php');
        $conexion = conectar();
        $id = $_POST['id'];
        if($id==null){
            $sql= "SELECT * FROM usuarios WHERE 1;";
        }else{
            $sql= "SELECT * FROM usuarios WHERE id=$id;";
        }
        
        
        if ($result = mysqli_query($conexion,$sql)) {
            
            
                   echo"
                    <table class=\"show-transport\">
                        <thead>
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
                        </thead>
                        <tbody>";
                while($consulta = mysqli_fetch_array($result))
                {          
                    echo"
                    
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

                    </tr>";                                 
            }
            echo"
            </tbody>
            </table>    
                 
            ";       
        } 
        else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conexion);
        } 
        mysqli_close($conexion);      
}


if(isset($_POST['botonListarTodos']))
{
        require_once ('conexionbd.php');
        $conexion = conectar();
     
        
        $sql= "SELECT * FROM usuarios WHERE 1;";
        if ($result = mysqli_query($conexion,$sql)) {
            
            
                   echo"
                    <table class=\"show-transport\">
                        <thead>
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
                        </thead>
                        <tbody>";
                while($consulta = mysqli_fetch_array($result))
                {          
                    echo"
                    
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

                    </tr>";                                 
            }
            echo"
            </tbody>
            </table>    
                 
            ";       
        } 
        else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conexion);
        } 
        mysqli_close($conexion);      
}

//------------------------ form 2---------------------------
if(isset($_POST['botonAsignar']))
{
        require_once ('conexionbd.php');
        $conexion = conectar();
        $idUsuario= $_POST["idUsuario"];
        $idSensor=$_POST["idSensor"];
        $tabla="sensores-usuarios";
        $estado =0;
        $servicio=0;
      
        $sql = "INSERT INTO sensores_usuarios (idSensor,idUsuario,estado,servicio)
        VALUES ('$idSensor','$idUsuario','$estado','$servicio')";
            
        
        if (mysqli_query($conexion,$sql)) {
                                            //echo "<br/>New record created successfully";
                                            echo '<script language="javascript">alert("Registro Exitoso");</script>'; 
                                        } 
        else {
                //echo "Error: " . $sql . "<br>" . mysqli_error($conexion);
                echo '<script language="javascript">alert("Usuario No Registrado");</script>'; 
            }

        mysqli_close($conexion);
}

if(isset($_POST['botonCambiarEstado']))
{
    require_once ('conexionbd.php');
        $conexion = conectar();
        $idUsuario= $_POST["idUsuario"];
        $idSensor=$_POST["idSensor"];       
        $estado =1;
        $sql="UPDATE sensores_usuarios SET estado='$estado'WHERE idUsuario = '$idUsuario' and idSensor='$idSensor';";
        if (mysqli_query($conexion,$sql)) {
            //echo "<br/>New record created successfully";
            echo '<script language="javascript">alert("Registro Exitoso");</script>'; 
        } 
        else {
        //echo "Error: " . $sql . "<br>" . mysqli_error($conexion);
        echo '<script language="javascript">alert("Usuario No Registrado");</script>'; 
        }

        mysqli_close($conexion);
}

if(isset($_POST['botonListarSensorUsuario']))
{
        require_once ('conexionbd.php');
        $conexion = conectar();
        $idUsuario= $_POST["idUsuario"];
        $idSensor=$_POST["idSensor"];    
        
        $sql= "SELECT * FROM sensores_usuarios WHERE idUsuario=$idUsuario and idSensor='$idSensor';";
        
        
        
        if ($result = mysqli_query($conexion,$sql)) {
            
            
                   echo"
                    <table class=\"show-transport\">
                        <thead>
                        <tr>   
                            <th ><center>Id-Usuario</center></th> 
                            <th ><center>Id-Sensor</center></th>
                            <th ><center>Estado</center></th>
                            <th ><center>Servicio</center></th>
                        </tr>
                        </thead>
                        <tbody>";
                while($consulta = mysqli_fetch_array($result))
                {          
                    echo"
                    
                    <tr>
                        <td class=\"td-show-transport\"><center>".$consulta['idUsuario']."</center></td>
                        <td class=\"td-show-transport\"><center>".$consulta['idSensor']."</center></td>
                        <td class=\"td-show-transport\"><center>".$consulta['estado']."</center></td>
                        <td class=\"td-show-transport\"><center>".$consulta['servicio']."</center></td>
                    </tr>";                                 
            }
            echo"
            </tbody>
            </table>    
                 
            ";       
        } 
        else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conexion);
        } 
        mysqli_close($conexion);      
}

if(isset($_POST['botonListarTodosUS']))
{
        require_once ('conexionbd.php');
        $conexion = conectar();
         
        
        $sql= "SELECT * FROM sensores_usuarios WHERE 1;";
        
        
        
        if ($result = mysqli_query($conexion,$sql)) {
            
            
                   echo"
                    <table class=\"show-transport\">
                        <thead>
                        <tr>   
                            <th ><center>Id-Usuario</center></th> 
                            <th ><center>Id-Sensor</center></th>
                            <th ><center>Estado</center></th>
                            <th ><center>Servicio</center></th>
                        </tr>
                        </thead>
                        <tbody>";
                while($consulta = mysqli_fetch_array($result))
                {          
                    echo"
                    
                    <tr>
                        <td class=\"td-show-transport\"><center>".$consulta['idUsuario']."</center></td>
                        <td class=\"td-show-transport\"><center>".$consulta['idSensor']."</center></td>
                        <td class=\"td-show-transport\"><center>".$consulta['estado']."</center></td>
                        <td class=\"td-show-transport\"><center>".$consulta['servicio']."</center></td>
                    </tr>";                                 
            }
            echo"
            </tbody>
            </table>    
                 
            ";       
        } 
        else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conexion);
        } 
        mysqli_close($conexion);      
}
//---------------------------- Form 3-----------------------
if(isset($_POST['botonListar']))
{
        require_once ('conexionbd.php');
        $conexion = conectar();
        $idSensor = $_POST['idSensorU'];       
        $sql= "SELECT * FROM pagina WHERE id=$id;";     
        
        if ($result = mysqli_query($conexion,$sql)) {
            
            
                   echo"
                    <table class=\"show-transport\">
                        <thead>
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
                        </thead>
                        <tbody>";
                while($consulta = mysqli_fetch_array($result))
                {          
                    echo"
                    
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

                    </tr>";                                 
            }
            echo"
            </tbody>
            </table>    
                 
            ";       
        } 
        else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conexion);
        } 
        mysqli_close($conexion);      
}


if(isset($_POST['botonListarTodos']))
{
        require_once ('conexionbd.php');
        $conexion = conectar();
     
        
        $sql= "SELECT * FROM usuarios WHERE 1;";
        if ($result = mysqli_query($conexion,$sql)) {
            
            
                   echo"
                    <table class=\"show-transport\">
                        <thead>
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
                        </thead>
                        <tbody>";
                while($consulta = mysqli_fetch_array($result))
                {          
                    echo"
                    
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

                    </tr>";                                 
            }
            echo"
            </tbody>
            </table>    
                 
            ";       
        } 
        else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conexion);
        } 
        mysqli_close($conexion);      
}
?>

