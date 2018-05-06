<?php include("../resources/config.php");?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Consulta de Deudas</title>
	   <link href="css/bootstrap.css" rel="stylesheet">
    <!--external css-->
    <link href="font-awesome/css/font-awesome.css" rel="stylesheet" />
        
    <!-- Custom styles for this template -->
    <link href="css/style.css" rel="stylesheet">
    <link href="css/style-responsive.css" rel="stylesheet">

<!---->
	<link href="css/login-register.css" rel="stylesheet" />
	<link rel="stylesheet" href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
	
	<script src="js/jquery-1.10.2.js" type="text/javascript"></script>
	<script src="js/bootstrap.js" type="text/javascript"></script>
	<script src="js/login-register.js" type="text/javascript"></script>
<!---->


</head>
<body>
<header class="he1">
	<section class="izq">
		<img class="logo" src="img/escudo.png" alt="Imagen con el escudo de la ciudad de Loja" longdesc="consultaIndex.html">
		<div class="slogan">
			<h2 class="frase">Municipio de Loja </h2>
			<a class="sub" href="">Trabajando Contigo...</a>
		</div>
	</section>
	<section class="der">
		<li><a data-toggle="modal" href="javascript:void(0)" onclick="openLoginModal();">LOGIN</a></li>
		 <?php include("../resources/template/login.php");?>  
	</section>	 
</header>

	<main class="consulta">
		<h3 align="center"><strong>Consulta de Deudas</strong></h3>
		<section class="cuadroizq">
			<?php 
				include("../resources/template/buscadorUser.php");
			?>  
		</section>
		<section class="cuadroder">
		<?php include("../resources/template/resultadosUser.php");
		 ?>
		</section>
	</main>
	<footer class="home">
		<p>Derechos Reservados por XXX</p>
	</footer>
</body>
</html>