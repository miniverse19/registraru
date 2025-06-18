<?php
error_reporting(0);
$conexion = mysqli_connect("localhost","1373629","youtube","1373629");

if(!$conexion){
    exit("Error al intentar conectarse al servidor MySQL.");
}

$nombre = $_POST["nombre"];
$telefono = $_POST["telefono"];
$email = $_POST["email"];
$mayor_de_edad = ["mayor_de_edad"];

if (empty($email)) {
    exit("Fallo en el registro, para poder registrarte debes introducir tu direccio de email.");
}

$consulta = "insert into usuarios (nombre, telefono, email, mayor_de_edad) values ('$nombre', '$telefono', '$email', '$mayor_de_edad')";
$resultado = mtsqli_query($conexion,$consulta);

$num = mysqli_affected_rows($conexion);
if ($num>0) {
    echo "Su registro se ha completado. Gracias!";
}
else{
    echo "Error! su registro no se ha podido completar.";
}
mysqli_close($conexion);
?>