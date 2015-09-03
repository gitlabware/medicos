
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
                                          if ($centro->origenid != NULL) {
                                            echo $centro->origen->nombre;
                                          } else {
                                            echo "Central";
                                          }
                                          ?>
                                      </td>
                                      <td><?= h($centro->telefonos) ?></td>
                                      <td><?= h($centro->direccion) ?></td>
                                      <td class="actions">
                                          <?= $this->Html->link('<i class="fa fa-edit"></i>', ['action' => 'edit', $centro->id],['class' => 'btn btn-info','escape' => false,'title' => 'Editar']) ?>
                                          <?= $this->Form->postLink('<i class="fa fa-trash"></i>', ['action' => 'delete', $centro->id], ['confirm' => __('Esta seguro de eliminar el centro # {0}?', $centro->id),'class' => 'btn btn-danger','escape' => false,'title' => 'Eliminar']) ?>
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