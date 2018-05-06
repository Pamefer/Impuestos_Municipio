<?php 
	extract($_POST);
	include("../config.php");

	$miconexion->consulta("UPDATE servicios SET valor='$valor' WHERE id_tipo_servicio=1");
	
	echo '<script>alert("Actualizado")</script>';	
	echo "<script>location.href='$url_site/public_html/menuServicios.php'</script>";
 ?>