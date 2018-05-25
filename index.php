
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no initial-scale=1.0 maximum-scale=1.0, minimum-scale=1.0">
    <title>Luz Renovable|Login</title>
    <link rel="stylesheet" href="css/login.css">
    <link href="https://file.myfontastic.com/NGrnUeBnEQFSAECP5qEMcH/icons.css" rel="stylesheet">
</head>

<body>
    
    <form action="index.php" method="post" >
        <h2>LUZ RENOVABLE</h2>
        <label for="user">Usuario</label>
        <input type="text" name="user" id="iduser" required >
        <label for="pass">Contraseña</label>
        <input type="password" name="pass" id="idpass" required>
        <div class="container">
            <a href="">¿Olvidó la contraseña?</a>
            <a href="registro.php">Registrate</a>
            <button type="submit" id="boton" name="btnIniciarSesion">Iniciar Sesión</button>
        </div>
  
        
    </form>
        
</body>
      <!-- <input type="email" name="correo" id="correo" placeholder="Correo" required>
        <input type="text" name="telefono" id="telefono" placeholder="Telefono" required>
        <input type="text" name="username" id="username" placeholder="Username" required> 
        <input type="password" name="clave" id="clave" placeholder="Contraseña" required>-->
</html>

<?php
if(isset($_POST['btnIniciarSesion']))
{
        require_once ('conexionbd.php');+
        $conexion = conectar();
        $id = $_POST['user'];
        $pass1=$_POST['pass'];
        $pass=md5($pass1);
        
        
        $sql= "SELECT * FROM usuarios WHERE id='$id';";
        if ($result = mysqli_query($conexion,$sql)) { 
                      
            $consulta = mysqli_fetch_array($result);
            if($consulta['pass']==$pass&&$consulta['tipo']=='admin'){
                session_start();
                $_SESSION['usuario']= 'admin';
                header("Location:InicioAdmin.php");
                
               
            }else if($consulta['pass']==$pass){
                session_start();
                $_SESSION['usuario']= 'user';
                header("Location:Inicio.php");

            }
            
            else{
                echo '<script language="javascript">alert("Usuario o Contraseña Incorrectos");</script>';
            }
            
        } 
        else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conexion);
        } 
        mysqli_close($conexion);      
}

?>