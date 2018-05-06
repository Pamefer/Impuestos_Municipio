<aside class="registro">
	<h3>Registro a la APP</h3>

	<form action="<?php echo $url_site; ?>resources/library/guardar_registro.php" method="post">
	  <br><input type="text" name="cedula" value="" required placeholder="Cedula"><br>

	  <br><input type="text" name="nombre" value="" required placeholder="Nombre"><br>

	  <br><input type="text" name="apellido" value="" required placeholder="Apellido"><br>

	  <br><input type="text" name="usuario" value="" required placeholder="Usuario"><br>

	  <br><input type="password" name="pass" value="" required placeholder="Contraseña" ><br>
	<!--TIPO DE ROL 1=ADMINISTRADOR; 2=PACIENTE  -->
	  <br><input type="hidden" name="rol" value="2" required placeholder="Rol" >

	  <input class="btn btn-warning" type="submit" value="Registrar">
	</form>
</aside>