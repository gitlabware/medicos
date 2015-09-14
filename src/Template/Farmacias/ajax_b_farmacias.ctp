<?php $drow = FALSE; ?>
<?php foreach ($farmacias as $key => $far): ?>
    <?php if (($key % 2) == 0): ?>
        <?php $drow = TRUE; ?>
        <div class="row">
        <?php endif; ?>
        <div class="col-md-6">
            <div class="row">

                <div class="col-md-8">
                    <a href="<?= $this->Url->build(['action' => 'vperfil', $far->id]) ?>" class="text-system"><h3><?= $far->nombre ?></h3></a>
                    <b>Telefonos: </b><?= $far->telefonos ?><br>
                    <b>Direccion: </b> <?= $far->direccion ?><br>
                    <b>Nombre: </b> <?= $far->nombre ?>
                </div>
            </div>
        </div>
        <?php if (($key % 2) == 1): ?>
        </div>
    <?php endif; ?>
<?php endforeach; ?>
<?php
if ($drow) {
    echo '</div>';
}
?>
