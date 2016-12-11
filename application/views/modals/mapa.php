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
                zoom: 9,
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

              <?php
              $i = 3;
              foreach ($areas as $area){
                echo "var myLatLng".$i." = {lat: $area->latitud, lng: $area->longitud};\n";
                echo "var nombre= '$area->nombre';\n";
                echo "addMark(myLatLng".$i.",nombre);\n";
                $i++;
              }
              ?>
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
