<div class="panel-heading">
    <span class="panel-title">
        <i class="fa fa-edit"></i>Experiencia Profecional</span>
</div>
<!-- end .panel-heading section -->

<?= $this->Form->create($curriculum,['action'=>'registro']); ?>
<div class="panel-body p25">
    <div class="section">
        <label for="email" class="field prepend-icon">
            <?php echo $this->Form->text('puesto', ['class' => 'gui-input', 'placeholder' => 'Puesto Ocupado']); ?>
            <label for="email" class="field-icon">
                <i class="fa fa-retweet"></i>
            </label>
        </label>
    </div>
    <div class="section row"> 
        <div class="col-md-12">

            <label for="firstname" class="field prepend-icon">
                <?php echo $this->Form->text('empresa', ['class' => 'gui-input', 'placeholder' => 'Nombre de la Empresa']); ?>
                <label for="email" class="field-icon">
                    <i class="fa fa-barcode"></i>
                </label>
            </label>
        </div>    
    </div>
    <div class="section row">
        <div class="col-md-6">
            <label for="firstname" class="field prepend-icon">
                <?php echo $this->Form->text('fecha_ini', ['class' => 'form-control', 'placeholder' => 'fecha inicio', 'id' => 'daterangepicker13']); ?>
                <label for="email" class="field-icon">
                    <i class="fa fa-phone"></i>
                </label>
            </label>
        </div>

        <div class="col-md-6">
            <label for="firstname" class="field prepend-icon">
                <?php echo $this->Form->text('fecha_fin', ['class' => 'gui-input', 'placeholder' => 'fecha fin']); ?>
                <label for="email" class="field-icon">
                    <i class="fa fa-barcode"></i>
                </label>
            </label>
        </div>

    </div>
    <div class="section row"> 
        <div class="col-md-12">
            <label for="firstname" class="field prepend-icon">
                <?php echo $this->Form->text('descripcion', ['class' => 'gui-input', 'placeholder' => 'Descripcion']); ?>
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
echo $this->Html->script([
    'ini_admin_panel'
]);
?>
