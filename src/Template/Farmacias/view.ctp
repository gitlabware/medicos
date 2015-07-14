<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Edit Farmacia'), ['action' => 'edit', $farmacia->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Farmacia'), ['action' => 'delete', $farmacia->id], ['confirm' => __('Are you sure you want to delete # {0}?', $farmacia->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Farmacias'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Farmacia'), ['action' => 'add']) ?> </li>
    </ul>
</div>
<div class="farmacias view large-10 medium-9 columns">
    <h2><?= h($farmacia->id) ?></h2>
    <div class="row">
        <div class="large-5 columns strings">
            <h6 class="subheader"><?= __('Nombre') ?></h6>
            <p><?= h($farmacia->nombre) ?></p>
            <h6 class="subheader"><?= __('Direccion') ?></h6>
            <p><?= h($farmacia->direccion) ?></p>
            <h6 class="subheader"><?= __('Telefonos') ?></h6>
            <p><?= h($farmacia->telefonos) ?></p>
        </div>
        <div class="large-2 columns numbers end">
            <h6 class="subheader"><?= __('Id') ?></h6>
            <p><?= $this->Number->format($farmacia->id) ?></p>
            <h6 class="subheader"><?= __('Farmacia Id') ?></h6>
            <p><?= $this->Number->format($farmacia->farmacia_id) ?></p>
        </div>
        <div class="large-2 columns dates end">
            <h6 class="subheader"><?= __('Created') ?></h6>
            <p><?= h($farmacia->created) ?></p>
            <h6 class="subheader"><?= __('Modified') ?></h6>
            <p><?= h($farmacia->modified) ?></p>
        </div>
    </div>
</div>
