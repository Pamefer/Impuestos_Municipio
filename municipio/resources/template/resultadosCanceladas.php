<div class="panel panel-default">
			  <!-- Default panel contents -->
			  <div class="panel-heading"><h4>Resultados</h4></div>
			  
				<?php 		
						$miconexion->consulta("SELECT id_usuario, nombres, apellidos from usuarios where cedula='$_GET[cedula]'");
						$id_usuario=$miconexion->admin_ver_impuesto2();
						#$id_usuario2=$miconexion->admin_ver_impuesto2();
				
						//PARA SABER SI EXISTE EL USUARIO CON ESE NUMERO DE CEDULA
						if ($id_usuario==''){
							echo "<h4>El numero de cédula no se encuentra registrado</h4>";
						}else{
							//echo "ID de usuario ".$id_usuario;
							echo "<div class='panel-body'>
								    <p>Detalle de deudas canceladas de <strong>".$id_usuario[1]." ".$id_usuario[2]."</strong> con la cédula <b>".$_GET['cedula']. ":</p>
								  	
								  </div>";						

							//PARA SERVICIOS:
							$miconexion->consulta("SELECT t_s.servicio as DEUDA, s_u.fecha, CONCAT ('$', s_u.valorpagar) as Valor, CONCAT ('Consumo= ', s_u.consumo) as Detalle  FROM servicios_usuarios as s_u  
								INNER JOIN servicios as ser ON s_u.id_servicio=ser.id_servicio 
								INNER JOIN tipo_servicio as t_s ON ser.id_tipo_servicio= t_s.id_servicio
								WHERE id_usuario='$id_usuario[0]' and estado='PAGADO'
								order by fecha");
							
							//ENCABEZADO PARA TABLA:
							$miconexion->presentar_deudas_encabezado();

							$sin_deudas=$miconexion->presentar_servicios_deuda();
							$vacio=0;
							//La variable datos recupera valores para graficarlos en el QR
							$datos=$id_usuario[1]." ".$id_usuario[2]." ".$sin_deudas;
							
							if ($sin_deudas=='') {
							 	$vacio+=1;
							 } 

							//PARA FOTOMULTAS:							  
							$miconexion->consulta("SELECT CONCAT (fecha, ' ', hora) as fecha,  CONCAT ('$', valorpagar) as Valor, CONCAT ('Velocidad= ', velocidad, ' Lugar=', lugar) as Detalle  FROM fotomultas_usuarios WHERE USUARIOS_id_usuario='$id_usuario[0]' and estado='PAGADO' order by fecha");
							
							$sin_deudas=$miconexion->presentar_fotomulta_deuda();
							$datos=$datos.$sin_deudas;

							//echo $datos;
							if ($miconexion->presentar_fotomulta_deuda()==0) {
							 	$vacio+=1;
							 } 							
							//PARA CERRAR TABLA HECHA EN CLASS_MYSQL.php
							echo " </tbody>
									</table>";	

							if ($vacio==2) {
								echo "<h4>Señor Usuario, usted no posee deudas por pagar.</h4>";
							}else{
								//este recibe la variable datos para graficarlos!!!!!!!
								include ("generador_qr.php");
							}					
						}					
				?>			  
			</div>
			<br><br><br><br>