<aside id="sidebar_left" class="nano nano-primary affix">

    <!-- Start: Sidebar Left Content -->
    <div class="sidebar-left-content nano-content">

        <!-- Start: Sidebar Header -->
        <header class="sidebar-header">

            <!-- Sidebar Widget - Menu (Slidedown) -->
            <div class="sidebar-widget menu-widget">
                <div class="row text-center mbn">
                    <div class="col-xs-4">
                        <a href="dashboard.html" class="text-primary" data-toggle="tooltip" data-placement="top" title="Dashboard">
                            <span class="glyphicon glyphicon-home"></span>
                        </a>
                    </div>
                    <div class="col-xs-4">
                        <a href="pages_messages.html" class="text-info" data-toggle="tooltip" data-placement="top" title="Messages">
                            <span class="glyphicon glyphicon-inbox"></span>
                        </a>
                    </div>
                    <div class="col-xs-4">
                        <a href="pages_profile.html" class="text-alert" data-toggle="tooltip" data-placement="top" title="Tasks">
                            <span class="glyphicon glyphicon-bell"></span>
                        </a>
                    </div>
                    <div class="col-xs-4">
                        <a href="pages_timeline.html" class="text-system" data-toggle="tooltip" data-placement="top" title="Activity">
                            <span class="fa fa-desktop"></span>
                        </a>
                    </div>
                    <div class="col-xs-4">
                        <a href="pages_profile.html" class="text-danger" data-toggle="tooltip" data-placement="top" title="Settings">
                            <span class="fa fa-gears"></span>
                        </a>
                    </div>
                    <div class="col-xs-4">
                        <a href="pages_gallery.html" class="text-warning" data-toggle="tooltip" data-placement="top" title="Cron Jobs">
                            <span class="fa fa-flask"></span>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Sidebar Widget - Author (hidden)  -->
            <div class="sidebar-widget author-widget hidden">
                <div class="media">
                    <a class="media-left" href="#">
                        <img src="<?php echo $this->request->webroot; ?>img/avatars/3.jpg" class="img-responsive">
                    </a>
                    <div class="media-body">
                        <div class="media-links">
                            <a href="#" class="sidebar-menu-toggle">User Menu -</a> <a href="pages_login(alt).html">Logout</a>
                        </div>
                        <div class="media-author">Michael Richards</div>
                    </div>
                </div>
            </div>

            <!-- Sidebar Widget - Search (hidden) -->
            <div class="sidebar-widget search-widget hidden">
                <div class="input-group">
                    <span class="input-group-addon">
                        <i class="fa fa-search"></i>
                    </span>
                    <input type="text" id="sidebar-search" class="form-control" placeholder="Search...">
                </div>
            </div>

        </header>
        <!-- End: Sidebar Header -->

        <!-- Start: Sidebar Menu -->
        <ul class="nav sidebar-menu">
            <li class="sidebar-label pt20">Menu</li>
            <li>
                <a href="javascript:" class="accordion-toggle">
                    <span class="fa fa-users"></span>
                    <span class="sidebar-title">Usuarios</span>
                    <span class="caret"></span>
                </a>
                <ul class="nav sub-nav">
                    <li>
                        <a href="<?php echo $this->Url->build(['controller' => 'Users', 'action' => 'index']) ?>">
                             Listado de Usuarios</a>
                    </li>
                    <li>
                        <a href="<?php echo $this->Url->build(['controller' => 'Users', 'action' => 'add']) ?>">
                             Nuevo Usuario</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="javascript" class="accordion-toggle">
                    <span class="fa fa-user-md"></span>
                    <span class="sidebar-title">Medicos</span>
                    <span class="caret"></span>
                </a>
                <ul class="nav sub-nav">
                    <li>
                        <a href="<?php echo $this->Url->build(['controller' => 'Medicos', 'action' => 'index']) ?>">
                             Listado de Medicos</a>
                    </li>
                    <li>
                        <a href="<?php echo $this->Url->build(['controller' => 'Medicos', 'action' => 'add']) ?>">
                            Nuevo Medico</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="javascript:" class="accordion-toggle">
                    <span class="fa fa-h-square"></span>
                    <span class="sidebar-title">Centros Medicos</span>
                    <span class="caret"></span>
                </a>
                <ul class="nav sub-nav">
                    <li>
                        <a href="<?php echo $this->Url->build(['controller' => 'Centros', 'action' => 'index']) ?>">
                             Listado de Centros</a>
                    </li>
                    <li>
                        <a href="<?php echo $this->Url->build(['controller' => 'Centros', 'action' => 'add']) ?>">
                            Nuevo Centro</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="javascript:" class="accordion-toggle">
                    <span class="fa fa-h-square"></span>
                    <span class="sidebar-title">Farmacias</span>
                    <span class="caret"></span>
                </a>
                <ul class="nav sub-nav">
                    <li>
                        <a href="<?php echo $this->Url->build(['controller' => 'Farmacias', 'action' => 'index']) ?>">
                            Listado de Farmacias</a>
                    </li>
                    <li>
                        <a href="<?php echo $this->Url->build(['controller' => 'Farmacias', 'action' => 'add']) ?>">
                            Nueva Farmacia</a>
                    </li>
                </ul>
            </li>

        </ul>
        <!-- End: Sidebar Menu -->

        <!-- Start: Sidebar Collapse Button -->
        <div class="sidebar-toggle-mini">
            <a href="#">
                <span class="fa fa-sign-out"></span>
            </a>
        </div>
        <!-- End: Sidebar Collapse Button -->

    </div>
    <!-- End: Sidebar Left Content -->

</aside>