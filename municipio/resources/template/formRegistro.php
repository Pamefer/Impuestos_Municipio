
          <section class="wrapper">
          	<h3><i class="fa fa-angle-right"></i> Registro de Ciudadano</h3>
          	

          	<!-- BASIC FORM ELELEMNTS -->
          	<div class="row mt">
          		<div class="col-lg-12">
                  <div class="form-panel">
                  	  <h4 class="mb"><i class="fa fa-angle-right"></i> Datos Personales</h4>
                      <form class="form-horizontal style-form" method="post" action="<?php echo $url_site;?>resources/library/guardar_persona.php">
                      
                      <div class="uno">
                          
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">*Nombres</label>
                              <div class="col-sm-10">
                                  <input id="nombres" name="nombres" type="text" class="form-control">
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">*Apellidos</label>
                              <div class="col-sm-10">
                                  <input name="apellidos" type="text" class="form-control" required>
                                  
                              </div>
                          </div>
                      </div>
                      <div class="dos">
                          <div id="cedula" class="form-group">
                              <label class="col-sm-4 col-sm-4 control-label">*Cédula</label>
                              <div class="col-sm-8">
                                  <input id="ce" name="cedula" type="text" class="form-control " required>
                              </div>
                          </div>
                           <div id="correo" class="form-group">
                              <label class="col-sm-4 col-sm-4 control-label">Correo</label>
                              <div class="col-sm-8">
                                  <input id="co"  name="correo" type="text"  class="form-control" placeholder="ejemplo@mail.com" >
                              </div>
                          </div>
                        </div>
                           <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">*Dirección</label>
                              <div class="col-sm-10">
                                  <input name="direccion" type="text" class="form-control" required>
                                  
                              </div>
                          </div>
                           <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">*Teléfono</label>
                              <div class="col-sm-10">
                                  <input name="telefono" type="text" class="form-control" required>
                                  
                              </div>
                          </div>
                            <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Placa</label>
                              <div class="col-sm-10">
                                  <input name="placa" type="text" class="form-control" >
                                  
                              </div>
                          </div>
                          <div align="right">
                           <button type="submit" class="btn btn-theme" ><i class="fa fa-check"></i>Siguiente</button>
                            
                          </div>
                         </form>
                  </div>
          		</div><!-- col-lg-12-->      	
          	</div><!-- /row -->          
         	</div><!-- /row -->
          	
          	
		</section><! --/wrapper -->

