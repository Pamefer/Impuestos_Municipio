<?php 
	extract($_POST);
	include("../config.php");

	$miconexion->consulta("UPDATE fotomultas SET valor='$f1' WHERE id_fotomulta=1");
	$miconexion->consulta("UPDATE fotomultas SET valor='$f2' WHERE id_fotomulta=2");
	
	echo '<script>alert("Actualizado")</script>';	
	echo "<script>location.href='$url_site/public_html/menuServicios.php'</script>";
 ?>