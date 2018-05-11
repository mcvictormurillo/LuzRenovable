<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no initial-scale=1.0 maximum-scale=1.0, minimum-scale=1.0">
    <title>Luz Renovable|Login</title>
    <link rel="stylesheet" href="css/estilos.css" type="text/css" media="all" />
    <link rel="stylesheet" href="css/login.css" type="text/css" media="all" />
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
            <li class="menu__item"><a href="registroAdmin.php" class="menu__link select">Registrate</a></li>
            <li class="menu__item"><a href="ListarUsuarios.php" class="menu__link">ListarUsuarios</a></li>
            <li class="menu__item"><a href="ListarPagina.php" class="menu__link">ListarPagina</a></li>
            <li class="menu__item"><a href="cerrar_sesion.php" class="menu__link">Cerrar Sesion</a></li>
            
          </ul>
        </nav>
      </div>
    </header>

<body>
   
    
    <form action="registroAdmin.php" method="post" >
        <h2>REGISTRO</h2>       
     
        <label for="nombre">Nombre</label>        
        <input type="text" name="nombre"  required ></br>
    
        <label for="apellidos">Apellido</label>      
        <input type="text" name="apellidos" required ></br>    

        <label for="id">Id</label>
        <input type="text" name="id"  required ></br>

        <label for="pass">Contraseña</label>
        <input type="text" name="pass" required></br>

        <label for="email">Email</label>
        <input type="email" name="email" required ></br>

        <label for="telefono">Telefono</label>
        <input type="number" name="telefono" min="0" required>

        <label for="edad">Edad</label>
        <input type="number" name="edad" min="1" required>

        <label for="direccion">Dirección</label>
        <input type="text" name="direccion" required>

        <label for="pais">País</label>
        <input type="text" name="pais" required>

        <label for="estrato">Estrato</label>
        <input type="number" name="estrato" min="0" required>

        <label for="servicio">Tipo de servicio</label>
        <input type="text" name="servicio" required>

        <div class="container">
            
            <button type="submit" name="botonRegistro" id="boton">Enviar Solicitud</button>            
            <button type="submit" name="botonActualizar" id="boton" >Actualizar Datos</button>
            <button type="submit" name="botontnHabilitar" id="boton" >Inhabilitar</button>

            
        </div>
  
        
    </form>
        
</body>
     
</html>


<?php
if(isset($_POST['botonRegistro']))
{
        require_once ('conexionbd.php');
        $conexion = conectar();
        $nombre= $_POST["nombre"];
        $apellidos=$_POST["apellidos"];
        $id= $_POST["id"];
        $pass1= $_POST["pass"];
        $pass=md5($pass1);
        $email=$_POST["email"];
        $telefono=$_POST["telefono"];
        $edad=$_POST["edad"];
        $direccion=$_POST["direccion"];
        $pais=$_POST["pais"];
        $estrato=$_POST["estrato"];        
        $servicio=$_POST["servicio"];        
        $estado="1";

        $sql = "INSERT INTO usuarios (nombre,apellidos,id,pass,email,telefono,edad,direccion,pais,estrato,servicio,estado)
        VALUES ('$nombre', '$apellidos', '$id', '$pass','$email','$telefono','$edad','$direccion','$pais','$estrato','$servicio','$estado')";
        
        
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




if(isset($_POST['botonActualizar']))
{
    require_once ('conexionbd.php');
    $conexion = conectar();
    $nombre= $_POST["nombre"];
    $apellidos=$_POST["apellidos"];
    $id= $_POST["id"];
    $pass1= $_POST["pass"];
    $pass=md5($pass1);
    $email=$_POST["email"];
    $telefono=$_POST["telefono"];
    $edad=$_POST["edad"];
    $direccion=$_POST["direccion"];
    $pais=$_POST["pais"];
    $estrato=$_POST["estrato"];        
    $servicio=$_POST["servicio"];        
    $estado="1";

        $sql="UPDATE usuarios SET nombre='$nombre',apellidos='$apellidos',pass='$pass',email='$email',telefono='$telefono', edad='$edad', direccion='$direccion', pais='$pais', estrato='$estrato', servicio='$servicio' WHERE id = '$id';";
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


if(isset($_POST['botontnHabilitar']))
{
    require_once ('conexionbd.php');
    $conexion = conectar();
    
    $id= $_POST["id"];
    $estado="0";
    

        $sql="UPDATE usuarios SET estado='$estado' WHERE id = '$id';";
        if (mysqli_query($conexion,$sql)) {
            //echo "<br/>New record created successfully";
            echo '<script language="javascript">alert("Acción Exitosa - Usuaruio No Activo");</script>'; 
        } 
        else {
        //echo "Error: " . $sql . "<br>" . mysqli_error($conexion);
        echo '<script language="javascript">alert("Error");</script>'; 
        }

        mysqli_close($conexion);
}

?>