<?php

function conectar() {
    $conexion = new mysqli('localhost','root','', 'thl');
    if (mysqli_connect_errno($conexion)) {
        echo "Fallo al conectar a MySQL: " . mysqli_connect_error();
    }
    $conexion->character_set_name();
    if (!$conexion->set_charset('utf8')) {
        echo nl2br("\nError cargando el conjunto de caracteres utf8: %s\n", $conexion->error);
        exit;
    }
    return $conexion;
}
/*
create table usuarios(
	nombre Varchar(50),
    apellidos Varchar(50),
    id Varchar(15),
    pass Varchar(20),
    email Varchar(50),
    telefono int,
    edad int,
    direccion Varchar(50),
    pais Varchar(50),
    estrato int,
    servicio int,
    estado int,
    PRIMARY KEY (id)
)
*/
?>