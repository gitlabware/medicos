
<section id="content" class="table-layout animated fadeIn">

    <div class="tray tray-center">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-visible">
                    <div class="panel-heading">
                        <div class="panel-title hidden-xs">
                            <span class="glyphicon glyphicon-tasks"></span>Usuarios</div>
                    </div>
                    <div class="panel-body pn">
                        <table class="table table-striped table-hover dataTable tabla-dato" cellspacing="0" width="100%">
                            <thead>
                                <tr>
                                    <th><?= __('id') ?></th>
                                    <th><?= __('username') ?></th>
                                    <th><?= __('role') ?></th>
                                    <th><?= __('created') ?></th>
                                    <th><?= __('modified') ?></th>
                                    <th><?= __('Actions') ?></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($data as $user): ?>
                                  <tr>
                                      <td><?= $this->Number->format($user->id) ?></td>
                                      <td><?= h($user->username) ?></td>
                                      <td><?= h($user->role) ?></td>
                                      <td><?= h($user->created) ?></td>
                                      <td><?= h($user->modified) ?></td>
                                      <td>
                                          <?= $this->Html->link('<i class="fa fa-edit"></i>', ['action' => 'edit', $user->id],['class' => 'btn btn-info','escape' => false,'title' => 'Editar']) ?>
                                          <?= $this->Form->postLink('<i class="fa fa-trash"></i>', ['action' => 'delete', $user->id], ['confirm' => __('Esta seguro de eliminar al usuario # {0}?', $user->id),'class' => 'btn btn-danger','escape' => false,'title' => 'Eliminar']) ?>
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
    <?= $this->element('menuder/admin') ?>
</section>


<!--
<script src="<?php //echo $this->request->webroot;  ?>js/jquery_ui/jquery-ui.min.js"></script>

<script src="<?php echo $this->request->webroot; ?>js/vendor/plugins/datatables/media/js/jquery.dataTables.js"></script>


<script src="<?php echo $this->request->webroot; ?>js/vendor/plugins/datatables/extensions/TableTools/js/dataTables.tableTools.min.js"></script>


<script src="<?php echo $this->request->webroot; ?>js/vendor/plugins/datatables/extensions/ColReorder/js/dataTables.colReorder.min.js"></script>
<?php echo $this->Html->script('DataTables.cakephp.dataTables.js'); ?>

-->

<script>
<?php
/*
  $this->DataTables->init([
  'ajax' => [
  'url' => $this->Url->build(['action' => 'index']),
  ],
  'deferLoading' => $recordsTotal,
  'delay' => 600,
  'columns' => [
  [
  'name' => 'Users.id',
  'data' => 'id'
  ],
  [
  'name' => 'Users.username',
  'data' => 'username'
  ],
  [
  'name' => 'Users.role',
  'data' => 'role'
  ],
  [
  'name' => 'Users.created',
  'data' => 'created'
  ],
  [
  'name' => 'Users.modified',
  'data' => 'modified'
  ]
  ]
  ])->draw('.dataTable'); */
?>
</script>
