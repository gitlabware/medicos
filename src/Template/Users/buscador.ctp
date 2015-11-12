<div style="height: 200px;" class="hide-for-small">
    &nbsp;
</div>
<div class="row mb15 table-layout">
    <div class="col-xs-6 va-m pln">
        <a href="javascript:" title="Return to Dashboard">
            <img src="<?php echo $this->request->webroot; ?>img/logos/logo_white.png" title="AdminDesigns Logo" class="img-responsive w250">
        </a>
    </div>
</div>
<?= $this->Form->create(NULL, ['action' => 'buscador', 'id' => 'ajaxform']); ?>
<div class="panel panel-info mt10 br-n">
    <!-- end .form-header section -->
    <div class="panel-menu">
        <div class="input-group ">
            <span class="input-group-addon">
                <i class="fa fa-search"></i>
            </span>
            <?= $this->Form->text('dato', ['class' => 'form-control', 'placeholder' => 'Buscar....', 'id' => 'campo-medico']) ?>
        </div><br>
        <div class="row">
            <div class="col-md-8">
                <?php
                echo $this->Form->hidden('tipo');
                ?>
                <div class="input-group ">
                    <div class="radio-custom radio-primary mb5">
                        <input type="radio" id="radmedico" name="tipo" value="Medico" checked="">
                        <label for="radmedico">Medico</label>

                        <input type="radio" id="radcentro" name="tipo" value="Centro">
                        <label for="radcentro">Centro</label>

                        <input type="radio" id="radfarmacia" name="tipo" value="Farmacia">
                        <label for="radfarmacia">Farmacia</label>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <button type="submit" class="button btn-info pull-right">Realizar Busqueda</button>
            </div>
        </div>
    </div>

</div>
<div class="panel panel-info mt10 br-n">
    <!-- end .form-header section -->

</div>
<?= $this->Form->end(); ?>

<script>
$('#ajaxform').submit(function(e){
  //alert($('input[name=tipo]:checked', '#ajaxform').val());
  if($('input[name=tipo]:checked', '#ajaxform').val() == 'Medico'){
    $('#ajaxform').attr('action','<?= $this->Url->build(['controller' => 'Medicos','action' => 'buscador']);?>');
    $('#ajaxform').submit();
  }
  if($('input[name=tipo]:checked', '#ajaxform').val() == 'Centro'){
    $('#ajaxform').attr('action','<?= $this->Url->build(['controller' => 'Centros','action' => 'buscador']);?>');
    $('#ajaxform').submit();
  }
  if($('input[name=tipo]:checked', '#ajaxform').val() == 'Farmacia'){
    $('#ajaxform').attr('action','<?= $this->Url->build(['controller' => 'Farmacias','action' => 'buscador']);?>');
    $('#ajaxform').submit();
  }
  e.preventDefault();
  
});
</script>