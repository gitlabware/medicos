
<section id="content" class="table-layout animated fadeIn">

    <div class="tray tray-center">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-visible">
                    <div class="panel-heading">
                        <div class="panel-title hidden-xs">
                            <span class="glyphicon glyphicon-tasks"></span>Centros Medicos</div>
                    </div>
                    <div class="panel-body pn">
                        <table class="table table-striped table-hover" id="datatable" cellspacing="0" width="100%">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Nombre</th>
                                    <th>Tipo Centro</th>
                                    <th>Sucursal</th>
                                    <th>Telefonos</th>
                                    <th>Direccion</th>
                                    <th>Accion</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($centros as $centro): ?>
                                  <tr>
                                      <td><?= $this->Number->format($centro->id) ?></td>
                                      <td><?= h($centro->nombre) ?></td>
                                      <td><?= h($centro->tipo) ?></td>
                                      <td>
                                          <?php
                                          if ($centro->centro_id != NULL) {
                                            echo "Sucursal";
                                          } else {
                                            echo "Central";
                                          }
                                          ?>
                                      </td>
                                      <td><?= h($centro->telefonos) ?></td>
                                      <td><?= h($centro->direccion) ?></td>
                                      <td class="actions">
                                          <a href="javascript:" onclick="cargarmodal('<?php echo $this->Url->build(['action' => 'ajax_servicios']);?>');">modal</a>
                                          <?= $this->Html->link(__('Edit'), ['action' => 'edit', $centro->id]) ?>
                                          <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $centro->id], ['confirm' => __('Are you sure you want to delete # {0}?', $centro->id)]) ?>
                                      </td>
                                  </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>