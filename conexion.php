<?php
$servidor = "sql204.infinityfree.com"; // tu servidor real (te aparece en MySQL Databases)
$usuario = "if0_40479109"; // TU usuario real
$clave = "bQXr48TPG8G"; // la contrasenia que te dio InfinityFree
$baseDeDatos = "if0_40479109_registro"; // el nombre exacto de tu BD

$conexion = mysqli_connect($servidor, $usuario, $clave, $baseDeDatos);

if (!$conexion) {
    die("Error al conectar: " . mysqli_connect_error());
}
?>
