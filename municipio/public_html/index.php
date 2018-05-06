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
<body class="home">
<header class="he1">
	<section class="izq">
		<img class="logo" src="img/escudo.png" alt="Ciudad de Loja">
		<div class="slogan">
			
			<h3 class="frase">Municipio de Loja </h3>
			<h4 class="sub" href="">Trabajando Contigo...</h4>
		</div>
	

	</section>
	<section class="der">
		<li><a href="#"  data-toggle="modal" href="javascript:void(0)" onclick="openLoginModal();"><strong>LOGIN</strong></a></li>
	</section>
		 <?php include("../resources/template/login.php");?>  
</header>
	<main class="home">
		<section>
	      <div class="container">
	<div class="buscador1">
	<div class="row">
        <div class="col-md-12">
            <div id="custom-search-input">
                <form action="<?php echo $url_site;?>public_html/consultaIndex.php" >
                <div class="input-group col-md-6">
                <label for="cedulaa" required></label>
                    <input name= "cedula" id="cedulaa" type="text" class="form-control input-lg" placeholder="Ingresa tu cédula" required/>
                    <span class="input-group-btn">
                        <button class="btn btn-info btn-lg" type="submit">
                            <em class="glyphicon glyphicon-search"></em>
                        </button>
                    </span>
                </div>
                </form>                  
            </div>
        </div>
	</div>
</div>
</div>
</section>
	  
	</main>
	<footer class="home">
		<h5>Derechos Reservados por XXX</h5>
	</footer>
</body>
</html>