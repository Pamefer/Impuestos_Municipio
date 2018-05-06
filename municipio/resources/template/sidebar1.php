<aside>
          <div id='sidebar'  class='nav-collapse '>
              <!-- sidebar menu start-->
              <ul class='sidebar-menu' id='nav-accordion'>
              
              	  <p class='centered'><a href='profile.html'><img src='img/escudo.png' class='img-circle' width='60'></a></p>
              	   <?php
                  session_start();
                 echo " <h5 class='centered'>Municipio De Loja</h5>";
              	
              
                  if (@$_SESSION['id']==1) {
                  echo "<li class='mt'>
                      <a class='active' href='admin.php'>
                          <i class='fa fa-dashboard'></i>
                          <span>Inicio</span>
                      </a>
                  </li>
                  <li class='sub-menu'>
                      <a href='javascript:;' >
                          <i class='fa fa-book'></i>
                          <span>Registro</span>
                      </a>
                      <ul class='sub'>
                          <li><a href='$url_site/public_html/personas_deudas.php'>Listar</a></li>
                          <li><a href='$url_site/public_html/ingresarPersona.php'>Ingresar</a></li>
                          <li><a href='$url_site/public_html/ingresarCuenta.php'>Crear Cuentas</a></li>
                      </ul>
                  </li>
                   <li class='sub-menu'>
                      <a href='javascript:;'>
                          <i class='fa fa-desktop'></i>
                          <span>Servicios</span>
                      </a>
                      <ul class='sub'>
                          <li><a href='$url_site/public_html/menuServicios.php'>Variables del sistema</a></li>
                          <li><a href='$url_site/public_html/ingresarImpPredial.php'>Impuesto Predial</a></li>
                          <li><a href='$url_site/public_html/ingresarImpRodaje.php'>Impuesto Rodaje</a></li>
                          <li><a href='$url_site/public_html/ingresarAgua.php'>Agua</a></li>
                          <li><a href='$url_site/public_html/ingresarPatentes.php'>Patentes</a></li>
                          <li><a href='$url_site/public_html/ingresarFotoMulta.php'>Fotomultas</a></li>
                      </ul>
                  </li>";

              
              
                }else{
                  echo " <li class='mt'>
                      <a class='active' href='index.html'>
                          <i class='fa fa-dashboard'></i>
                          <span>Inicio</span>
                      </a>
                  </li>

                  <li class='sub-menu'>
                      <a href='javascript:;' >
                          <i class='fa fa-desktop'></i>
                          <span>Pagos</span>
                      </a>
                      <ul class='sub'>
                          <li><a href='$url_site/public_html/personas_deudas.php'>Listar</a></li>
                      </ul>
                  </li>

                  <li class='sub-menu'>
                      <a href='javascript:;' >
                          <i class='fa fa-cogs'></i>
                          <span>Fotomultas</span>
                      </a>

                      <ul class='sub'>
                          <li><a  href='$url_site/public_html/ingresarFotoMulta.php'>Ingresar</a></li>
                      </ul>
                  </li>";
                }
                  ?> 
                </ul>
              <!-- sidebar menu end-->
          </div>
      </aside>