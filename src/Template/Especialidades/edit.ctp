
<section id="content" class="table-layout animated fadeIn">
    <!-- begin: .tray-center -->
    <div class="tray tray-center">
        <div class="mw1000 center-block">
            <div class="admin-form">
                <div class="panel heading-border">
                    <div class="panel-body bg-light">
                        <?= $this->Form->create($especialidad) ?>
                        <div class="section-divider mb40">
                            <span>Formulario de Especialidad</span>
                        </div>
                        <!-- Basic Inputs -->
                        <div class="row">
                            <div class="col-md-6">
                                <div class="section">
                                    <label class="field">
                                        <?php echo $this->Form->text('nombre', ['placeholder' => 'Nombre de la Especialidad', 'class' => 'gui-input']); ?>
                                    </label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="section">
                                    <label class="field">
                                        <?php echo $this->Form->text('estado', ['placeholder' => 'estado', 'class' => 'gui-input']); ?>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="section">
                                    <label class="field">
                                        <label class="field select">
                                            <?php echo $this->Form->text('descripcion', ['placeholder' => 'descripcion', 'class' => 'gui-input']); ?>
                                            <i class="arrow"></i>
                                        </label>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <!-- end .form-body section -->
                        <div class="panel-footer text-right">
                            <button type="submit" class="button btn-primary"> Registrar </button>
                            <button type="reset" class="button"> Cancel </button>
                        </div>
                        <!-- end .form-footer section -->
                        <?= $this->Form->end() ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php
    echo $this->Html->script([
        'cambiaColorForm',
        'vendor/plugins/jquerymask/jquery.maskedinput.min',
        'inicalendario'], ['block' => 'scriptjs']);
    ?>

</section>