<div style="height: 200px;" class="hide-for-small">
    &nbsp;
</div>
<div class="row mb15 table-layout">
    <div class="col-xs-6 va-m pln">
        <a href="javascript:" title="Return to Dashboard">
            <img src="<?php echo $this->request->webroot; ?>img/logos/logo_white.png" title="AdminDesigns Logo" class="img-responsive w250">
        </a>
    </div>
</div>
<?= $this->Form->create(NULL, ['action' => 'mipaginador', 'id' => 'ajaxform']); ?>
<div class="panel panel-info mt10 br-n">
    <!-- end .form-header section -->
    <div class="panel-menu">
        <div class="input-group ">
            <span class="input-group-addon">
                <i class="fa fa-search"></i>
            </span>
            <?= $this->Form->text('busqueda', ['class' => 'form-control', 'placeholder' => 'Buscar....', 'id' => 'campo-medico']) ?>
        </div><br>
        <div class="row">
            <div class="col-md-8">
                <?php
                echo $this->Form->hidden('tipo');
                ?>
                <!--
                <div class="input-group ">
                    <div class="radio-custom radio-primary mb5">
                        <input type="radio" id="radmedico" name="tipo" value="Medico" checked="">
                        <label for="radmedico">Medico</label>

                        <input type="radio" id="radcentro" name="tipo" value="Centro">
                        <label for="radcentro">Centro</label>

                        <input type="radio" id="radfarmacia" name="tipo" value="Farmacia">
                        <label for="radfarmacia">Farmacia</label>
                    </div>
                </div>
                -->
            </div>
            <div class="col-md-4">
                <button type="submit" class="button btn-info pull-right">Realizar Busqueda</button>
            </div>
        </div>
    </div>

</div>
<div class="panel panel-info mt10 br-n">
    <!-- end .form-header section -->

</div>
<?= $this->Form->hidden('lat', ['id' => 'idlat']); ?>
<?= $this->Form->hidden('lgt', ['id' => 'idlgt']); ?>
<?= $this->Form->end(); ?>
<div id="map" style="display: none;"></div>

<script src="http://www.google.com/jsapi?key=ABQIAAAAlJFc1lrstqhgTl3ZYo38bBQcfCcww1WgMTxEFsdaTsnOXOVOUhTplLhHcmgnaY0u87hQyd-n-kiOqQ"></script>
<script>
  (function () {
      google.load("maps", "2");
      google.setOnLoadCallback(function () {
          // Create map
          var map = new google.maps.Map2(document.getElementById("map")),
                  markerText = "<h2>You are here</h2><p>Nice with geolocation, ain't it?</p>",
                  markOutLocation = function (lat, long) {
                      console.log(lat);
                      console.log(long);
                      $('#idlat').val(lat);
                      $('#idlgt').val(long);
                      /*var latLong = new google.maps.LatLng(lat, long);
                       //var latLong2 = new google.maps.LatLng(-16.505801033764936, -68.10068809509278);
                       // var distance = google.maps.geometry.spherical.computeDistanceBetween(latLong, latLong2);
                       // console.log(distance);
                       
                       marker = new google.maps.Marker(latLong);
                       map.setCenter(latLong, 13);
                       map.addOverlay(marker);
                       marker.openInfoWindow(markerText);
                       google.maps.Event.addListener(marker, "click", function () {
                       marker.openInfoWindow(markerText);
                       });*/
                  };
          //map.setUIToDefault();

          // Check for geolocation support	
          if (navigator.geolocation) {
              // Get current position
              navigator.geolocation.getCurrentPosition(function (position) {
                  // Success!
                  markOutLocation(position.coords.latitude, position.coords.longitude);
              },
                      function () {
                          // Gelocation fallback: Defaults to Stockholm, Sweden
                          markerText = "<p>Please accept geolocation for me to be able to find you. <br>I've put you in Stockholm for now.</p>";
                          markOutLocation(59.3325215, 18.0643818);
                      }
              );
          }
          else {
              // No geolocation fallback: Defaults to Eeaster Island, Chile
              markerText = "<p>No location support. Try Easter Island for now. :-)</p>";
              markOutLocation(-27.121192, -109.366424);
          }
      });
  })();
</script>
<script>
  /*
   $('#ajaxform').submit(function(e){
   //alert($('input[name=tipo]:checked', '#ajaxform').val());
   if($('input[name=tipo]:checked', '#ajaxform').val() == 'Medico'){
   $('#ajaxform').attr('action','<?= $this->Url->build(['controller' => 'Medicos', 'action' => 'buscador']); ?>');
   $('#ajaxform').submit();
   }
   if($('input[name=tipo]:checked', '#ajaxform').val() == 'Centro'){
   $('#ajaxform').attr('action','<?= $this->Url->build(['controller' => 'Centros', 'action' => 'buscador']); ?>');
   $('#ajaxform').submit();
   }
   if($('input[name=tipo]:checked', '#ajaxform').val() == 'Farmacia'){
   $('#ajaxform').attr('action','<?= $this->Url->build(['controller' => 'Farmacias', 'action' => 'buscador']); ?>');
   $('#ajaxform').submit();
   }
   e.preventDefault();
   
   });*/
</script>