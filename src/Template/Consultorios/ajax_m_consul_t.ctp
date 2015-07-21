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
            <table class="table table-bordered" id="tabla-horarios-t">
                <thead>
                    <tr class="primary">
                        <th colspan="6" class="text-center">
                            <b>HORARIOS</b>
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="success">
                        <td class="text-center">Lunes</td>
                        <td class="text-center">Martes</td>
                        <td class="text-center">Miercoles</td>
                        <td class="text-center">Jueves</td>
                        <td class="text-center">Viernes</td>
                        <td class="text-center">Sabado</td>
                    </tr>
                    <tr class="editablec" contenteditable="false">
                        <td class="text-center">HORA</td>
                        <td class="text-center">HORA</td>
                        <td class="text-center">HORA</td>
                        <td class="text-center">HORA</td>
                        <td class="text-center">HORA</td>
                        <td class="text-center">HORA</td>
                    </tr>
                    <tr class="editablec" contenteditable="false">
                        <td class="text-center">HORA</td>
                        <td class="text-center">HORA</td>
                        <td class="text-center">HORA</td>
                        <td class="text-center">HORA</td>
                        <td class="text-center">HORA</td>
                        <td class="text-center">HORA</td>
                    </tr>
                    <tr class="editablec" contenteditable="false">
                        <td class="text-center">HORA</td>
                        <td class="text-center">HORA</td>
                        <td class="text-center">HORA</td>
                        <td class="text-center">HORA</td>
                        <td class="text-center">HORA</td>
                        <td class="text-center">HORA</td>
                    </tr>
                    <tr class="editablec" contenteditable="false">
                        <td class="text-center">HORA</td>
                        <td class="text-center">HORA</td>
                        <td class="text-center">HORA</td>
                        <td class="text-center">HORA</td>
                        <td class="text-center">HORA</td>
                        <td class="text-center">HORA</td>
                    </tr>
                </tbody>
            </table>
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

<?php if (!empty($consultorio->horarios)): ?>
    //$('#tabla-horarios').html('<?php// echo $consultorio->horarios ?>');
<?php endif; ?>

  var map ;
  function initialize() {
      var mapOptions = {
          zoom: 14,
          center: new google.maps.LatLng(<?php echo $lat; ?>, <?php echo $lng; ?>),
          mapTypeId: google.maps.MapTypeId.ROADMAP,
          scrollwheel: false
      };
      map = new google.maps.Map(document.getElementById('mapa-m<?php echo $consultorio->id ?>'), mapOptions);

      var pos = new google.maps.LatLng(<?php echo $lat; ?>, <?php echo $lng; ?>);

      var marker = new google.maps.Marker({
          position: pos,
          map: map,
          title: "Arrastrar para mover",
          animation: google.maps.Animation.BOUNCE,
          draggable: false
      });

      marker.setIcon('https://dl.dropboxusercontent.com/u/20056281/Iconos/male-2.png');
  }
  google.maps.event.addDomListener(window, 'load', initialize);

</script>