<!DOCTYPE html>
<?php 
if(!isset($_SESSION)) 
{ 
    session_start(); 
} 
?>
<html>
<head>aa
    <meta charset="UTF-8">
    <title>Horison Admin</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.4 -->
    <link href="../../assets/back/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <!-- Font Awesome Icons -->
    <link href="../../assets/back/bootstrap/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <!-- Plugin Styl -->
    <link href="../../assets/back/plugins/select2/select2.min.css" rel="stylesheet" type="text/css" />
    <link href="../../assets/back/plugins/datepicker/datepicker3.css" rel="stylesheet" type="text/css" />
    <!-- Theme style -->
    <link href="../../assets/back/dist/css/AdminLTE.min.css" rel="stylesheet" type="text/css" />
    <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
       <link href="../../assets/back/dist/css/skins/_all-skins.min.css" rel="stylesheet" type="text/css" />

       <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
       <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- Java Script -->
    <script src="../../assets/back/plugins/jQuery/jQuery-2.1.4.min.js" type="text/javascript"></script>
    <!-- Bootstrap 3.3.2 JS -->
    <script src="../../assets/back/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
    <!-- SlimScroll -->
    <script src="../../assets/back/plugins/slimScroll/jquery.slimscroll.min.js" type="text/javascript"></script>
    <!-- FastClick -->
    <script src="../../assets/back/plugins/fastclick/fastclick.min.js" type="text/javascript"></script>
    <!-- AdminLTE App -->
    <script src="../../assets/back/dist/js/app.min.js" type="text/javascript"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="../../assets/back/dist/js/demo.js" type="text/javascript"></script>
    <!-- Plug-in Script -->
    <script src="../../assets/back/plugins/select2/select2.full.min.js" type="text/javascript"></script>
    <script src="../../assets/back/plugins/datepicker/bootstrap-datepicker.js" type="text/javascript"></script>
    <!--Customize Script -->
</head>

<body class="skin-blue sidebar-mini">
    <!-- Site wrapper -->
    <div class="wrapper">
        <header class="main-header">
        <!-- Logo -->
        <a href="index2.html" class="logo">
          <!-- mini logo for sidebar mini 50x50 pixels -->
          <span class="logo-mini"><b>H</b>U</span>
          <!-- logo for regular state and mobile devices -->
          <span class="logo-lg"><b>HORISON</b>Hotel</span>
        </a>
        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top" role="navigation">
          <!-- Sidebar toggle button-->
          <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </a>
          <a href="#" class="navbar-brand">
            <b>HORISON ULTIMA</b>  
            <span class="small">Hotel</span>
          </a>
          <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
              <!-- Messages: style can be found in dropdown.less-->
              
              <!-- User Account: style can be found in dropdown.less -->
              <li class="dropdown user user-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <img src="template/images/<?php echo $_SESSION['images']; ?>" class="user-image" alt="User Image" />
                  <span class="hidden-xs"><?php echo $_SESSION['nama']; ?></span>
                </a>
                <ul class="dropdown-menu">
                  <!-- User image -->
                  <li class="user-header">
                    <img src="template/images/<?php echo $_SESSION['images']; ?>" class="img-circle" alt="User Image" />
                    <p>
                      <?php echo $_SESSION['nama']; ?>
                      <small><?php echo $_SESSION['jabatan']; ?></small>
                    </p>
                  </li>               
                  <!-- Menu Footer-->
                  <li class="user-footer">
                    <div class="pull-left">
                      <a href="#" class="btn btn-default btn-flat">Profile</a>
                    </div>
                    <div class="pull-right">
                      <a href="logout.php" class="btn btn-default btn-flat">Log Out</a>
                    </div>
                  </li>
                </ul>
              </li>
              <!-- Control Sidebar Toggle Button -->
            </ul>
          </div>
        </nav>
      </header>


      <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
          <!-- Sidebar user panel -->
          <div class="user-panel">
            <div class="pull-left image">
              <img src="template/images/<?php echo $_SESSION['images']; ?>" class="img-circle" alt="User Image" />
            </div>
            <div class="pull-left info">
              <p><?php echo $_SESSION['nama']; ?></p>
              <span class="small"><?php echo date('l. d M Y'); ?></span>
            </div>
          </div>

          <!-- sidebar menu: : style can be found in sidebar.less -->
          <ul class="sidebar-menu">
            <li class="header">MAIN NAVIGATION</li>
            <li>
              <a href="index.php">
                <i class="fa fa-dashboard"></i> <span>Dashboard</span>
              </a>
            </li>
            <li class="treeview">
              <a href="#">
                <i class="fa fa-key"></i>
                <span>Check In / Out</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="?module=transaksi/checkin"><i class="fa fa-circle-o"></i> Check In</a></li>
                <li><a href="?module=transaksi/checkout"><i class="fa fa-circle-o"></i> Check Out</a></li>
                <li><a href="?module=transaksi/booking"><i class="fa fa-circle-o"></i> Reservasi / Booking</a></li>
                <li><a href="?module=transaksi/checkin-list"><i class="fa fa-circle-o"></i> Tamu In-House</a></li>
              </ul>
            </li>
            <li class="treeview">
              <a href="#">
                <i class="fa fa-book"></i>
                <span>Room Services</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="?module=transaksi/pesan-layanan"><i class="fa fa-circle-o"></i> Pesan Layanan / Produk</a></li>
                <li><a href="?module=kamar/kamar-kotor"><i class="fa fa-circle-o"></i> Pembersihan Kamar</a></li>
              </ul>
            </li>
            <?php if($_SESSION['batasan']<=3) { ?>
            <li class="header">ADMINISTRASI HOTEL</li>
            <li class="treeview">
              <a href="#">
                <i class="fa fa-bed"></i>
                <span>Kamar</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="?module=kamar/kamar-list"><i class="fa fa-circle-o"></i> Lihat Kamar</a></li>
                <li><a href="?module=kamar/kamar-add"><i class="fa fa-circle-o"></i> Tambah Kamar</a></li>
                <li><a href="?module=kamar/tipe-list"><i class="fa fa-circle-o"></i> Tipe Kamar</a></li>
              </ul>
            </li>
            <li class="treeview">
              <a href="#">
                <i class="fa fa-cutlery"></i>
                <span>Layanan</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="?module=layanan/layanan-list"><i class="fa fa-circle-o"></i> Lihat Layanan</a></li>
                <li><a href="?module=layanan/layanan-add"><i class="fa fa-circle-o"></i> Tambah Layanan</a></li>
                <li><a href="?module=layanan/kategori-list"><i class="fa fa-circle-o"></i> Kategori Layanan</a></li>
              </ul>
            </li>
            <li class="treeview">
              <a href="#">
                <i class="fa fa-suitcase"></i>
                <span>Buku Tamu</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="?module=tamu/tamu-list"><i class="fa fa-circle-o"></i> Lihat Tamu</a></li>
                <li><a href="?module=tamu/tamu-add"><i class="fa fa-circle-o"></i> Tambah Tamu Baru</a></li>
              </ul>
            </li>
            <li class="treeview">
              <a href="#">
                <i class="fa fa-user"></i>
                <span>User Manager</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="?module=user/user-list"><i class="fa fa-circle-o"></i> Lihat Pengguna</a></li>
                <li><a href="?module=user/user-add"><i class="fa fa-circle-o"></i> Tambah User Baru</a></li>
              </ul>
            </li>
            <li class="treeview">
              <a href="#">
                <i class="fa fa-exchange"></i>
                <span>Laporan</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="?module=laporan/transaksi"><i class="fa fa-circle-o"></i> Transaksi Kamar</a></li>
                <li><a href="?module=laporan/transaksi-layanan"><i class="fa fa-circle-o"></i> Transaksi Layanan</a></li>
              </ul>
            </li>
            <?php if($_SESSION['batasan']==1) { ?>
            <li class="treeview">
              <a href="#">
                <i class="fa fa-building"></i>
                <span>Perusahaan</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="?module=perusahaan/perusahaan"><i class="fa fa-circle-o"></i> Lihat / Update Perusahaan</a></li>
              </ul>
            </li>
            <?php } } ?>
          </ul>
        </section>
        <!-- /.sidebar -->
      </aside>
       <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
    </div>
    </div>
</body>
</html>