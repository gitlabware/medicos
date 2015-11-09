<?php $drow = FALSE; ?>
<?php foreach ($centros as $key => $cent): ?>
    <?php if (($key % 2) == 0): ?>
        <?php $drow = TRUE; ?>
        <div class="row">
        <?php endif; ?>
        <div class="col-md-6">
            <div class="row">
                <div class="col-md-8">
                    <a href="<?= $this->Url->build(['action' => 'vperfil', $cent->id]) ?>" class="text-system"><h3><?= $cent->nombre ?></h3></a>
                    <b>Telefonos: </b><?= $cent->telefonos ?><br>
                    <b>Direccion: </b> <?= $cent->direccion ?><br>
                    <b>Nombre: </b> <?= $cent->tipo ?>
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
