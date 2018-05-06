<?php 
	//class_mysql.php
	if (!class_exists('DB_mysql')){

		class DB_mysql{
			/*Variables de conexion*/
			var $BaseDatos;
			var $Servidor;	
			var $Usuario;	
			var $Clave;	

			/*Variables identificacion de errores y textos de error*/
			var $Errno =0;
			var $Error = "";

			/*Identificacion de conexion y consulta*/
			var $Conexion_ID=0;	
			var $Consulta_ID=0;	

			function DB_mysql($db="", $host="", $user="", $pass=""){
				$this->BaseDatos=$db;
				$this->Servidor=$host;
				$this->Usuario=$user;
				$this->Clave=$pass;
			}

			/*Conexion a la base de datos*/
			function conectar($db,$host,$user,$pass){
				if ($db!="")$this->BaseDatos=$db;
				if ($host!="")$this->Servidor=$host;
				if ($user!="")$this->Usuario=$user;
				if ($pass!="")$this->Clave=$pass;

				/*Conexion al servidor*/
				$this->Conexion_ID=@mysql_connect($this->Servidor,$this->Usuario,$this->Clave);
				if (!$this->Conexion_ID) {
					$this->Error="Ha fallado la conexion";
					return 0;
				}

				/*Conexion a la base de datos*/
				if (!mysql_select_db($this->BaseDatos, $this->Conexion_ID)){
					$this->Error="Imposible abrir la base de datos";
					return 0;
				}

				return $this->Conexion_ID;
			}

			function consulta ($sql=""){
				if ($sql=="") {
					$this->Error="No hay ninguna consulta SQL";
					return 0;				
				}
				
				$this->Consulta_ID=mysql_query($sql,$this->Conexion_ID);
				if (!$this->Consulta_ID) {
					$this->Errno=mysql_errno();
					$this->Errno=mysql_error();
				}
				return $this->Consulta_ID;
			}
			/*Devuelve el numero de campos de la consulta*/
			function numcampos(){
				return mysql_num_fields($this->Consulta_ID);
			}

			/*Devuelve el numero de registros de la consulta*/
			function numregistros(){
				return mysql_num_rows($this->Consulta_ID);
			}

			/*Devuelve el nombre de campos de la consulta*/
			function nombrecampo($numcampos){			
				return mysql_field_name($this->Consulta_ID,$numcampos);
			}
			/*Mostrar la consulta en una tabla*/
			function verconsulta_lista(){
				while ( $row=mysql_fetch_row($this->Consulta_ID)) {
					for ($i=0; $i < $this->numcampos(); $i++) { 
						$row[$i];
					}
				return $row;
				}
			}
			function verconsulta(){
				echo "<table border=1>";
				echo "<tr>";
				for ($i=0; $i < $this->numcampos(); $i++) { 
					echo "<td> <strong>". $this->nombrecampo($i)."</strong></td>";
				}
				echo "</tr>";
				while ( $row = mysql_fetch_array($this->Consulta_ID)) {
					echo "<tr>";
						for ($i=0; $i < $this->numcampos(); $i++) { 
							 echo "<td>".$row[$i]."</td>";
						}
					echo "</tr>";
				}
				echo "</table>";
			}




			function numero_registros($sql){
				return mysql_num_rows($sql);
			}


			function admin_ver_impuesto(){
				$row = mysql_fetch_array($this->Consulta_ID);
				return $row[0];					
			}

			function admin_ver_impuesto2(){
				$row = mysql_fetch_array($this->Consulta_ID);
				return $row;					
			}


			function vervariablefotomulta(){
				while ( $row = mysql_fetch_array($this->Consulta_ID)) {
					echo "<label> Rango ".$row[1]." - ".$row[2]." : </label>";
					echo "<input class='form-control' type='text' name=f".$row[0]." value=".$row[3]." required placeholder='Valor segun rango' ><br><br>";	
				}
			}

			function presentar_deudas_encabezado(){
				//$codigo="";
				echo "<table class='table table-hover' id='dev-table'>";
				echo "<thead>";
				echo "<tr>";
				for ($i=0; $i < $this->numcampos(); $i++) { 
					echo "<th>". strtoupper($this->nombrecampo($i))."</th>";
					//SACAR DATOS PARA CODIGO QR
				}
				//echo $codigo;
				echo "</tr>";
				echo "</thead>";
				echo "<tbody>";
				//return $codigo;
			}

			function presentar_fotomulta_deuda(){
				$codigo="";
				while ( $row = mysql_fetch_array($this->Consulta_ID)) {
					echo "<tr>";
						echo "<td class='hover'>FOTOMULTA</td>";
						$codigo=$codigo."FOTOMULTA";
						for ($i=0; $i < $this->numcampos(); $i++) { 
							 echo "<td class='hover'>".$row[$i]."</td>";	
							 $codigo=$codigo."  ".$row[$i];		
						}	
						$codigo=$codigo."  ========";					
					echo "</tr>";
				}
				return $codigo;
			}

			function presentar_servicios_deuda(){
				$codigo="";
				while ( $row = mysql_fetch_array($this->Consulta_ID)) {
					echo "<tr>";
						for ($i=0; $i < $this->numcampos(); $i++) { 
							 echo "<td class='hover'>".$row[$i]."</td>";	
							 $codigo=$codigo."  ".$row[$i];		
						}				
						$codigo=$codigo."  ========";		
					echo "</tr>";
				}			
				return $codigo;
			}

			function ver_deudas_usuarios(){
				echo "<table  id='ver_usuarios' class='table-responsive display' cellspacing='0' width='100%'>";
				echo "<thead><tr>";
				for ($i=1; $i < $this->numcampos(); $i++) { //1 Para que me oculte id de persona
					echo "<th> <strong>". strtoupper($this->nombrecampo($i))."</strong></th>";
				}
				echo "<th> <strong> OPERACION</strong></th>";
				echo "</tr></thead><tbody>";
				while ( $row = mysql_fetch_array($this->Consulta_ID)) {
					echo "<tr>";
						for ($i=1; $i < $this->numcampos(); $i++) { //1 Para que me oculte id de persona
							 echo "<td>".$row[$i]."</td>";
						}
						//AQUI TOCA MODIFICAR LOS ENVIOS de ACTUALIZAR
					echo "<td> 	<a href=persona_lista_deudas.php?id=".$row[0]."&cedula=".$row[3]."&nombres=".$row[1]."-".$row[2]."><img title=Ver-deudas src=img/pencil.png width=25></a>
						   	<a href=persona_lista_reportes.php?id=".$row[0]."&cedula=".$row[3]."&nombres=".$row[1]."-".$row[2]."><img title=Reportes src=img/us.png width=25></a>

					</td>";
					echo "</tr>";				
				}
				echo "</tbody></table>";
		}

		function lista_deudas_encabezado_secretaria(){
				echo "<table  id='ver_usuarios'  class='table-responsive display' cellspacing='0' width='100%'>";
				echo "<thead><tr>";
				for ($i=0; $i < $this->numcampos(); $i++) { 
					echo "<th> <strong>". strtoupper($this->nombrecampo($i))."</strong></th>";
				}
				echo "</tr></thead><tbody>";
			}
		function lista_encabezado_pagos(){
				echo "<table  id='ver_usuarios'  class='table-responsive display' cellspacing='0' width='100%'>";
				echo "<thead><tr>";
				for ($i=0; $i < 4; $i++) { 
					echo "<th> <strong>". strtoupper($this->nombrecampo($i))."</strong></th>";
				}
				echo "</tr></thead><tbody>";
			}	

		function lista_fotomulta_deuda_secretaria(){
				$codigo="";
				while ( $row = mysql_fetch_array($this->Consulta_ID)) {
					echo "<tr>";
					echo "<td>FOTOMULTA</td>";
					$codigo=$codigo."Fotomulta";
					for ($i=0; $i < $this->numcampos()-1; $i++) { 
							echo "<td>".$row[$i]."</td>";	
							$codigo=$codigo."  ".$row[$i];		
					}	
					echo "<td> 	<a href=../resources/library/secre_pagar_servicio.php?id=".$row[3]."&serv=2><img title=Pagar src=img/cross.png width=25></a></td>";
						$codigo=$codigo."  ========";					
					echo "</tr>";
				}
				return $codigo;
			}

			function lista_servicios_deuda_secretaria(){
				$codigo="";
				while ( $row = mysql_fetch_array($this->Consulta_ID)) {
					echo "<tr>";
						for ($i=0; $i < $this->numcampos()-1; $i++) { 
							 echo "<td>".$row[$i]."</td>";
							 $codigo=$codigo."  ".$row[$i];		
						}				
					echo "<td> 	<a href=../resources/library/secre_pagar_servicio.php?id=".$row[4]."&serv=1><img title=Pagar src=img/cross.png width=25></a></td>";
						$codigo=$codigo."  ========";		
					echo "</tr>";
				}			
				return $codigo;
			}

			function lista_servicios_pagos(){
				$codigo="";
				while ( $row = mysql_fetch_array($this->Consulta_ID)) {
					echo "<tr>";
						for ($i=0; $i < $this->numcampos()-1; $i++) { 
							 echo "<td>".$row[$i]."</td>";
							 $codigo=$codigo."  ".$row[$i];		
						}				
				
				}			
				return $codigo;
			}

			function lista_fotomulta_pagos(){
				$codigo="";
				while ( $row = mysql_fetch_array($this->Consulta_ID)) {
					echo "<tr>";
					echo "<td>FOTOMULTA</td>";
					$codigo=$codigo."Fotomulta";
					for ($i=0; $i < $this->numcampos()-1; $i++) { 
							echo "<td>".$row[$i]."</td>";	
							$codigo=$codigo."  ".$row[$i];		
					}	
				}
				return $codigo;
			}

				function verconsulta_rol(){
				while ( $row = mysql_fetch_array($this->Consulta_ID)) {
				echo "<option value= '".$row[0]."'>";
					for ($i=1; $i < $this->numcampos(); $i++) { 
						 echo " ".$row[$i];
					}
				echo "</option>";
			}
		}
		}
	}	
 ?>