<?php
$servidor = "sql111.infinityfree.com";  
$usuario = "if0_39045396";      
$contrasena = "ZkImbCNY11";   
$base_de_datos = "if0_39045396_memes";        

// Establece la conexión
$conexion = new mysqli($servidor, $usuario, $contrasena, $base_de_datos);

// Verifica si la conexión fue exitosa
if ($conexion->connect_error) {
    die("Error de conexión: " . $conexion->connect_error);
}
?>
