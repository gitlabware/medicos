<div class="panel-heading">
    <span class="panel-title">
        <i class="fa fa-edit"></i>Formacion Complementaria</span>
</div>
<!-- end .panel-heading section -->

<?= $this->Form->create($curriculum,['action'=>'registro']); ?>
<div class="panel-body p25">
    <div class="section">
        <label for="email" class="field prepend-icon">
            <?php echo $this->Form->text('titulacion', ['class' => 'gui-input', 'placeholder' => 'Nombre del Curso']); ?>
            <label for="email" class="field-icon">
                <i class="fa fa-retweet"></i>
            </label>
        </label>
    </div>
    <div class="section row"> 
        <div class="col-md-12">
            <label for="firstname" class="field prepend-icon">
                <?php echo $this->Form->text('centro', ['class' => 'gui-input', 'placeholder' => 'Centro Estudio']); ?>
                <label for="email" class="field-icon">
                    <i class="fa fa-barcode"></i>
                </label>
            </label>
        </div>    
    </div>
    
    <div class="section row">
        <div class="col-md-6">
            <label for="firstname" class="field prepend-icon">
                <?php echo $this->Form->year('fecha_ini', ['class' => 'form-control', 'empty' => 'año inicio']); ?>
                
            </label>
        </div>
        <div class="col-md-6">
            <label for="firstname" class="field prepend-icon">
                <?php echo $this->Form->year('fecha_fin', ['class' => 'form-control', 'empty' => 'año fin']); ?>
                
            </label>
        </div>        
    </div>
    <div class="section row"> 
        <div class="col-md-12">
            <label for="firstname" class="field prepend-icon">
                <?php echo $this->Form->text('horas', ['class' => 'gui-input', 'placeholder' => 'Horas']); ?>
                <label for="email" class="field-icon">
                    <i class="fa fa-barcode"></i>
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