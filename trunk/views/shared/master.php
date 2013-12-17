<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Umbara Trans :: Data Pengguna</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width">
        
        <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->

        <!--base css styles-->
        <link rel="stylesheet" href="<?php echo base_url(); ?>/res/scripts/bootstrap/bootstrap/bootstrap.min.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>/res/scripts/bootstrap/bootstrap/bootstrap-responsive.min.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>/res/scripts/bootstrap/font-awesome/css/font-awesome.min.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>/res/scripts/bootstrap/normalize/normalize.css">

        <!--page specific css styles-->
        <link rel="stylesheet" href="<?php echo base_url(); ?>/res/scripts/bootstrap/data-tables/DT_bootstrap.css" />

        <!--flaty css styles-->
        <link rel="stylesheet" href="<?php echo base_url(); ?>/res/css/flaty_themes/flaty.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>/res/css/flaty_themes/flaty-responsive.css">

        
        <script type="text/javascript" src="<?php echo base_url(); ?>/res/scripts/jquery/jquery.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>/res/scripts/modernizr/modernizr-2.6.2.min.js"></script>
		<!--menambahkan icon-->
        <link rel="shortcut icon" href="favicon.ico">
        <script type="text/javascript" src="<?php echo base_url(); ?>/res/scripts/bootstrap/bootstrap/bootstrap.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>/res/scripts/nicescroll/jquery.nicescroll.min.js"></script>

        <!--page specific plugin scripts-->
        <script type="text/javascript" src="<?php echo base_url(); ?>/res/scripts/bootstrap/data-tables/jquery.dataTables.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>/res/scripts/bootstrap/data-tables/DT_bootstrap.js"></script>

        <script type="text/javascript" src="<?php echo base_url(); ?>/res/scripts/flot/jquery.flot.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>/res/scripts/flot/jquery.flot.resize.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>/res/scripts/flot/jquery.flot.pie.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>/res/scripts/flot/jquery.flot.stack.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>/res/scripts/flot/jquery.flot.crosshair.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>/res/scripts/flot/jquery.flot.tooltip.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>/res/scripts/sparkline/jquery.sparkline.min.js"></script>
        
        <!--flaty scripts-->
        <script type="text/javascript" src="<?php echo base_url(); ?>/res/scripts/flaty/flaty.js"></script>
        <script type="text/javascript">
            $(document).ready(function () { 
                if ($('#main-content').height() < $(window).height()) $('#main-content').css("min-height",$(window).height()); 
            });
        </script>
        <style type="text/css">
            #main-content {
                min-height: 100%;
            }
        </style>
    </head>
    <body>
        <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
            <div class="navbar-inner">
                <div class="container-fluid">
                    <!-- BEGIN Brand -->
                    <a href="#" class="brand">
                        <small>
                            <i class="icon-desktop"></i>
                            Umbara Trans Ticketing 
                        </small>
                    </a>
                    <!-- END Brand -->

                    <!-- BEGIN Responsive Sidebar Collapse -->
                    <a href="#" class="btn-navbar collapsed" data-toggle="collapse" data-target=".nav-collapse">
                        <i class="icon-reorder"></i>
                    </a>
                    <!-- END Responsive Sidebar Collapse -->

                    <!-- BEGIN Navbar Buttons -->
                    <ul class="nav flaty-nav pull-right">
                      <!-- BEGIN Button User -->
                        <li class="nav-header">
                            <i class="icon-time"></i>
                            Logined From 20:45
                        </li>
                        <li class="divider"></li>

                        <li>
                            <a href="logout.php">
                                <i class="icon-off"></i>
                                Logout
                            </a>
                        </li>
                        <!-- END Button User -->
                    </ul>
                    <!-- END Navbar Buttons -->
                </div><!--/.container-fluid-->
            </div><!--/.navbar-inner-->
        </nav>
        <!-- END Navbar -->

        <!-- BEGIN Container -->
        <div class="container-fluid" id="main-container">
            <!-- BEGIN Sidebar -->
            <div id="sidebar" class="nav-collapse">
                <!-- BEGIN Navlist -->
                <ul class="nav nav-list">
                    <li class="active">
                        <a href="<?php echo base_url(); ?>">
                            <i class="icon-home"></i>
                            <span>Beranda</span>
                        </a>
                    </li>
                    
                    <li>
                         <a href="#" class="dropdown-toggle">
                             <i class="icon-user" ></i>
                             <span>Data Pengguna</span>
                             <b class="arrow icon-angle-right"></b>
                         </a>

                         <!-- BEGIN Submenu -->
                         <ul class="submenu">
                             <li><a href="admin.php">Admin</a></li>
                             <li><a href="member.php">Member</a></li>
                         </ul>
                         <!-- END Submenu -->
                     </li>

                    <li>
                        <a href="#" class="dropdown-toggle">
                            <i class="icon-info"></i>
                            <span>Info Umbara</span>
                            <b class="arrow icon-angle-right"></b>
                        </a>

                        <!-- BEGIN Submenu -->
                        <ul class="submenu">
                            <li><a href="armada.php">Armada</a></li>
                            <li><a href="jadwal.php">Jadwal Keberangkatan</a></li>
							<li><a href="kota.php">Kota</a></li>
                            <li><a href="lokasi.php">Lokasi Pool</a></li>
                            <li><a href="rute.php">Rute</a></li>
                        </ul>
                        <!-- END Submenu -->
                    </li>

                    <li>
                        <a href="#" class="dropdown-toggle">
                            <i class="icon-edit"></i>
                            <span>Berita</span>
                            <b class="arrow icon-angle-right"></b>
                        </a>

                        <!-- BEGIN Submenu -->
                        <ul class="submenu">
                            <li><a href="berita.php">Kelola Berita</a></li>
                        </ul>
                        <!-- END Submenu -->
                    </li>

                    <li>
                        <a href="#" class="dropdown-toggle">
                            <i class="icon-shopping-cart"></i>
                            <span>Pemesanan</span>
							<b class="arrow icon-angle-right"></b>
                        </a>
						<!-- BEGIN Submenu -->
                        <ul class="submenu">
                            <li><a href="pesan.php">Cek Ketersediaan</a></li>
							<li><a href="pesan2.php">Pesan Tiket</a></li>
                        </ul>
                        <!-- END Submenu -->
                    </li>

                    <li>
                        <a href="bayar.php">
                            <i class=" icon-credit-card"></i>
                            <span>Pembayaran</span>
                        </a>
                    </li>
                </ul>
                <!-- END Navlist -->

                <!-- BEGIN Sidebar Collapse Button -->
                <div id="sidebar-collapse" class="visible-desktop">
                    <i class="icon-double-angle-left"></i>
                </div>
                <!-- END Sidebar Collapse Button -->
            </div>
            <!-- END Sidebar -->

            <!-- BEGIN Content -->
            <div id="main-content">
                <!-- BEGIN Page Title -->
                <div class="page-title">
                    <div>
                        <h1><strong><?php echo $_MODULE_ID; ?></strong></h1>
                        <h4><?php echo $_MODULE_DESCRIPTION; ?></h4>
                    </div>
                </div>
                <!-- END Page Title -->

                <!-- BEGIN Breadcrumb -->
                <div id="breadcrumbs">
                    <ul class="breadcrumb">
                        <li class="active"><i class="icon-home"></i>Home</li>
                    </ul>
                </div>
                <!-- END Breadcrumb -->

                <!-- BEGIN Main Content -->
                <div class="row-fluid">
                    <?php require_once $content; ?>
                </div>
                <!-- END Main Content -->
                
                <footer style="bottom: 0px;">
                    <p>2013 © Siti Ulfah Fauziah - UIN Syarif Hidayatullah Jakarta.</p>
                </footer>
                <a id="btn-scrollup" class="btn btn-circle btn-large" href="#"><i class="icon-chevron-up"></i></a>
            </div>
            <!-- END Content -->
        </div>
    </body>
</html>