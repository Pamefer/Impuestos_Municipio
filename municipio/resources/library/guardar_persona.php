<?php 
extract($_POST);
include("../config.php");
/*Cambie insert */
$res=$miconexion->consulta("INSERT INTO usuarios (nombres, apellidos, cedula, correo, direccion, telefono, placa) VALUES('$nombres', '$apellidos', '$cedula', '$correo', '$direccion', '$telefono', '$placa')");

echo '<script>alert("Usuario Registrado")</script>';
echo "<script>location.href='$url_site/public_html/servicios.php'</script>";


 ?>