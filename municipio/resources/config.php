<?php 
	include("library/class_mysql.php");
	$url_site= "http://127.0.0.1/web_municipio/municipio/";
	$url_path="C:/xampp/htdocs/municipio/resources";
	$site_name="Municipio de Loja";

	/*DATOS DE LA BASE DE DATOS*/
	$db_host="127.0.0.1";
	$db_user="root";
	$db_pass="";
	$db_data="deudas_municipio";

	$miconexion = new DB_mysql;
	$miconexion->conectar($db_data,$db_host,$db_user,$db_pass);
 ?>
