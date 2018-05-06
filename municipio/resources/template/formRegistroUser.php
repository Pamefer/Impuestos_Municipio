
          <section class="wrapper">
          	<h3><i class="fa fa-angle-right"></i> Registro Cuenta</h3>
          	

          	<!-- BASIC FORM ELELEMNTS -->
          	<div class="row mt">
          		<div class="col-lg-12">
                  <div class="form-panel">
                  	  <h4 class="mb"><i class="fa fa-angle-right"></i> Datos de La Cuenta de Usuario</h4>
                      <form class="form-horizontal style-form" method="post" action="<?php echo $url_site;?>resources/library/guardar_usuario.php">
                      
                      <div class="uno">
                           
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">*Usuario</label>
                              <div class="col-sm-10">
                                  <input id="user" name="user" type="text" class="form-control">
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">*Contraseña</label>
                              <div class="col-sm-10">
                                  <input name="pass" type="password" class="form-control" required>   
                              </div>
                          </div>
                           <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">*Rol</label>
                              <div class="col-sm-10">
                                  <select id='rol' required name='rol'>
                                   <option disabled selected value hidden></option>
                                   <?php              
                                    $res=$miconexion->consulta("select * from roles");    
                                    $arreglo=$miconexion->verconsulta_rol();
                                  ?>
                                  </select>  
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">*Cedula</label>
                              <div class="col-sm-10">
                                  <select id='ced' required name='ced'>
                                   <option disabled selected value hidden></option>
                                   <?php              
                                    $res=$miconexion->consulta("select id_usuario, cedula from usuarios");    
                                    $arreglo=$miconexion->verconsulta_rol();
                                  ?>
                                  </select>  
                              </div>
                          </div>
                      </div>
                     
                          <div align="right">
                           <button type="submit" class="btn btn-theme" ><i class="fa fa-check"></i>Crear</button>
                            
                          </div>
                         </form>
                  </div>
          		</div><!-- col-lg-12-->      	
          	</div><!-- /row -->          
         	</div><!-- /row -->
          	
          	
		</section><! --/wrapper -->

