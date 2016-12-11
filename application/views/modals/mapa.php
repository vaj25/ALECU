<?php
  if( isset($areas_actualizar) ){
    $idareas = '<p><input type="hidden" name="idareas" value="'.$this->uri->segment(3).'"></p>';
    $lat = $areas_actualizar->latitud;
    $long = $areas_actualizar->longitud;
    $nom=$areas_actualizar->nombre;
    $script = '<script type="text/javascript">$(window).load(function(){$("#mapa-modal").modal("show");});</script>';
  }
?>
<div class="modal fade" role="dialog" id="mapa-modal">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Mapa</h4>
      </div>
      <div class="modal-body">
        <div class="contact-form" align="left">
          <!-- Mapa generado con API google maps -->

          <div id="map" style="width: 500px; height: 400px;"></div>
          <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD3yClr7vDM4wHpkqhVXFF-BhkHZcCe9e4&callback=initMap" async defer></script>
          <script>
                function initMap() {
                  var myLatLng = {lat: 13.7272433, lng: -89.3606619};
                  // Create a map object and specify the DOM element for display.
                  var map = new google.maps.Map(document.getElementById('map'), {
                    center: myLatLng,
                    scrollwheel: false,
                    zoom: 4
                  });

                  // Create a marker and set its position.
                  var marker = new google.maps.Marker({
                    map: map,
                    position: myLatLng,
                    title: 'Nombre Area'
                  });
                }
              </script>
          <!-- Fin del mapa -->
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
      </div>
    </div>
  </div>
</div>
