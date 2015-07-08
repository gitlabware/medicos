<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $medico->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $medico->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Medicos'), ['action' => 'index']) ?></li>
    </ul>
</div>
<div class="medicos form large-10 medium-9 columns">
    <?= $this->Form->create($medico) ?>
    <fieldset>
        <legend><?= __('Edit Medico') ?></legend>
        <?php
            echo $this->Form->input('nombre');
            echo $this->Form->input('telefonos');
            echo $this->Form->input('direccion');
            echo $this->Form->input('ci');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
