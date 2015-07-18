<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Edit Medicosociale'), ['action' => 'edit', $medicosociale->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Medicosociale'), ['action' => 'delete', $medicosociale->id], ['confirm' => __('Are you sure you want to delete # {0}?', $medicosociale->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Medicosociales'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Medicosociale'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Sociales'), ['controller' => 'Sociales', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Sociale'), ['controller' => 'Sociales', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Medicos'), ['controller' => 'Medicos', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Medico'), ['controller' => 'Medicos', 'action' => 'add']) ?> </li>
    </ul>
</div>
<div class="medicosociales view large-10 medium-9 columns">
    <h2><?= h($medicosociale->id) ?></h2>
    <div class="row">
        <div class="large-5 columns strings">
            <h6 class="subheader"><?= __('Sociale') ?></h6>
            <p><?= $medicosociale->has('sociale') ? $this->Html->link($medicosociale->sociale->id, ['controller' => 'Sociales', 'action' => 'view', $medicosociale->sociale->id]) : '' ?></p>
            <h6 class="subheader"><?= __('Medico') ?></h6>
            <p><?= $medicosociale->has('medico') ? $this->Html->link($medicosociale->medico->nombre, ['controller' => 'Medicos', 'action' => 'view', $medicosociale->medico->id]) : '' ?></p>
            <h6 class="subheader"><?= __('Url') ?></h6>
            <p><?= h($medicosociale->url) ?></p>
        </div>
        <div class="large-2 columns numbers end">
            <h6 class="subheader"><?= __('Id') ?></h6>
            <p><?= $this->Number->format($medicosociale->id) ?></p>
        </div>
        <div class="large-2 columns dates end">
            <h6 class="subheader"><?= __('Created') ?></h6>
            <p><?= h($medicosociale->created) ?></p>
            <h6 class="subheader"><?= __('Modified') ?></h6>
            <p><?= h($medicosociale->modified) ?></p>
        </div>
    </div>
</div>
