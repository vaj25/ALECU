<!-- Modal -->
<div class="modal fade" id="histmodal" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Historial de Cambios</h4>
      </div>
      <div class="modal-body">
        <form class="" action="<?= base_url("index.php/Edit/eliminarHistorial") ?>" method="post">
          <?php if (count($historial) > 0 ): ?>
            <?php foreach($historial as $htl) : ?>
              <input type="checkbox" name="historial" value="<?= $htl->id_misc?>">
                <a href=" <?= base_url("index.php/Edit/historial/") . $htl->id_misc ?>"><?= $htl->fecha_cambio?></a><br>
            <?php endforeach; ?>
          <?php else :?>
              <h2>No hay registros</h2>
          <?php endif; ?>
          <br>
          <button type="submit" class="btn btn-danger">Eliminar</button>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
