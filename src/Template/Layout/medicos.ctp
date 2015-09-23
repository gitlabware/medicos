<!DOCTYPE html>
<html>

    <head>
        <!-- Meta, title, CSS, favicons, etc. -->
        <meta charset="utf-8">
        <title>MEDICOS</title>
        <meta name="keywords" content="HTML5 Bootstrap 3 Admin Template UI Theme" />
        <meta name="description" content="AdminDesigns - A Responsive HTML5 Admin UI Framework">
        <meta name="author" content="AdminDesigns">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!-- Font CSS (Via CDN) -->
        <link rel='stylesheet' type='text/css' href='http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700'>
        <link rel="stylesheet" type="text/css" href="<?php echo $this->request->webroot; ?>js/vendor/plugins/magnific/magnific-popup.css">

        <!-- Datatables CSS -->
        <link rel="stylesheet" type="text/css" href="<?php echo $this->request->webroot; ?>js/vendor/plugins/datatables/media/css/dataTables.bootstrap.css">

        <!-- Datatables Addons CSS -->
        <link rel="stylesheet" type="text/css" href="<?php echo $this->request->webroot; ?>js/vendor/plugins/datatables/media/css/dataTables.plugins.css">
        <!-- Theme CSS -->  
        <link rel="stylesheet" type="text/css" href="<?php echo $this->request->webroot; ?>css/theme.css">  
        <!-- Admin Forms CSS -->
        <link rel="stylesheet" type="text/css" href="<?php echo $this->request->webroot; ?>css/admin-forms.css">
        <?= $this->fetch('addcss') ?>
        <!-- Favicon -->
        <link rel="shortcut icon" href="<?php echo $this->request->webroot; ?>img/favicon.ico">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
      <![endif]-->
        <script src="<?php echo $this->request->webroot; ?>js/jquery-1.11.1.min.js"></script>

    </head>

    <body class="error-page sb-l-o sb-r-c">
        <?php echo $this->element('barra/chat') ?>
        <!-- Start: Main -->
        <div id="main">

            <!-- Start: Header -->
            <header class="navbar navbar-fixed-top bg-system">
                <div class="navbar-branding">
                    <a class="navbar-brand" href="dashboard.html">
                        <b>Medicos</b>CAE
                    </a>
                    <span id="toggle_sidemenu_l" class="ad ad-lines"></span>
                </div>
                <?php
                if ($this->request->session()->read('Auth.User.role') == 'Administrador') {
                    echo $this->element('menu/admin');
                } elseif ($this->request->session()->read('Auth.User.role') == 'Medico') {
                    echo $this->element('menu/medicos');
                }
                ?>

            </header>
            <!-- End: Header -->

            <!-- Start: Sidebar -->
            <?php
            if ($this->request->session()->read('Auth.User.role') == 'Administrador') {
                echo $this->element('sidebar/admin');
            } elseif ($this->request->session()->read('Auth.User.role') == 'Medico') {
                echo $this->element('sidebar/medico');
            }
            ?>

            <!-- Start: Content-Wrapper -->
            <section id="content_wrapper">


                <!-- Start: Topbar -->
                <!--<header id="topbar">

                </header>
                <!-- End: Topbar -->
                <script>
                    var tipo_notif = null;
                    var texto_noyif = null;
                </script>
                <!-- Begin: Content -->
                <?= $this->Flash->render() ?>
                <?= $this->fetch('content') ?>
                <!-- End: Content -->

            </section>


            <!-- End: Right Sidebar -->

            <!-- Admin Form Popup -->
            <div id="mimodal" class=" popup-basic admin-form mfp-with-anim mfp-hide">
                <div class="panel">
                    <div id="spin-cargando-mod" class="progress mt10 mbn">
                        <div class="progress-bar progress-bar-info progress-bar-striped active" role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100" style="width: 100%">
                            <span class="sr-only"></span>
                        </div>
                    </div>
                    <div id="divmodal">

                    </div>
                </div>
                <!-- end: .panel -->
            </div>
            <!-- end: .admin-form -->

        </div>
        <!-- End: Main -->

        <!-- BEGIN: PAGE SCRIPTS -->

        <!-- jQuery -->  
        <script src="<?php echo $this->request->webroot; ?>js/jquery_ui/jquery-ui.min.js"></script>

        <script src="<?php echo $this->request->webroot; ?>js/vendor/plugins/pnotify/pnotify.js"></script>

        <!-- Datatables -->
        <script src="<?php echo $this->request->webroot; ?>js/vendor/plugins/datatables/media/js/jquery.dataTables.js"></script>

        <!-- Datatables Tabletools addon -->
        <script src="<?php echo $this->request->webroot; ?>js/vendor/plugins/datatables/extensions/TableTools/js/dataTables.tableTools.min.js"></script>

        <!-- Datatables ColReorder addon -->
        <script src="<?php echo $this->request->webroot; ?>js/vendor/plugins/datatables/extensions/ColReorder/js/dataTables.colReorder.min.js"></script>

        <!-- Datatables Bootstrap Modifications  -->
        <script src="<?php echo $this->request->webroot; ?>js/vendor/plugins/datatables/media/js/dataTables.bootstrap.js"></script>

        <!-- Page Plugins -->
        <script src="<?php echo $this->request->webroot; ?>js/vendor/plugins/magnific/jquery.magnific-popup.js"></script>

        <!-- Theme Javascript -->
        <script src="<?php echo $this->request->webroot; ?>js/utility/utility.js"></script>
        <script src="<?php echo $this->request->webroot; ?>js/demo/demo.js"></script>
        <script src="<?php echo $this->request->webroot; ?>js/main.js"></script>

        <script>
                  
        </script>

        <script type="text/javascript">
            jQuery(document).ready(function () {

                "use strict";

                // Init Theme Core    
                Core.init();

                // Init Demo JS    
                Demo.init();
                
                 $('.admin-panels').adminpanel({
                       grid: '.admin-grid',
                       draggable: true,
                       mobile: false,
                       callback: function () {
                           bootbox.confirm('<h3>A Custom Callback!</h3>', function () {
                           });
                       },
                       onFinish: function () {
                           $('.admin-panels').addClass('animated fadeIn').removeClass('fade-onload');

                           // Init Demo settings 
                           $('#p0 .panel-control-color').click();

                           // Init Demo settings 
                           $('#p1 .panel-control-title').click();

                           // Create an example admin panel filter
                           $('#admin-panel-filter a').on('click', function () {
                               var This = $(this);
                               var Value = This.attr('data-filter');

                               // Toggle any elements whos name matches
                               // that of the buttons attr value
                               $('.admin-filter-panels').find($(Value)).each(function (i, e) {
                                   if (This.hasClass('active')) {
                                       $(this).slideDown('fast').removeClass('panel-filtered');
                                   } else {
                                       $(this).slideUp().addClass('panel-filtered');
                                   }
                               });
                               This.toggleClass('active');
                           });

                       },
                       onSave: function () {
                           $(window).trigger('resize');
                       }
                   });
                

                if (tipo_notif && texto_noyif) {
                    var Stacks = {
                        stack_bar_top: {
                            "dir1": "down",
                            "dir2": "right",
                            "push": "top",
                            "spacing1": 0,
                            "spacing2": 0
                        }
                    }
                    var noteShadow = "false";
                    var noteStack = "stack_bar_top";
                    var noteOpacity = "1";

                    // Create new Notification
                    new PNotify({
                        title: tipo_notif,
                        text: texto_noyif,
                        shadow: noteShadow,
                        opacity: noteOpacity,
                        addclass: noteStack,
                        type: noteStyle,
                        stack: Stacks[noteStack],
                        width: "100%",
                        delay: 2000
                    });
                }

                $('.tabla-dato').dataTable({
                    "aoColumnDefs": [{
                            'bSortable': false,
                            'aTargets': [-1]
                        }],
                    "oLanguage": {
                        "oPaginate": {
                            "sPrevious": "Anterior",
                            "sNext": "Siguiente"
                        },
                        "sSearch": "Buscar",
                        "sLengthMenu": "Mostrar _MENU_ registros"
                    },
                    "iDisplayLength": 5,
                    "aLengthMenu": [
                        [5, 10, 25, 50, -1],
                        [5, 10, 25, 50, "Todos"]
                    ],
                    "sDom": '<"dt-panelmenu clearfix"lfr>t<"dt-panelfooter clearfix"ip>'
                });

            });

            function cargarmodal(urll) {

                jQuery("#spin-cargando-mod").show();
                jQuery("#divmodal").hide();
                $.magnificPopup.open({
                    removalDelay: 500, //delay removal by X to allow out-animation,
                    items: {
                        src: '#mimodal'
                    },
                    // overflowY: 'hidden', // 
                    callbacks: {
                        beforeOpen: function (e) {
                            this.st.mainClass = 'mfp-zoomIn';
                        }
                    },
                    midClick: true // allow opening popup on middle mouse click. Always set it to true if you don't provide alternative source.
                });
                jQuery("#divmodal").load(urll, function (responseText, textStatus, req) {
                    if (textStatus == "error")
                    {
                        alert("error!!!");
                    }
                    else {
                        jQuery("#spin-cargando-mod").hide(500);
                        jQuery("#divmodal").show();
                    }
                });


            }


            if ($('#skin-toolbox').length) {
                $('#skin-toolbox .panel-heading').on('click', function () {
                    $('#skin-toolbox').toggleClass('toolbox-open');
                });
                // Disable text selection
                $('#skin-toolbox .panel-heading').disableSelection();

                // Cache component elements
                var Body = $('body');
                var Breadcrumbs = $('#topbar');
                var Sidebar = $('#sidebar_left');
                var Header = $('.navbar');
                var Branding = Header.children('.navbar-branding');

                // Possible Component Skins
                var headerSkins = "bg-primary bg-success bg-info bg-warning bg-danger bg-alert bg-system bg-dark";
                var sidebarSkins = "sidebar-light light dark";

                // Theme Settings
                var settingsObj = {
                    // 'headerTone': true,
                    'headerSkin': '',
                    'sidebarSkin': 'sidebar-default',
                    'headerState': 'navbar-fixed-top',
                    'sidebarState': 'affix',
                    'sidebarAlign': '',
                    'breadcrumbState': 'relative',
                    'breadcrumbHidden': 'visible',
                };

                // Local Storage Theme Key
                var themeKey = 'admin-settings1';

                // Local Storage Theme Get
                var themeGet = localStorage.getItem(themeKey);

                // Set new key if one doesn't exist
                if (themeGet === null) {
                    localStorage.setItem(themeKey, JSON.stringify(settingsObj));
                    themeGet = localStorage.getItem(themeKey);
                }
            }
        </script>

        <!-- END: PAGE SCRIPTS -->
        <?php echo $this->fetch('scriptjs'); ?>
    </body>

</html>
