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
                        <?= $this->Form->Create($medico, ['id' => 'form-medico']) ?>
                        <div class="section-divider mb40" id="spy1">
                            <span>Nuevo Medico</span>
                        </div>
                        <!-- .section-divider -->                             
                        <!-- Input Icons -->
                        <div class="row">
                            <div class="col-md-9">
                                <div class="section">
                                    <label class="field prepend-icon">
                                        <?php echo $this->Form->text('Medico.nombre', ['class' => 'gui-input', 'placeholder' => 'Nombre Completo']); ?>
                                        <label for="firstname" class="field-icon">
                                            <i class="fa fa-user"></i>
                                        </label>
                                    </label>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="section">
                                    <label class="field prepend-icon">
                                        <?php echo $this->Form->text('Medico.matricula', ['class' => 'gui-input', 'placeholder' => 'Matricula']); ?>
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
                                        <?php echo $this->Form->text('Medico.direccion', ['class' => 'gui-input', 'placeholder' => 'Direccion']); ?>
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
                                        <?php echo $this->Form->text('Medico.telefonos', ['class' => 'gui-input', 'placeholder' => 'Telefonos']); ?>
                                        <label for="firstname" class="field-icon">
                                            <i class="fa fa-phone-square"></i>
                                        </label>
                                    </label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="section">
                                    <label class="field prepend-icon">
                                        <?php echo $this->Form->text('Medico.mail', ['class' => 'gui-input', 'placeholder' => 'e-mail']); ?>
                                        <label for="firstname" class="field-icon">
                                            <i class="fa fa-envelope"></i>
                                        </label>
                                    </label>
                                </div>
                            </div>                             
                        </div>

                        <div class="row">
                            <div class="form-group">                    
                                <div class="col-md-6">
                                    <?php echo $this->Form->select('Medico.especialidade_id', $listaesp, ['empty' => 'Seleccione la especialidad', 'class' => 'select2-single form-control']); ?>
                                </div>
                                <div class="col-md-6">
                                    <div class="section">
                                        <label class="field prepend-icon">
                                            <?php echo $this->Form->text('Medico.ci', ['class' => 'gui-input', 'placeholder' => 'C.I.']); ?>
                                            <label for="firstname" class="field-icon">
                                                <i class="fa fa-phone-square"></i>
                                            </label>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="form-group">                    
                                <div class="col-md-6">
                                    <div class="section text-center">
                                        <?php
                                        echo $this->Form->hidden('Medico.sexo');
                                        ?>
                                        <div class="radio-custom radio-primary mb5">
                                            <input type="radio" id="radmasculino" name="Medico[sexo]" value="Masculino">
                                            <label for="radmasculino">Masculino</label>

                                            <input type="radio" id="radfemenino" name="Medico[sexo]" value="Femenino">
                                            <label for="radfemenino">Femenino</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="section">
                                        <?php echo $this->Form->select('Medico.lugar', ['La Paz' => 'La Paz'], ['empty' => 'Seleccione el Lugar', 'class' => 'select2-single form-control']); ?>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="form-group">
                                <div class="col-md-6">
                                    <div class="section">
                                        <label class="field prepend-icon">
                                            <?php echo $this->Form->text('Medico.fecha_nacimiento', ['class' => 'gui-input', 'id' => 'datepicker1', 'placeholder' => 'Fecha de Nacimiento AAAA-mm-dd']); ?>
                                            <label for="firstname" class="field-icon">
                                                <i class="fa fa-calendar"></i>
                                            </label>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <br>
                        <div class="row">
                            <div class="col-md-12">
                                <button class="btn active btn-system btn-block" type="button" onclick="desplegar_cons();">Registrar consultorio</button>
                            </div>
                        </div>
                        <!-------- SECTOR CONSULTORIO --------->
                        <div id="nuevo_cons" style="display: none;">
                            <div class="section-divider mv40" id="spy2">
                                <span><a href="javascript:">Registro de Consultorio</a></span>                                
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="section">
                                        <label class="field prepend-icon">
                                            <?php echo $this->Form->text('Consultorio.nombre', ['placeholder' => 'Nombre', 'class' => 'gui-input', 'required' => false]); ?>
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
                                            <?php echo $this->Form->text('Consultorio.direccion', ['placeholder' => 'Direccion', 'class' => 'gui-input', 'required' => false]); ?>
                                            <label for="firstname" class="field-icon">
                                                <i class="fa fa-home"></i>
                                            </label>
                                        </label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="section">
                                        <label class="field prepend-icon">
                                            <?php echo $this->Form->text('Consultorio.telefonos', ['placeholder' => 'Telefonos', 'class' => 'gui-input', 'required' => false]); ?>
                                            <label for="firstname" class="field-icon">
                                                <i class="fa fa-phone"></i>
                                            </label>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="section">
                                        <label class="field prepend-icon">
                                            <?php echo $this->Form->textarea('Consultorio.descripcion', ['placeholder' => 'Descripcion', 'class' => 'gui-textarea', 'required' => false]); ?>
                                            <label for="firstname" class="field-icon">
                                                <i class="fa fa-edit"></i>
                                            </label>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
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
                                                <tr class="editablec" contenteditable="true">
                                                    <td class="text-center">HORA</td>
                                                    <td class="text-center">HORA</td>
                                                    <td class="text-center">HORA</td>
                                                    <td class="text-center">HORA</td>
                                                    <td class="text-center">HORA</td>
                                                    <td class="text-center">HORA</td>
                                                </tr>
                                                <tr class="editablec" contenteditable="true">
                                                    <td class="text-center">HORA</td>
                                                    <td class="text-center">HORA</td>
                                                    <td class="text-center">HORA</td>
                                                    <td class="text-center">HORA</td>
                                                    <td class="text-center">HORA</td>
                                                    <td class="text-center">HORA</td>
                                                </tr>
                                                <tr class="editablec" contenteditable="true">
                                                    <td class="text-center">HORA</td>
                                                    <td class="text-center">HORA</td>
                                                    <td class="text-center">HORA</td>
                                                    <td class="text-center">HORA</td>
                                                    <td class="text-center">HORA</td>
                                                    <td class="text-center">HORA</td>
                                                </tr>
                                                <tr class="editablec" contenteditable="true">
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
                            <div class="section-divider mv40" id="spy2">
                                <span>Ubicacion de Consultorio</span>                                
                            </div>

                            <div class="row">    
                                <?php echo $this->Form->hidden('Consultorio.lat', ['id' => 'frmlat_con']); ?>
                                <?php echo $this->Form->hidden('Consultorio.lng', ['id' => 'frmlng_con']); ?>
                                <div id="mapaconsultorio" style="width: 100%; height: 400px; "></div>
                            </div>
                        </div>
                        <!------------------------------------->

                        <p>&nbsp;</p>

                        <div class="panel-footer text-right">
                            <button type="submit" class="button btn-primary"> Guardar Medico</button>                                
                        </div>            
                        <?php echo $this->Form->hidden('Consultorio.estado', ['value' => 'Activo']); ?>
                        <?php echo $this->Form->hidden('Consultorio.confirmacion', ['id' => 'idconfirmacion']); ?>
                        <?php echo $this->Form->hidden('Consultorio.horarios', ['id' => 'idcampo-horarios']); ?>
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!-- end: .tray-center -->

    <?= $this->element('menuder/admin') ?>

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
          mapTypeId: google.maps.MapTypeId.ROADMAP,
          scrollwheel: false
      };
      map = new google.maps.Map(document.getElementById('mapaconsultorio'), mapOptions);

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

  function desplegar_cons() {
      if ($('#idconfirmacion').val() == 1) {
          $('#nuevo_cons').hide(400);
          $('#idconfirmacion').val(0);
      } else {
          $('#idconfirmacion').val(1);
          $('#nuevo_cons').show(400, function () {
              google.maps.event.trigger(map, 'resize');
              map.setCenter(new google.maps.LatLng(-16.49, -68.12));
          });
      }
  }

  $("#form-medico").submit(function (event) {
      $('#tabla-horarios-t tr').attr('contenteditable', false);
      $('#idcampo-horarios').val($('#tabla-horarios').html());
  });
</script>

<?php
echo $this->Html->script([
  'cambiaColorForm',
  'vendor/plugins/jquerymask/jquery.maskedinput.min',
  'inicalendario'], ['block' => 'scriptjs']);
?>

<!-- END: PAGE SCRIPTS -->