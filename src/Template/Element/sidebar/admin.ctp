<aside id="sidebar_left" class="nano nano-primary affix">

    <!-- Start: Sidebar Left Content -->
    <div class="sidebar-left-content nano-content">

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
            
            <li>
                <a href="javascript:" class="accordion-toggle">
                    <span class="fa fa-h-square"></span>
                    <span class="sidebar-title">Especialidades</span>
                    <span class="caret"></span>
                </a>
                <ul class="nav sub-nav">
                    <li>
                        <a href="<?php echo $this->Url->build(['controller' => 'Especialidades', 'action' => 'index']) ?>">
                            Listado de Especialidades</a>
                    </li>
                    <li>
                        <a href="<?php echo $this->Url->build(['controller' => 'Especialidades', 'action' => 'add']) ?>">
                            Nueva Especialidad</a>
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