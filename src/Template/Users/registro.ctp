<div class="row mb15 table-layout">

    <div class="col-xs-6 va-m pln">
        <a href="dashboard.html" title="Return to Dashboard">
            <img src="<?php echo $this->request->webroot; ?>img/logos/logo_white.png" title="AdminDesigns Logo" class="img-responsive w250">
        </a>
    </div>

    <div class="col-xs-6 text-right va-b pr5">
        <div class="login-links">
            <a href="<?php echo $this->Url->build(['action' => 'login']); ?>" class="" title="Sign In">Ingresar</a>
            <span class="text-white"> | </span>
            <a href="javascript:" class="active" title="Register">Registrarme</a>
        </div>

    </div>

</div>

<div class="panel panel-info mt10 br-n">

    <div class="panel-heading heading-border bg-white">

    </div>
    <?= $this->Form->create($medico, ['class' => 'form-validacion']); ?>
    <div class="panel-body p25 bg-light">
        <div class="section-divider mt10">
            <span>Registro de Medico</span>
        </div>
        <!-- .section-divider -->
        <div class="section row">
            <div class="col-md-12">
                <label for="firstname" class="field prepend-icon">
                    <?php echo $this->Form->text('nombre', ['class' => 'gui-input', 'placeholder' => 'Nombre Completo']); ?>
                    <label for="email" class="field-icon">
                        <i class="fa fa-user"></i>
                    </label>
                </label>
            </div>
        </div>

        <div class="section row">
            <div class="col-md-6">
                <label for="firstname" class="field prepend-icon">
                    <?php echo $this->Form->text('ci', ['class' => 'gui-input', 'placeholder' => 'C.I.']); ?>
                    <label for="email" class="field-icon">
                        <i class="fa fa-barcode"></i>
                    </label>
                </label>
            </div>
            <div class="col-md-6">
                <label for="firstname" class="field prepend-icon">
                    <?php echo $this->Form->select('lugar', ['La Paz' => 'La Paz'], ['class' => 'select2-single form-control', 'empty' => 'Seleccione el lugar']); ?>
                </label>
            </div>
        </div>

        <div class="section row">
            <div class="col-md-6">
                <label for="firstname" class="field prepend-icon">
                    <?php echo $this->Form->text('fecha_nacimiento', ['class' => 'gui-input', 'id' => 'datepicker1', 'placeholder' => 'F. Nacimeinto aaaa-mm-dd']); ?>
                    <label for="email" class="field-icon">
                        <i class="fa fa-calendar"></i>
                    </label>
                </label>
            </div>
            <div class="col-md-6">
                <label for="firstname" class="field prepend-icon">
                    <?php echo $this->Form->select('sexo', ['Masculino' => 'Masculino', 'Femenino' => 'Femenino'], ['class' => 'select2-single form-control', 'empty' => 'Seleccione el sexo']); ?>
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
                    <?php echo $this->Form->text('mail', ['class' => 'gui-input', 'placeholder' => 'E-mail','required']); ?>
                    <label for="email" class="field-icon">
                        <i class="fa fa-envelope"></i>
                    </label>
                </label>
            </div>
            <div class="col-md-6">
                <label for="email" class="field prepend-icon">
                    <?php echo $this->Form->password('password', ['class' => 'gui-input', 'placeholder' => 'Contrasena', 'required']); ?>
                    <label for="email" class="field-icon">
                        <i class="fa fa-lock"></i>
                    </label>
                </label>
            </div>

        </div>
        <!-- end section -->

    </div>
    <!-- end .form-body section -->
    <div class="panel-footer clearfix">
        <button type="submit" class="button btn-primary pull-right">Crear cuenta</button>
    </div>
    <!-- end .form-footer section -->
    <?= $this->Form->end(); ?>
</div>

<?php
echo $this->Html->script([
  'vendor/plugins/jquerymask/jquery.maskedinput.min',
  'inicalendario',
  'jquery.validate.min',
  'inivalidacion_reg'
  ], ['block' => 'addjs']);
?>