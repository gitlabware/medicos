<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=true"></script>
<section id="content" class="animated fadeIn">

    <!-- Begin .page-heading -->
    <div class="page-heading">

        <div class="media clearfix">
            <div class="media-left pr30">
                <a href="#">
                    <?php if (empty($medico->url)): ?>
                      <img class="media-object mw150" src="<?php echo $this->request->webroot; ?>img/iconos/doctor-icono.jpg" alt="..." height="230" width="210">
                    <?php else: ?>
                      <img class="media-object mw150" src="<?php echo $this->request->webroot; ?>/perfiles/<?= $medico->url; ?>" alt="..." height="230" width="210">
                    <?php endif; ?>
                </a>
            </div>                      
            <div class="media-body va-m">
                <h2 class="media-heading"> <?= $medico->nombre ?></h2>
                <p class="lead"><?= $medico->leyenda ?></p>
                <div class="media-links">
                    <ul class="list-inline list-unstyled">

                        <?php foreach ($lsociales as $so): ?>
                          <li>
                              <a href="<?= $so->url ?>" target="_blank" title="<?= $so->sociale->nombre ?>">
                                  <span class="<?= $so->sociale->icono ?>"></span>
                              </a>
                          </li>
                        <?php endforeach; ?>
                    </ul>
                </div>

            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-4">
            <div class="panel sort-disable mb50">
                <div class="panel-heading">
                    <span class="panel-title"> Informacion Basica</span>

                </div>
                <div class="panel-body">
                    <table class="table table-bordered" style="background-color: white;">
                        <tbody>
                            <tr>
                                <td style="font-weight: bold;">Sexo</td>
                                <td><?= $medico->sexo; ?></td>
                            </tr>
                            <tr>
                                <td style="font-weight: bold;">Fecha de Nacimiento</td>
                                <td><?= $medico->fecha_nacimiento; ?></td>
                            </tr>
                            <tr>
                                <td style="font-weight: bold;">Lugar</td>
                                <td><?= $medico->lugar; ?></td>
                            </tr>
                            <tr>
                                <td style="font-weight: bold;">Telefonos</td>
                                <td><?= $medico->telefonos ?></td>
                            </tr>
                            <tr>
                                <td style="font-weight: bold;">Direccion</td>
                                <td><?= $medico->direccion ?></td>
                            </tr>
                            <tr>
                                <td style="font-weight: bold;">Telefonos</td>
                                <td><?= $medico->telefonos ?></td>
                            </tr>
                            <tr>
                                <td style="font-weight: bold;">C.I.</td>
                                <td><?= $medico->ci ?></td>
                            </tr>
                            <tr>
                                <td style="font-weight: bold;">Especialidad</td>
                                <td><?= $medico->especialidade->nombre; ?></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

        </div>
        <!--<div class="col-md-8">
            <div class="panel sort-disable mb50">
                <div class="panel-heading">
                    <span class="panel-title"> Ubicacion</span>
                    <samp class="panel-controls" onclick="cargarmodal_u('<?= $this->Url->build(['action' => 'ajax_ubicacion']); ?>');">
                        <i class="fa fa-edit"></i>
                    </samp>
                </div>
                <div class="panel-body">
                    <div id="mimapa" style="width: 90%; height: 300px;;">

                    </div>
                </div>
            </div>
        -->
        <div class="col-md-8">
            <div class="tab-block">
                <ul class="nav nav-tabs">
                    <?php foreach ($lconsultorios as $key => $con): ?>
                      <?php
                      $tactive = '';
                      if ($key == 0) {
                        $tactive = 'active';
                      }
                      ?>
                      <li class="<?= $tactive ?>">
                          <a href="#tab<?= ($key + 1) ?>" data-toggle="tab" onclick="$('#tab<?= ($key + 1) ?>').load('<?= $this->Url->build(['controller' => 'Consultorios', 'action' => 'ajax_m_consul_t', $con->id]); ?>');"><?= $con->nombre ?></a>
                      </li>

                    <?php endforeach; ?>

                </ul>
                <div class="tab-content p30">
                    <?php foreach ($lconsultorios as $key => $con): ?>
                      <?php
                      $tactive = '';
                      if ($key == 0) {
                        $tactive = 'active';
                      }
                      ?>
                      <div id="tab<?= ($key + 1) ?>" class="tab-pane <?= $tactive ?>">

                      </div>
                      <script>
  <?php if ($key == 0): ?>
                          $('#tab<?= ($key + 1) ?>').load('<?= $this->Url->build(['controller' => 'Consultorios', 'action' => 'ajax_m_consul_t', $con->id]); ?>');
  <?php endif; ?>
                      </script>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div><br>




</section>

<script type="text/javascript">
  /*var milat = -16.49;
   var milng = -68.12;
   
   var map;
   
   function initialize() {
   var mapOptions = {
   zoom: 14,
   center: new google.maps.LatLng(milat, milng),
   mapTypeId: google.maps.MapTypeId.ROADMAP,
   scrollwheel: false
   };
   map = new google.maps.Map(document.getElementById('mimapa'), mapOptions);
   
   var pos = new google.maps.LatLng(milat, milng);
   
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
   */

  function carga_mapa_a(nombreini) {
      google.maps.event.addDomListener(window, 'load', nombreini());
  }
  function cargarmodal_u(urll) {

      jQuery("#spin-cargando-mod").show();
      jQuery("#divmodal").hide();
      $.magnificPopup.open({
          removalDelay: 500, //delay removal by X to allow out-animation,
          items: {
              src: '#mimodal'
          },
          // overflowY: 'hidden', // 
          callbacks: {
              beforeOpen: function (e) {
                  this.st.mainClass = 'mfp-zoomIn';
              }
          },
          midClick: true // allow opening popup on middle mouse click. Always set it to true if you don't provide alternative source.
      });
      jQuery("#divmodal").load(urll, function (responseText, textStatus, req) {
          if (textStatus == "error")
          {
              alert("error!!!");
          }
          else {
              jQuery("#spin-cargando-mod").hide(500);
              jQuery("#divmodal").show();

              //google.maps.event.trigger(map_ubi, 'resize');
              //map_ubi.setCenter(new google.maps.LatLng(, ));

          }
      });


  }
</script>