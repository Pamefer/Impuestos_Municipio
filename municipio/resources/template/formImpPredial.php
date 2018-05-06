<section class="wrapper">
  <h3><i class="fa fa-angle-right"></i> Registro de Ciudadano</h3>


  <!-- BASIC FORM ELELEMNTS -->
  <div class="row mt">
    <div class="col-lg-12">
      <div class="form-panel">
        <h4 class="mb"><i class="fa fa-angle-right"></i> Impuesto predial</h4>
        <form class="form-horizontal style-form" method="POST" action="<?php echo $url_site;?>resources/library/ingresarPredial.php">
          <div class="form-group">
            <label class="col-sm-2 col-sm-1 control-label">Cedula</label>
            <div class="col-sm-11">
              <input name="ced" type="number" class="form-control" placeholder="Ej:1215151">
            </div>
          </div>

          <div class="form-group">
            <label class="col-sm-2 col-sm-1 control-label">Dirección</label>
            <div class="col-sm-11">
              <input name="direccion" type="text" class="form-control" required placeholder="Dirección del terreno">
            </div>
          </div>

          <div class="form-group">
            <label class="col-sm-2 col-sm-1 control-label">Tamaño del terreno (m<sup>2</sup>)</label>
            <div class="col-sm-11">
              <input name="metros" type="number" class="form-control" required placeholder="Ej:100">
            </div>
          </div>

          <div class="form-group">
            <label class="col-sm-2 col-sm-1 control-label">Fecha</label>
            <div class="col-sm-11">
              <input name="fecha" type="date" class="form-control" required>
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

