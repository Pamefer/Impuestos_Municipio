<?php include("../resources/config.php");?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Dashboard">
    <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
    <!--AQUIII-->
    <link rel="stylesheet" type="text/css" href="css/zabuto_calendar.css">
       <link rel="stylesheet" type="text/css" href="js/gritter/css/jquery.gritter.css" />
    <link rel="stylesheet" type="text/css" href="lineicons/style.css"> 

    <title>Area del Administrador</title>

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
      <?php include("../resources/template/header.php");?>  
      <?php include("../resources/template/sidebar1.php");?> 
      <section id="main-content">
        <section class="wrapper">
          <div class="row">
            <div class="col-lg-9 main-chart">
                <?php
                  echo "<h2>Bienvenido ".$_SESSION['nombre']."</h2>";
                ?> 
                <div class="row mtbox">
                    <div class="col-md-2 col-sm-2 col-md-offset-1 box0">
                        <div class="box1">
                            <span class="li_heart"></span>
                            <h3>933</h3>
                        </div>
                        <p>933 People liked your page the last 24hs. Whoohoo!</p>
                    </div>
                    <div class="col-md-2 col-sm-2 box0">
                        <div class="box1">
                        <span class="li_cloud"></span>
                        <h3>+48</h3>
                    </div>
                    <p>48 New files were added in your cloud storage.</p>
                </div>
                <div class="col-md-2 col-sm-2 box0">
                    <div class="box1">
                      <span class="li_stack"></span>
                      <h3>23</h3>
                    </div>
                  <p>You have 23 unread messages in your inbox.</p>
                </div>
                <div class="col-md-2 col-sm-2 box0">
                    <div class="box1">
                        <span class="li_news"></span>
                        <h3>+10</h3>
                    </div>
                    <p>More than 10 news were added in your reader.</p>
                 </div>
                      <div class="col-md-2 col-sm-2 box0">
                        <div class="box1">
                  <span class="li_data"></span>
                  <h3>OK!</h3>
                        </div>
                  <p>Your server is working perfectly. Relax & enjoy.</p>
                      </div>
                    
                    </div><!-- /row mt -->  
        
          <div class="row">
            <!-- TWITTER PANEL -->
            

            
          </div><!-- /row -->
     
          
                  </div><!-- /col-lg-9 END SECTION MIDDLE -->
                  
                  <div class="col-lg-3 ds">
                  <section id="asadmin">
                     <!--COMPLETED ACTIONS DONUTS CHART-->
            <h3>NOTIFICACIONES</h3>
                                        
                      <!-- First Action -->
                      <div class="desc">
                        <div class="thumb">
                          <span class="badge bg-theme"><strong class="fa fa-clock-o"></strong></span>
                        </div>
                        <div class="details">
                          <p><muted>2 Minutos atrás</muted><br/>
                             <p>Se encuentraba online el Administrador<br/></p>
                          </p>
                        </div>
                      </div>
                      <!-- Second Action -->
                      <div class="desc">
                        <div class="thumb">
                          <span class="badge bg-theme"><strong class="fa fa-clock-o"></strong></span>
                        </div>
                        <div class="details">
                          <p><muted>En linea</muted><br/>
                             <p>Por otro lado tambien esta la Secretaria<br/></p>
                          </p>
                        </div>
                      </div>
                    
             
                       <!-- USERS ONLINE SECTION -->
            <h3>CALENDARIO</h3>
                     

                        <!-- CALENDAR-->
                        <div id="calendar" class="mb">
                            <div class="panel green-panel no-margin">
                                <div class="panel-body">
                                    <div id="date-popover" class="popover top" style="cursor: pointer; disadding: block; margin-left: 33%; margin-top: -50px; width: 175px;">
                                        <div class="arrow"></div>
                                        <h3 class="popover-title" style="disadding: none;"></h3>
                                        <div id="date-popover-content" class="popover-content"></div>
                                    </div>
                                    <div id="my-calendar"></div>
                                </div>
                            </div>
                        </div><!-- / calendar -->
                      
           
                  </section>
                  </div><!-- /col-lg-3 -->
                   
              </div><! --/row -->
          </section>

      </section><!-- /MAIN CONTENT -->


      <!--main content end-->
      <!--footer start-->
      <footer class="site-footer">
          <div class="text-center">
             <p> 2016 - Municipio de Loja
              </p>
          </div>
      </footer>
      <!--footer end-->
          </section>

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
  <script src="js/zabuto_calendar.js"></script>  
  




  <script>
       $(function(){
          $('select.styled').customSelect();
      });

  </script>

   
   <script src="js/jquery-1.8.3.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script class="include" type="text/javascript" src="js/jquery.dcjqaccordion.2.7.js"></script>
    <script src="js/jquery.scrollTo.min.js"></script>
    <script src="js/jquery.nicescroll.js" type="text/javascript"></script>
    <script src="js/jquery.sparkline.js"></script>


   
    <!--script for this page-->
    <script src="js/sparkline-chart.js"></script>    
  <script src="js/zabuto_calendar.js"></script>  
  
  
  
  <script type="application/javascript">
        $(document).ready(function () {
            $("#date-popover").popover({html: true, trigger: "manual"});
            $("#date-popover").hide();
            $("#date-popover").click(function (e) {
                $(this).hide();
            });
        
            $("#my-calendar").zabuto_calendar({
                action: function () {
                    return myDateFunction(this.id, false);
                },
                action_nav: function () {
                    return myNavFunction(this.id);
                },
                ajax: {
                    url: "show_data.php?action=1",
                    modal: true
                },
               
            });
        });
        
        
        function myNavFunction(id) {
            $("#date-popover").hide();
            var nav = $("#" + id).data("navigation");
            var to = $("#" + id).data("to");
            console.log('nav ' + nav + ' to: ' + to.month + '/' + to.year);
        }
    </script>
  


  </body>




</html>
