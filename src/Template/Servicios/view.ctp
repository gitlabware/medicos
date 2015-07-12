<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Edit Servicio'), ['action' => 'edit', $servicio->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Servicio'), ['action' => 'delete', $servicio->id], ['confirm' => __('Are you sure you want to delete # {0}?', $servicio->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Servicios'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Servicio'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Centros'), ['controller' => 'Centros', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Centro'), ['controller' => 'Centros', 'action' => 'add']) ?> </li>
    </ul>
</div>
<div class="servicios view large-10 medium-9 columns">
    <h2><?= h($servicio->id) ?></h2>
    <div class="row">
        <div class="large-5 columns strings">
            <h6 class="subheader"><?= __('Nombre') ?></h6>
            <p><?= h($servicio->nombre) ?></p>
            <h6 class="subheader"><?= __('Descripcion') ?></h6>
            <p><?= h($servicio->descripcion) ?></p>
        </div>
        <div class="large-2 columns numbers end">
            <h6 class="subheader"><?= __('Id') ?></h6>
            <p><?= $this->Number->format($servicio->id) ?></p>
        </div>
        <div class="large-2 columns dates end">
            <h6 class="subheader"><?= __('Created') ?></h6>
            <p><?= h($servicio->created) ?></p>
            <h6 class="subheader"><?= __('Modified') ?></h6>
            <p><?= h($servicio->modified) ?></p>
        </div>
    </div>
</div>
<div class="related row">
    <div class="column large-12">
    <h4 class="subheader"><?= __('Related Centros') ?></h4>
    <?php if (!empty($servicio->centros)): ?>
    <table cellpadding="0" cellspacing="0">
        <tr>
            <th><?= __('Id') ?></th>
            <th><?= __('Nombre') ?></th>
            <th><?= __('Direccion') ?></th>
            <th><?= __('Telefonos') ?></th>
            <th><?= __('Tipo') ?></th>
            <th><?= __('Centro Id') ?></th>
            <th><?= __('Created') ?></th>
            <th><?= __('Modified') ?></th>
            <th><?= __('Servicio Id') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
        <?php foreach ($servicio->centros as $centros): ?>
        <tr>
            <td><?= h($centros->id) ?></td>
            <td><?= h($centros->nombre) ?></td>
            <td><?= h($centros->direccion) ?></td>
            <td><?= h($centros->telefonos) ?></td>
            <td><?= h($centros->tipo) ?></td>
            <td><?= h($centros->centro_id) ?></td>
            <td><?= h($centros->created) ?></td>
            <td><?= h($centros->modified) ?></td>
            <td><?= h($centros->servicio_id) ?></td>

            <td class="actions">
                <?= $this->Html->link(__('View'), ['controller' => 'Centros', 'action' => 'view', $centros->id]) ?>

                <?= $this->Html->link(__('Edit'), ['controller' => 'Centros', 'action' => 'edit', $centros->id]) ?>

                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Centros', 'action' => 'delete', $centros->id], ['confirm' => __('Are you sure you want to delete # {0}?', $centros->id)]) ?>

            </td>
        </tr>

        <?php endforeach; ?>
    </table>
    <?php endif; ?>
    </div>
</div>
