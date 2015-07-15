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
                
                <?= $this->element('menu/admin')?>

            </header>
            <!-- End: Header -->

            <!-- Start: Sidebar -->
            <?php echo $this->element('sidebar/admin'); ?>

            <!-- Start: Content-Wrapper -->
            <section id="content_wrapper">

                <!-- Start: Topbar-Dropdown -->
                <div id="topbar-dropmenu">
                    <div class="topbar-menu row">
                        <div class="col-xs-4 col-sm-2">
                            <a href="#" class="metro-tile">
                                <span class="metro-icon glyphicon glyphicon-inbox"></span>
                                <p class="metro-title">Messages</p>
                            </a>
                        </div>
                        <div class="col-xs-4 col-sm-2">
                            <a href="#" class="metro-tile">
                                <span class="metro-icon glyphicon glyphicon-user"></span>
                                <p class="metro-title">Users</p>
                            </a>
                        </div>
                        <div class="col-xs-4 col-sm-2">
                            <a href="#" class="metro-tile">
                                <span class="metro-icon glyphicon glyphicon-headphones"></span>
                                <p class="metro-title">Support</p>
                            </a>
                        </div>
                        <div class="col-xs-4 col-sm-2">
                            <a href="#" class="metro-tile">
                                <span class="metro-icon fa fa-gears"></span>
                                <p class="metro-title">Settings</p>
                            </a>
                        </div>
                        <div class="col-xs-4 col-sm-2">
                            <a href="#" class="metro-tile">
                                <span class="metro-icon glyphicon glyphicon-facetime-video"></span>
                                <p class="metro-title">Videos</p>
                            </a>
                        </div>
                        <div class="col-xs-4 col-sm-2">
                            <a href="#" class="metro-tile">
                                <span class="metro-icon glyphicon glyphicon-picture"></span>
                                <p class="metro-title">Pictures</p>
                            </a>
                        </div>
                    </div>
                </div>
                <!-- End: Topbar-Dropdown -->

                <!-- Start: Topbar -->
                <header id="topbar">
                    <div class="topbar-left">
                        <ol class="breadcrumb">
                            <li class="crumb-active">
                                <a href="dashboard.html">Dashboard</a>
                            </li>
                            <li class="crumb-icon">
                                <a href="dashboard.html">
                                    <span class="glyphicon glyphicon-home"></span>
                                </a>
                            </li>
                            <li class="crumb-link">
                                <a href="dashboard.html">Home</a>
                            </li>
                            <li class="crumb-trail">Dashboard</li>
                        </ol>
                    </div>
                    <div class="topbar-right">
                        <div class="ib topbar-dropdown">
                            <label for="topbar-multiple" class="control-label pr10 fs11 text-muted">Reporting Period</label>
                            <select id="topbar-multiple" class="hidden">
                                <optgroup label="Filter By:">
                                    <option value="1-1">Last 30 Days</option>
                                    <option value="1-2" selected="selected">Last 60 Days</option>
                                    <option value="1-3">Last Year</option>
                                </optgroup>
                            </select>
                        </div>
                        <div class="ml15 ib va-m" id="toggle_sidemenu_r">
                            <a href="#" class="pl5">
                                <i class="fa fa-sign-in fs22 text-primary"></i>
                                <span class="badge badge-hero badge-danger">3</span>
                            </a>
                        </div>
                    </div>
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

            <!-- Start: Right Sidebar -->
            <aside id="sidebar_right" class="nano affix">

                <!-- Start: Sidebar Right Content -->
                <div class="sidebar-right-content nano-content p15">
                    <h5 class="title-divider text-muted mb20"> Server Statistics
                        <span class="pull-right"> 2013
                            <i class="fa fa-caret-down ml5"></i>
                        </span>
                    </h5>
                    <div class="progress mh5">
                        <div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100" style="width: 44%">
                            <span class="fs11">DB Request</span>
                        </div>
                    </div>
                    <div class="progress mh5">
                        <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100" style="width: 84%">
                            <span class="fs11 text-left">Server Load</span>
                        </div>
                    </div>
                    <div class="progress mh5">
                        <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100" style="width: 61%">
                            <span class="fs11 text-left">Server Connections</span>
                        </div>
                    </div>
                    <h5 class="title-divider text-muted mt30 mb10">Traffic Margins</h5>
                    <div class="row">
                        <div class="col-xs-5">
                            <h3 class="text-primary mn pl5">132</h3>
                        </div>
                        <div class="col-xs-7 text-right">
                            <h3 class="text-success-dark mn">
                                <i class="fa fa-caret-up"></i> 13.2% </h3>
                        </div>
                    </div>
                    <h5 class="title-divider text-muted mt25 mb10">Database Request</h5>
                    <div class="row">
                        <div class="col-xs-5">
                            <h3 class="text-primary mn pl5">212</h3>
                        </div>
                        <div class="col-xs-7 text-right">
                            <h3 class="text-success-dark mn">
                                <i class="fa fa-caret-up"></i> 25.6% </h3>
                        </div>
                    </div>
                    <h5 class="title-divider text-muted mt25 mb10">Server Response</h5>
                    <div class="row">
                        <div class="col-xs-5">
                            <h3 class="text-primary mn pl5">82.5</h3>
                        </div>
                        <div class="col-xs-7 text-right">
                            <h3 class="text-danger mn">
                                <i class="fa fa-caret-down"></i> 17.9% </h3>
                        </div>
                    </div>
                    <h5 class="title-divider text-muted mt40 mb20"> Server Statistics
                        <span class="pull-right text-primary fw600">USA</span>
                    </h5>
                </div>

            </aside>
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
        <script type="text/javascript">
          jQuery(document).ready(function () {

              "use strict";

              // Init Theme Core    
              Core.init();

              // Init Demo JS    
              Demo.init();

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
                  }
              });


          }
        </script>

        <!-- END: PAGE SCRIPTS -->
        <?php echo $this->fetch('scriptjs'); ?>
    </body>

</html>
