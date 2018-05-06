<?php 
	extract($_POST);
	include("../config.php");
	$clave=md5($pass);
	$sql=$miconexion->consulta("select * from cuentas where usuario='$user' and contrasenia='$clave'"); 	
 
	$lista=$miconexion->verconsulta_lista();

	if ($lista[0]!=NULL){
		session_start();
		$_SESSION['id']=$lista[0];
		$_SESSION['nombre']=$lista[1];
		$_SESSION['rol']=$lista[3];
		echo '<script>alert("Bienvenido ".$_SESSION[nombre]."")</script>';
		echo "<script>location.href='$url_site/public_html/admin.php'</script>";	
	}else{
		echo '<script>alert("Datos incorrectos")</script>';
		echo "<script>location.href='$url_site/public_html/'</script>";		
	}
?>