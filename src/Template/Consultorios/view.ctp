<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Edit Consultorio'), ['action' => 'edit', $consultorio->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Consultorio'), ['action' => 'delete', $consultorio->id], ['confirm' => __('Are you sure you want to delete # {0}?', $consultorio->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Consultorios'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Consultorio'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Medicos'), ['controller' => 'Medicos', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Medico'), ['controller' => 'Medicos', 'action' => 'add']) ?> </li>
    </ul>
</div>
<div class="consultorios view large-10 medium-9 columns">
    <h2><?= h($consultorio->id) ?></h2>
    <div class="row">
        <div class="large-5 columns strings">
            <h6 class="subheader"><?= __('Medico') ?></h6>
            <p><?= $consultorio->has('medico') ? $this->Html->link($consultorio->medico->nombre, ['controller' => 'Medicos', 'action' => 'view', $consultorio->medico->id]) : '' ?></p>
            <h6 class="subheader"><?= __('Nombre') ?></h6>
            <p><?= h($consultorio->nombre) ?></p>
            <h6 class="subheader"><?= __('Direccion') ?></h6>
            <p><?= h($consultorio->direccion) ?></p>
            <h6 class="subheader"><?= __('Telefonos') ?></h6>
            <p><?= h($consultorio->telefonos) ?></p>
            <h6 class="subheader"><?= __('Lat') ?></h6>
            <p><?= h($consultorio->lat) ?></p>
            <h6 class="subheader"><?= __('Lng') ?></h6>
            <p><?= h($consultorio->lng) ?></p>
            <h6 class="subheader"><?= __('Horarios') ?></h6>
            <p><?= h($consultorio->horarios) ?></p>
            <h6 class="subheader"><?= __('Estado') ?></h6>
            <p><?= h($consultorio->estado) ?></p>
        </div>
        <div class="large-2 columns numbers end">
            <h6 class="subheader"><?= __('Id') ?></h6>
            <p><?= $this->Number->format($consultorio->id) ?></p>
        </div>
        <div class="large-2 columns dates end">
            <h6 class="subheader"><?= __('Created') ?></h6>
            <p><?= h($consultorio->created) ?></p>
            <h6 class="subheader"><?= __('Modified') ?></h6>
            <p><?= h($consultorio->modified) ?></p>
        </div>
    </div>
    <div class="row texts">
        <div class="columns large-9">
            <h6 class="subheader"><?= __('Descripcion') ?></h6>
            <?= $this->Text->autoParagraph(h($consultorio->descripcion)) ?>
        </div>
    </div>
</div>
