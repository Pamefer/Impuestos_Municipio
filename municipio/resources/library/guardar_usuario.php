<?php 
extract($_POST);
include("../config.php");
$clave=md5($pass);
$res1=$miconexion->consulta("INSERT INTO cuentas VALUES('', '$user', '$clave', '$rol', '$ced')");

echo '<script>alert("Cuenta Registrada")</script>';
echo "<script>location.href='$url_site/public_html/admin.php'</script>";


 ?>