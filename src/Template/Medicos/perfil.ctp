<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=true"></script>
<section id="content" class="animated fadeIn">

    <!-- Begin .page-heading -->
    <div class="page-heading">
        <div class="widget-menu pull-right mr10">
            <div class="btn-group">
                <button type="button" class="btn btn-xs btn-success" title="Editar" onclick="cargarmodal('<?= $this->Url->build(['action' => 'ajax_edit1']); ?>');">
                    <span class="glyphicon glyphicon-edit fs11 mr5"></span>Editar
                </button>
            </div>
        </div>
        <div class="media clearfix">
            <div class="media-left pr30">
                <a href="#">
                    <div class="widget-menu pull-right mr10">
                        <div class="btn-group">
                            <button type="button" class="btn btn-xs btn-success" title="Editar" onclick="cargarmodal('<?= $this->Url->build(['action' => 'ajax_imagen_p', $medico->id]); ?>');">
                                <span class="glyphicon glyphicon-edit fs11 mr5"></span>Editar Imagen
                            </button>
                        </div>
                    </div>
                    <?php if ($medico->sexo == 'Masculino'): ?>
                        <?php if (empty($medico->url)): ?>
                            <img class="media-object mw150" src="<?php echo $this->request->webroot; ?>img/iconos/doctor-icono.jpg" alt="..." height="230" width="210">
                        <?php else: ?>
                            <img class="media-object mw150" src="<?php echo $this->request->webroot; ?>/perfiles/<?= $medico->url; ?>" alt="..." height="230" width="210">
                        <?php endif; ?>
                    <?php else: ?>
                        <?php if (empty($medico->url)): ?>
                            <img class="media-object mw150" src="<?php echo $this->request->webroot; ?>img/iconos/doctora-icono.jpg" alt="..." height="230" width="210">
                        <?php else: ?>
                            <img class="media-object mw150" src="<?php echo $this->request->webroot; ?>/perfiles/<?= $medico->url; ?>" alt="..." height="230" width="210">
                        <?php endif; ?>
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
                                <a href="javascript:" title="<?= $so->nombre ?>">
                                    <span class="<?= $so->icono ?>"></span>
                                </a> 
                                <div class="widget-menu pull-right mr10">
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-xs btn-success" title="Editar" onclick="cargarmodal('<?= $this->Url->build(['action' => 'ajax_sociales', $medico->id, $so->id]) ?>');">
                                            <span class="glyphicon glyphicon-edit fs11 mr5"></span>Editar
                                    </div>
                                </div>
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
                    <div class="widget-menu pull-right mr10">
                        <div class="btn-group">
                            <button type="button" class="btn btn-xs btn-success" onclick="cargarmodal('<?= $this->Url->build(['action' => 'ajax_edit2']); ?>');">
                                <span class="glyphicon glyphicon-edit fs11 mr5"></span>Editar
                            </button>
                        </div>
                    </div>
                </div>
                <div class="panel-body">

                    <table class="table table-bordered" style="background-color: white;">
                        <tbody>
                            <tr>
                                <td><i class="fa fa-desktop text-info"></i></td>
                                <td style="font-weight: bold;">Sexo</td>
                                <td><?= $medico->sexo; ?></td>
                            </tr>
                            <tr>
                                <td><i class="fa fa-calendar-o text-alert"></i></td>

                                <td style="font-weight: bold;">Fecha de Nacimiento</td>
                                <td><?= $medico->fecha_nacimiento; ?></td>
                            </tr>
                            <tr>
                                <td><i class="fa fa-location-arrow text-info pr10"></i></td>
                                <td style="font-weight: bold;">Lugar</td>
                                <td><?= $medico->lugar; ?></td>
                            </tr>
                            <tr>
                                <td><i class="fa fa-phone text-warning"></i></td>
                                <td style="font-weight: bold;">Telefonos</td>
                                <td><?= $medico->telefonos ?></td>
                            </tr>
                            <tr>
                                <td><i class="fa fa-map-marker text-primary"></i></td>
                                <td style="font-weight: bold;">Direccion</td>
                                <td><?= $medico->direccion ?></td>
                            </tr>
                         
                            <tr>
                                <td><i class="fa fa-barcode text-warning"></i></td>
                                <td style="font-weight: bold;">C.I.</td>
                                <td><?= $medico->ci ?></td>
                            </tr>
                            <tr>
                                <td><i class="fa fa-medkit text-alert"></i></td>
                                <td style="font-weight: bold;">Especialidad</td>
                                <td><?= $medico->especialidade->nombre; ?></td>
                            </tr>
                        </tbody>
                    </table>

                </div>
            </div>
            <div class="panel sort-disable mb50">
                <div class="panel-heading">
                    <span class="panel-title"> Informacion academica/profesional</span>
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-md-12">
                            <button class="btn btn-success col-md-12" onclick="cargarmodal('<?= $this->Url->build(['controller' => 'Curriculums','action'=> 'curriculum_acad']); ?>');"><i class="fa fa-plus"></i> Add Formacion Academica</button>
                        </div>
                    </div><br>
                    <div class="row">
                        <div class="col-md-12">
                            <button class="btn btn-success col-md-12" onclick="cargarmodal('<?= $this->Url->build(['controller' => 'Curriculums','action'=> 'curriculum_expe']); ?>');"><i class="fa fa-plus"></i> Add Experiencia Profecional</button>
                        </div>
                    </div><br>
                    <div class="row">
                        <div class="col-md-12">
                            <button class="btn btn-success col-md-12" onclick="cargarmodal('<?= $this->Url->build(['controller' => 'Curriculums','action'=> 'curriculum_comple']); ?>');"><i class="fa fa-plus"></i> Add Formacion Complementaria</button>
                        </div>
                    </div><br>
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
                    <div class="widget-menu pull-right mr10">
                        <div class="btn-group">
                            <button type="button" class="btn btn-xs btn-success"  onclick="window.location.href = '<?= $this->Url->build(['controller' => 'Consultorios', 'action' => 'add_cons']); ?>';">
                                <span class="glyphicon glyphicon-plus fs11 mr5"></span>Adicionar
                            </button>
                        </div>
                    </div>
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
    
    <div class="row">
        <div class="col-md-4">
             
                      <li class="dd-item" data-id="11">
                        <div class="dd-handle">Formacion academica</div>
                        <div class="dd-content">
                          <div class="media">
                            <span class="text-warning pull-right fs11 fw600">Article</span>
                            <a class="media-left" href="#">
                              <img data-src="holder.js/46x42" alt="holder-img">
                            </a>
                            <div class="media-body">
                              <h4 class="media-heading">Sara Downs
                                <small class="text-muted">- 08/16/22</small>
                              </h4>
                              <p class="mb5">Last Updated 36 days ago by
                                <a class="text-system" href="#"> Max </a>
                              </p>
                            </div>
                          </div>
                          <div class="media br-t mt5 pt10">
                            <a class="media-left hidden" href="#">
                              <img data-src="holder.js/46x42" alt="holder-img">
                            </a>
                            <div class="media-body">
                              <h4 class="media-heading">Attachments
                                <span class="label label-xs label-success ml5">Updated</span>
                              </h4>
                              <p class="text-muted">
                                <?= $medico->sexo; ?>
                              <p class="text-muted mb5">
                                  <span class="fa fa-paperclip pr10"></span><?=  $curriculums[2]['titulacion']; ?></p>
                            </div>
                          </div>
                        </div>
                      </li>
                    </ol>
            
        </div>
         <div class="col-md-4">
             
                      <li class="dd-item" data-id="11">
                        <div class="dd-handle">Camping trips for Girls</div>
                        <div class="dd-content">
                          <div class="media">
                            <span class="text-warning pull-right fs11 fw600">Article</span>
                            <a class="media-left" href="#">
                              <img data-src="holder.js/46x42" alt="holder-img">
                            </a>
                            <div class="media-body">
                              <h4 class="media-heading">Sara Downs
                                <small class="text-muted">- 08/16/22</small>
                              </h4>
                              <p class="mb5">Last Updated 36 days ago by
                                <a class="text-system" href="#"> Max </a>
                              </p>
                            </div>
                          </div>
                          <div class="media br-t mt5 pt10">
                            <a class="media-left hidden" href="#">
                              <img data-src="holder.js/46x42" alt="holder-img">
                            </a>
                            <div class="media-body">
                              <h4 class="media-heading">Attachments
                                <span class="label label-xs label-success ml5">Updated</span>
                              </h4>
                              <p class="text-muted">
                                <span class="fa fa-paperclip pr10"></span>The-Grand-Canyon_Cover.jpeg</p>
                              <p class="text-muted mb5">
                                <span class="fa fa-paperclip pr10"></span>military_vet_interview-questions.text</p>
                            </div>
                          </div>
                        </div>
                      </li>
                    </ol>
            
        </div>
         <div class="col-md-4">
          
                      <li class="dd-item" data-id="11">
                        <div class="dd-handle">Camping trips for Girls</div>
                        <div class="dd-content">
                          <div class="media">
                            <span class="text-warning pull-right fs11 fw600">Article</span>
                            <a class="media-left" href="#">
                              <img data-src="holder.js/46x42" alt="holder-img">
                            </a>
                            <div class="media-body">
                              <h4 class="media-heading">Sara Downs
                                <small class="text-muted">- 08/16/22</small>
                              </h4>
                              <p class="mb5">Last Updated 36 days ago by
                                <a class="text-system" href="#"> Max </a>
                              </p>
                            </div>
                          </div>
                          <div class="media br-t mt5 pt10">
                            <a class="media-left hidden" href="#">
                              <img data-src="holder.js/46x42" alt="holder-img">
                            </a>
                            <div class="media-body">
                              <h4 class="media-heading">Attachments
                                <span class="label label-xs label-success ml5">Updated</span>
                              </h4>
                              <p class="text-muted">
                                <span class="fa fa-paperclip pr10"></span>The-Grand-Canyon_Cover.jpeg</p>
                              <p class="text-muted mb5">
                                <span class="fa fa-paperclip pr10"></span>military_vet_interview-questions.text</p>
                            </div>
                          </div>
                        </div>
                      </li>
                    </ol>
            
        </div>
            
        
    </div>
   




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
            // overflowY: 'hiddenn', // 
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