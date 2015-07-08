<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('New Medico'), ['action' => 'add']) ?></li>
    </ul>
</div>
<div class="medicos index large-10 medium-9 columns">
    <table cellpadding="0" cellspacing="0">
    <thead>
        <tr>
            <th><?= $this->Paginator->sort('id') ?></th>
            <th><?= $this->Paginator->sort('nombre') ?></th>
            <th><?= $this->Paginator->sort('telefonos') ?></th>
            <th><?= $this->Paginator->sort('direccion') ?></th>
            <th><?= $this->Paginator->sort('ci') ?></th>
            <th><?= $this->Paginator->sort('created') ?></th>
            <th><?= $this->Paginator->sort('modified') ?></th>
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
            <td><?= h($medico->created) ?></td>
            <td><?= h($medico->modified) ?></td>
            <td class="actions">
                <?= $this->Html->link(__('View'), ['action' => 'view', $medico->id]) ?>
                <?= $this->Html->link(__('Edit'), ['action' => 'edit', $medico->id]) ?>
                <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $medico->id], ['confirm' => __('Are you sure you want to delete # {0}?', $medico->id)]) ?>
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
