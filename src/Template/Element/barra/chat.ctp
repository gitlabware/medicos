<!-- Start: Theme Preview Pane -->
<div id="skin-toolbox">
    <div class="panel">
        <div class="panel-heading">
            <span class="panel-icon">
                <i class="fa fa-comments"></i>
            </span>
            <span class="panel-title"> Consulta en linea</span>
        </div>
        <div class="panel-body pn">
            <ul class="nav nav-list nav-list-sm pl15 pt10" role="tablist">
                <li class="active">
                    <a href="#toolbox-header" role="tab" data-toggle="tab">Iniciar Chat</a>
                </li>
                <li>
                    <a href="#toolbox-chat" role="tab" data-toggle="tab">Chat</a>
                </li>
            </ul>
            <div class="tab-content p20 ptn pb15">
                <div role="tabpanel" class="tab-pane active" id="toolbox-header">
                    <?= $this->Form->create(NULL, ['id' => 'form-inicons', 'url' => ['Controller' => 'Consultas', 'action' => 'add']]) ?>
                    <div class="panel-body p20">
                        <div class="admin-form theme-primary">
                            <div class="section mb20">
                                <?= $this->Form->text('nombre', ['class' => 'gui-input bg-light', 'placeholder' => 'Ingrese su nombre','required']) ?>
                                <?= $this->Form->hidden('estado', ['value' => 'Esperando']) ?>
                            </div>
                            <div class="section">
                                <label class="field">
                                    <?= $this->Form->textarea('mensaje', ['class' => 'gui-textarea bg-light', 'placeholder' => 'Ingrese su consulta aqui...','required']) ?>
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="panel-footer text-right">
                        <button class="btn btn-primary btn-sm ph15" type="submit">Enviar</button>
                    </div>
                    <?= $this->Form->end() ?>
                </div>
                <div role="tabpanel" class="tab-pane panel panel-widget chat-widget success" id="toolbox-chat">
                    <div class="panel-body bg-light dark panel-scroller scroller-sm pn">
                        <div class="media">
                            <div class="media-left">
                            </div>
                            <div class="media-body">
                                <span class="media-status"></span>
                                <h5 class="media-heading">Courtney Faught
                                    <small> - 12:30am</small>
                                </h5> Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo.
                            </div>
                        </div>
                        <div class="media">
                            <div class="media-body">
                                <span class="media-status offline"></span>
                                <h5 class="media-heading">Joe Gibbons
                                    <small> - 12:30am</small>
                                </h5> Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo.
                            </div>

                        </div>
                        <div class="media">
                            <div class="media-left">
                            </div>
                            <div class="media-body">
                                <span class="media-status online"></span>
                                <h5 class="media-heading">Courtney Faught
                                    <small> - 12:30am</small>
                                </h5> Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo.
                            </div>
                        </div>
                    </div>
                    <div class="panel-footer">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Enter your message here...">
                        </div>
                        <!-- /input-group -->
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
<!-- End: Theme Preview Pane -->

<script>
  $("#form-inicons").submit(function (e)
  {
      var postData = $(this).serializeArray();
      var formURL = $(this).attr("url");
      alert(formURL);
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
                      $("#parte").html(data);
                  },
                  error: function (jqXHR, textStatus, errorThrown)
                  {
                      //if fails   
                      alert("error");
                  }
              });
      e.preventDefault(); //STOP default action
      //e.unbind(); //unbind. to stop multiple form submit.
  });
</script>