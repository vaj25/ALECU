<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Configuración Usuario</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="<?= base_url("assets/image/logo_01.png")?>" />
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
            <li><a href="<?= base_url("/index.php/Edit/#inicio")?>"  >INICIO</a></li>
            <li><a href="<?= base_url("/index.php/Edit/#nosotros")?>"  >NOSOTROS</a></li>
            <li><a href="<?= base_url("/index.php/Edit/#areas")?>"  >AREAS PROTEGIDAS</a></li>
            <li><a href="<?= base_url("/index.php/Edit/#contactenos")?>"  >CONTACTENOS</a></li>
            <li><a href="#" data-toggle="modal" data-target="#histmodal">HISTORIAL</a></li>
            <li>
              <a href="<?= base_url("/index.php/User/")?>"><span class="icon icon-user"></span></a>
              <a href="<?= base_url("/index.php/Login/logout")?>"><span class="icon icon-switch"></span></a>
            </li>
          </ul>
        </nav>
    </header>
    <div class="fullScreen">
      <div class="form-user">
        <form name="" action="UpdateUser" autocomplete="on" method="post">
          <div class='col-lg-10'>
            <label>Username:</label><br>
            <input type="text" class="form-control" name="user" required="required" placeholder="Username" readonly>
          </div>
          <div class='col-lg-10'>
            <label>Nombre:</label>
            <input type="text" class="form-control" id="nombre-usuario" name="nombre" required="required" placeholder="Nombre del Usuario" disabled>
            <a href="#" id="edit-nombre">editar</a>
          </div>
          <div class="col-lg-10" id="pass_conf">

          </div>
          <div class='col-lg-10'>
            <label>Password:</label>
            <input type="password" id="pass-usuario" name="pass_o" class="form-control" required="required" placeholder="Contraseña" disabled>
            <a href="#" id="edit-pass">editar</a>
          </div>
          <div class='col-lg-10'>
            <input type="hidden" id="tipo" name="tipo" value="">
            <input type="submit" name="guardar" class="btn btn-primary" value="Guardar" />
          </div>
        </form>
      </div>
      <div class="table-responsive">
        <table class="table">
          <tr>
            <th>#</th>
            <th>User</th>
            <th>Nombre</th>
            <th>Editar</th>
            <th>Eliminar</th>
          </tr>
          <?php $i = 1 ?>
          <?php foreach ($data as $dato): ?>
            <tr>
              <td><?= $i?></td>
              <td><?= $dato->username?></td>
              <td><?= $dato->name?></td>
              <td><a href="#" class="icon icon-pencil" onclick="fill_form(['user', 'nombre', 'pass_o'], ['<?= $dato->username?>', '<?= $dato->name?>', 'holamundo'])"></a></td>
              <td><a href="<?= base_url("/index.php/User/DeleteUser/") . $dato->username?>" class="icon icon-bin"></a></td>
            </tr>
            <?php $i++ ?>
          <?php endforeach; ?>
        </table>
      </div>
    </div>
    <?= $this->load->view('modals/historial', (isset($historial)) ? [$historial] : "", TRUE) ?>
    <script src="<?= base_url("assets/js/jquery-1.11.3.min.js")?>"></script>
    <script src="<?= base_url("assets/js/fill-form.js")?>"></script>
    <script src="<?= base_url("vendor/twbs/bootstrap/dist/js/bootstrap.min.js")?>"></script>
    <script src="<?= base_url("assets/js/edit.js")?>"></script>
  </body>
</html>
