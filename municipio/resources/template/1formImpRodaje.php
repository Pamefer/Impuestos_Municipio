<section class="wrapper">
 <h3><i class="fa fa-angle-right"></i> Registro de Ciudadano</h3>


 <!-- BASIC FORM ELELEMNTS -->
 <div class="row mt">
  <div class="col-lg-12">
    <div class="form-panel">



      <h4 class="mb"><i class="fa fa-angle-right"></i> Ingresar Impuesto Rodaje</h4>
      <!-- form para validar si el numero de cedula esta registrado -->
      <form class="form-horizontal" action="<?php echo $url_site; ?>resources/library/1ingresarRodaje.php" method="post">
        </div>
        <div class="form-group">
          <label for="inputEmail3" class="col-sm-2 control-label">Fecha</label>
          <div class="col-sm-9">
            <input type="date"  name="fec" class="form-control" id="inputEmail3" placeholder="Año del servicio">
          </div>
        </div>
        <br>
        <div class="form-group">
          <div class="col-sm-offset-2 col-sm-11">
          <br>
            <button type="submit" class="btn btn-primary">Guardar</button>
          </div>
        </div>
      </form>

    </div>
  </div><!-- col-lg-12-->      	
</div><!-- /row -->          
</div><!-- /row -->


</section><! --/wrapper -->

