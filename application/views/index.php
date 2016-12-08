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
    <link href=<?= base_url("assets/css/iconos.css")?> rel="stylesheet" media="screen">
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
        <div class="slide fullScreen" data-background="<?= base_url("$datos->slide1")?>"><div class="legend"><?= $datos->cita_slide1?></div></div>
        <div class="slide fullScreen" data-background="<?= base_url("$datos->slide2")?>"><div class="legend"><?= $datos->cita_slide2?></div></div>
        <div class="slide fullScreen" data-background="<?= base_url("$datos->slide3")?>"><div class="legend"><?= $datos->cita_slide3?></div></div>
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

      </div>
      <div class="column-b column">
        <p>
          <b>Objetivo</b>
        </p>
        <p>
          <?=$datos->objetivo?>
        </p>
        <p>
          <b>Citas</b>
        </p>
        <p>
          <?=$datos->cita?>
        </p>

        <p>
          Gandhi
        </p>
      </div>
    </div>
    <div class="largeScreen" id="areas">
      <p class="titulo">
        Areas Protegidas
      </p>
      <p class="sub-titulo">
        <?=$datos->areas?>
      </p>
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
          </div>
          <?php endforeach; ?>
        <?php else :?>
            <h2>No hay registros</h2>
        <?php endif; ?>
      </div>
    </div>
    <div class="largeScreen" id="contactenos">
      <div>
        <div class="column-a column">
          <?php
            $atributos = array(
              'class' => 'form-horizontal contact-form',
              'role' => 'form',
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

            echo form_open("/Welcome/EnviarCorreo", $atributos);
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
            <div id="fb-root"></div>
            <script>(function(d, s, id) {
              var js, fjs = d.getElementsByTagName(s)[0];
              if (d.getElementById(id)) return;
              js = d.createElement(s); js.id = id;
              js.src = "//connect.facebook.net/es_LA/sdk.js#xfbml=1&version=v2.8";
              fjs.parentNode.insertBefore(js, fjs);
            }(document, 'script', 'facebook-jssdk'));</script>
            <iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2FONG-Ecologica-1837656946456922%2F&tabs=timeline&width=300&height=500&small_header=true&adapt_container_width=true&hide_cover=false&show_facepile=true&appId" width="300" height="500" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true"></iframe>
            <!-- iframe src="https://www.facebook.com/plugins/like.php?href=https%3A%2F%2Fwww.facebook.com%2FONG-Ecologica-1837656946456922%2F&width=280&layout=standard&action=like&size=small&show_faces=true&share=true&height=80&appId" width="280" height="80" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true"></iframe -->
          </span>
          <span class="social">
            <a class="twitter-timeline width: 20px"  href="https://twitter.com/hashtag/ONGalecu" data-widget-id="805589770218930176"></a>
            <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
            <a class="twitter-timeline" data-width="260" data-height="500" data-theme="dark" href="https://twitter.com/ONGalecu/likes">Tweets Liked by @TwitterDev</a> <script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script>
          </span>
        </div>
      </div>
    </div>
    <script src="<?= base_url("assets/js/jquery-1.11.3.min.js")?>"></script>
    <script src="<?= base_url("assets/js/smooth-scroll.js")?>"></script>
    <script src="<?= base_url("assets/js/main.js")?>"></script>
  </body>
</html>
