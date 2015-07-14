<div class="row table-layout">
    <a href="dashboard.html" title="Return to Dashboard">
        <img src="<?php echo $this->request->webroot; ?>img/logos/logo.png" title="AdminDesigns Logo" class="center-block img-responsive" style="max-width: 275px;">
    </a>
</div>

<!-- Login Panel/Form -->
<div class="panel mt30 mb25">

    <?php echo $this->Form->create();?>
        <div class="panel-body bg-light p25 pb15">

            <!-- Username Input -->
            <div class="section">
                <label for="username" class="field-label text-muted fs18 mb10">Usuario</label>
                <label for="username" class="field prepend-icon">
                    <?php echo $this->Form->text('username',['class' => 'gui-input','placeholder' => 'Ingrese el usuario']);?>
                    <label for="username" class="field-icon">
                        <i class="fa fa-user"></i>
                    </label>
                </label>
            </div>

            <!-- Password Input -->
            <div class="section">
                <label for="username" class="field-label text-muted fs18 mb10">Contrase&ntilde;a</label>
                <label for="password" class="field prepend-icon">
                    <?php echo $this->Form->password('password',['class' => 'gui-input','placeholder' => 'Ingrese la contrasena']);?>
                    <label for="password" class="field-icon">
                        <i class="fa fa-lock"></i>
                    </label>
                </label>
            </div>

        </div>

        <div class="panel-footer clearfix">
            <button type="submit" class="button btn-primary mr10 pull-right">Ingresar</button>
        </div>

    <?php echo $this->Form->end();?>
</div>

