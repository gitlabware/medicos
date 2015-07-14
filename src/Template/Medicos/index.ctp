


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
                        <table class="table table-striped table-hover" id="datatable" cellspacing="0" width="100%">
                            <thead>
                                <tr>
                                    <th><?= $this->Paginator->sort('id') ?></th>
                                    <th><?= $this->Paginator->sort('nombre') ?></th>
                                    <th><?= $this->Paginator->sort('telefonos') ?></th>
                                    <th><?= $this->Paginator->sort('direccion') ?></th>
                                    <th><?= $this->Paginator->sort('ci') ?></th>
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
                                          <?= $this->Html->link(__('View'), ['action' => 'view', $medico->id]) ?>
                                          <?= $this->Html->link(__('Edit'), ['action' => 'edit', $medico->id]) ?>
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

