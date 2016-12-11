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
          <div id="map" style="width: 1400px; height: 700px;"></div>
          <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD3yClr7vDM4wHpkqhVXFF-BhkHZcCe9e4&callback=initMap"></script>
          <script>
            function initMap() {
              var myLatLng = {lat: 13.7272433, lng: -89.3606619};
              // Create a map object and specify the DOM element for display.
              var map = new google.maps.Map(document.getElementById('map'), {
                center: myLatLng,
                scrollwheel: true,
                zoom: 8,
                mapTypeId: google.maps.MapTypeId.ROADMAP
              });

              google.maps.event.addListener(map, 'click', function(event) {
              addMark(event.latLng);
              });

              function addMark(location,nombre){
                marker = new google.maps.Marker({
                  position: location,
                  map: map,
                  title: nombre
                });
              }
              var myLatLng2 = {lat: 13.5272433, lng: -89.2606619};
              addMark(myLatLng,'area1');
              addMark(myLatLng2,'area2');
            }
          </script>
          <?php
          /*foreach ($areas_actualizar as $area{
            echo '<script type="text/javascript" language="JavaScript">'."\n";
            echo "var myLatLng = {lat: '$area->latitud', lng: '$longitud'};\n";
            echo "var nombre='$area->nombre';\n";
            echo "addMark(myLatLng,nombre);\n";
            echo "<script>";
          }*/
          ?>
          <!-- Fin del mapa -->
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
      </div>
    </div>
  </div>
</div>
