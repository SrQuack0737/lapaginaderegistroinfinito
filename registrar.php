<?php
include("conexion.php");

$nombre = $_POST['nombre'];
$correo = $_POST['correo'];
$password = $_POST['password'];

$insertar = "INSERT INTO usuarios(nombre, correo, password) VALUES('$nombre', '$correo', '$password')";

$query = mysqli_query($conexion, $insertar);

if($query){
    echo "<h3> Registro Exitoso </h3>";
    echo "<a href='index.html'>Volver</a>";
}else{
    echo "<h3>Error al registrar</h3>";
}
?>
