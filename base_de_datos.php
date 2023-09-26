<?php
$contraseña = ""; 
$usuario = ""; 
$nombreBaseDeDatos = ""; 

$rutaServidor = ""; 
$puerto = ""; 

try {
    $base_de_datos = new PDO("pgsql:host=$rutaServidor;port=$puerto;dbname=$nombreBaseDeDatos", $usuario, $contraseña);
    $base_de_datos->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (Exception){
    echo"Ocurrio un error con la base de datos:".$e->getMessage();
}
?>
