<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=true"></script>
<section id="content" class="animated fadeIn">

    <!-- Begin .page-heading -->
    <div class="page-heading">

        <samp class="panel-controls" onclick="cargarmodal('<?= $this->Url->build(['action' => 'ajax_edit1']); ?>');">
            <i class="fa fa-edit"></i>
        </samp>

        <div class="media clearfix">
            <div class="media-left pr30">
                <a href="#">
                    <samp class="panel-controls">
                        <i class="fa fa-edit"></i>
                    </samp>
                    <img class="media-object mw150" src="<?php echo $this->request->webroot; ?>img/avatars/profile_avatar.jpg" alt="...">
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
                              <samp class="panel-controls" onclick="cargarmodal('<?= $this->Url->build(['action' => 'ajax_sociales', $medico->id, $so->id]) ?>');">
                                  <i class="fa fa-edit"></i>
                              </samp>
                          </li>
                        <?php endforeach; ?>
                    </ul>
                </div>

            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-6">
            <div class="panel sort-disable mb50">
                <div class="panel-heading">
                    <span class="panel-title"> Informacion Basica</span>
                    <samp class="panel-controls" onclick="cargarmodal('<?= $this->Url->build(['action' => 'ajax_edit2']); ?>');">
                        <i class="fa fa-edit"></i>
                    </samp>
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
        <div class="col-md-6">
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

        </div>
    </div><br>

    <div class="row">
        <div class="col-md-4">
            <div class="panel">
                <div class="panel-heading">
                    <span class="panel-icon">
                        <i class="fa fa-star"></i>
                    </span>
                    <span class="panel-title"> User Popularity</span>
                </div>
                <div class="panel-body pn">
                    <table class="table mbn tc-icon-1 tc-med-2 tc-bold-last">
                        <thead>
                            <tr class="hidden">
                                <th class="mw30">#</th>
                                <th>First Name</th>
                                <th>Revenue</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <span class="fa fa-desktop text-warning"></span>
                                </td>
                                <td>Television</td>
                                <td>
                                    <i class="fa fa-caret-up text-info pr10"></i>$855,913</td>
                            </tr>
                            <tr>
                                <td>
                                    <span class="fa fa-microphone text-primary"></span>
                                </td>
                                <td>Radio</td>
                                <td>
                                    <i class="fa fa-caret-down text-danger pr10"></i>$349,712</td>
                            </tr>
                            <tr>
                                <td>
                                    <span class="fa fa-newspaper-o text-info"></span>
                                </td>
                                <td>Newspaper</td>
                                <td>
                                    <i class="fa fa-caret-up text-info pr10"></i>$1,259,742</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="panel">
                <div class="panel-heading">
                    <span class="panel-icon">
                        <i class="fa fa-trophy"></i>
                    </span>
                    <span class="panel-title"> My Skills</span>
                </div>
                <div class="panel-body pb5">
                    <span class="label label-warning mr5 mb10 ib lh15">Default</span>
                    <span class="label label-primary mr5 mb10 ib lh15">Primary</span>
                    <span class="label label-info mr5 mb10 ib lh15">Success</span>
                    <span class="label label-success mr5 mb10 ib lh15">Info</span>
                    <span class="label label-alert mr5 mb10 ib lh15">Warning</span>
                    <span class="label label-system mr5 mb10 ib lh15">Danger</span>
                    <span class="label label-info mr5 mb10 ib lh15">Success</span>
                    <span class="label label-success mr5 mb10 ib lh15">Ui Design</span>
                    <span class="label label-primary mr5 mb10 ib lh15">Primary</span>

                </div>
            </div>
            <div class="panel">
                <div class="panel-heading">
                    <span class="panel-icon">
                        <i class="fa fa-pencil"></i>
                    </span>
                    <span class="panel-title">About Me</span>
                </div>
                <div class="panel-body pb5">

                    <h6>Experience</h6>

                    <h4>Facebook Internship</h4>
                    <p class="text-muted"> University of Missouri, Columbia
                        <br> Student Health Center, June 2010 - 2012
                    </p>

                    <hr class="short br-lighter">

                    <h6>Education</h6>

                    <h4>Bachelor of Science, PhD</h4>
                    <p class="text-muted"> University of Missouri, Columbia
                        <br> Student Health Center, June 2010 through Aug 2011
                    </p>

                    <hr class="short br-lighter">

                    <h6>Accomplishments</h6>

                    <h4>Successful Business</h4>
                    <p class="text-muted pb10"> University of Missouri, Columbia
                        <br> Student Health Center, June 2010 through Aug 2011
                    </p>

                </div>
            </div>
        </div>
        <div class="col-md-8">

            <div class="tab-block">
                <ul class="nav nav-tabs">
                    <li class="active">
                        <a href="#tab1" data-toggle="tab">Activity</a>
                    </li>
                    <li>
                        <a href="#tab1" data-toggle="tab">Social</a>
                    </li>
                    <li>
                        <a href="#tab1" data-toggle="tab">Media</a>
                    </li>
                </ul>
                <div class="tab-content p30" style="height: 730px;">
                    <div id="tab1" class="tab-pane active">
                        <div class="media">
                            <a class="pull-left" href="#"> <img class="media-object mn thumbnail mw50" src="<?php echo $this->request->webroot; ?>img/avatars/4.jpg" alt="..."> </a>
                            <div class="media-body">
                                <h5 class="media-heading mb20">Simon Rivers Posted
                                    <small> - 3 hours ago</small>
                                </h5>
                                <img src="<?php echo $this->request->webroot; ?>img/stock/1.jpg" class="mw140 mr25 mb20"><img src="<?php echo $this->request->webroot; ?>img/stock/2.jpg" class="mw140 mr25 mb20"> <img src="<?php echo $this->request->webroot; ?>img/stock/3.jpg" class="mw140 mb20">
                                <div class="media-links">
                                    <span class="text-light fs12 mr10">
                                        <span class="fa fa-thumbs-o-up text-primary mr5"></span> Like </span>
                                    <span class="text-light fs12 mr10">
                                        <span class="fa fa-share text-primary mr5"></span> Share </span>
                                    <span class="text-light fs12 mr10">
                                        <span class="fa fa-floppy-o text-primary mr5"></span> Save </span>
                                    <span class="text-light fs12 mr10">
                                        <span class="fa fa-comment text-primary mr5"></span> Comment </span>
                                </div>
                            </div>
                        </div>
                        <div class="media mt25">
                            <a class="pull-left" href="#"> <img class="media-object mn thumbnail thumbnail-sm rounded mw40" src="<?php echo $this->request->webroot; ?>img/avatars/3.jpg" alt="..."> </a>
                            <div class="media-body mb5">
                                <h5 class="media-heading mbn">Simon Rivers Posted
                                    <small> - 3 hours ago</small>
                                </h5>
                                <p> Omg so freaking sweet dude.</p>
                                <div class="media pb10">
                                    <a class="pull-left" href="#"> <img class="media-object mn thumbnail thumbnail-sm rounded mw40" src="<?php echo $this->request->webroot; ?>img/avatars/4.jpg" alt="..."> </a>
                                    <div class="media-body mb5">
                                        <h5 class="media-heading mbn">Jessica Wong
                                            <small> - 3 hours ago</small>
                                        </h5>
                                        <p>Omgosh I'm in love</p>
                                    </div>
                                </div>
                                <div class="media mtn">
                                    <a class="pull-left" href="#"> <img class="media-object mn thumbnail thumbnail-sm rounded mw40" src="<?php echo $this->request->webroot; ?>img/avatars/3.jpg" alt="..."> </a>
                                    <div class="media-body mb5">
                                        <h5 class="media-heading mbn">Jessica Wong
                                            <small> - 3 hours ago</small>
                                        </h5>
                                        <p>Omgosh I'm in love</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="media mt25">
                            <a class="pull-left" href="#"> <img class="media-object thumbnail mw50" src="<?php echo $this->request->webroot; ?>img/avatars/5.jpg" alt="..."> </a>
                            <div class="media-body">
                                <h5 class="media-heading mb20">Simon Rivers Posted
                                    <small> - 3 hours ago</small>
                                </h5>
                                <img src="<?php echo $this->request->webroot; ?>img/stock/4.jpg" class="mw140 mr25 mb20"><img src="<?php echo $this->request->webroot; ?>img/stock/2.jpg" class="mw140 mr25 mb20"> <img src="<?php echo $this->request->webroot; ?>img/stock/5.jpg" class="mw140 mb20">
                                <div class="media-links">
                                    <span class="text-light fs12 mr10">
                                        <span class="fa fa-thumbs-o-up text-primary mr5"></span> Like </span>
                                    <span class="text-light fs12 mr10">
                                        <span class="fa fa-share text-primary mr5"></span> Share </span>
                                    <span class="text-light fs12 mr10">
                                        <span class="fa fa-floppy-o text-primary mr5"></span> Save </span>
                                    <span class="text-light fs12 mr10">
                                        <span class="fa fa-comment text-primary mr5"></span> Comment </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="tab2" class="tab-pane"></div>
                    <div id="tab3" class="tab-pane"></div>
                    <div id="tab4" class="tab-pane"></div>
                </div>
            </div>
        </div>
    </div>

</section>

<script type="text/javascript">
  var milat = -16.49;
  var milng = -68.12;
<?php if (!empty($medico->lat) && !empty($medico->lng)): ?>
    milat = <?= $medico->lat ?>;
    milng = <?= $medico->lng ?>;
<?php endif; ?>
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

              google.maps.event.trigger(map_ubi, 'resize');
              map_ubi.setCenter(new google.maps.LatLng(<?= $medico->lat ?>, <?= $medico->lng ?>));

          }
      });


  }
</script>