


<section id="content" class="table-layout animated fadeIn">

    <div class="tray tray-center">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-visible">
                    <div class="panel-heading">
                        <div class="panel-title hidden-xs">
                            <span class="glyphicon glyphicon-tasks"></span><?php echo "Consultorios de ".$medico->nombre;?></div>
                        
                    </div>
                    <div class="panel-body pn">
                        <table class="table table-striped table-hover dataTable tabla-dato" cellspacing="0" width="100%">
                            <thead>
                                <tr>
                                    <th><?= __('id') ?></th>
                                    <th><?= __('nombre') ?></th>
                                    <th><?= __('direccion') ?></th>
                                    <th><?= __('telefonos') ?></th>
                                    <th class="actions"><?= __('Actions') ?></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($consultorios as $consultorio): ?>
                                  <tr>
                                      <td><?= $this->Number->format($consultorio->id) ?></td>
                                      <td><?= h($consultorio->nombre) ?></td>
                                      <td><?= h($consultorio->direccion) ?></td>
                                      <td><?= h($consultorio->telefonos) ?></td>
                                      <td class="actions">
                                          <?= $this->Html->link(__('Edit'), ['action' => 'edit', $consultorio->id,$idMedico]) ?>
                                          <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $consultorio->id,$idMedico], ['confirm' => __('Are you sure you want to delete # {0}?', $consultorio->id)]) ?>
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

