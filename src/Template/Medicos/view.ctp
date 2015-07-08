<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Edit Medico'), ['action' => 'edit', $medico->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Medico'), ['action' => 'delete', $medico->id], ['confirm' => __('Are you sure you want to delete # {0}?', $medico->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Medicos'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Medico'), ['action' => 'add']) ?> </li>
    </ul>
</div>
<div class="medicos view large-10 medium-9 columns">
    <h2><?= h($medico->id) ?></h2>
    <div class="row">
        <div class="large-5 columns strings">
            <h6 class="subheader"><?= __('Nombre') ?></h6>
            <p><?= h($medico->nombre) ?></p>
            <h6 class="subheader"><?= __('Telefonos') ?></h6>
            <p><?= h($medico->telefonos) ?></p>
            <h6 class="subheader"><?= __('Direccion') ?></h6>
            <p><?= h($medico->direccion) ?></p>
            <h6 class="subheader"><?= __('Ci') ?></h6>
            <p><?= h($medico->ci) ?></p>
        </div>
        <div class="large-2 columns numbers end">
            <h6 class="subheader"><?= __('Id') ?></h6>
            <p><?= $this->Number->format($medico->id) ?></p>
        </div>
        <div class="large-2 columns dates end">
            <h6 class="subheader"><?= __('Created') ?></h6>
            <p><?= h($medico->created) ?></p>
            <h6 class="subheader"><?= __('Modified') ?></h6>
            <p><?= h($medico->modified) ?></p>
        </div>
    </div>
</div>
