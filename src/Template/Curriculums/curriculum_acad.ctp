<div class="panel-heading">
    <span class="panel-title">
        <i class="fa fa-edit"></i>Formacacion Academica</span>
</div>
<!-- end .panel-heading section -->

<?= $this->Form->create($curriculum,['action'=>'registro/'.$curriculum->id]); ?>
<?= $this->Form->hidden('tipo',['value' => 'Formacion Academica']);?>
<div class="panel-body p25">
    <div class="section">
        <label for="email" class="field prepend-icon">
            <?php echo $this->Form->text('titulacion', ['class' => 'gui-input', 'placeholder' => 'Titulacion obtenida']); ?>
            <label for="email" class="field-icon">
                <i class="fa fa-retweet"></i>
            </label>
        </label>
    </div>
    <div class="section row">
        <div class="col-md-6">
            <label for="firstname" class="field prepend-icon">
                <?php echo $this->Form->year('fecha_ini', ['class' => 'form-control', 'empty' => 'año inicio','minYear' => date('Y') - 40,'maxYear' => date('Y') ]); ?>
               
            </label>
        </div>
        <div class="col-md-6">
            <label for="firstname" class="field prepend-icon">
                <?php echo $this->Form->year('fecha_fin', ['class' => 'form-control', 'empty' => 'año fin','minYear' => date('Y') - 40,'maxYear' => date('Y')]); ?>
               
            </label>
        </div>        
    </div>
    <div class="section row"> 
        <div class="col-md-12">
            <label for="firstname" class="field prepend-icon">
                <?php echo $this->Form->text('centro', ['class' => 'gui-input', 'placeholder' => 'Centro Estudio']); ?>
                <label for="email" class="field-icon">
                    <i class="fa fa-retweet"></i>
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

<?php
/* echo $this->Html->script([
  'vendor/plugins/datepicker/js/bootstrap-datetimepicker',
  'ini_cal_year']); */
?>