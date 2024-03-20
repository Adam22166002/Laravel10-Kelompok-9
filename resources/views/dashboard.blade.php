<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Data Bank</title>
  
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
  <link rel="icon" href="https://www.clipartmax.com/png/middle/217-2173977_number-9-png-group-nine-media-logo.png" type="image/x-icon" style="border-radius: 50%; width: 100px; height: 100px; object-fit: cover;">
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Preloader -->
  <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__shake" src="dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">
  </div>

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
            <a href="http://127.0.0.1:8000/data" class="nav-link">Home</a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
            <a href="#" class="nav-link">Contact</a>
        </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Navbar Search -->
      <li class="nav-item">
        <a class="nav-link" data-widget="navbar-search" href="#" role="button">
          <i class="fas fa-search"></i>
        </a>
        <div class="navbar-search-block">
          <form class="form-inline">
            <div class="input-group input-group-sm">
              <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
              <div class="input-group-append">
                <button class="btn btn-navbar" type="submit">
                  <i class="fas fa-search"></i>
                </button>
                <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                  <i class="fas fa-times"></i>
                </button>
              </div>
            </div>
          </form>
        </div>
      </li>

      <li class="nav-item">
        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
          <i class="fas fa-expand-arrows-alt"></i>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-widget="control-sidebar" data-controlsidebar-slide="true" href="#" role="button">
          <i class="fas fa-th-large"></i>
        </a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{ url('/logout') }}" class="brand-link">
      <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8; margin-left: 20px;">
      <span class="brand-text font-weight-light" style="margin: 5px;">Aplikasi Crud </span>
    </a>

    <div class="sidebar" >
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="info">
        <a href="#" class="brand-text font-weight-light" style="font-size: 19px; margin: 50px;">KELOMPOK 9</a>
        </div>
      </div>

      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <li class="nav-item">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Stare Page
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="http://127.0.0.1:8000/data" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Data Bank</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link active">
                <i class="nav-icon fas fa-tachometer-alt"></i>
                <p style="text-align: center; margin: 0;">
                    Logout
                    <i class="right fas fa-angle-left"></i>
                </p>
            </a>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                    <form id="logout-form" action="{{ url('/logout') }}" method="POST">
                        @csrf
                        <button type="submit" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Logout</p>
                        </button>
                    </form>
                </li>
            </ul>
          </li>
        </ul>
      </nav>
    </div>
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Data Bank</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="http://127.0.0.1:8000/data">Home</a></li>
              <li class="breadcrumb-item active">Data Bank</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <!-- Main content -->
    <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                
                <div class="card-tools">
                  <div class="input-group input-group-sm" style="width: 150px;">
                    <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

                    <div class="input-group-append">
                      <button type="submit" class="btn btn-default">
                        <i class="fas fa-search"></i>
                      </button>
                    </div>
                  </div>
                </div>
              </div>
              @if ($errorMessage = Session::get('error'))
                  <div class="alert alert-danger text-center">
                      {{$errorMessage}}
                  </div>
              @elseif ($successMessage = Session::get('success'))
                  <div class="alert alert-success text-center">
                      {{$successMessage}}
                  </div>
              @endif
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0">
                <a href="{{ route('data.create') }}" class="btn btn-md btn-success mb-3" style="margin-left: 15px; margin-top: 10px;"><img src="cre.png" alt="Icon" style="width: 25px;"> Tambah Data</a>
                    <!-- Tabel -->
                    <table class="table table-hover text-nowrap">
                      <thead>
                        <tr>
                            <th>No</th>
                            <th>Kode Bank</th>
                            <th>Nama Bank</th>
                            <th>Alamat</th>
                            <th>Kota</th>
                            <th>Provinsi</th>
                            <th>Kode Pos</th>
                            <th>Nomer Telepon</th>
                            <th>Email</th>
                            <th>Deskripsi</th>
                            <th>Aksi</th>
                        </tr>
                        </thead>
                              <tbody>
                                @php
                                $no = 1;
                                @endphp

                                    @foreach ($data as $item)
                                      <tr>
                                        <td>{{ $no++ }}</td>
                                        <td>{{ $item->kode_bank }}</td>
                                        <td>{{ $item->nama_bank}}</td>
                                        <td>{{ $item->alamat}}</td>
                                        <td>{{ $item->kota}}</td>
                                        <td>{{ $item->provinsi}}</td>
                                        <td>{{ $item->kode_pos}}</td>
                                        <td>{{ $item->nomer_telepon}}</td>
                                        <td>{{ $item->email}}</td>
                                        <td>{{ $item->deskripsi}}</td>
                                        <td>
                                            <a href="{{ route('data.show', $item->kode_bank) }}" class="btn btn-info"><img src="show.png" alt="Icon" style="width: 25px;"></a>
                                        </td>
                                        <td><a href="{{ route('data.edit', $item->kode_bank) }}" class="btn btn-primary"><img src="update.png" alt="Icon" style="width: 25px;"></a></td>
                                        <td>
                                        <div class="col">
                                            <form action="{{ route('data.destroy', $item->kode_bank) }}" method="post">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit"  class="btn btn-danger mb-2"
                                                    onclick="return confirm('Apakah Anda yakin ingin menghapus Data Bank ini?')"><i
                                                        class="bi bi-trash-fill"></i><img src="dlt.png" alt="Icon" style="width: 25px;"></button>
                                            </form>
                                        </div>
                                        </td>
                                      </tr>
                                  @endforeach
                              </tbody>
                        </table>
                    </div>
              <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
              <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
              <script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
          </div>
        </div>

  </div>
  <!-- /.content-wrapper -->
        <footer class="main-footer fixed-bottom">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-6">
                        <strong>Copyright &copy; 2024-2025 <a href="https://adminlte.io">Kelompok 9</a>.</strong>
                        All rights reserved.
                    </div>
                    <div class="col-sm-6">
                        <div class="float-right d-none d-sm-inline-block">
                            <b>Version</b> 3.2.0
                        </div>
                    </div>
                </div>
            </div>
        </footer>
  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
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
<script src="dist/js/pages/dashboard.js"></script>
</body>
</html>
