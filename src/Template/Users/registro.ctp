<div class="row mb15 table-layout">

    <div class="col-xs-6 va-m pln">
        <a href="dashboard.html" title="Return to Dashboard">
            <img src="<?php echo $this->request->webroot; ?>img/logos/logo_white.png" title="AdminDesigns Logo" class="img-responsive w250">
        </a>
    </div>

    <div class="col-xs-6 text-right va-b pr5">
        <div class="login-links">
            <a href="pages_login.html" class="" title="Sign In">Sign In</a>
            <span class="text-white"> | </span>
            <a href="pages_register.html" class="active" title="Register">Register</a>
        </div>

    </div>

</div>

<div class="panel panel-info mt10 br-n">

    <div class="panel-heading heading-border bg-white">
        
    </div>

    <form method="post" action="/" id="account2">
        <div class="panel-body p25 bg-light">
            <div class="section-divider mt10">
                <span>Registro de Medico</span>
            </div>
            <!-- .section-divider -->
            <div class="section row">
                <div class="col-md-12">
                    <label for="firstname" class="field prepend-icon">
                        <?php echo $this->Form->text('nombre',['class' => 'gui-input','placeholder' => 'Nombre Completo']);?>
                    </label>
                </div>
                <!-- end section -->
            </div>
            <!-- end .section row section -->

            <div class="section">
                <label for="email" class="field prepend-icon">
                    <input type="email" name="email" id="email" class="gui-input" placeholder="Email address">
                    <label for="email" class="field-icon">
                        <i class="fa fa-envelope"></i>
                    </label>
                </label>
            </div>
            <!-- end section -->

            <div class="section">
                <div class="smart-widget sm-right smr-120">
                    <label for="username" class="field prepend-icon">
                        <input type="text" name="username" id="username" class="gui-input" placeholder="Choose your username">
                        <label for="username" class="field-icon">
                            <i class="fa fa-user"></i>
                        </label>
                    </label>
                    <label for="username" class="button">.envato.com</label>
                </div>
                <!-- end .smart-widget section -->
            </div>
            <!-- end section -->

            <div class="section">
                <label for="password" class="field prepend-icon">
                    <input type="password" name="password" id="password" class="gui-input" placeholder="Create a password">
                    <label for="password" class="field-icon">
                        <i class="fa fa-unlock-alt"></i>
                    </label>
                </label>
            </div>
            <!-- end section -->

            <div class="section">
                <label for="confirmPassword" class="field prepend-icon">
                    <input type="password" name="confirmPassword" id="confirmPassword" class="gui-input" placeholder="Retype your password">
                    <label for="confirmPassword" class="field-icon">
                        <i class="fa fa-lock"></i>
                    </label>
                </label>
            </div>
            <!-- end section -->

            <div class="section-divider mv40">
                <span>Review the Terms</span>
            </div>
            <!-- .section-divider -->

            <div class="section mb15">
                <label class="option block">
                    <input type="checkbox" name="trial">
                    <span class="checkbox"></span>Sign me up for a
                    <a href="#" class="theme-link"> 7-day free PRO trial. </a>
                </label>
                <label class="option block mt15">
                    <input type="checkbox" name="terms">
                    <span class="checkbox"></span>I agree to the
                    <a href="#" class="theme-link"> terms of use. </a>
                </label>
            </div>
            <!-- end section -->

        </div>
        <!-- end .form-body section -->
        <div class="panel-footer clearfix">
            <button type="submit" class="button btn-primary pull-right">Crear cuenta</button>
        </div>
        <!-- end .form-footer section -->
    </form>
</div>