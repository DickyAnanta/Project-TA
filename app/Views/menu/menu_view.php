<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Menu</title>

  <!-- Base url -->
  <base href="<?= base_url('assets') ?>/">
  <!-- end base url -->

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="plugins/summernote/summernote-bs4.min.css">
  <!-- css saya -->
  <link rel="stylesheet" href="<?php echo base_url('/css') ?>/style.css">
</head>
<div class="wrapper">

     <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item text-white">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars text-olive"></i></a>
      </li>
    </ul>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-light-primary bg-olive elevation-3">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link  text-center">
      <span class="brand-text font-weight-bold text-white">SIREDIG</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block text-white">Arilivanta</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <?php include('sidebar.php') ?>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="mb-3 mt-4">Paket Makanan</h1>
          </div><!-- /.col -->
        </div>
        <div class="row row-cols-5 paket">
          <div class="col">
          <div class="card" style="width: 11rem;">
            <img src="img/paket1.png" class="card-img-top" alt="...">
            <div class="body">
              <h2 class="head">Paket 1</h2>
              <p>30K</p>
                <button type="button" class="btn bg-gradient-olive btn-xs">Order</button>
            </div>
          </div>
          </div>
          <div class="col">
          <div class="card" style="width: 11rem;">
            <img src="img/paket1.png" class="card-img-top" alt="...">
            <div class="body">
              <h2 class="head">Paket 1</h2>
              <p>30K</p>
                <button type="button" class="btn bg-gradient-olive btn-xs">Order</button>
            </div>
          </div>
          </div>
          <div class="col">
          <div class="card" style="width: 11rem;">
            <img src="img/paket1.png" class="card-img-top" alt="...">
            <div class="body">
              <h2 class="head">Paket 1</h2>
              <p>30K</p>
                <button type="button" class="btn bg-gradient-olive btn-xs">Order</button>
            </div>
          </div>
          </div>
          <div class="col">
          <div class="card" style="width: 11rem;">
            <img src="img/paket1.png" class="card-img-top" alt="...">
            <div class="body">
              <h2 class="head">Paket 1</h2>
              <p>30K</p>
                <button type="button" class="btn bg-gradient-olive btn-xs">Order</button>
            </div>
          </div>
          </div>
          <div class="col">
          <div class="card" style="width: 11rem;">
            <img src="img/paket1.png" class="card-img-top" alt="...">
            <div class="body">
              <h2 class="head">Paket 1</h2>
              <p>30K</p>
                <button type="button" class="btn bg-olive btn-xs">Order</button>
            </div>
          </div>
          </div>
        </div>
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="mb-3 mt-4">Menu Makanan</h1>
          </div><!-- /.col -->
        </div>

        <!-- looping menu dari data base -->
        <?php foreach($menu as $m) : ?>
          <div class="row row-cols-5 paket">
            <div class="col">
            <div class="card" style="width: 11rem;">
              <img src="img/menu1.png" class="card-img-top" alt="...">
              <div class="body">
                <h2 class="head"><?= $m['title']; ?></h2>
                <p><?= $m['harga']; ?></p>
                  <button type="button" class="btn bg-gradient-olive btn-xs">Order</button>
              </div>
            </div>
            </div>
            <div class="col">
            <div class="card" style="width: 11rem;">
              <img src="img/menu1.png" class="card-img-top" alt="...">
              <div class="body">
                <h2 class="head"><?= $m['title']; ?></h2>
                <p><?= $m['harga']; ?></p>
                  <button type="button" class="btn bg-gradient-olive btn-xs">Order</button>
              </div>
            </div>
            </div>
            <div class="col">
            <div class="card" style="width: 11rem;">
              <img src="img/menu1.png" class="card-img-top" alt="...">
              <div class="body">
                <h2 class="head"><?= $m['title']; ?></h2>
                <p><?= $m['harga']; ?></p>
                  <button type="button" class="btn bg-gradient-olive btn-xs">Order</button>
              </div>
            </div>
            </div>
            <div class="col">
            <div class="card" style="width: 11rem;">
              <img src="img/menu1.png" class="card-img-top" alt="...">
              <div class="body">
                <h2 class="head"><?= $m['title']; ?></h2>
                <p><?= $m['harga']; ?></p>
                  <button type="button" class="btn bg-gradient-olive btn-xs">Order</button>
              </div>
            </div>
            </div>
            <div class="col">
            <div class="card" style="width: 11rem;">
              <img src="img/menu1.png" class="card-img-top" alt="...">
              <div class="body">
                <h2 class="head"><?= $m['title']; ?></h2>
                <p><?= $m['harga']; ?></p>
                  <button type="button" class="btn bg-olive btn-xs">Order</button>
              </div>
            </div>
            </div>
          </div>
        <?php endforeach; ?>
        <!-- end looping menu dari data base -->

        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="mb-3 mt-4">Menu Minuman</h1>
          </div><!-- /.col -->
        </div>
        <div class="row row-cols-5 paket">
          <div class="col">
          <div class="card" style="width: 11rem;">
            <img src="img/minuman1.png" class="card-img-top" alt="...">
            <div class="body">
              <h2 class="head">Lemon Tea</h2>
              <p>30K</p>
                <button type="button" class="btn bg-gradient-olive btn-xs">Order</button>
            </div>
          </div>
          </div>
          <div class="col">
          <div class="card" style="width: 11rem;">
            <img src="img/minuman1.png" class="card-img-top" alt="...">
            <div class="body">
              <h2 class="head">Lemon Tea</h2>
              <p>30K</p>
                <button type="button" class="btn bg-gradient-olive btn-xs">Order</button>
            </div>
          </div>
          </div>
          <div class="col">
          <div class="card" style="width: 11rem;">
            <img src="img/minuman1.png" class="card-img-top" alt="...">
            <div class="body">
              <h2 class="head">Lemon Tea</h2>
              <p>30K</p>
                <button type="button" class="btn bg-gradient-olive btn-xs">Order</button>
            </div>
          </div>
          </div>
          <div class="col">
          <div class="card" style="width: 11rem;">
            <img src="img/minuman1.png" class="card-img-top" alt="...">
            <div class="body">
              <h2 class="head">Lemon Tea</h2>
              <p>30K</p>
                <button type="button" class="btn bg-gradient-olive btn-xs">Order</button>
            </div>
          </div>
          </div>
          <div class="col">
          <div class="card" style="width: 11rem;">
            <img src="img/minuman1.png" class="card-img-top" alt="...">
            <div class="body">
              <h2 class="head">Lemon Tea</h2>
              <p>30K</p>
                <button type="button" class="btn bg-olive btn-xs">Order</button>
            </div>
          </div>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->

    <!-- /.content -->
  

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

  <!-- jQuery -->
  <script src="plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="plugins/moment/moment.min.js"></script>
<script src="plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="dist/js/pages/dashboard.js"></script>
</body>
</html>

