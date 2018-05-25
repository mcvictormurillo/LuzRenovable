
<?php
session_start();

$varSesion =$_SESSION['usuario'];
error_reporting(0);
if($varSesion==null||$varSesion==''){
  echo "Usted no tiene autorizacion";
  die();
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no initial-scale=1.0 maximum-scale=1.0, minimum-scale=1.0">
    <title>Luz Renovable| Inicio</title>
    
    <link rel="stylesheet" href="css/estilos.css" type="text/css" media="all" />
    <link href="https://file.myfontastic.com/NGrnUeBnEQFSAECP5qEMcH/icons.css" rel="stylesheet">
</head>

    <header class="header">
      <div class="contenedor">
        <h5 class="logo">SMARTHLIGHT</h5>
        <span class="icon-menu" id="btn-menu"></span>
        <nav class="nav" id="nav">
          <ul class="menu">
            <li class="menu__item"><a href="inicio.php" class="menu__link select">Inicio</a></li>
            <li class="menu__item"><a href="serviciosAdmin.php" class="menu__link">Servicios</a></li>
            <li class="menu__item"><a href="registroAdmin.php" class="menu__link">Registrate</a></li>
            <li class="menu__item"><a href="ListarUsuarios.php" class="menu__link">ListarUsuarios</a></li>
             <!--<li class="menu__item"><a href="ListarPagina.php" class="menu__link">ListarPagina</a></li>-->
            <li class="menu__item"><a href="cerrar_sesion.php" class="menu__link">Cerrar Sesion</a></li>
            
          </ul>
        </nav>
      </div>
    </header>
  <body>
   
  
    <div class="banner">
     <img src="img/login.jpg" alt="">
      <div class="contenedor">
        <h2 class="banner__titulo">LUZ RENOVABLE</h2> 
        <p class="banner__txt">El sol provee 1400 veces más energía en un día de la que 
        </br> consumimos en un año </br>
        </br>Vivek Wadhwa</p>
      </div>
    </div>
    
    <main class="main">
      <div class="contenedor">
        <section class="info">
          <article class="info__columna">
            <div class="info__columna__head"><h2>¿Quienes Somos?</h2></div>                    
            <!--<img src="img/sol.jpg" alt="" class="info__img">-->
            
            <p class="info__txt">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum aut, incidunt aperiam dicta totam cumque.</p>
          </article>
          <article class="info__columna">
            <img src="img/postes.jpg" alt="" class="info__img">
            <h2 class="info__titulo">¿Qué Hacemos?</h2>
            <p class="info__txt">Expedita totam, minima praesentium suscipit excepturi ducimus repellat harum ab, inventore neque cum! Nostrum, dicta!</p>
          </article>
          <article class="info__columna">
            <img src="img/paneles.jpg" alt="" class="info__img">
            <h2 class="info__titulo">¿Cómo Trabajamos?</h2>
            <p class="info__txt">Molestiae odit quas officia, dicta, nobis dolorem, quaerat eveniet accusantium excepturi est quidem, ducimus doloremque?</p>
          </article>
        </section>
        <section class="cursos">
          <h2 class="section__titulo">Proyecto de Energías Renovables</h2>
          <div class="cursos__columna">
            <img src="img/cuidado.jpg" alt="" class="cursos__img">
            <div class="cursos__descripcion">
              <h2 class="cursos__titulo">Programación</h2>
              <div class="cursos__txt">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsa, dignissimos.</div>
            </div>
          </div>

          <div class="cursos__columna">
                <img src="img/cuidado.jpg" alt="" class="cursos__img">
                <div class="cursos__descripcion">
                    <h2 class="cursos__titulo">Programación</h2>
                    <div class="cursos__txt">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsa, dignissimos.</div>
                </div>
            </div>

            <div class="cursos__columna">
                <img src="img/cuidado.jpg" alt="" class="cursos__img">
                <div class="cursos__descripcion">
                    <h2 class="cursos__titulo">Programación</h2>
                    <div class="cursos__txt">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsa, dignissimos.</div>
                </div>
            </div>
          
            <div class="cursos__columna">
                <img src="img/cuidado.jpg" alt="" class="cursos__img">
                <div class="cursos__descripcion">
                    <h2 class="cursos__titulo">Programación</h2>
                    <div class="cursos__txt">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsa, dignissimos.</div>
                </div>
            </div>
            
         
        </section>
        
      </div>
    </main>
    <footer class="footer">
      <div class="contenedor">
        <div class="social">
          <a href="#" class="icon-facebook"></a>
          <a href="#" class="icon-twitter"></a>
          <a href="#" class="icon-gplus"></a>
          <a href="#" class="icon-vine"></a>
        </div>
        <p class="copy">&copy; Luz Renovable, Derechos Reservados </p>
      </div>
    </footer>
    <script src="js/menu.js"></script>
  </body>
</html>
