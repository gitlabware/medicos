<?php if (!empty($nombre_imagen)): ?>
  <img class="media-object mw150" src="<?php echo $this->request->webroot; ?>/perfiles/<?= $nombre_imagen ?>" alt="..." height="230" width="210">
  <?= $this->Form->hidden('url',['value' => $nombre_imagen]);?>
<?php else: ?>
  <p>
      <?php echo $error;?>
  </p>
<?php endif; ?>
