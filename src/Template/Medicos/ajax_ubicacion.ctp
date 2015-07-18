
<div class="panel-heading">
    <span class="panel-title">
        <i class="fa fa-edit"></i>Editar Datos</span>
</div>
<!-- end .panel-heading section -->

<?= $this->Form->create($medico); ?>
<div class="panel-body p25">
    <div class="section row">
        <div class="col-md-12">
            <?php echo $this->Form->hidden('lat', ['id' => 'frmlat']); ?>
            <?php echo $this->Form->hidden('lng', ['id' => 'frmlng']); ?>
            <div id="mapa_ubi" style="width: 100%; height: 300px;"></div>
        </div>
    </div>
</div>
<!-- end .form-body section -->

<div class="panel-footer">
    <button type="submit" class="button btn-primary">Registrar</button>
</div>
<!-- end .form-footer section -->
<?= $this->Form->end(); ?>

<?php
$lat = -16.49;
$lng = -68.12;

if (!empty($medico->lat)) {
  $lat = $medico->lat;
}
if (!empty($medico->lng)) {
  $lng = $medico->lng;
}
?>
<script type="text/javascript">

  var map_ubi;

  function initialize_ub() {
      var mapOptions_u = {
          zoom: 14,
          center: new google.maps.LatLng(<?php echo $lat; ?>, <?php echo $lng; ?>),
          mapTypeId: google.maps.MapTypeId.ROADMAP,
          scrollwheel: false
      };
      map_ubi = new google.maps.Map(document.getElementById('mapa_ubi'), mapOptions_u);

      var pos_u = new google.maps.LatLng(<?php echo $lat; ?>, <?php echo $lng; ?>);

      var marker_u = new google.maps.Marker({
          position: pos_u,
          map: map_ubi,
          title: "Arrastrar para mover",
          animation: google.maps.Animation.BOUNCE,
          draggable: true
      });

      function funcionArrastra() {
          var lat = marker_u.getPosition().lat();
          var lng = marker_u.getPosition().lng();
          //console.log(lat + '-' + lng);
          $('#frmlat').val(lat);
          $('#frmlng').val(lng);
      }

      google.maps.event.addListener(marker_u, 'drag', funcionArrastra);
      marker_u.setIcon('https://dl.dropboxusercontent.com/u/20056281/Iconos/male-2.png');
  }
  google.maps.event.addDomListener(window, 'load', initialize_ub());

</script>