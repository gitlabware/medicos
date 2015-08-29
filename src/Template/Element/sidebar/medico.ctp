<aside id="sidebar_left" class="nano nano-primary affix">

    <!-- Start: Sidebar Left Content -->
    <div class="sidebar-left-content nano-content">

        <!-- Start: Sidebar Header -->
        <header class="sidebar-header">
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
                <a href="<?= $this->Url->build(['controller' => 'Medicos','action' => 'perfil']);?>">
                    <span class="fa fa-user"></span>
                    <span class="sidebar-title">Mi Perfil</span>
                </a>
            </li>
            <li>
                <a href="<?= $this->Url->build(['controller' => 'Medicos','action' => 'buscador']);?>">
                    <span class="fa fa-stethoscope"></span>
                    <span class="sidebar-title">Medicos</span>
                </a>
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