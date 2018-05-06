<?php 
extract($_POST);
include("../config.php");
$res=$miconexion->consulta("SELECT MAX(id_usuario) FROM usuarios");
	$lista=$miconexion->verconsulta_lista();
	if ($lista[0]!=NULL){
		$ides=$lista[0];
	}

	$clave=md5($pass);
$res1=$miconexion->consulta("INSERT INTO cuentas VALUES('', '$user', '$clave', '$rol', '$ides')");

echo '<script>alert("Cuenta Registrada")</script>';
echo "<script>location.href='$url_site/public_html/admin.php'</script>";


 ?>