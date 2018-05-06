<?php 
	extract($_POST);
	include("../config.php");
	$miconexion->consulta("SELECT MAX(id_usuario) FROM usuarios");
	// Validamos si el numero de cedula ingresado esta registrado en el sistema
	//$miconexion->consulta("select * from usuarios where cedula='$ced'");
	$lista=$miconexion->verconsulta_lista();

	if (!$lista) {
		// Si el usuario no se encuentra mostrara un alert y redireccionando a la misma pagina de registro
		echo " <script language='JavaScript'>  alert('Usuario No registrado. Registrese para ingresar.');  </script>";
		echo "<script>location.href='$url_site/public_html/ingresarFotoMulta.php'</script>";	
	}else{
		// hacemos una consulta a la tabla fotomultas para sacar los rangos de valores de velocidad
		$fotomulta = $miconexion->consulta("select * from fotomultas");
		while ($fotomultas = mysql_fetch_row($fotomulta)) {
			// Si el rango de velocidad esta entre los permitidos insertara los datos en la base
			if (($velocidad >= $fotomultas[1]) and ($velocidad <= $fotomultas[2])){
				$miconexion->consulta("insert into fotomultas_usuarios values('', '$fotomultas[0]', '$lista[0]', '$fecha', '$hora', '$direccion', '$velocidad', '$fotomultas[3]', 'PENDIENTE')");
			}
		}
		echo " <script language='JavaScript'>  alert('Se registro correctamente'); </script>";
		echo "<script>location.href='$url_site/public_html/servicios.php'</script>";
	}
	
?>
