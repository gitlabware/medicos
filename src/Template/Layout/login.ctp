<!DOCTYPE html>
<html>

    <head>
        <!-- Meta, title, CSS, favicons, etc. -->
        <meta charset="utf-8">
        <title>AdminDesigns - A Responsive HTML5 Admin UI Framework</title>
        <meta name="keywords" content="HTML5 Bootstrap 3 Admin Template UI Theme" />
        <meta name="description" content="AdminDesigns - A Responsive HTML5 Admin UI Framework">
        <meta name="author" content="AdminDesigns">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!-- Font CSS (Via CDN) -->
        <link rel='stylesheet' type='text/css' href='http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700'>

        <!-- Theme CSS -->
        <link rel="stylesheet" type="text/css" href="<?php echo $this->request->webroot; ?>css/theme.css">

        <!-- Admin Forms CSS -->
        <link rel="stylesheet" type="text/css" href="<?php echo $this->request->webroot; ?>css/admin-forms.css">

        <!-- Favicon -->
        <link rel="shortcut icon" href="<?php echo $this->request->webroot; ?>img/favicon.ico">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
         <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
         <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
         <![endif]-->
    </head>

    <body class="external-page sb-l-c sb-r-c">
        <!-- Start: Main -->
        <div id="main" class="animated fadeIn">

            <!-- Start: Content-Wrapper -->
            <section id="content_wrapper">

                <!-- begin canvas animation bg -->
                <div id="canvas-wrapper">
                    <canvas id="demo-canvas"></canvas>
                </div>
                <!-- Begin: Content -->
                <section id="content">
                    <div class="admin-form theme-info" id="login1">
                        <?= $this->Flash->render() ?>
                        <!-- Login Logo -->
                        <?= $this->fetch('content') ?>
                    </div>
                </section>
                <!-- End: Content -->
            </section>
            <!-- End: Content-Wrapper -->

        </div>
        <!-- End: Main -->

        <!-- BEGIN: PAGE SCRIPTS -->

        <!-- jQuery -->
        <script src="<?php echo $this->request->webroot; ?>js/vendor/jquery/jquery-1.11.1.min.js"></script>
        <script src="<?php echo $this->request->webroot; ?>js/vendor/jquery/jquery_ui/jquery-ui.min.js"></script>

        <!-- CanvasBG Plugin(creates mousehover effect) -->
        <script src="<?php echo $this->request->webroot; ?>js/vendor/plugins/canvasbg/canvasbg.js"></script>

        <!-- Theme Javascript -->
        <script src="<?php echo $this->request->webroot; ?>js/utility/utility.js"></script>
        <script src="<?php echo $this->request->webroot; ?>js/demo/demo.js"></script>
        <script src="<?php echo $this->request->webroot; ?>js/main.js"></script>

        <!-- Page Javascript -->
        <script type="text/javascript">
          jQuery(document).ready(function () {

              "use strict";

              // Init Theme Core      
              Core.init();

              // Init Demo JS
              Demo.init();

              // Init CanvasBG and pass target starting location
              CanvasBG.init({
                  Loc: {
                      x: window.innerWidth / 2,
                      y: window.innerHeight / 3.3
                  },
              });

          });
        </script>

        <!-- END: PAGE SCRIPTS -->

    </body>

</html>
