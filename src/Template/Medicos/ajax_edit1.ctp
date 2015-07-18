<div class="panel-heading">
    <span class="panel-title">
        <i class="fa fa-edit"></i>Editar Datos</span>
</div>
<!-- end .panel-heading section -->

<?= $this->Form->create($medico);?>
    <div class="panel-body p25">
        <div class="section row">
            <div class="col-md-12">
                <label for="firstname" class="field prepend-icon">
                    <?= $this->Form->text('nombre',['class' => 'gui-input','placeholder' => 'Nombre Completo'])?>
                </label>
            </div>
        </div>
        <div class="section row">
            <div class="col-md-12">
                <label for="firstname" class="field prepend-icon">
                    <?= $this->Form->textarea('leyenda',['class' => 'gui-textarea','placeholder' => 'Leyenda...'])?>
                </label>
            </div>
        </div>
    </div>
    <!-- end .form-body section -->

    <div class="panel-footer">
        <button type="submit" class="button btn-primary">Registrar</button>
    </div>
    <!-- end .form-footer section -->
<?= $this->Form->end();?>