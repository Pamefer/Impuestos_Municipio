<?php include("../resources/config.php");?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="Dashboard">
  <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">

  <title>MUNICIPIO</title>

  <!-- Bootstrap core CSS -->
  <link href="css/bootstrap.css" rel="stylesheet">
  <!--external css-->
  <link href="font-awesome/css/font-awesome.css" rel="stylesheet" />

  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet">
  <link href="css/style-responsive.css" rel="stylesheet">



  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
  <link href="http://netdna.bootstrapcdn.com/twitter-bootstrap/2.2.2/css/bootstrap-combined.min.css" rel="stylesheet">

  <script src="http://code.jquery.com/jquery-1.8.3.js" type="text/javascript"></script>
  <link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.12/css/jquery.dataTables.css">
  <script type="text/javascript" charset="utf8" src="//cdn.datatables.net/1.10.12/js/jquery.dataTables.js"></script>
  <link rel="stylesheet" type="text/css" media="screen"href="http://tarruda.github.com/bootstrap-datetimepicker/assets/css/bootstrap-datetimepicker.min.css">

</head>

<body>
<section id="container" >
  <!--header start-->
  <?php include("../resources/template/header.php");?>  
  <!--header end-->
  <!--sidebar start-->
  <?php include("../resources/template/sidebar1.php");?> 
  <!--sidebar end-->
  <!--main content start-->
  <section  id="main-content">

    <section  class="wrapper site-min-height">
      <h3><em class="fa fa-angle-right"></em> Lista de Usuarios</h3>

      <section id="po">
       <div id="contain" class="row mt">
        <div class="col-lg-12">
          <div class="row"> 

           <?php 
             $miconexion->consulta("SELECT id_usuario,nombres,apellidos,cedula from usuarios");
             $miconexion->ver_deudas_usuarios();
             //include("../resources/template/menuServicios.php");
           ?> 

         </div>       
       </div>
     </div> 
   </section>

 </section>   
 </section><!-- /MAIN CONTENT -->

 <!--main content end-->
 <!--footer start-->
 <footer class="site-footer">
  <div class="text-center">
    2016 - Municipio de Loja
    <a href="blank.html#" class="go-top">
      <em class="fa fa-angle-up"></em>
    </a>
  </div>
</footer>
<!--footer end-->
</section>

    <!-- js placed at the end of the document so the pages load faster 
      ESTE SCRIPT ES EL QUE NO DEJABA CREAR EL DATATABLE!!!!!!!!!!!!!!
      ->
      <script src="js/jquery.js"></script>
    -->

<script type="text/javascript">
  $(document).ready( function () {
    $('#ver_usuarios').DataTable();
  } );
</script>


<script type="text/javascript" src="js/bootstrap.min.js"></script>

<script type="text/javascript" src="js/jquery-ui-1.9.2.custom.min.js"></script>
<script type="text/javascript" src="js/jquery.ui.touch-punch.min.js"></script>
<script type="text/javascript" class="include" src="js/jquery.dcjqaccordion.2.7.js"></script>
<script type="text/javascript" src="js/jquery.scrollTo.min.js"></script>
<script type="text/javascript" src="js/jquery.nicescroll.js"></script>


<!--common script for all pages-->
<script type="text/javascript" src="js/common-scripts.js"></script>


<!--custom switch-->
<script type="text/javascript" src="js/bootstrap-switch.js"></script>

<!--custom tagsinput-->
<script type="text/javascript" src="js/jquery.tagsinput.js"></script>

<!--custom checkbox & radio-->

<script type="text/javascript" src="js/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
<script type="text/javascript" src="js/bootstrap-daterangepicker/date.js"></script>
<script type="text/javascript" src="js/bootstrap-daterangepicker/daterangepicker.js"></script>

<script type="text/javascript" src="js/bootstrap-inputmask/bootstrap-inputmask.min.js"></script>


<script type="text/javascript" src="js/form-component.js"></script>   

<script type="text/javascript">
  $(function(){
    $('select.styled').customSelect();
  });

</script>
  </body>  
  </html>