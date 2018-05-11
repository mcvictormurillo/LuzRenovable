<?php
session_start();
$_SESSION['usuario']= 'Admin';
header("Location:inicio.php");

?>