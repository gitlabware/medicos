<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Edit Centro'), ['action' => 'edit', $centro->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Centro'), ['action' => 'delete', $centro->id], ['confirm' => __('Are you sure you want to delete # {0}?', $centro->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Centros'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Centro'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Servicios'), ['controller' => 'Servicios', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Servicio'), ['controller' => 'Servicios', 'action' => 'add']) ?> </li>
    </ul>
</div>
<div class="centros view large-10 medium-9 columns">
    <h2><?= h($centro->id) ?></h2>
    <div class="row">
        <div class="large-5 columns strings">
            <h6 class="subheader"><?= __('Nombre') ?></h6>
            <p><?= h($centro->nombre) ?></p>
            <h6 class="subheader"><?= __('Direccion') ?></h6>
            <p><?= h($centro->direccion) ?></p>
            <h6 class="subheader"><?= __('Telefonos') ?></h6>
            <p><?= h($centro->telefonos) ?></p>
            <h6 class="subheader"><?= __('Tipo') ?></h6>
            <p><?= h($centro->tipo) ?></p>
            <h6 class="subheader"><?= __('Servicio') ?></h6>
            <p><?= $centro->has('servicio') ? $this->Html->link($centro->servicio->id, ['controller' => 'Servicios', 'action' => 'view', $centro->servicio->id]) : '' ?></p>
        </div>
        <div class="large-2 columns numbers end">
            <h6 class="subheader"><?= __('Id') ?></h6>
            <p><?= $this->Number->format($centro->id) ?></p>
            <h6 class="subheader"><?= __('Centro Id') ?></h6>
            <p><?= $this->Number->format($centro->centro_id) ?></p>
        </div>
        <div class="large-2 columns dates end">
            <h6 class="subheader"><?= __('Created') ?></h6>
            <p><?= h($centro->created) ?></p>
            <h6 class="subheader"><?= __('Modified') ?></h6>
            <p><?= h($centro->modified) ?></p>
        </div>
    </div>
</div>
