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
          </ul>
        </nav>
    </header>
    <div class="slider_container" id="inicio">
      <div class="slideContainer">
        <div class="slide fullScreen" data-background="<?= base_url("$datos->slide1")?>"></div>
        <div class="slide fullScreen" data-background="<?= base_url("$datos->slide2")?>"></div>
        <div class="slide fullScreen" data-background="<?= base_url("$datos->slide3")?>"></div>
      </div>
    </div>
    <div class="fullScreen">

    </div>
    <div class="largeScreen" id="nosotros">
      <div class="column-a column">
        <p>
          <b>Nosotros</b>
        </p>
        <p>
            <?=$datos->nosotros?>
        </p>
        <!-- Button trigger modal -->
        <button class="btn btn-primary btn-lg" data-toggle="modal" data-target="#nosotrosModal">
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
                  <form name="Ingresar_nosotros" action="Edit/actualizarNosotros/" autocomplete="on" method="post">
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
        </p>
        <!-- Button trigger modal -->
        <button class="btn btn-primary btn-lg" data-toggle="modal" data-target="#objetivoModal">
          Editar
        </button>

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
                  <form name="Ingresar_objetivo" action="Edit/actualizarObjetivo/" autocomplete="on" method="post">
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
        </p>
        <!-- Button trigger modal -->
        <button class="btn btn-primary btn-lg" data-toggle="modal" data-target="#citaModal">
          Editar
        </button>

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
                  <form name="Ingresar_cita" action="Edit/actualizarCita/" autocomplete="on" method="post">
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
        </p>
        <!-- Button trigger modal -->
        <button class="btn btn-primary btn-lg" data-toggle="modal" data-target="#autorModal">
          Editar
        </button>

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
                  <form name="Ingresar_autor" action="Edit/actualizarAutor/" autocomplete="on" method="post">
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
      </p>
      <!-- Button trigger modal -->
      <button class="btn btn-primary btn-lg" data-toggle="modal" data-target="#areasModal">
        Editar
      </button>

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
                <form name="Ingresar_areas" action="Edit/actualizarArea/" autocomplete="on" method="post">
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
            <a href="<?php echo base_url(); ?>index.php/areas/index/<?php echo $area->idareas; ?>">modificar</a>
            <?php echo "|";?>
            <a href="<?php echo base_url(); ?>index.php/areas/eliminar/<?php echo $area->idareas; ?>">eliminar</a>
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
    <div class="fullScreen" id="contactenos">
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
          facebook
        </div>
      </div>
    </div>
    <?= $this->load->view('modals/areas_protegidas', (isset($areas_actualizar)) ? [$areas_actualizar] : "",TRUE) ?>
  </body>
</html>
