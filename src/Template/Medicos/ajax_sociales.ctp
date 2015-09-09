<div class="panel-heading">
    <span class="panel-title">
        <i class="<?= $social->icono ?>"></i><?= $social->nombre ?></span>
</div>
<!-- end .panel-heading section -->

<?= $this->Form->create($medicosociale); ?>
<div class="panel-body p25">
    <div class="section row">
        <div class="col-md-12">
            <label for="firstname" class="field prepend-icon">
                <?= $this->Form->hidden('id')?>
                <?= $this->Form->hidden('medico_id',['value' => $idMedico])?>
                <?= $this->Form->hidden('sociale_id',['value' => $social->id])?>
                <?= $this->Form->text("url", ['class' => 'gui-input', 'placeholder' => 'Url']) ?>
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