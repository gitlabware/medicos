<section id="content" class="table-layout animated fadeIn">
    <div class="tray tray-center">
        <div class="row">  
            <!-- FORMACION ACADEMICA-->
            <div class="col-md-6">
                <div class="admin-panels mw900 center-block" style="padding-bottom: 125px;">
                    <div class="panel sort-disable mb50"  data-panel-color="false" data-panel-fullscreen="false" data-panel-remove="false" data-panel-title="false" data-panel-fullscreen="false">
                        <div class="panel-heading">
                            <span class="panel-icon">
                                <i class="fa fa-minus"></i>
                            </span>
                            <span class="panel-title"> Formacion academica</span>
                        </div>
                        <div class="panel-body">
                            <div class="admin-form">
                                <?= $this->Form->create($curriculum) ?>
                                <div class="panel-body bg-light"> 
                                    <div id="acor1">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="section">
                                                    <label class="field">
                                                        <?php echo $this->Form->text('titulobt', ['placeholder' => 'Titulo Obtenido', 'class' => 'gui-input']); ?>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="section">
                                                    <label class="field">
                                                        <?php echo $this->Form->text('anoini', ['placeholder' => 'año inicio', 'class' => 'gui-input']); ?>
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="section">
                                                    <label class="field">
                                                        <?php echo $this->Form->text('anofin', ['placeholder' => 'año fin', 'class' => 'gui-input']); ?>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>   
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="section">
                                                    <label class="field">
                                                        <?php echo $this->Form->text('centroestu', ['placeholder' => 'Centro Estudios', 'class' => 'gui-input']); ?>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="panel-footer text-right">
                                            <button type="submit" class="button btn-primary"> Guardar </button>
                                            <button type="reset" class="button"> Cancel </button>
                                        </div>
                                    </div>
                                </div>
                                <?= $this->Form->end() ?>
                            </div>
                        </div>
                    </div>

                    <div class="panel sort-disable mb50 panel-collapsed"  data-panel-color="false" data-panel-fullscreen="false" data-panel-remove="false" data-panel-title="false" data-panel-fullscreen="false">
                        <div class="panel-heading">
                            <span class="panel-icon">
                                <i class="fa fa-minus"></i>
                            </span>
                            <span class="panel-title">Formacion Complementaria</span>
                        </div>
                        <div class="panel-body" style="display: none;">
                            <div class="admin-form">
                                <?= $this->Form->create($curriculum) ?>
                                <div class="panel-body bg-light">
                                    <div id="acor2">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="section">
                                                    <label class="field">
                                                        <?php echo $this->Form->text('nomcurso', ['placeholder' => 'Nombre del Curso', 'class' => 'gui-input']); ?>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="section">
                                                    <label class="field">
                                                        <?php echo $this->Form->text('cent_est', ['placeholder' => 'Centro de Estudio', 'class' => 'gui-input']); ?>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-5">
                                                <div class="section">

                                                    <div class="section">
                                                        <label for="datepicker1" class="field prepend-icon">                                                            
                                                            <?php echo $this->Form->text('fech_ini', ['id' => 'datepicker1', 'class' => 'gui-input', 'placeholder' => 'Fecha Inicio']); ?>
                                                            <label class="field-icon">
                                                                <i class="fa fa-calendar-o"></i>
                                                            </label>
                                                        </label>
                                                    </div>


                                                </div>
                                            </div>
                                            <div class="col-md-5">
                                                <div class="section">
                                                    <label for="datepicker1" class="field prepend-icon">                                                            
                                                        <?php echo $this->Form->text('fech_fin', ['id' => 'datepicker2', 'class' => 'gui-input', 'placeholder' => 'Fecha Fin']); ?>
                                                        <label class="field-icon">
                                                            <i class="fa fa-calendar-o"></i>
                                                        </label>
                                                    </label>

                                                </div>
                                            </div>
                                            <div class="col-md-2">
                                                <div class="section">
                                                    <label class="field">
                                                        <?php echo $this->Form->text('horas', ['placeholder' => 'Horas', 'class' => 'gui-input']); ?>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>   

                                        <div class="panel-footer text-right">
                                            <button type="submit" class="button btn-primary"> Guardar </button>
                                            <button type="reset" class="button"> Cancel </button>
                                        </div>
                                    </div>
                                </div>
                                <?= $this->Form->end() ?>
                            </div>
                        </div>
                    </div>


                    <div class="panel sort-disable mb50 panel-collapsed"  data-panel-color="false" data-panel-fullscreen="false" data-panel-remove="false" data-panel-title="false" data-panel-fullscreen="false">
                        <div class="panel-heading">
                            <span class="panel-icon">
                                <i class="fa fa-minus"></i>
                            </span>
                            <span class="panel-title">Experiencia Profesional</span>
                        </div>
                        <div class="panel-body" style="display: none;">
                            <div class="admin-form">
                                <?= $this->Form->create($curriculum) ?>
                                <div class="panel-body bg-light"> 
                                    <div id="acor3">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="section">
                                                    <label class="field">
                                                        <?php echo $this->Form->text('puestocupado', ['placeholder' => 'Puesto Ocupado', 'class' => 'gui-input']); ?>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="section">
                                                    <label class="field">
                                                        <?php echo $this->Form->text('nom_empre', ['placeholder' => 'Nombre de la Empresa', 'class' => 'gui-input']); ?>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="section">
                                                   <label for="datepicker1" class="field prepend-icon">                                                            
                                                        <?php echo $this->Form->text('fechaini', ['id' => 'datepicker3', 'class' => 'gui-input', 'placeholder' => 'Fecha Inicio']); ?>
                                                        <label class="field-icon">
                                                            <i class="fa fa-calendar-o"></i>
                                                        </label>
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="section">
                                                    <label for="datepicker1" class="field prepend-icon">                                                            
                                                        <?php echo $this->Form->text('fechafin', ['id' => 'datepicker4', 'class' => 'gui-input', 'placeholder' => 'Fecha Fin']); ?>
                                                        <label class="field-icon">
                                                            <i class="fa fa-calendar-o"></i>
                                                        </label>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>   
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="section">
                                                    <label class="field">
                                                        <?php echo $this->Form->text('descrip', ['placeholder' => 'Descripcion', 'class' => 'gui-input']); ?>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="panel-footer text-right">
                                            <button type="submit" class="button btn-primary"> Guardar </button>
                                            <button type="reset" class="button"> Cancel </button>
                                        </div>
                                    </div>
                                </div>
                                <?= $this->Form->end() ?>
                            </div>
                        </div>
                    </div>

                </div>    








            </div>
            <!--------------------------------------->
            <?php if (!empty($verformulario)): ?>
                <div class="col-md-6">
                    <div class="admin-form">

                        <div class="panel-body bg-light">

                            <div class="section-divider mb40">

                                <span>Formacion Academica</span>
                            </div>
                            <!-- Basic Inputs -->
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="section">
                                        <label class="field">

                                            <?php echo $verformulario->titulobt ?>

                                        </label>
                                    </div>
                                </div>

                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="section">
                                        <label class="field">

                                            <?php echo $verformulario->anoini; ?>                                            
                                        </label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="section">
                                        <label class="field">
                                            <?php echo $verformulario->anofin; ?>

                                        </label>
                                    </div>
                                </div>
                            </div>   
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="section">
                                        <label class="field">
                                            <?php echo $verformulario->centroestu; ?>
                                        </label>
                                    </div>
                                </div>
                            </div>


                        </div>

                    </div>
                    <!--MUESTRA FORMACION COMPLEMENTARIA-->
                    <div class="admin-form"> 
                        <div class="panel-body bg-light">
                            <div class="section-divider mb40">
                                <span>Formacion Complementaria</span>
                            </div> 
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="section">
                                        <label class="field">
                                            <?php echo $verformulario->nomcurso; ?>
                                        </label>
                                    </div>                        

                                </div>                                
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="section">
                                        <label class="field">
                                            <?php echo $verformulario->cent_est; ?>
                                        </label>
                                    </div>                        

                                </div>                                
                            </div>

                            <div class="row">
                                <div class="col-md-5">
                                    <div class="section">
                                        <label class="field">
                                            <?php echo $verformulario->fech_ini; ?>
                                        </label>
                                    </div>                        

                                </div>  
                                <div class="col-md-5">
                                    <div class="section">
                                        <label class="field">
                                            <?php echo $verformulario->fech_fin; ?>
                                        </label>
                                    </div>                     

                                </div> 
                                <div class="col-md-2">
                                    <div class="section">
                                        <label class="field">
                                            <?php echo $verformulario->horas; ?>
                                        </label>
                                    </div>                        

                                </div> 
                            </div>                 
                        </div>


                    </div>
                    <!--MUESETRA EXPERIENCIA PROFESIONAL-->
                    <div class="admin-form"> 
                        <div class="panel-body bg-light">
                            <div class="section-divider mb40">
                                <span>Experiencia profesional</span>
                            </div> 

                            <div class="row">
                                <div class="col-md-12">
                                    <div class="section">
                                        <div class="field">
                                            <label class="field">
                                                <?php echo $verformulario->puestocupado; ?>
                                            </label>                                        
                                        </div>                                    
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="section">
                                        <div class="field">
                                            <label class="field">
                                                <?php echo $verformulario->nom_empre; ?>
                                            </label>
                                        </div>                                                                                 
                                    </div>                                    
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="section">
                                        <div class="field">
                                            <label class="field">
                                                <?php echo $verformulario->fechaini ?>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="section">
                                        <div class="field">
                                            <label class="field">
                                                <?php echo $verformulario->fechafin ?>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="section">
                                        <div class="field">
                                            <label class="field">
                                                <?php echo $verformulario->descrip ?>
                                            </label>
                                        </div>
                                    </div>
                                </div>                           

                            </div>

                        </div>
                    </div>
                </div>
            <?php endif; ?>

        </div>
        <section class="round-border">

        </section>
    </div>
</div>

<script>

    $(document).ready(function () {
        $('#acorde1').on('click', function () {
            $('#acor1').toggle('active');
        });
    });
    $(document).ready(function () {
        $('#acorde2').on('click', function () {
            $('#acor2').toggle('500');
        });
    });
    $(document).ready(function () {
        $('#acorde3').on('click', function () {
            $('#acor3').toggle('500');
        });
    });

</script>
<?php
echo $this->Html->script([
    'ini_admin_panel'
        ], ['block' => 'scriptjs']);
?>







</section>
