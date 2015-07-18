<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=true"></script>
<section id="content" class="table-layout animated fadeIn">
    <!-- begin: .tray-center -->
    <div class="tray tray-center">
        <div class="mw1000 center-block">
            <div class="admin-form">
                <div class="panel heading-border">
                    <div class="panel-body bg-light">
                        <?= $this->Form->create($consultorio) ?>
                        <?php echo $this->Form->hidden('medico_id', ['value' => $idMedico]); ?>
                        <div class="section-divider mb40">
                            <span><?php echo "Formulario Consultorio - " . $medico->nombre ?></span>
                        </div>
                        <!-- Basic Inputs -->
                        <div class="row">
                            <div class="col-md-12">
                                <div class="section">
                                    <label class="field">
                                        <?php echo $this->Form->text('nombre', ['placeholder' => 'Nombre', 'class' => 'gui-input']); ?>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="section">
                                    <label class="field">
                                        <?php echo $this->Form->text('direccion', ['placeholder' => 'Direccion', 'class' => 'gui-input']); ?>
                                    </label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="section">
                                    <label class="field">
                                        <?php echo $this->Form->text('telefonos', ['placeholder' => 'Telefonos', 'class' => 'gui-input']); ?>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="section">
                                    <label class="field">
                                        <?php echo $this->Form->text('horarios', ['placeholder' => 'Horarios', 'class' => 'gui-input']); ?>
                                    </label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="section">
                                    <label class="field">
                                        <?php echo $this->Form->text('estado', ['placeholder' => 'estado', 'class' => 'gui-input']); ?>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="section">
                                    <label class="field">
                                        <?php echo $this->Form->textarea('descripcion', ['placeholder' => 'Descripcion', 'class' => 'gui-input']); ?>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="section-divider mv40" id="spy2">
                            <span>Ubicacion</span>                                
                        </div>

                        <div class="row">    
                            <?php echo $this->Form->hidden('lat', ['id' => 'frmlat']); ?>
                            <?php echo $this->Form->hidden('lng', ['id' => 'frmlng']); ?>
                            <div id="mapa" style="width: 100%; height: 400px;"></div>
                        </div>
                        <p>&nbsp;</p>
                        <!-- end .form-body section -->
                        <div class="panel-footer text-right">
                            <button type="submit" class="button btn-primary"> Registrar </button>
                            <button type="reset" class="button"> Cancel </button>
                        </div>
                        <!-- end .form-footer section -->
                        <?= $this->Form->end() ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?= $this->element('menuder/admin')?>
</section>

<script type="text/javascript">
  var map;

  function initialize() {
      var mapOptions = {
          zoom: 14,
          center: new google.maps.LatLng(-16.49, -68.12),
          mapTypeId: google.maps.MapTypeId.ROADMAP,
          scrollwheel: false
      };
      map = new google.maps.Map(document.getElementById('mapa'), mapOptions);

      var pos = new google.maps.LatLng(-16.49, -68.12);

      var marker = new google.maps.Marker({
          position: pos,
          map: map,
          title: "Arrastrar para mover",
          animation: google.maps.Animation.BOUNCE,
          draggable: true
      });

      function funcionArrastra() {
          var lat = marker.getPosition().lat();
          var lng = marker.getPosition().lng();
          //console.log(lat + '-' + lng);
          $('#frmlat').val(lat);
          $('#frmlng').val(lng);
      }

      google.maps.event.addListener(marker, 'drag', funcionArrastra);
      marker.setIcon('https://dl.dropboxusercontent.com/u/20056281/Iconos/male-2.png');
  }
  google.maps.event.addDomListener(window, 'load', initialize);

</script>