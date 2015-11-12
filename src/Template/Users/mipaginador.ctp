<section id="content" class="table-layout animated fadeIn">
    <!-- begin: .tray-center -->
    <div class="tray tray-center">

        <!-- Search Results Panel  -->
        <div class="panel">
            <div class="panel-heading">
                <span class="panel-title text-muted hidden-xs">Se encontro <?= $this->Paginator->counter(['format' => '{{count}}']) ?> resultados </span>
                <ul class="nav panel-tabs-border panel-tabs-merge panel-tabs">
                    <li class="active"><a href="#search" data-toggle="tab">Classic Search</a></li>
                </ul>
            </div>
            <div class="panel-menu">
                <?= $this->Form->create(NULL); ?>
                <div class="input-group input-hero input-hero-sm">
                    <span class="input-group-addon">
                        <i class="fa fa-search"></i>
                    </span>
                    <?= $this->Form->text('busqueda', ['class' => 'form-control', 'placeholder' => 'Ingrese la busqueda..', 'id' => 'icon-filter']); ?>
                </div>
                <?php $this->Form->end(); ?>
            </div>
            <div class="panel-body ph20">
                <div class="tab-content">

                    <!-- Classic Search Pane -->
                    <div id="search" class="tab-pane active">

                        <!-- Search Pane Title -->
                        <h3>Mostrando <b class="text-primary"><?= $this->Paginator->counter(['format' => '{{current}}']) ?></b> resultados para la busqueda</h3>
                        <hr class="alt">

                        <?php foreach ($usuarios as $us): ?>
                          <div class="search-result">
                              <h3><a href="javascript:"><?= $us->mifrase; ?></a></h3>
                              <ul class="result-meta">
                                  <li><a href="#">http://www.themeforest.com</a></li>
                                  <li><a href="#"> 45 ratings </a></li>
                                  <li>
                                      <i class="fa fa-star-o text-warning"></i>
                                      <i class="fa fa-star-o text-warning"></i>
                                      <i class="fa fa-star-o text-warning"></i>
                                      <i class="fa fa-star-o text-warning"></i>
                                      <i class="fa fa-star-o text-warning"></i>
                                  </li>
                                  <li><a href="#"> $22.99 </a></li>
                              </ul>
                              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sequi, obcaecati consequuntur aspernatur neque voluptatum mollitia eaque tenetur ea tempora itaque dolore incidunt explicabo voluptate quaerat at reprehenderit iste iusto asperiores?</p>
                              <ul class="result-meta">
                                  <li><a href="#"> Home </a></li>
                                  <li><a href="#"> Our Products </a></li>
                                  <li><a href="#"> About Us </a></li>
                                  <li><a href="#"> Customer Support </a></li>
                              </ul>
                          </div>
                        <?php endforeach; ?>
                    </div>

                </div>
            </div>
            <div class="panel-footer clearfix">
                <nav>
                    <ul class="pagination pull-right">
                        <?= $this->Paginator->prev('<i class="fa fa-angle-left"></i> Anterior', ['escape' => false]) ?>
                        <?= $this->Paginator->numbers() ?>
                        <?= $this->Paginator->next('Siguiente <i class="fa fa-angle-right"></i>', ['escape' => false]) ?>
                    </ul>
                </nav>

            </div>
        </div>

    </div>
</section>
