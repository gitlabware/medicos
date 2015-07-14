


<section id="content" class="table-layout animated fadeIn">

    <div class="tray tray-center">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-visible">
                    <div class="panel-heading">
                        <div class="panel-title hidden-xs">
                            <span class="glyphicon glyphicon-tasks"></span>Medicos</div>
                    </div>
                    <div class="panel-body pn">
                        <table class="table table-striped table-hover tabla-dato" id="datatable" cellspacing="0" width="100%">
                            <thead>
                                <tr>
                                    <th><?= __('id') ?></th>
                                    <th><?= __('nombre') ?></th>
                                    <th><?= __('telefonos') ?></th>
                                    <th><?= __('direccion') ?></th>
                                    <th><?= __('ci') ?></th>
                                    <th>Especialidad</th>
                                    <th class="actions"><?= __('Actions') ?></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($medicos as $medico): ?>
                                  <tr>
                                      <td><?= $this->Number->format($medico->id) ?></td>
                                      <td><?= h($medico->nombre) ?></td>
                                      <td><?= h($medico->telefonos) ?></td>
                                      <td><?= h($medico->direccion) ?></td>
                                      <td><?= h($medico->ci) ?></td>
                                      <td><?= h($medico->especialidade->nombre) ?></td>
                                      <td>
                                          <?= $this->Html->link(__('Edit'), ['action' => 'edit', $medico->id]) ?>
                                          <?= $this->Html->link(__('Consultorios'), ['controller' => 'Consultorios', 'action' => 'index', $medico->id]) ?>
                                          <?= $this->Html->link(__('Add Consultorios'), ['controller' => 'Consultorios', 'action' => 'add', $medico->id]) ?>
                                          <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $medico->id], ['confirm' => __('Are you sure you want to delete # {0}?', $medico->id)]) ?>
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

