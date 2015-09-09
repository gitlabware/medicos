<?php $drow = FALSE; ?>
<?php foreach ($medicos as $key => $me): ?>
    <?php if (($key % 2) == 0): ?>
        <?php $drow = TRUE; ?>
        <div class="row">
        <?php endif; ?>
        <div class="col-md-6">
            <div class="row">
                <div class="col-md-4">
                    <?php if ($me->sexo == 'Masculino'): ?>

                        <?php if (empty($me->url)): ?>
                            <img class="media-object mw150" src="<?php echo $this->request->webroot; ?>img/iconos/doctor-icono.jpg" alt="..." height="134" width="134">
                        <?php else: ?>
                            <img class="media-object mw150" src="<?php echo $this->request->webroot; ?>/perfiles/<?= $me->url; ?>" alt="..." height="134" width="134">
                        <?php endif; ?>
                    <?php else: ?>
                        <?php if (empty($me->url)): ?>
                            <img class="media-object mw150" src="<?php echo $this->request->webroot; ?>img/iconos/doctora-icono.jpg" alt="..." height="134" width="134">
                        <?php else: ?>
                            <img class="media-object mw150" src="<?php echo $this->request->webroot; ?>/perfiles/<?= $me->url; ?>" alt="..." height="134" width="134">
                        <?php endif; ?>
                    <?php endif; ?>



    <!-- <img src="<?php echo $this->request->webroot . 'perfiles/' . $me->url; ?>" width="134px" height="134px" class="user-avatar">-->
                    <div class="caption">
                        <h5>&nbsp;<?= $me->especialidade->nombre ?></h5>
                    </div>
                </div>
                <div class="col-md-8">
                    <a href="<?= $this->Url->build(['action' => 'vperfil', $me->id]) ?>" class="text-system"><h3><?= $me->nombre ?></h3></a>
                    <b>Telefonos: </b><?= $me->telefonos ?><br>
                    <b>E-mail: </b> <?= $me->mail ?><br>
                    <b>Sexo: </b> <?= $me->sexo ?>
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