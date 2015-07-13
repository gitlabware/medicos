<div class="panel-heading">
    <span class="panel-title">
        <i class="fa fa-rocket"></i>Servicios</span>
</div>
<!-- end .panel-heading section -->
<?= $this->Form->create($centro, ['action' => 'registra_servicios']) ?>
<div class="panel-body p25">
    <div class="section row">
        <div class="col-md-8">
            <div class="section">
                <label class="field">
                    <label class="field select">
                        <?php echo $this->Form->select('centro_id', $lservicios, ['required' => false, 'empty' => 'Es sucursal de...']); ?>
                        <i class="arrow"></i>
                    </label>
                </label>
            </div>
        </div>
        <!-- end section -->

        <div class="col-md-6">
            <label for="lastname" class="field prepend-icon">
                <input type="text" name="lastname" id="lastname" class="gui-input" placeholder="Last name...">
                <label for="lastname" class="field-icon">
                    <i class="fa fa-user"></i>
                </label>
            </label>
        </div>
        <!-- end section -->
    </div>
    <!-- end section row section -->
</div>
<?= $this->Form->end() ?>