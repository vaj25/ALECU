<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>ALECU</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximun-scale=1">
    <link rel="shortcut icon" href="<?= base_url("assets/image/logo_01.jpg")?>" />
    <link href=<?= base_url("assets/css/main.css")?> rel="stylesheet" media="screen">
  </head>
  <body>
    <header>
        <nav>
          <ul>
            <li><div id="logo"><img src="<?= base_url("assets/image/logo_01.png"); ?>"  alt="logo alecu"></div></li>
            <li><a href="#inicio">INICIO</a></li>
            <li><a href="#nosotros">NOSOTROS</a></li>
            <li><a href="#historia">HISTORIA</a></li>
            <li><a href="#">AREAS PROTEGIDAS</a></li>
            <li><a href="#">CONTACTENOS</a></li>
          </ul>
        </nav>
    </header>
    <div class="fullScreen slider_container" id="inicio">
      <div class="slideContainer">
        <div class="slide fullScreen" data-background="<?= base_url("assets/image/DSC02097")?>"></div>
        <div class="slide fullScreen" data-background="<?= base_url("assets/image/DSC02173")?>"></div>
        <div class="slide fullScreen" data-background="<?= base_url("assets/image/DSC03117")?>"></div>
      </div>
    </div>
    <div class="fullScreen">

    </div>
    <div class="fullScreen" id="nosotros">
      <div class="column-a column">
        <p>
          <b>Nosotros</b>
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
    <div class="fullScreen" id="historia">

    </div>
    <div class="fullScreen">

    </div>

    <script src="<?= base_url("assets/js/jquery-1.11.3.min.js")?>"></script>
    <script src="<?= base_url("assets/js/main.js")?>"></script>
  </body>
</html>
