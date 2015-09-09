
<div class="panel-heading">
    <span class="panel-title">
        <i class="fa fa-edit"></i>Imagen de Perfil</span>
</div>
<!-- end .panel-heading section -->

<?= $this->Form->create($medico, ['id' => 'form-image', 'enctype' => 'multipart/form-data']); ?>
<div class="panel-body p25">
    <div class="section row">
        <div class="col-md-12 text-center" id="sect-imagen">
            <?php if (empty($medico->url)): ?>
              <img class="media-object mw150" src="<?php echo $this->request->webroot; ?>img/iconos/doctor-icono.jpg" alt="..." height="230" width="210">
            <?php else: ?>
              <img class="media-object mw150" src="<?php echo $this->request->webroot; ?>perfiles/<?= $medico->url; ?>" alt="..." height="230" width="210">
            <?php endif; ?>
        </div>
    </div>
    <div class="section row">
        <div class="col-md-12">
            <label class="field prepend-icon append-button file">
                <span class="button btn-primary">Cambiar imagen</span>
                <?php echo $this->Form->file('imagen_aux', ['class' => 'gui-file', 'id' => 'file1', 'onChange' => "document.getElementById('uploader1').value = this.value;"]); ?>
                <?php echo $this->Form->text('text_img', ['class' => 'gui-input', 'placeholder' => 'Seleccione la imagen', 'id' => 'uploader1']); ?>
                
                <label class="field-icon">
                    <i class="fa fa-upload"></i>
                </label>
            </label>
        </div>
    </div>
</div>

<!-- end .form-body section -->

<div class="panel-footer">
    <button type="submit" class="button btn-primary">Registrar</button>
</div>
<!-- end .form-footer section -->
<?= $this->Form->end(); ?>

<script>
  var barrapro = ''
          + '<div class="progress mt10 mbn">'
          + ' <div class="progress-bar progress-bar-info progress-bar-striped active" role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100" style="width: 100%">'
          + '   <span class="sr-only"></span>'
          + ' </div>'
          + '</div>';
  $("#file1").change(function (e)
  {
      var postData = new FormData($('#form-image')[0]);
      //var postData = $('#form-image').serializeArray();
      var formURL = '<?= $this->Url->build(['action' => 'ajax_carga_i']) ?>';
      $.ajax(
              {
                  url: formURL,
                  type: "post",
                  data: postData,
                  cache: false,
                  contentType: false,
                  processData: false,
                  beforeSend: function (XMLHttpRequest) {
                      //alert("antes de enviar");
                      $("#sect-imagen").html(barrapro);
                  },
                  complete: function (XMLHttpRequest, textStatus) {
                      //alert('despues de enviar');
                  },
                  success: function (data, textStatus, jqXHR)
                  {
                      //data: return data from server
                      setTimeout(function(){ $("#sect-imagen").html(data); }, 1800);
                      
                  },
                  error: function (jqXHR, textStatus, errorThrown)
                  {
                      //if fails   
                      alert("error");
                  }
              });
      e.preventDefault(); //STOP default action
  });
</script>