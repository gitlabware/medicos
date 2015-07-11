<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=true"></script>
<!-- Admin Forms CSS -->
<link rel="stylesheet" type="text/css" href="<?php echo $this->request->webroot; ?>css/admin-forms.css">

<section id="content" class="table-layout animated fadeIn">

    <!-- begin: .tray-center -->
    <div class="tray tray-center">

        <div class="mw1000 center-block">         

            <!-- Begin: Admin Form -->
            <div class="admin-form">

                <div class="panel heading-border">
                    <div class="panel-body bg-light">
                        <form method="post" action="" id="form-ui">
                            <div class="section-divider mb40" id="spy1">
                                <span>Nuevo Medico</span>
                            </div>
                           <!-- .section-divider -->                             
                            <!-- Input Icons -->
                            <div class="row">
                                <div class="col-md-9">
                                    <div class="section">
                                        <label class="field prepend-icon">
                                            <input type="text" name="firstname" id="firstname" class="gui-input" placeholder="Nombre Completo">
                                            <label for="firstname" class="field-icon">
                                                <i class="fa fa-user"></i>
                                            </label>
                                        </label>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="section">
                                        <label class="field prepend-icon">
                                            <input type="text" name="firstname" id="firstname" class="gui-input" placeholder="Matricula">
                                            <label for="firstname" class="field-icon">
                                                <i class="fa fa-credit-card"></i>
                                            </label>
                                        </label>
                                    </div>
                                </div>                             
                            </div>

                            <div class="row">
                                <div class="col-md-12">
                                    <div class="section">
                                        <label class="field prepend-icon">
                                            <input type="text" name="firstname" id="firstname" class="gui-input" placeholder="Direccion">
                                            <label for="firstname" class="field-icon">
                                                <i class="fa fa-home"></i>
                                            </label>
                                        </label>
                                    </div>
                                </div>                                                        
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="section">
                                        <label class="field prepend-icon">
                                            <input type="text" name="firstname" id="firstname" class="gui-input" placeholder="Celular">
                                            <label for="firstname" class="field-icon">
                                                <i class="fa fa-phone-square"></i>
                                            </label>
                                        </label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="section">
                                        <label class="field prepend-icon">
                                            <input type="text" name="firstname" id="firstname" class="gui-input" placeholder="e-mail">
                                            <label for="firstname" class="field-icon">
                                                <i class="fa fa-envelope"></i>
                                            </label>
                                        </label>
                                    </div>
                                </div>                             
                            </div>

                            <div class="row">
                                <div class="form-group">                    
                                    <div class="col-md-8">
                                        <select class="select2-single form-control">
                                            <option value="CA">Especialidad</option>
                                            <option value="CA">Pediatria</option>
                                            <option value="AL">Traumatologo</option>
                                            <option value="WY">Oncolgo</option>
                                        </select>
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

                            <div class="panel-footer text-right">
                                <button type="submit" class="button btn-primary"> Guardar Medico</button>                                
                            </div>                          

                        </form>
                    </div>
                </div>

            </div>

        </div>
    </div>
    <!-- end: .tray-center -->

    <!-- begin: .tray-right -->
    <aside class="tray tray-right tray290">
        <h4> Admin Panels - <small>A Theme Exclusive!</small> </h4>
        <ul class="icon-list">
            <li>
                <i class="fa fa-exclamation-circle text-warning fa-lg pr10"></i>
                <b> Author:</b> Admin Designs
            </li>
            <li>
                <i class="fa fa-exclamation-circle text-warning fa-lg pr10"></i>
                <b> License:</b> CC - Commercial 3.0
            </li>
            <li>
                <i class="fa fa-exclamation-circle text-warning fa-lg pr10"></i>
                <b> Info:</b>
                <a href="http://www.themeforest.net/user/AdminDesigns"> www.admindesigns.com </a>
            </li>
        </ul>

        <div class="tray-affix" data-spy="affix" data-offset-top="200">

            <div id="skin-switcher" class="tray-bin btn-dimmer row">

                <div class="col-xs-4 pln">
                    <a class="btn btn-primary btn-gradient btn-alt btn-block item-active" data-form-skin="primary">Primary</a>
                </div>
                <div class="col-xs-4">
                    <a class="btn btn-success btn-gradient btn-alt btn-block" data-form-skin="success">Success</a>
                </div>
                <div class="col-xs-4">
                    <a class="btn btn-info btn-gradient btn-alt btn-block" data-form-skin="info">Info</a>
                </div>
                <div class="col-xs-4 pln">
                    <a class="btn btn-warning btn-gradient btn-alt btn-block" data-form-skin="warning">Warning</a>
                </div>
                <div class="col-xs-4">
                    <a class="btn btn-danger btn-gradient btn-alt btn-block" data-form-skin="danger">Danger</a>
                </div>
                <div class="col-xs-4">
                    <a class="btn btn-alert btn-gradient btn-alt btn-block" data-form-skin="alert">Alert</a>
                </div>
                <div class="col-xs-4 pln">
                    <a class="btn btn-system btn-gradient btn-alt btn-block" data-form-skin="system">System</a>
                </div>
                <div class="col-xs-4">
                    <a class="btn btn-dark btn-gradient btn-alt btn-block" data-form-skin="dark">Dark</a>
                </div>
                <div class="col-xs-4">
                    <a class="btn btn-default btn-gradient btn-alt btn-block" data-form-skin="default">Default</a>
                </div>
            </div>

            <div id="nav-spy">
                <ul class="nav tray-nav" data-smoothscroll="-90">
                    <li class="active">
                        <a href="#spy1">
                            <span class="fa fa-edit fa-lg"></span> Form UI Elements</a>
                    </li>
                    <li>
                        <a href="#spy2">
                            <span class="fa fa-flag fa-lg"></span> Input Tooltips</a>
                    </li>
                    <li>
                        <a href="#spy3">
                            <span class="fa fa-files-o fa-lg"></span> File Uploaders</a>
                    </li>
                    <li>
                        <a href="#spy4">
                            <span class="fa fa-caret-square-o-right fa-lg"></span> Form Input Addons</a>
                    </li>
                    <li>
                        <a href="#spy5">
                            <span class="fa fa-check-square-o fa-lg"></span> Radios & Checkboxes</a>
                    </li>
                    <li>
                        <a href="#spy6">
                            <span class="fa fa-toggle-off fa-lg"></span> Input Switches</a>
                    </li>
                    <li>
                        <a href="#spy7">
                            <span class="fa fa-star-o fa-lg"></span> Review & Rating Widgets</a>
                    </li>
                </ul>
            </div>

        </div>

    </aside>
    <!-- end: .tray-right -->

</section>


<style>
    /* demo page styles */
    body { min-height: 2300px; }

    .content-header b,
    .admin-form .panel.heading-border:before,
    .admin-form .panel .heading-border:before {
        transition: all 0.7s ease;
    }
    /* responsive demo styles */
    @media (max-width: 800px) {
        .admin-form .panel-body { padding: 18px 12px; }
        .option-group .option {	display: block; }
        .option-group .option + .option {	margin-top: 8px; }
    }      

</style>

<script type="text/javascript">
  var map;

  function initialize() {
      var mapOptions = {
          zoom: 14,
          center: new google.maps.LatLng(-16.49, -68.12),
          mapTypeId: google.maps.MapTypeId.ROADMAP
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

<?php echo $this->Html->script('cambiaColorForm', ['block' => 'scriptjs']); ?>

<!-- END: PAGE SCRIPTS -->