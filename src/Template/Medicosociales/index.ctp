<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('New Medicosociale'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Sociales'), ['controller' => 'Sociales', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Sociale'), ['controller' => 'Sociales', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Medicos'), ['controller' => 'Medicos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Medico'), ['controller' => 'Medicos', 'action' => 'add']) ?></li>
    </ul>
</div>
<div class="medicosociales index large-10 medium-9 columns">
    <table cellpadding="0" cellspacing="0">
    <thead>
        <tr>
            <th><?= $this->Paginator->sort('id') ?></th>
            <th><?= $this->Paginator->sort('sociale_id') ?></th>
            <th><?= $this->Paginator->sort('medico_id') ?></th>
            <th><?= $this->Paginator->sort('url') ?></th>
            <th><?= $this->Paginator->sort('created') ?></th>
            <th><?= $this->Paginator->sort('modified') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($medicosociales as $medicosociale): ?>
        <tr>
            <td><?= $this->Number->format($medicosociale->id) ?></td>
            <td>
                <?= $medicosociale->has('sociale') ? $this->Html->link($medicosociale->sociale->id, ['controller' => 'Sociales', 'action' => 'view', $medicosociale->sociale->id]) : '' ?>
            </td>
            <td>
                <?= $medicosociale->has('medico') ? $this->Html->link($medicosociale->medico->nombre, ['controller' => 'Medicos', 'action' => 'view', $medicosociale->medico->id]) : '' ?>
            </td>
            <td><?= h($medicosociale->url) ?></td>
            <td><?= h($medicosociale->created) ?></td>
            <td><?= h($medicosociale->modified) ?></td>
            <td class="actions">
                <?= $this->Html->link(__('View'), ['action' => 'view', $medicosociale->id]) ?>
                <?= $this->Html->link(__('Edit'), ['action' => 'edit', $medicosociale->id]) ?>
                <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $medicosociale->id], ['confirm' => __('Are you sure you want to delete # {0}?', $medicosociale->id)]) ?>
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
