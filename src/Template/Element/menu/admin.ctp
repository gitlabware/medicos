<ul class="nav navbar-nav navbar-left">
    <li class="hidden-xs">
        <a class="request-fullscreen toggle-active" href="#">
            <span class="ad ad-screen-full fs18"></span>
        </a>
    </li>
</ul>
<?= $this->Form->create(NULL,['url' => ['controller' => 'Medicos','action' => 'busca_medicos'],'class' => 'navbar-form navbar-left navbar-search']) ?>
    <div class="form-group">
        <?= $this->Form->text('buscador',['placeholder' => 'Buscar...','class' => 'form-control'])?>
    </div>
<?= $this->Form->end() ?>

<ul class="nav navbar-nav navbar-right">
    
    <li class="menu-divider hidden-xs">
        <i class="fa fa-circle"></i>
    </li>
    <li class="dropdown">
        <a href="#" class="dropdown-toggle fw600 p15" data-toggle="dropdown"> <img src="<?php echo $this->request->webroot; ?>img/avatars/1.jpg" alt="avatar" class="mw30 br64 mr15"> <?php echo $this->request->session()->read('Auth.User.username') ?>
            <span class="caret caret-tp hidden-xs"></span>
        </a>
        <ul class="dropdown-menu list-group dropdown-persist w250" role="menu">
            <li class="list-group-item">
                <a href="<?php echo $this->Url->build(['controller' => 'Users', 'action' => 'logout']); ?>" class="animated animated-short fadeInUp">
                    <span class="fa fa-power-off"></span> Salir </a>
            </li>
        </ul>
    </li>
</ul>