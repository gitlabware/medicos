<div class="panel-heading">
    <span class="panel-title">
        <i class="fa fa-edit"></i>Editar Datos</span>
</div>
<!-- end .panel-heading section -->

<?= $this->Form->create($medico); ?>
<div class="panel-body p25">
    <div class="section row">
        <div class="col-md-6">
            <label for="firstname" class="field prepend-icon">
                <?php echo $this->Form->select('sexo', ['Masculino' => 'Masculino', 'Femenino' => 'Femenino'], ['class' => 'select2-single form-control', 'empty' => 'Seleccione el sexo']); ?>
            </label>
        </div>
        <div class="col-md-6">
            <label for="firstname" class="field prepend-icon">
                <?= $this->Form->text('fecha_nacimiento', ['class' => 'gui-input', 'placeholder' => 'Fecha de nacimiento', 'id' => 'datepicker1']) ?>
            </label>
        </div>
    </div>
    <div class="section row">
        <div class="col-md-6">
            <label for="firstname" class="field prepend-icon">
                <?php echo $this->Form->text('telefonos', ['class' => 'gui-input', 'placeholder' => 'Telefonos']); ?>
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
    <div class="section">
        <label for="email" class="field prepend-icon">
            <?php echo $this->Form->text('direccion', ['class' => 'gui-input', 'placeholder' => 'Direccion']); ?>
            <label for="email" class="field-icon">
                <i class="fa fa-retweet"></i>
            </label>
        </label>
    </div>
    <div class="section">
        <label for="firstname" class="field prepend-icon">
            <?php echo $this->Form->select('especialidade_id', $listaesp, ['class' => 'select2-single form-control', 'empty' => 'Seleccione la Especialidad']); ?>
        </label>
    </div>
    <div class="section row">
        <div class="col-md-6">
            <label for="email" class="field prepend-icon">
                <?php echo $this->Form->text('mail', ['class' => 'gui-input', 'placeholder' => 'E-mail', 'required']); ?>
                <label for="email" class="field-icon">
                    <i class="fa fa-envelope"></i>
                </label>
            </label>
        </div>
        <div class="col-md-6">
            <label for="email" class="field prepend-icon">
                <?php echo $this->Form->text('ci', ['class' => 'gui-input', 'placeholder' => 'C.I.', 'required']); ?>
                <label for="email" class="field-icon">
                    <i class="fa fa-lock"></i>
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
echo $this->Html->script([
  'vendor/plugins/jquerymask/jquery.maskedinput.min',
  'inicalendario']);
?>