<?php
  if( isset($areas_actualizar) ){
    $idareas = '<p><input type="hidden" name="idareas" value="'.$this->uri->segment(3).'"></p>';
    $nombre = $areas_actualizar->nombre;
    $descripcion = $areas_actualizar->descripcion;
    $ubicacion = $areas_actualizar->ubicacion;
    $extension = $areas_actualizar->extension;
    $accion = 'actualizar';
    $script = '<script type="text/javascript">$(window).load(function(){$("#anp-modal").modal("show");});</script>';
  }
  else{
    $idareas = '';
    $nombre = '';
    $descripcion = '';
    $ubicacion = '';
    $extension = '';
    $accion = 'insertar';
    $script = "";
  }
?>
<?= $script?>
<div class="modal fade" role="dialog" id="anp-modal">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Area Natural Protegida</h4>
      </div>
      <div class="modal-body">
        <div class="contact-form" align="left">
          <form name="Ingresar_Area" action="<?php echo base_url(); ?>index.php/areas/<?php echo $accion; ?>" autocomplete="on" method="post">
            <fieldset form="Ingresar_Area" name="IngresarArea">
            <legend>Ingresar Nueva Area</legend>
            <?php echo $idareas; ?>
            <p><label>Nombre:</label> <input type="text" class="form-control" name="nombre" value="<?php echo $nombre; ?>" ></p>
            <p><label>Descripcion:</label><br><textarea name="descripcion" class="form-control" cols="50" rows="5"><?php echo $descripcion; ?></textarea></p>
            <p><label>Extension:</label><input type="text" name="extension" class="form-control" value="<?php echo $extension; ?>" ></p>
            <p><label>Ubicacion:</label> <input type="text" name="ubicacion" class="form-control" value="<?php echo $ubicacion; ?>" ></p>
            <p><input type="submit" name="guardar" class="btn btn-primary" value="Guardar" /></p>
            </fieldset>
          </form>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
      </div>
    </div>
  </div>
</div>
