<?php 
	extract($_POST);	
	include("../config.php");
			
	//echo "ID= ".$_GET["id"];	
	//echo "ID= ".$_GET["serv"];
	if ($_GET["serv"]==1) {
		//echo "TABLA SERVICIOS USUARIOS";
		$miconexion->consulta("UPDATE servicios_usuarios SET estado='PAGADO' WHERE id_ser_usuar=$_GET[id]");
	}elseif ($_GET["serv"]==2) {
		//echo "TABLA FOTOMULTAS";
		$miconexion->consulta("UPDATE fotomultas_usuarios SET estado='PAGADO' WHERE id_foto_usuar=$_GET[id]");
	}
	
	echo '<script>alert("Deuda Cancelada")</script>';	
	echo "<script>location.href='$url_site/public_html/personas_deudas.php'</script>";	
 ?>