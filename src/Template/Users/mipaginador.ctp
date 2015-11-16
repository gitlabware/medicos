<section id="content" class="table-layout animated fadeIn">
    <!-- begin: .tray-center -->
    <div class="tray tray-center">

        <!-- Search Results Panel  -->
        <div class="panel">
            <div class="panel-heading">
                <span class="panel-title text-muted hidden-xs">Se encontro <?= $this->Paginator->counter(['format' => '{{count}}']) ?> resultados </span>
                <ul class="nav panel-tabs-border panel-tabs-merge panel-tabs">
                    <li class="active"><a href="#search" data-toggle="tab">Classic Search</a></li>
                </ul>
            </div>
            <div class="panel-menu">
                <?= $this->Form->create(NULL); ?>
                <div class="input-group input-hero input-hero-sm">
                    <span class="input-group-addon">
                        <i class="fa fa-search"></i>
                    </span>
                    <?= $this->Form->text('busqueda', ['class' => 'form-control', 'placeholder' => 'Ingrese la busqueda..', 'id' => 'icon-filter']); ?>
                </div>
                <?= $this->Form->hidden('lat', ['id' => 'idlat']); ?>
                <?= $this->Form->hidden('lgt', ['id' => 'idlgt']); ?>
                <?php $this->Form->end(); ?>
            </div>
            <div class="panel-body ph20">
                <div class="tab-content">

                    <!-- Classic Search Pane -->
                    <div id="search" class="tab-pane active">

                        <!-- Search Pane Title -->
                        <h3>Mostrando <b class="text-primary"><?= $this->Paginator->counter(['format' => '{{current}}']) ?></b> resultados para la busqueda</h3>
                        <hr class="alt">

                        <div class="row">
                            <div class="col-md-12" style="padding-top: 16px; padding-left: 23px; padding-right: 15px;" id="contenido-busqueda">
                                <div id="c-ajax" style="display: none;">

                                </div>
                                <div id="c-actual">
                                    <?php $drow = FALSE; ?>
                                    <?php foreach ($l_medicos as $key => $me): ?>
                                      <?php if ($me->tipo == 'Medicos'): ?>
                                        <?php if (($key % 2) == 0): ?>
                                          <?php $drow = TRUE; ?>
                                          <div class="row">
                                            <?php endif; ?>
                                            <div class="col-md-6">
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <?php if ($me->sexo == 'Masculino'): ?>

                                                          <?php if (empty($me->imagen)): ?>
                                                            <img class="media-object mw150" src="<?php echo $this->request->webroot; ?>img/iconos/doctor-icono.jpg" alt="..." height="134" width="134">
                                                          <?php else: ?>
                                                            <img class="media-object mw150" src="<?php echo $this->request->webroot; ?>/perfiles/<?= $me->imagen; ?>" alt="..." height="134" width="134">
                                                          <?php endif; ?>
                                                        <?php else: ?>
                                                          <?php if (empty($me->imagen)): ?>
                                                            <img class="media-object mw150" src="<?php echo $this->request->webroot; ?>img/iconos/doctora-icono.jpg" alt="..." height="134" width="134">
                                                          <?php else: ?>
                                                            <img class="media-object mw150" src="<?php echo $this->request->webroot; ?>/perfiles/<?= $me->imagen; ?>" alt="..." height="134" width="134">
                                                          <?php endif; ?>
                                                        <?php endif; ?>


                                            <!--  <img src="<?php echo $this->request->webroot . 'perfiles/' . $me->imagen; ?>" width="134px" height="134px" class="user-avatar"> -->
                                                        <div class="caption">
                                                            <h5>&nbsp;<?= $me->especialidad ?></h5>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-8">
                                                        <a href="<?= $this->Url->build(['action' => 'vperfil', $me->id]) ?>" class="text-system"><h3><?= $me->nombre ?></h3></a>
                                                        <ul class="result-meta">
                                                            <li><a href="#"> 45 ratings </a></li>
                                                            <li>
                                                                <i class="fa fa-star-o text-warning"></i>
                                                                <i class="fa fa-star-o text-warning"></i>
                                                                <i class="fa fa-star-o text-warning"></i>
                                                                <i class="fa fa-star-o text-warning"></i>
                                                                <i class="fa fa-star-o text-warning"></i>
                                                            </li>
                                                            <li><a href="#"> $22.99 </a></li>
                                                        </ul>
                                                        <b>Telefonos: </b><?= $me->telefonos ?><br>
                                                        <b>E-mail: </b> <?= $me->mail ?><br>
                                                        <b>Sexo: </b> <?= $me->sexo ?>
                                                    </div>
                                                </div>

                                            </div>
                                            <?php if (($key % 2) == 1): ?>
                                          </div>
                                        <?php endif; ?>
                                      <?php elseif ($me->tipo == 'Farmacias'): ?>
                                        <?php if (($key % 2) == 0): ?>
                                          <?php $drow = TRUE; ?>
                                          <div class="row">
                                            <?php endif; ?>
                                            <div class="col-md-6">
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <?php if (empty($me->imagen)): ?>
                                                          <img class="media-object mw150" src="<?php echo $this->request->webroot; ?>img/iconos/farmacia.png" alt="..." height="134" width="134">
                                                        <?php else: ?>
                                                          <img class="media-object mw150" src="<?php echo $this->request->webroot; ?>/perfiles/<?= $me->imagen; ?>" alt="..." height="134" width="134">
                                                        <?php endif; ?>


                                            <!--  <img src="<?php echo $this->request->webroot . 'perfiles/' . $me->imagen; ?>" width="134px" height="134px" class="user-avatar"> -->
                                                        <div class="caption">
                                                            <h5>&nbsp;<?= $me->especialidad ?></h5>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-8">
                                                        <a href="<?= $this->Url->build(['action' => 'vperfil', $me->id]) ?>" class="text-system"><h3><?= $me->nombre ?></h3></a>
                                                        <ul class="result-meta">
                                                            <li><a href="#"> 45 ratings </a></li>
                                                            <li>
                                                                <i class="fa fa-star-o text-warning"></i>
                                                                <i class="fa fa-star-o text-warning"></i>
                                                                <i class="fa fa-star-o text-warning"></i>
                                                                <i class="fa fa-star-o text-warning"></i>
                                                                <i class="fa fa-star-o text-warning"></i>
                                                            </li>
                                                            <li><a href="#"> <?= 'a '.  round($me->distancia,2).' m' ?></a></li>
                                                        </ul>
                                                        <b>Telefonos: </b><?= $me->telefonos ?><br>
                                                        <b>Direccion: </b> <?= $me->direccion ?><br>
                                                    </div>
                                                </div>

                                            </div>
                                            <?php if (($key % 2) == 1): ?>
                                          </div>
                                        <?php endif; ?>
                                      <?php elseif ($me->tipo == 'Centros'): ?>
                                        <?php if (($key % 2) == 0): ?>
                                          <?php $drow = TRUE; ?>
                                          <div class="row">
                                            <?php endif; ?>
                                            <div class="col-md-6">
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <?php if (empty($me->imagen)): ?>
                                                          <img class="media-object mw150" src="<?php echo $this->request->webroot; ?>img/iconos/icono-centros_de_salud_opt-300x300.png" alt="..." height="134" width="134">
                                                        <?php else: ?>
                                                          <img class="media-object mw150" src="<?php echo $this->request->webroot; ?>/perfiles/<?= $me->imagen; ?>" alt="..." height="134" width="134">
                                                        <?php endif; ?>


                                            <!--  <img src="<?php echo $this->request->webroot . 'perfiles/' . $me->imagen; ?>" width="134px" height="134px" class="user-avatar"> -->
                                                        <div class="caption">
                                                            <h5>&nbsp;<?= $me->especialidad ?></h5>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-8">
                                                        <a href="<?= $this->Url->build(['action' => 'vperfil', $me->id]) ?>" class="text-system"><h3><?= $me->nombre ?></h3></a>
                                                        <ul class="result-meta">
                                                            <li><a href="#"> 45 ratings </a></li>
                                                            <li>
                                                                <i class="fa fa-star-o text-warning"></i>
                                                                <i class="fa fa-star-o text-warning"></i>
                                                                <i class="fa fa-star-o text-warning"></i>
                                                                <i class="fa fa-star-o text-warning"></i>
                                                                <i class="fa fa-star-o text-warning"></i>
                                                            </li>
                                                            <li><a href="#"> $22.99 </a></li>
                                                        </ul>
                                                        <b>Telefonos: </b><?= $me->telefonos ?><br>
                                                        <b>Direccion: </b> <?= $me->direccion ?><br>
                                                    </div>
                                                </div>

                                            </div>
                                            <?php if (($key % 2) == 1): ?>
                                          </div>
                                        <?php endif; ?>
                                      <?php endif; ?>

                                    <?php endforeach; ?>
                                    <?php
                                    if ($drow) {
                                      echo '</div>';
                                    }
                                    ?>
                                </div>

                            </div>
                        </div>

                    </div>

                </div>
            </div>
            <div class="panel-footer clearfix">
                <nav>
                    <ul class="pagination pull-right">
                        <?= $this->Paginator->prev('<i class="fa fa-angle-left"></i> Anterior', ['escape' => false]) ?>
                        <?= $this->Paginator->numbers() ?>
                        <?= $this->Paginator->next('Siguiente <i class="fa fa-angle-right"></i>', ['escape' => false]) ?>
                    </ul>
                </nav>

            </div>
        </div>

    </div>


</section>
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
