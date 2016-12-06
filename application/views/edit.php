<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>ALECU</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="<?= base_url("assets/image/logo_01.jpg")?>" />
    <link href=<?= base_url("vendor/twbs/bootstrap/dist/css/bootstrap.min.css")?> rel="stylesheet" media="screen">
    <link href=<?= base_url("assets/css/main.css")?> rel="stylesheet" media="screen">
    <link href=<?= base_url("assets/css/edit.css")?> rel="stylesheet" media="screen">
    <link href=<?= base_url("assets/css/iconos.css")?> rel="stylesheet" media="screen">
  </head>
  <body>
    <header>
        <div class="menu_bar">
          <a href="#" class="bt-menu"><span class="icon icon-list2"></span>Menu</a>
        </div>
        <nav>
          <ul>
            <li><div id="logo"><img src="<?= base_url("assets/image/logo_01.png"); ?>"  alt="logo alecu"></div></li>
            <li><a href="#inicio" class="smoothScroll" >INICIO</a></li>
            <li><a href="#nosotros" class="smoothScroll" >NOSOTROS</a></li>
            <li><a href="#areas" class="smoothScroll" >AREAS PROTEGIDAS</a></li>
            <li><a href="#contactenos" class="smoothScroll" >CONTACTENOS</a></li>
          </ul>
        </nav>
    </header>
    <div class="slider_container" id="inicio">
      <div class="slideContainer">
        <div class="slide fullScreen" data-background="<?= base_url("assets/image/DSC02097")?>"></div>
        <div class="slide fullScreen" data-background="<?= base_url("assets/image/DSC02173")?>"></div>
        <div class="slide fullScreen" data-background="<?= base_url("assets/image/DSC03117")?>"></div>
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
          Todos los navegadores que he testado ignoran height:
          100% en el elemento hijo y su altura es la altura de su contenido.
          Aunque no es lo que yo quería, por lo menos es cross-browser.
        </p>
      </div>
      <div class="column-b column">
        <p>
          <b>Objetivo</b>
        </p>
        <p>
          La Asociación Local Ecológica de Comunidades Unidas (ALECU), tiene como objetivo principal:
          Proteger y conservar el medio ambiente y el aprovechamiento racional de los recursos naturales,
          para garantizar prioritariamente el bienestar de las comunidades del municipio de Ciudad Arce.
          Una de sus prioridades es la Recuperación y restauración del Área Natural Protegida San Andrés
        </p>
        <p>
          <b>Citas</b>
        </p>
        <p>
          "Tú debes ser el cambio que deseas ver en el mundo"
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
        Aquella que posee biodiversidad significativa o contiene rasgos naturales o culturales de valor relevante ...
        ...y ha sido intervenida por el hombre en una forma mínima.
        Que se ha establecido jurídicamente y es capaz de proveer beneficios y servicios  ambientales.
      </p>
      <div class="content-box">
        <div class="box">
          <div class="box-title">
            Parque Nacional Montecristo
          </div>
          <div class="box-content">
            Está ubicado en el municipio de Metapán, departamento de Santa Ana.
            Tiene una extensión de 1973 hectáreas de bosque nebuloso y es parte de la Reserva de la biosfera Trifinio.
            Fue la primera área protegida declarada del país.
          </div>
        </div>
        <div class="box">
          <div class="box-title">
            Parque Nacional Montecristo
          </div>
          <div class="box-content">
            Está ubicado en el municipio de Metapán, departamento de Santa Ana.
            Tiene una extensión de 1973 hectáreas de bosque nebuloso y es parte de la Reserva de la biosfera Trifinio.
            Fue la primera área protegida declarada del país.
          </div>
        </div>
        <div class="box">
          <div class="box-title">
            Parque Nacional Montecristo
          </div>
          <div class="box-content">
            Está ubicado en el municipio de Metapán, departamento de Santa Ana.
            Tiene una extensión de 1973 hectáreas de bosque nebuloso y es parte de la Reserva de la biosfera Trifinio.
            Fue la primera área protegida declarada del país.
          </div>
        </div>
        <div class="box">
          <div class="box-title">
            NUEVO
          </div>
          <div class="box-content">
            <p id="nuevo_anp" class="plus open-Modal" data-toggle="modal" data-target="#anp-modal">+</p>
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
    <?= $this->load->view('modals/areas_protegidas','',TRUE) ?>
    <script src="<?= base_url("assets/js/jquery-1.11.3.min.js")?>"></script>
    <script src="<?= base_url("assets/js/smooth-scroll.js")?>"></script>
    <script src="<?= base_url("vendor/twbs/bootstrap/dist/js/bootstrap.min.js")?>"></script>
    <script src="<?= base_url("assets/js/edit.js")?>"></script>
    <script src="<?= base_url("assets/js/main.js")?>"></script>
  </body>
</html>
