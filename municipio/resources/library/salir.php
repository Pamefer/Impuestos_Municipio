<?php 
	session_start();
	session_destroy();
	session_unset($_SESSION['nombre']);
	$_SESSION['nombre']=NULL;
	echo '<script>alert("Salida Exitosa...")</script>';
	echo "<script>location.href='../../public_html'</script>";
	exit();	
 ?>