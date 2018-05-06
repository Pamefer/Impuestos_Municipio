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
      <section id="main-content">
          
       <?php include("../resources/template/1formPredial.php");?> 
    
      </section><! --/wrapper -->
      </section><!-- /MAIN CONTENT -->
      <!--footer start-->
      <footer class="site-footer">
          <div class="text-center">
              2016 - Municipio de Loja
              <a href="blank.html#" class="go-top">
                  <i class="fa fa-angle-up"></i>
              </a>
          </div>
      </footer>
      <!--footer end-->
 

    <!-- js placed at the end of the document so the pages load faster -->
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery-ui-1.9.2.custom.min.js"></script>
    <script src="js/jquery.ui.touch-punch.min.js"></script>
    <script class="include" type="text/javascript" src="js/jquery.dcjqaccordion.2.7.js"></script>
    <script src="js/jquery.scrollTo.min.js"></script>
    <script src="js/jquery.nicescroll.js" type="text/javascript"></script>


    <!--common script for all pages-->
    <script src="js/common-scripts.js"></script>


     <!--custom switch-->
  <script src="js/bootstrap-switch.js"></script>
  
  <!--custom tagsinput-->
  <script src="js/jquery.tagsinput.js"></script>
  
  <!--custom checkbox & radio-->
  
  <script type="text/javascript" src="js/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
  <script type="text/javascript" src="js/bootstrap-daterangepicker/date.js"></script>
  <script type="text/javascript" src="js/bootstrap-daterangepicker/daterangepicker.js"></script>
  
  <script type="text/javascript" src="js/bootstrap-inputmask/bootstrap-inputmask.min.js"></script>
  
  
  <script src="js/form-component.js"></script>    
  <script>
      $(function(){
          $('select.styled').customSelect();
      });

  </script> 

  </body>
</html>
