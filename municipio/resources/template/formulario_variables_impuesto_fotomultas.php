
<section class="wrapper">
          	<h3><i class="fa fa-angle-right"></i> Actualiza este servicio</h3>
          	

            <!-- BASIC FORM ELELEMNTS -->
            <div class="row mt">
              <div class="col-lg-12">
                  <div class="form-panel">

                      <h4 class="mb"><i class="fa fa-angle-right"></i> Variables Fotomultas</h4>
                                           	
						<form action="<?php echo $url_site; ?>resources/library/admin_actual_variable_impuesto_fotomultas.php" method="post">
							<div class="form-group">
	                            
	                              <div class="col-sm-11">
							  		 <?php 		
										$miconexion->consulta("SELECT * from fotomultas");
										$miconexion->vervariablefotomulta();
									?>
		                      	</div>
	                          
	                          <div align="right">
	                           <button type="submit" class="btn btn-theme" ><i class="fa fa-check"></i>Actualizar</button>
	                            
	                          </div>
                       </form>
                  </div>
          		</div><!-- col-lg-12-->      	
          	</div><!-- /row -->          
         	</div><!-- /row -->
          	
          	
		</section><! --/wrapper -->

