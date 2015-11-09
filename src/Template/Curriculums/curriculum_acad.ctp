<div class="panel-heading">
    <span class="panel-title">
        <i class="fa fa-edit"></i>Formacacion Academica</span>
</div>
<!-- end .panel-heading section -->

<?= $this->Form->create($curriculum); ?>
<div class="panel-body p25">
    <div class="section">
        <label for="email" class="field prepend-icon">
            <?php echo $this->Form->text('titulacion', ['class' => 'gui-input', 'placeholder' => 'Titulacion']); ?>
            <label for="email" class="field-icon">
                <i class="fa fa-retweet"></i>
            </label>
        </label>
    </div>
    <div class="section row">
        <div class="col-md-6">
            <label for="firstname" class="field prepend-icon">
                <?php echo $this->Form->text('telefonos', ['class' => 'form-control pull-right', 'placeholder' => 'Telefonos','id' => 'daterangepicker13']); ?>
                <label for="email" class="field-icon">
                    <i class="fa fa-phone"></i>
                </label>
            </label>
        </div>
        <div class="col-md-6">
            <label for="firstname" class="field prepend-icon">
                <?php echo $this->Form->text('matricula', ['class' => 'gui-input', 'placeholder' => 'Matricula']); ?>
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
<script src="<?php echo $this->request->webroot; ?>js/vendor/plugins/datepicker/js/bootstrap-datetimepicker.js"></script>
<script>
$('#daterangepicker1').daterangepicker();
</script>
<?php
/*echo $this->Html->script([
  'vendor/plugins/datepicker/js/bootstrap-datetimepicker',
  'ini_cal_year']);*/
?>