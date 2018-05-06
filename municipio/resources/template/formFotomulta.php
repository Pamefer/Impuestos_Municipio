<section class="wrapper">
  <h3><i class="fa fa-angle-right"></i> Registro de Ciudadano</h3>


  <!-- BASIC FORM ELELEMNTS -->
  <div class="row mt">
    <div class="col-lg-12">
      <div class="form-panel">
        <h4 class="mb"><i class="fa fa-angle-right"></i> Foto Multas</h4>
        <form class="form-horizontal style-form" method="POST" action="<?php echo $url_site;?>resources/library/ingresarFotoMulta.php">
          <div class="form-group">
            <label class="col-sm-2 col-sm-1 control-label">Cedula</label>
            <div class="col-sm-11">
              <input name="ced" type="number" class="form-control" placeholder="Ej:1215151">
            </div>
          </div>

          <div class="form-group">
            <label class="col-sm-2 col-sm-1 control-label">Dirección</label>
            <div class="col-sm-11">
              <input name="direccion" type="text" class="form-control" required placeholder="Lugar de la multa">
            </div>
          </div>

          <div class="form-group">
            <label class="col-sm-2 col-sm-1 control-label">Fecha</label>
            <div class="col-sm-11">
              <input name="fecha" type="date" class="form-control" required>
            </div>
          </div>

          <div class="form-group">
            <label class="col-sm-2 col-sm-1 control-label">Hora</label>
            <div class="col-sm-11">
              <input name="hora" type="time" class="form-control" required>
            </div>
          </div> 

          <div class="form-group">
            <label class="col-sm-2 col-sm-1 control-label">Velocidad (Km/h)</label>
            <div class="col-sm-11">
              <input name="velocidad" type="number" class="form-control" required>
            </div>
          </div> 

          <div align="right">
           <button type="submit" class="btn btn-theme" ><i class="fa fa-check"></i>Agregar</button>
         </div>
       </form>
     </div>
   </div><!-- col-lg-12-->       
 </div><!-- /row -->          
</div><!-- /row -->


</section><! --/wrapper -->

