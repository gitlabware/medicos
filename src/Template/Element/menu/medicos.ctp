<?php 

$medico = $this->requestAction('Medicos/get_medico_res');
//debug($medico->nombre);exit;
?>
<ul class="nav navbar-nav navbar-left">
    <li class="hidden-xs">
        <a class="request-fullscreen toggle-active" href="#">
            <span class="ad ad-screen-full fs18"></span>
        </a>
    </li>
</ul>
<form class="navbar-form navbar-left navbar-search" role="search">
    <div class="form-group">
        <input type="text" class="form-control" placeholder="Buscar..." value="Buscar...">
    </div>
</form>

<ul class="nav navbar-nav navbar-right">

    <li class="menu-divider hidden-xs">
        <i class="fa fa-circle"></i>
    </li>
    <li class="dropdown">

        <a href="#" class="dropdown-toggle fw600 p15" data-toggle="dropdown"> 
            <?php if ($medico->sexo == 'Masculino'): ?>
              <?php if (empty($medico->url)): ?>
                <img class="mw30 br64 mr15" src="<?php echo $this->request->webroot; ?>img/iconos/doctor-icono.jpg" alt="..." class="mw30 br64 mr15"> <?php echo $this->request->session()->read('Auth.User.username') ?>
              <?php else: ?>
                <img class="mw30 br64 mr15" src="<?php echo $this->request->webroot; ?>/perfiles/<?= $medico->url; ?>" alt="..."> <?php echo $this->request->session()->read('Auth.User.username') ?>
              <?php endif; ?>
            <?php else: ?>
              <?php if (empty($medico->url)): ?>
                <img class="mw30 br64 mr15" src="<?php echo $this->request->webroot; ?>img/iconos/doctora-icono.jpg" alt="..."> <?php echo $this->request->session()->read('Auth.User.username') ?>
              <?php else: ?>
                <img class="mw30 br64 mr15" src="<?php echo $this->request->webroot; ?>/perfiles/<?= $medico->url; ?>" alt="..."> <?php echo $this->request->session()->read('Auth.User.username') ?>
              <?php endif; ?>
            <?php endif; ?>
            <!--<img src="<?php //echo $this->request->webroot; ?>img/avatars/1.jpg" alt="avatar" class="mw30 br64 mr15"> <?php //echo $this->request->session()->read('Auth.User.username') ?>-->
            <span class="caret caret-tp hidden-xs"></span>
        </a>

        <ul class="dropdown-menu list-group dropdown-persist w250" role="menu">
            <li class="list-group-item">
                <a href="<?php echo $this->Url->build(['controller' => 'Medicos', 'action' => 'perfil']); ?>" class="animated animated-short fadeInUp">
                    <span class="fa fa-gear"></span> Configuracion perfil</a>
            </li>
            <li class="list-group-item">
                <a href="<?php echo $this->Url->build(['controller' => 'Users', 'action' => 'logout']); ?>" class="animated animated-short fadeInUp">
                    <span class="fa fa-power-off"></span> Salir </a>
            </li>
        </ul>
    </li>
</ul>