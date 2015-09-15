<section id="content" class="animated fadeIn">
    <!-- begin: .tray-center -->
    <div class="tray tray-center">

        <div class="page-tabs">
            <ul class="nav nav-tabs">
                <li>
                    <a href="<?= $this->Url->build(['controller'=>'Medicos','action' => 'buscador']) ?>" >Medicos</a>
                </li>
                <li class="active">
                    <a href="<?= $this->Url->build(['action' => 'buscador']) ?>" >Farmacias</a>
                </li>
                <li>
                    <a href="<?= $this->Url->build(['controller' => 'Centros','action' => 'buscador']) ?>">Centros</a>
                </li>
                
            </ul>
        </div>

        <div style="max-width: 1150px;">
            <div class="row">
                <div class="panel user-group-widget">
                    <div class="panel-farnu">
                        <?= $this->Form->create(NULL, ['action' => 'ajax_b_farmacias', 'id' => 'ajaxform']); ?>
                        <div class="input-group ">
                            <span class="input-group-addon">
                                <i class="fa fa-search"></i>
                            </span>
                            <?= $this->Form->text('dato', ['class' => 'form-control', 'placeholder' => 'Buscar Farmacia....', 'id' => 'campo-farmacia']) ?>
                        </div>
                        <?= $this->Form->end(); ?>
                    </div>
                    <div class="panel-body pn">
                        <div class="row">
                            <div class="col-md-12" style="padding-top: 16px; padding-left: 23px; padding-right: 15px;" id="contenido-busqueda">
                                <div id="c-ajax" style="display: none;">

                                </div>
                                <div id="c-actual">
                                    <?php $drow = FALSE; ?>
                                    <?php foreach ($farmacias as $key => $far): ?>
                                        <?php if (($key % 2) == 0): ?>
                                            <?php $drow = TRUE; ?>
                                            <div class="row">
                                            <?php endif; ?>
                                            <div class="col-md-6">
                                                <div class="row">                                                 
                                                    <div class="col-md-8">
                                                        <a href="<?= $this->Url->build(['action' => 'vperfil', $far->id]) ?>" class="text-system"><h3><?= $far->nombre ?></h3></a>
                                                        <b>Nombre: </b> <?= $far->nombre ?></br>
                                                        <b>Telefonos: </b><?= $far->telefonos ?><br>
                                                        <b>Direccion: </b> <?= $far->direccion ?><br>
                                                        
                                                    </div>
                                                </div>

                                            </div>
                                            <?php if (($key % 2) == 1): ?>
                                            </div>
                                        <?php endif; ?>
                                    <?php endforeach; ?>
                                    <?php
                                    if ($drow) {
                                        echo '</div>';
                                    }
                                    ?>
                                </div>

                            </div>
                        </div>

                    </div>
                </div>
            </div>

        </div>

    </div>
    <!-- end: .tray-center -->
</section>
<script>
    $("#campo-farmacia").keyup(function () {
        if ($("#campo-farmacia").val() != '') {
            $('#c-actual').hide();
            $('#c-ajax').show();
            var postData = $("#ajaxform").serializeArray();
            var formURL = $("#ajaxform").attr("action");
            $.ajax(
                    {
                        url: formURL,
                        type: "POST",
                        data: postData,
                        /*beforeSend:function (XMLHttpRequest) {
                         alert("antes de enviar");
                         },
                         complete:function (XMLHttpRequest, textStatus) {
                         alert('despues de enviar');
                         },*/
                        success: function (data, textStatus, jqXHR)
                        {
                            //data: return data from server
                            $("#c-ajax").html(data);
                        },
                        error: function (jqXHR, textStatus, errorThrown)
                        {
                            //if fails   
                            alert("error");
                        }
                    });
        } else {
            $('#c-ajax').hide();
            $('#c-actual').show();
        }

    });

</script>