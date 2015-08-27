
<div class="row">
    <samp class="panel-controls" onclick="window.location.href = '<?= $this->Url->build(['action' => 'edit_cons', $idConsultorio]); ?>';">
        <i class="fa fa-edit"></i>
    </samp>

    <div class="col-md-12">
        <div id="mapa-m<?php echo $consultorio->id ?>" style="width: 90%; height: 300px;;">

        </div>
    </div>

</div>
<br>
<div class="row">
    <div class="col-md-5">
        <table class="table table-bordered">
            <tbody>
                <tr>
                    <td style="font-weight: bold;">Nombre</td>
                    <td><?= $consultorio->nombre ?></td>
                </tr>
                <tr>
                    <td style="font-weight: bold;">Direccion</td>
                    <td><?= $consultorio->direccion ?></td>
                </tr>
                <tr>
                    <td style="font-weight: bold;">Telefono</td>
                    <td><?= $consultorio->telefonos ?></td>
                </tr>
                <tr>
                    <td style="font-weight: bold;">Descripcion</td>
                    <td><?= $consultorio->descripcion ?></td>
                </tr>
            </tbody>
        </table>
    </div>
    <div class="col-md-7">
        <div id="tabla-horarios">
            <?= $consultorio->horarios ?>
        </div>
    </div>
</div>
<?php
$lat = -16.49;
$lng = -68.12;

if (!empty($consultorio->lat)) {
  $lat = $consultorio->lat;
}
if (!empty($consultorio->lng)) {
  $lng = $consultorio->lng;
}
?>
<script type="text/javascript">

  var <?php echo 'map'.$consultorio->id?> ;
  function <?php echo 'initialize'.$consultorio->id?>() {
      var <?php echo 'mapOptions'.$consultorio->id?> = {
          zoom: 14,
          center: new google.maps.LatLng(<?php echo $lat; ?>, <?php echo $lng; ?>),
          mapTypeId: google.maps.MapTypeId.ROADMAP,
          scrollwheel: false
      };
      <?php echo 'map'.$consultorio->id?> = new google.maps.Map(document.getElementById('mapa-m<?php echo $consultorio->id ?>'), <?php echo 'mapOptions'.$consultorio->id?>);

      var <?php echo 'pos'.$consultorio->id?> = new google.maps.LatLng(<?php echo $lat; ?>, <?php echo $lng; ?>);

      var <?php echo 'marker'.$consultorio->id?> = new google.maps.Marker({
          position: <?php echo 'pos'.$consultorio->id?>,
          map: <?php echo 'map'.$consultorio->id?>,
          title: "Arrastrar para mover",
          animation: google.maps.Animation.BOUNCE,
          draggable: false
      });

      <?php echo 'marker'.$consultorio->id?>.setIcon('https://dl.dropboxusercontent.com/u/20056281/Iconos/male-2.png');
  }
  
  //google.maps.event.addDomListener(window, 'load', <?php //echo 'initialize'.$consultorio->id?>);
  carga_mapa_a(<?php echo 'initialize'.$consultorio->id?>);

</script>