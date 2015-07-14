<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('List Consultorios'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Medicos'), ['controller' => 'Medicos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Medico'), ['controller' => 'Medicos', 'action' => 'add']) ?></li>
    </ul>
</div>
<div class="consultorios form large-10 medium-9 columns">
    <?= $this->Form->create($consultorio) ?>
    <fieldset>
        <legend><?= __('Add Consultorio') ?></legend>
        <?php
            echo $this->Form->input('medico_id', ['options' => $medicos]);
            echo $this->Form->input('nombre');
            echo $this->Form->input('direccion');
            echo $this->Form->input('telefonos');
            echo $this->Form->input('lat');
            echo $this->Form->input('lng');
            echo $this->Form->input('horarios');
            echo $this->Form->input('estado');
            echo $this->Form->input('descripcion');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
