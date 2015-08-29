
<section id="content" class="table-layout animated fadeIn">

    <div class="tray tray-center">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-visible">
                    <div class="panel-heading">
                        <div class="panel-title hidden-xs">
                            <span class="glyphicon glyphicon-tasks"></span>Farmacias</div>
                    </div>
                    <div class="panel-body pn">
                        <table class="table table-striped table-hover" id="datatable" cellspacing="0" width="100%">
                            <thead>
                                <tr>
                                    <th><?= __('id') ?></th>
                                    <th><?= __('nombre') ?></th>
                                    <th><?= __('direccion') ?></th>
                                    <th><?= __('telefonos') ?></th>
                                    <th><?= __('Farmacia sucursal') ?></th>
                                    <th class="actions"><?= __('Actions') ?></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($farmacias as $farmacia): ?>
                                  <tr>
                                      <td><?= $this->Number->format($farmacia->id) ?></td>
                                      <td><?= h($farmacia->nombre) ?></td>
                                      <td><?= h($farmacia->direccion) ?></td>
                                      <td><?= h($farmacia->telefonos) ?></td>
                                          <td>
                                        <?php 
                                        if(empty($farmacia->origenid)){
                                          echo 'Central';
                                        }else{
                                          echo $farmacia->origen->nombre;
                                        }
                                        ?>
                                      </td>
                                      <td class="actions">
                                          <?= $this->Html->link('<i class="fa fa-edit"></i>', ['action' => 'edit', $farmacia->id],['class' => 'btn btn-info','escape' => false,'title' => 'Editar']) ?>
                                          <?= $this->Form->postLink('<i class="fa fa-trash"></i>', ['action' => 'delete', $farmacia->id], ['confirm' => __('Esta seguro de eliminar la farmacia # {0}?', $farmacia->id),'class' => 'btn btn-danger','escape' => false,'title' => 'Eliminar']) ?>
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