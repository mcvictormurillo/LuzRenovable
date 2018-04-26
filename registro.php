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
    <div class="navegacion">
            <a href="inicio.php">Inicio</a>
            <a href="inicio.php">Registro</a>
            <a href="servicios.php">Servicios</a>
          
            
            
    </div>
    
    <form action="formulario.html" method="post" id="registro" >
        <h2>REGISTRO</h2>       
        
        <label for="nombre">Nombre</label>        
        <input type="text" name="nombre"  required ></br>
    
        <label for="apellido">Apellido</label>      
        <input type="text" name="apellido" required ></br>    

        <label for="user">Id</label>
        <input type="text" name="user" id="iduser" required ></br>

        <label for="pass">Contraseña</label>
        <input type="text" name="pass" id="idpass" required></br>

        <label for="email">Email</label>
        <input type="email" name="email" required ></br>

        <label for="telefono">Telefono</label>
        <input type="number" name="telefono" min="0" required>

        <label for="direccion">Dirección</label>
        <input type="text" name="direccion" required>

        <label for="servicio">Tipo de servicio</label>
        <input type="text" name="servicio" required>

        <div class="container">
            
            <button type="submit" id="boton">Enviar Solicitud</button>
        </div>
  
        
    </form>
        
</body>
      <!-- <input type="email" name="correo" id="correo" placeholder="Correo" required>
        <input type="text" name="telefono" id="telefono" placeholder="Telefono" required>
        <input type="text" name="username" id="username" placeholder="Username" required> 
        <input type="password" name="clave" id="clave" placeholder="Contraseña" required>-->
</html>