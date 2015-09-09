<section id="content" class="animated fadeIn">
    <!-- begin: .tray-center -->
    <div class="tray tray-center">

        <div class="page-tabs">
            <ul class="nav nav-tabs">
                <li class="active">
                    <a href="widgets_tile.html">Medicos</a>
                </li>
                <li>
                    <a href="widgets_panel.html">Panel Widgets</a>
                </li>
                <li>
                    <a href="widgets_scroller.html">Scroller Widgets</a>
                </li>
                <li>
                    <a href="widgets_data.html">Admin Widgets</a>
                </li>
            </ul>
        </div>

        <div style="max-width: 1150px;">
            <div class="row">
                <div class="panel user-group-widget">
                    <div class="panel-menu">
                        <?= $this->Form->create(NULL, ['action' => 'ajax_b_medicos', 'id' => 'ajaxform']); ?>
                        <div class="input-group ">
                            <span class="input-group-addon">
                                <i class="fa fa-search"></i>
                            </span>
                            <?= $this->Form->text('dato', ['class' => 'form-control', 'placeholder' => 'Buscar Medico....', 'id' => 'campo-medico']) ?>
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
                                    <?php foreach ($medicos as $key => $me): ?>
                                      <?php if (($key % 2) == 0): ?>
                                        <?php $drow = TRUE; ?>
                                        <div class="row">
                                          <?php endif; ?>
                                          <div class="col-md-6">
                                              <div class="row">
                                                  <div class="col-md-4">
                                                      <img src="<?php echo $this->request->webroot . 'perfiles/' . $me->url; ?>" width="134px" height="134px" class="user-avatar">
                                                      <div class="caption">
                                                          <h5>&nbsp;<?= $me->especialidade->nombre ?></h5>
                                                      </div>
                                                  </div>
                                                  <div class="col-md-8">
                                                      <a href="<?= $this->Url->build(['action' => 'vperfil', $me->id]) ?>" class="text-system"><h3><?= $me->nombre ?></h3></a>
                                                      <b>Telefonos: </b><?= $me->telefonos ?><br>
                                                      <b>E-mail: </b> <?= $me->mail ?><br>
                                                      <b>Sexo: </b> <?= $me->sexo ?>
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
  $("#campo-medico").keyup(function () {
      if ($("#campo-medico").val() != '') {
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