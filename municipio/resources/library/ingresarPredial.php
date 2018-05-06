<?php 
	extract($_POST);
	include("../config.php");
	// Validamos si el numero de cedula ingresado esta registrado en el sistema
	$miconexion->consulta("select * from usuarios where cedula='$ced'");
	$lista=$miconexion->verconsulta_lista();
	if (!$lista) {
		// Si el usuario no se encuentra mostrara un alert y redireccionando a la misma pagina de registro
		echo " <script language='JavaScript'>  alert('Usuario No registrado. Registrese para ingresar.');  </script>";
		echo "<script>location.href='$url_site/public_html/ingresarImpPredial.php'</script>";	
	}else{
		// Insertamos los valores ingresados por el usuario
		$miconexion->consulta("insert into servicios_usuarios values('','1','$lista[0]','1','PENDIENTE','$fecha','$direccion','')");
		// Hacemos un select para sacar el valor del servicio a pagar
		$miconexion->consulta("select * from servicios where id_servicio='1'");
		$impPredial=$miconexion->verconsulta_lista();
		// Multiplicamos el numero de metros del terreno por el valor del servicio
		$pago=$metros*$impPredial[3];
		// Hacemos un select para sacar la ultima fila ingresada en la tabla servicios_usuarios
		$miconexion->consulta("SELECT MAX(id_ser_usuar) FROM servicios_usuarios");
		$lista2=$miconexion->verconsulta_lista();
		if ($lista2[0]!=NULL){
			$id=$lista2[0];
		}
		// Actualizamos el valor del pago y redireccionamos a la pagina principal
		$miconexion->consulta("UPDATE servicios_usuarios SET valorpagar='$pago' WHERE id_ser_usuar='$id'");
		echo " <script language='JavaScript'>  alert('Se registro correctamente'); </script>";
		echo "<script>location.href='$url_site/public_html/admin.php'</script>";
	}
	
?>
