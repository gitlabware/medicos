<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('List Medicosociales'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Sociales'), ['controller' => 'Sociales', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Sociale'), ['controller' => 'Sociales', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Medicos'), ['controller' => 'Medicos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Medico'), ['controller' => 'Medicos', 'action' => 'add']) ?></li>
    </ul>
</div>
<div class="medicosociales form large-10 medium-9 columns">
    <?= $this->Form->create($medicosociale) ?>
    <fieldset>
        <legend><?= __('Add Medicosociale') ?></legend>
        <?php
            echo $this->Form->input('sociale_id', ['options' => $sociales]);
            echo $this->Form->input('medico_id', ['options' => $medicos]);
            echo $this->Form->input('url');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>


