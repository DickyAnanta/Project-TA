<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Order</title>
    <link rel="icon" href="img/menu1.png">

  <!-- base url -->
  <base href="<?php echo base_url('assets') ?>/">
  <!-- base url -->

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
  <link rel="stylesheet" href="style.css">
</head>
<body class="hold-transition sidebar-mini layout-fixed">
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
  <aside class="main-sidebar sidebar-light-primary bg-olive " id="sidebar">
    <!-- Brand Logo -->
    <a href="#" class="brand-link  text-center">
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
    <!-- ORDER START -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          
        </div><!-- /.row -->
        <!-- general form elements disabled -->
        <div class="ukuranfontorder">
        <div class="card card-olive">
                   <div class="card-header">
                     <h3 class="card-title">Order</h3>
                   </div>
                   <!-- /.card-header -->
                   <div class="card-body">
                     <form>
                       <div class="row">
                            <div class="col">
                                <!-- text input -->
                                <div class="form-group">
                                    <label>No Meja</label>
                                    <input type="text" class="form-control" placeholder="Masukkan No Meja ...">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                             <div class="col">
                                 <!-- text input -->
                                 <div class="form-group">
                                     <label>Nama</label>
                                     <input type="text" class="form-control" placeholder="Masukkan Nama ...">
                                 </div>
                             </div>
                         </div>
                        <div class="row">
                            <div class="col-sm-3">
                            <!-- select -->
                            <div class="form-group">
                                <label>Paket Makanan</label>
                                <select class="custom-select">
                                <option>none</option>
                                <option>Paket 1</option>
                                <option>paket 2</option>
                                <option>paket 3</option>
                                </select>
                            </div>
                            </div>
                            <div class="col-sm-1">
                                <!-- text input -->
                                <div class="form-group">
                                    <label>Stok</label>
                                    <input type="text" class="form-control" placeholder="5"disabled>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <!-- select -->
                            <div class="form-group">
                                <label>Menu Makanan</label>
                                <select class="custom-select">
                                    <option>none</option>
                                    <option>Pizza</option>
                                    <option>Nasi Goreng</option>
                                    <option>Sop</option>
                                </select>
                            </div>
                            </div>
                            <div class="col-sm-1">
                                <!-- text input -->
                                <div class="form-group">
                                    <label>Stok</label>
                                    <input type="text" class="form-control" placeholder="5"disabled>
                                </div>
                            </div>
                            <div class="col-sm-3">
                            <!-- select -->
                            <div class="form-group">
                                <label>Paket Minuman</label>
                                <select class="custom-select">
                                <option>none</option>
                                <option>Lemon Tea</option>
                                <option>Coffe</option>
                                <option>Red Velvet</option>
                                </select>
                            </div>
                            </div>
                            <div class="col-sm-1">
                                <!-- text input -->
                                <div class="form-group">
                                    <label>Stok</label>
                                    <input type="text" class="form-control" placeholder="5"disabled>
                                </div>
                            </div>
                                <div class="col-sm-6">
                                <!-- textarea -->
                                <div class="form-group">
                                    <label>Request</label>
                                    <textarea class="form-control" rows="2" placeholder="Masukkan Request ..."></textarea>
                                </div>
                                </div>
                        </div>  
                        <div class="row">
                            <div class="col-sm-2">
                                <td>
                                    <button type="button" class="btn btn-block bg-gradient-danger btn-sm">Batalkan Order</button>
                                </td>
                            </div>
                            <div class="col-sm-2">
                                <td>
                                    <button type="button" class="btn btn-block bg-gradient-success btn-sm">simpan Order</button>
                                </td>
                            </div>
                        </div>          

                     </form>
                   </div>
                   <!-- /.card-body -->
                 </div>
                 <!-- /.card -->
                 <!-- Main content -->
                 
                 <!-- /.content -->
                </div>
            </div><!-- /.container-fluid -->
            </div>
            <!-- ORDER END -->

    <!-- LIST ORDER START -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
        <div class="col">
            <div class="card">
              <div class="card-header bg-olive">
                <h3 class="card-title">List Order</h3>

                <div class="card-tools">
                  <ul class="pagination pagination-sm float-right">
                    <li class="page-item"><a class="page-link" href="#">&laquo;</a></li>
                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item"><a class="page-link" href="#">&raquo;</a></li>
                  </ul>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="ukuranfont">
              <div class="card-body p-0">
                <table class="table table-striped">
                  <thead>
                    <tr>
                      <th style="width: 100px">No Meja</th>
                      <th>Nama</th>
                      <th>Paket Makanan</th>
                      <th>Menu Makanan</th>
                      <th>Menu Minuman</th>
                      <th>Request</th>
                      <th style="width: 150px">Edit</th>
                      <th>lanjutkan</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>001</td>
                      <td>Rafli</td>
                      <td>Paket 1</td>
                      <td>None</td>
                      <td>None</td>
                      <td>ayamnya pedes</td>
                      <td> 
                        <a class="btn btn-sm bg-warning">
                              <i class="fas fa-edit"></i>
                          </a>
                          <a class="btn btn-sm bg-danger">
                              <i class="fas fa-eraser"></i>
                          </a>
                      </td> 
                      <td>
                        <button type="submit" class="btn btn-block btn-success btn-sm">Bayar</button>
                      </td>
                    </tr>
                    <tr>
                      <td>002</td>
                      <td>Ivan</td>
                      <td>None</td>
                      <td>Pizza</td>
                      <td>Lemon Tea</td>
                      <td>es batunya agak banyak</td> 
                      <td> 
                        <a class="btn btn-sm bg-warning">
                              <i class="fas fa-edit"></i>
                          </a>
                          <a class="btn btn-sm bg-danger">
                              <i class="fas fa-eraser"></i>
                          </a>
                      </td> 
                      <td>
                        <button type="submit" class="btn btn-block btn-success btn-sm">Bayar</button>
                      </td>
                    </tr>
                    <tr>
                      <td>001</td>
                      <td>Dicky</td>
                      <td>Paket 3</td>
                      <td>None</td>
                      <td>Coffe</td>
                      <td>kasih sambel yang banyak</td> 
                      <td> 
                        <a class="btn btn-sm bg-warning">
                              <i class="fas fa-edit"></i>
                          </a>
                          <a class="btn btn-sm bg-danger">
                              <i class="fas fa-eraser"></i>
                          </a>
                      </td> 
                      <td>
                        <button type="submit" class="btn btn-block btn-success btn-sm">Bayar</button>
                      </td>
                    </tr>
                    <tr>
                      <td>001</td>
                      <td>Ifa</td>
                      <td>None</td>
                      <td>Nasi Goreng</td>
                      <td>Red Velvet</td>
                      <td>pedes</td>
                      <td> 
                        <a class="btn btn-sm bg-warning">
                              <i class="fas fa-edit"></i>
                          </a>
                          <a class="btn btn-sm bg-danger">
                              <i class="fas fa-eraser"></i>
                          </a>
                      </td>  
                      <td>
                        <button type="submit" class="btn btn-block btn-success btn-sm">Bayar</button>
                      </td>
                    </tr>
                    
                    
                  </tbody>
                </table>
              </div>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
        </div>
      </div>
    </section>
    <!-- LIST ORDER END -->
    
   <!-- general form elements disabled -->

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
