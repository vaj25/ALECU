<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>ALECU</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php
      foreach($info as $datos)
      {
    ?>
    <link rel="shortcut icon" href="<?= base_url("$datos->logo_jpg")?>" />
    <link href=<?= base_url("vendor/twbs/bootstrap/dist/css/bootstrap.min.css")?> rel="stylesheet" media="screen">
    <link href=<?= base_url("assets/css/main.css")?> rel="stylesheet" media="screen">
    <link href=<?= base_url("assets/css/edit.css")?> rel="stylesheet" media="screen">
    <link href=<?= base_url("assets/css/iconos.css")?> rel="stylesheet" media="screen">
    <script src="<?= base_url("assets/js/jquery-1.11.3.min.js")?>"></script>
    <script src="<?= base_url("assets/js/smooth-scroll.js")?>"></script>
    <script src="<?= base_url("vendor/twbs/bootstrap/dist/js/bootstrap.min.js")?>"></script>
    <script src="<?= base_url("assets/js/edit.js")?>"></script>
    <script src="<?= base_url("assets/js/main.js")?>"></script>
  </head>
  <body>
    <?php
      if (isset($msg)) {
        echo $msg;
      }
    ?>
    <header>
        <div class="menu_bar">
          <a href="#" class="bt-menu"><span class="icon icon-list2"></span>Menu</a>
        </div>
        <nav>
          <ul>
            <li><div id="logo"><img src="<?= base_url("$datos->logo_png"); ?>"  alt="logo alecu"></div></li>
            <li><a href="#inicio" class="smoothScroll" >INICIO</a></li>
            <li><a href="#nosotros" class="smoothScroll" >NOSOTROS</a></li>
            <li><a href="#areas" class="smoothScroll" >AREAS PROTEGIDAS</a></li>
            <li><a href="#contactenos" class="smoothScroll" >CONTACTENOS</a></li>
            <li><a href="#" data-toggle="modal" data-target="#histmodal">HISTORIAL</a></li>
          </ul>
        </nav>
    </header>
    <div class="slider_container" id="inicio">
      <div class="slideContainer">
        <div class="slide fullScreen" data-background="<?= base_url("$datos->slide1")?>"><div class="legend"><?= $datos->cita_slide1?></div></div>
        <div class="slide fullScreen" data-background="<?= base_url("$datos->slide2")?>"><div class="legend"><?= $datos->cita_slide2?></div></div>
        <div class="slide fullScreen" data-background="<?= base_url("$datos->slide3")?>"><div class="legend"><?= $datos->cita_slide3?></div></div>
      </div>
    </div>
    <div class="fullScreen">
      <button style="position: relative; top: 80%;" class="edit btn btn-primary btn-lg" data-toggle="modal" data-target="#slidemodal">
        Editar
      </button>
    </div>
    <!-- Modal -->
    <div class="modal fade" id="slidemodal" tabindex="-1" role="dialog">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h4 class="modal-title">Editar Slide</h4>
          </div>
          <div class="modal-body">
            <div class="contact-form" align="left">
              <form name="Ingresar_nosotros" enctype='multipart/form-data' action="<?= base_url("index.php/Edit/actualizarSlide/"); ?>" autocomplete="on" method="post">
                <p>
                  <label><img src="<?= base_url("$datos->slide1")?>.jpg" width="100px" alt="" alt=""></label><br>
                  <p><input type="file" name="image"></p>
                  <label>Cita Imagen 1</label><br>
                  <input type="text" class="form-control" name="cita" value="<?= $datos->cita_slide1; ?>" >
                  <input type="hidden" name="numero" value="1" >
                <p>
                <p><input type="submit" name="guardar" class="btn btn-primary" value="Guardar" /></p>
              </form>
              <form name="Ingresar_nosotros" action="<?= base_url("index.php/Edit/actualizarSlide/"); ?>" autocomplete="on" method="post">
                <p>
                  <label><img src="<?= base_url("$datos->slide2")?>.jpg" width="100px" alt=""></label><br>
                  <p><input type="file" name="image"></p>
                  <label>Cita Imagen 2</label><br>
                  <input type="text" class="form-control" name="cita" value="<?= $datos->cita_slide2; ?>" >
                  <input type="hidden" name="numero" value="1" >
                <p>
                <p><input type="submit" name="guardar" class="btn btn-primary" value="Guardar" /></p>
              </form>
              <form name="Ingresar_nosotros" action="<?= base_url("index.php/Edit/actualizarSlide/"); ?>" autocomplete="on" method="post">
                <p>
                  <label><img src="<?= base_url("$datos->slide3")?>.jpg" width="100px" alt=""></label><br>
                  <p><input type="file" name="image"></p>
                  <label>Cita Imagen 3</label><br>
                  <input type="text" class="form-control" name="cita" value="<?= $datos->cita_slide3; ?>" >
                  <input type="hidden" name="numero" value="1" >
                </p>
                <p><input type="submit" name="guardar" class="btn btn-primary" value="Guardar" /></p>
              </form>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          </div>
        </div><!-- /.modal-content -->
      </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
    <div class="largeScreen" id="nosotros">
      <div class="column-a column">
        <p>
          <b>Nosotros</b>
        </p>
        <p>
            <?=$datos->nosotros?>
        </p>
        <!-- Button trigger modal -->
        <button class="edit btn btn-primary btn-lg" data-toggle="modal" data-target="#nosotrosModal">
          Editar
        </button>

        <!-- Modal -->
        <div class="modal fade" id="nosotrosModal" tabindex="-1" role="dialog">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">Editar nosotros</h4>
              </div>
              <div class="modal-body">
                <div class="contact-form" align="left">
                  <form name="Ingresar_nosotros" action="<?= base_url("index.php/Edit/actualizarNosotros/"); ?>" autocomplete="on" method="post">
                    <p><label>Nosotros:</label><br><textarea name="nosotros" class="form-control" cols="50" rows="5"><?=$datos->nosotros?></textarea></p>
                    <p><input type="submit" name="guardar" class="btn btn-primary" value="Guardar" /></p>
                  </form>
                </div>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              </div>
            </div><!-- /.modal-content -->
          </div><!-- /.modal-dialog -->
        </div><!-- /.modal -->
      </div>
      <div class="column-b column">
        <p>
          <b>Objetivo</b>
        </p>
        <p>
          <?=$datos->objetivo?>
          <!-- Button trigger modal -->
          <button class="edit btn btn-primary btn-lg" data-toggle="modal" data-target="#objetivoModal">
            Editar
          </button>
        </p>

        <!-- Modal -->
        <div class="modal fade" id="objetivoModal" tabindex="-1" role="dialog">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">Editar objetivo</h4>
              </div>
              <div class="modal-body">
                <div class="contact-form" align="left">
                  <form name="Ingresar_objetivo" action="<?= base_url("index.php/Edit/actualizarObjetivo/"); ?>" autocomplete="on" method="post">
                    <p><label>Objetivo:</label><br><textarea name="objetivo" class="form-control" cols="50" rows="10"><?=$datos->objetivo?></textarea></p>
                    <p><input type="submit" name="guardar" class="btn btn-primary" value="Guardar" /></p>
                  </form>
                </div>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              </div>
            </div><!-- /.modal-content -->
          </div><!-- /.modal-dialog -->
        </div><!-- /.modal -->
        <p>
          <b>Citas</b>
        </p>
        <p>
          <?=$datos->cita?>
          <!-- Button trigger modal -->
          <br>
          <button class="edit btn btn-primary btn-lg" data-toggle="modal" data-target="#citaModal">
            Editar
          </button>
        </p>

        <!-- Modal -->
        <div class="modal fade" id="citaModal" tabindex="-1" role="dialog">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">Editar cita</h4>
              </div>
              <div class="modal-body">
                <div class="contact-form" align="left">
                  <form name="Ingresar_cita" action="<?= base_url("index.php/Edit/actualizarCita/"); ?>" autocomplete="on" method="post">
                    <p><label>Cita:</label><br><textarea name="cita" class="form-control" cols="50" rows="10"><?=$datos->cita?></textarea></p>
                    <p><input type="submit" name="guardar" class="btn btn-primary" value="Guardar" /></p>
                  </form>
                </div>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              </div>
            </div><!-- /.modal-content -->
          </div><!-- /.modal-dialog -->
        </div><!-- /.modal -->
        <p>
          <?=$datos->autor?>
          <!-- Button trigger modal -->
          <br>
          <button class="edit btn btn-primary btn-lg" data-toggle="modal" data-target="#autorModal">
            Editar
          </button>
        </p>

        <!-- Modal -->
        <div class="modal fade" id="autorModal" tabindex="-1" role="dialog">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">Editar autor</h4>
              </div>
              <div class="modal-body">
                <div class="contact-form" align="left">
                  <form name="Ingresar_autor" action="<?= base_url("index.php/Edit/actualizarAutor/"); ?>" autocomplete="on" method="post">
                    <p><label>Cita:</label><br><textarea name="autor" class="form-control" cols="50" rows="2"><?=$datos->autor?></textarea></p>
                    <p><input type="submit" name="guardar" class="btn btn-primary" value="Guardar" /></p>
                  </form>
                </div>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              </div>
            </div><!-- /.modal-content -->
          </div><!-- /.modal-dialog -->
        </div><!-- /.modal -->
      </div>
    </div>
    <div class="largeScreen" id="areas">
      <p class="titulo">
        Areas Protegidas
      </p>
      <p class="sub-titulo">
          <?=$datos->areas?>
          <!-- Button trigger modal -->
          <br>
          <button class="edit btn btn-primary btn-lg" data-toggle="modal" data-target="#areasModal">
            Editar
          </button>
      </p>

      <!-- Modal -->
      <div class="modal fade" id="areasModal" tabindex="-1" role="dialog">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
              <h4 class="modal-title">Editar concepto de areas protegidas</h4>
            </div>
            <div class="modal-body">
              <div class="contact-form" align="left">
                <form name="Ingresar_areas" action="<?= base_url("index.php/Edit/actualizarArea/"); ?>" autocomplete="on" method="post">
                  <p><label>Cita:</label><br><textarea name="areas" class="form-control" cols="50" rows="10"><?=$datos->areas?></textarea></p>
                  <p><input type="submit" name="guardar" class="btn btn-primary" value="Guardar" /></p>
                </form>
              </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
          </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
      </div><!-- /.modal -->
      <?php
        }
      ?>
      <div class="content-box">
        <?php if (count($areas) > 0 ): ?>
          <?php foreach($areas as $area) : ?>
          <div class="box">
            <div class="box-title">
              <?php echo $area->nombre; ?>
            </div>
            <div class="box-content">
              <?php echo $area->descripcion;
              echo "<br><br>";
              echo $area->ubicacion;
              echo "<br> extension: ";
              echo $area->extension;
              echo "<br>"?>
            </div>
            <a href="<?php echo base_url(); ?>index.php/areas/index/<?php echo $area->idareas; ?>">Modificar</a>
            <?php echo "|";?>
            <a href="<?php echo base_url(); ?>index.php/areas/eliminar/<?php echo $area->idareas; ?>">Eliminar</a>
            <?php echo "|";?>
            <a id="nuevo_mapa" data-toggle="modal" data-target="#mapa-modal">Mapa</a>
          </div>
          <?php endforeach; ?>
        <?php else :?>
            <h2>No hay registros</h2>
        <?php endif; ?>
        <div class="box">
          <div class="box-title">
            NUEVO
          </div>
          <div class="box-content" style="margin-bottom: -8em; margin-top: 9.5em;">
            <p id="nuevo_anp" class="plus open-Modal" data-toggle="modal" data-target="#anp-modal">
              <img src="<?= base_url("assets/image/plus-icon.png"); ?>" alt="" height="150px">
            </p>
          </div>
        </div>
      </div>
    </div>
    <div id="map" style="width: 100%; height: 700px;"></div>
    <div class="largeScreen" id="contactenos">
      <div>
        <div class="column-a column">
          <?php
            $atributos = array(
              'class' => 'form-horizontal contact-form',
              'role' => 'form'
            );

            $atriLabel = array('class' => 'col-lg-2 control-label', 'style' => 'text-shadow: 1px 1px #000; color: #fff');

            $button = array('class' => 'btn btn-success', 'style' => 'float: right;');

            $nom = array(
                'name' => 'nombre',
                'placeholder' => 'Escribe Nombre',
                'class' => "form-control"
            );

            $email = array(
                'name' => 'email',
                'placeholder' => 'Escriba su Email',
                'class' => "form-control"
            );

            $asunto = array(
                'name' => 'asunto',
                'placeholder' => 'Escriba el Asunto',
                'class' => "form-control"
            );

            $mensaje = array(
              'name'        => 'msj',
              'placeholder' => 'Escriba el Mensaje',
              'class'       => 'form-control'
            );

            echo form_open("/", $atributos);
            echo "<div class='form-group'>";
              echo form_label('Nombre:', 'nom', $atriLabel);
              echo "<div class='col-lg-10'>";
                echo form_input($nom);
              echo "</div>";
            echo "</div>";

            echo "<div class='form-group'>";
              echo form_label('Email:', 'em', $atriLabel);
              echo "<div class='col-lg-10'>";
                echo form_input($email);
              echo "</div>";
            echo "</div>";

            echo "<div class='form-group'>";
              echo form_label('Asunto:', 'asu', $atriLabel);
              echo "<div class='col-lg-10'>";
                echo form_input($asunto);
              echo "</div>";
            echo "</div>";

            echo "<div class='form-group'>";
              echo form_label('Mensaje:', 'men', $atriLabel);
              echo "<div class='col-lg-10'>";
                echo form_textarea($mensaje);
              echo "</div>";
            echo "</div>";

            echo form_submit('','Enviar', $button);
            echo form_close();
          ?>
        </div>
        <div class="column-b column">
          <span class="social">
            <iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Falecuanpsanandres%2F&tabs=timeline&width=260&height=500&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId=1912748795615422" width="260" height="500" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true"></iframe>
          <span class="social">
            <a class="twitter-timeline width: 20px"  href="https://twitter.com/hashtag/ONGalecu" data-widget-id="805589770218930176"></a>
            <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
            <a class="twitter-timeline" data-width="260" data-height="500" data-theme="dark" href="https://twitter.com/ONGalecu/likes">Tweets Liked by @TwitterDev</a> <script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script>
          </span>
        </div>
      </div>
    </div>
    <?= $this->load->view('modals/areas_protegidas', (isset($areas_actualizar)) ? [$areas_actualizar] : "",TRUE) ?>
    <?= $this->load->view('modals/mapa', (isset($areas)) ? [$areas] : "",TRUE) ?>
    <?= $this->load->view('modals/historial', (isset($historial)) ? [$historial] : "", TRUE) ?>
    <?= (isset($aplicar)) ? '<a style="position: fixed; top: 80%; left: 1em;" href="'.base_url("index.php/Edit/actualizarEstado/") . $this->uri->segment(3) .'" class="edit btn btn-success btn-lg">Aplicar</a>' : "" ?>
  </body>
</html>
