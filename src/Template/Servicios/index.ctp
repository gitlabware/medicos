<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('New Servicio'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Centros'), ['controller' => 'Centros', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Centro'), ['controller' => 'Centros', 'action' => 'add']) ?></li>
    </ul>
</div>
<div class="servicios index large-10 medium-9 columns">
    <table cellpadding="0" cellspacing="0">
    <thead>
        <tr>
            <th><?= $this->Paginator->sort('id') ?></th>
            <th><?= $this->Paginator->sort('nombre') ?></th>
            <th><?= $this->Paginator->sort('descripcion') ?></th>
            <th><?= $this->Paginator->sort('created') ?></th>
            <th><?= $this->Paginator->sort('modified') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($servicios as $servicio): ?>
        <tr>
            <td><?= $this->Number->format($servicio->id) ?></td>
            <td><?= h($servicio->nombre) ?></td>
            <td><?= h($servicio->descripcion) ?></td>
            <td><?= h($servicio->created) ?></td>
            <td><?= h($servicio->modified) ?></td>
            <td class="actions">
                <?= $this->Html->link(__('View'), ['action' => 'view', $servicio->id]) ?>
                <?= $this->Html->link(__('Edit'), ['action' => 'edit', $servicio->id]) ?>
                <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $servicio->id], ['confirm' => __('Are you sure you want to delete # {0}?', $servicio->id)]) ?>
            </td>
        </tr>

    <?php endforeach; ?>
    </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
        </ul>
        <p><?= $this->Paginator->counter() ?></p>
    </div>
</div>
