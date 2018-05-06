<section class="wrapper">
          	<h3><i class="fa fa-angle-right"></i> Actualiza este servicio</h3>
          	

            <!-- BASIC FORM ELELEMNTS -->
            <div class="row mt">
              <div class="col-lg-12">
                  <div class="form-panel">

                      <h4 class="mb"><i class="fa fa-angle-right"></i> Variables Impuesto Predial</h4>
                                        	
						<form action="<?php echo $url_site; ?>resources/library/admin_actual_variable_impuesto_predial.php" method="post">
							<div class="form-group">
	                            
	                              <div class="col-sm-11">
							  		 
							  		 <?php 		
										$miconexion->consulta("SELECT valor from servicios WHERE id_tipo_servicio=1");
										$impuesto=$miconexion->admin_ver_impuesto();
									 ?>
								                          
			                      <div class="uno">	
			                        <label class="col-sm-2 col-sm-1 control-label">Valor</label>	  
			                            <input type="text" class="form-control" name="valor" value=<?php echo $impuesto; ?> required placeholder="valor a cobrar m2"><br><br>	
			                       </div>
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

