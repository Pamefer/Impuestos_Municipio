<?php 
	extract($_POST);
	include("../config.php");
	$res=$miconexion->consulta("select * from usuarios where cedula='$ced'");
	$lista=$miconexion->verconsulta_lista();
	if ($lista[0]!=NULL){
		$ides=$lista[0];
		$placa=$lista[7];
	}
	if ($placa=='') {
		echo " <script language='JavaScript'>  alert('Este usuario no tiene un vehiculo registrado');  </script>";
	}else{
		$miconexion->consulta("insert into servicios_usuarios values('','2','$ides','1','PENDIENTE','$fec','','')");
		$res1=$miconexion->consulta("select * from servicios where id_servicio='2'");
		$lista1=$miconexion->verconsulta_lista();
		if ($lista1[0]!=NULL){
			$valor=$lista1[3];
		}
		$pago=1*$valor;
	
		$res2=$miconexion->consulta("SELECT MAX(id_ser_usuar) FROM servicios_usuarios");
		$lista2=$miconexion->verconsulta_lista();
		if ($lista2[0]!=NULL){
			$id=$lista2[0];
		}

		$miconexion->consulta("UPDATE servicios_usuarios SET valorpagar='$pago' WHERE id_ser_usuar='$id'");
		echo " <script language='JavaScript'>  alert('Registrado Correctamente');  </script>";
		echo "<script>location.href='$url_site/public_html/admin.php'</script>";	
	}
	
?>
