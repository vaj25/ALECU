<!-- Modal -->
<div class="modal fade" id="histmodal" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Historial de Cambios</h4>
      </div>
      <div class="modal-body">
        <form class="" action="index.html" method="post">
          <?php if (count($historial) > 0 ): ?>
            <?php foreach($historial as $htl) : ?>
              <input type="checkbox" name="" value=""> <?= $htl->fecha_cambio?><br>
            <?php endforeach; ?>
          <?php else :?>
              <h2>No hay registros</h2>
          <?php endif; ?>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
