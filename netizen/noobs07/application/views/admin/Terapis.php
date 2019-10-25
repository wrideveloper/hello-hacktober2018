<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Admin Mamina</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/admin/plugins/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">


    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Tempusdominus Bbootstrap 4 -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/admin/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/admin/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- JQVMap -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/admin/plugins/jqvmap/jqvmap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/admin/dist/css/adminlte.min.css">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/admin/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/admin/plugins/daterangepicker/daterangepicker.css">
    <!-- summernote -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/admin/plugins/summernote/summernote-bs4.css">
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">

        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="index3.html" class="nav-link">Home</a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="#" class="nav-link">Contact</a>
                </li>
            </ul>

            <!-- SEARCH FORM -->
            <form class="form-inline ml-3">
                <div class="input-group input-group-sm">
                    <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
                    <div class="input-group-append">
                        <button class="btn btn-navbar" type="submit">
                            <i class="fas fa-search"></i>
                        </button>
                    </div>
                </div>
            </form>

            <!-- Right navbar links -->
            <ul class="navbar-nav ml-auto">
                <!-- Messages Dropdown Menu -->
                <li class="nav-item dropdown">
                    <a class="nav-link" data-toggle="dropdown" href="#">
                        <i class="far fa-comments"></i>
                        <span class="badge badge-danger navbar-badge">3</span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                        <a href="#" class="dropdown-item">
                            <!-- Message Start -->
                            <div class="media">
                                <img src="<?php echo base_url(); ?>assets/admin/dist/img/user1-128x128.jpg" alt="User Avatar" class="img-size-50 mr-3 img-circle">
                                <div class="media-body">
                                    <h3 class="dropdown-item-title">
                                        Brad Diesel
                                        <span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>
                                    </h3>
                                    <p class="text-sm">Call me whenever you can...</p>
                                    <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                                </div>
                            </div>
                            <!-- Message End -->
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">
                            <!-- Message Start -->
                            <div class="media">
                                <img src="dist/img/user8-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
                                <div class="media-body">
                                    <h3 class="dropdown-item-title">
                                        John Pierce
                                        <span class="float-right text-sm text-muted"><i class="fas fa-star"></i></span>
                                    </h3>
                                    <p class="text-sm">I got your message bro</p>
                                    <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                                </div>
                            </div>
                            <!-- Message End -->
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">
                            <!-- Message Start -->
                            <div class="media">
                                <img src="<?php echo base_url(); ?>assets/admin/dist/img/user3-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
                                <div class="media-body">
                                    <h3 class="dropdown-item-title">
                                        Nora Silvester
                                        <span class="float-right text-sm text-warning"><i class="fas fa-star"></i></span>
                                    </h3>
                                    <p class="text-sm">The subject goes here</p>
                                    <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                                </div>
                            </div>
                            <!-- Message End -->
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item dropdown-footer">See All Messages</a>
                    </div>
                </li>
                <!-- Notifications Dropdown Menu -->
                <li class="nav-item dropdown">
                    <a class="nav-link" data-toggle="dropdown" href="#">
                        <i class="far fa-bell"></i>
                        <span class="badge badge-warning navbar-badge">15</span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                        <span class="dropdown-item dropdown-header">15 Notifications</span>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">
                            <i class="fas fa-envelope mr-2"></i> 4 new messages
                            <span class="float-right text-muted text-sm">3 mins</span>
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">
                            <i class="fas fa-users mr-2"></i> 8 friend requests
                            <span class="float-right text-muted text-sm">12 hours</span>
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">
                            <i class="fas fa-file mr-2"></i> 3 new reports
                            <span class="float-right text-muted text-sm">2 days</span>
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#">
                        <i class="fas fa-th-large"></i>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
            <a href="index3.html" class="brand-link">
                <img src="<?php echo base_url(); ?>assets/user/images/ic.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
                <span class="brand-text font-weight-light">Admin Mamina</span>
            </a>

            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar user panel (optional) -->
                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div class="image">
                        <img src="<?php echo base_url(); ?>assets/admin/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
                    </div>
                    <div class="info">
                        <a href="#" class="d-block">Alexander Pierce</a>
                    </div>
                </div>

                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                        <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                        <li class="nav-item has-treeview menu-open">
                            <a href="<?php echo base_url(); ?>index.php/Admin/" class="nav-link ">
                                <i class="nav-icon fas fa-tachometer-alt"></i>
                                <p>
                                    Dashboard
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>

                        </li>


                        <li class="nav-item">
                            <a href="<?php echo base_url(); ?>index.php/Admin/contact_us" class="nav-link">
                                <i class="nav-icon fas fa-phone"></i>
                                <p>
                                    Kontak dan Alamat

                                </p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="<?php echo base_url(); ?>index.php/Admin/terapis" class="nav-link active">
                                <i class="nav-icon fas fa-th"></i>
                                <p>
                                    Terapis
                                </p>
                            </a>
                        </li>


                        <li class="nav-item">
                            <a href="<?php echo base_url(); ?>index.php/Admin/User" class="nav-link">
                                <i class="nav-icon fa fa-user"></i>
                                <p>
                                    User

                                </p>
                            </a>
                        </li>


                        <li class="nav-item">
                            <a href="<?php echo base_url(); ?>index.php/Admin/gallery" class="nav-link">
                                <i class="nav-icon far fa-image"></i>
                                <p>
                                    Gallery
                                </p>
                            </a>
                        </li>

						<li class="nav-item">
            <a href="<?php echo base_url();?>index.php/Admin/subkategori" class="nav-link">
              <i class="nav-icon fas fa-book"></i>
              <p>
                Kategori
              </p>
            </a>
          </li>

                        <li class="nav-item">
                            <a href="<?php echo base_url(); ?>index.php/Admin/berita" class="nav-link">
                                <i class="nav-icon fa fa-newspaper-o"></i>
                                <p>
                                    Berita

                                </p>
                            </a>
                        </li>


                </nav>
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
                            <h1 class="m-0 text-dark">Terapis</h1>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active">Dashboard</li>
                            </ol>
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->

            <section class="content">
                <div class="row">
                    <div class="col-12">

                        <!-- /.card -->

                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Data Terapis</h3>
                            </div>
                            <!--Add-->
                            <div class="card-footer clearfix">
                                <button type="button" class="btn btn-info float-left" data-toggle="modal" data-target="#modal-tambah">
                                    <i class="fas fa-plus"></i> Add
                                </button>

                                
                            </div>

                            <!--search-->

                            <!-- /.card-header -->
                            <div class="card-body">
                                <table id="example1" class="table table-bordered table-striped">
                                    <thead>
                                        <th class="sorting_asc" tabindex="0" aria-controls="demo-datatables" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending">Id User</th>
                                        <th>Full Name</th>
                                        <th>Username</th>
                                        <th>Password</th>
                                        <th>Email</th>
                                        <th>No Tlp</th>
                                        <th>Alamat</th>
                                        <th>Foto</th>
                                        <th>Action</th>
                                    </thead>
                                    <tbody>

                                        <?php foreach ($terps as $key => $value) : ?>
                                            <tr>
                                                <td><?php echo $value->id_user ?></td>
                                                <td><?php echo $value->full_name ?></td>
                                                <td><?php echo $value->username ?></td>
                                                <td><?php echo $value->password ?></td>
                                                <td><?php echo $value->email ?></td>
                                                <td><?php echo $value->no_telp ?></td>
                                                <td><?php echo $value->alamat ?></td>
                                                <td><img src="<?php echo base_url() ?>./assets/upload/<?php echo $value->foto ?>" alt="" width=100 height=100></td>
                                                <td>
                                                    <a href="<?php echo base_url("/Admin/edit_terapis/" . $value->id_user) ?>" class="fas fa-edit" aria-hidden="true" data-toggle="modal" data-target="#modal-edit" name="tombolEdit" value="<?php echo $value->id_user; ?>"></a>
                                                    <a href="<?php echo base_url("/Admin/delete_terapis/" . $value->id_user) ?>" class="far fa-trash-alt" aria-hidden="true" name="tombolDelete" value="<?php echo $value->id_user; ?>"></a>
                                                </td>

                                            </tr>
                                        <?php endforeach; ?>
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->
            </section>
            <!-- /.content -->
        </div>

        <!--Modal ADD-->

        <div class="modal fade" id="modal-tambah" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <!--Header-->
                    <div class="modal-header">
                        <?php //echo form_open_multipart('Admin/add_terapis'); 
                        ?>

                        <h4 class="modal-title" id="myModalLabel">Terapis</h4>
                        <?php echo validation_errors(); ?>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <!--Body-->
                    <div class="modal-body">
                        <div class="modal-body mx-3">
                            <!-- <FORM id="addTerapis"> -->
                            <form method="post" accept-charset="utf-8" id="addTerapis" enctype="multipart/form-data">



                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">
                                            <i class="fa fa-user">

                                            </i>
                                        </span>
                                    </div>
                                    <input type="text" id="full_name" name="full_name" class="form-control" placeholder="Fullname">
                                </div>

                                <div>

                                </div>


                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">
                                            @
                                        </span>
                                    </div>
                                    <input type="text" id="username" name="username" class="form-control" placeholder="Username">
                                </div>

                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">
                                            @
                                        </span>
                                    </div>
                                    <input type="password" id="password" name="password" class="form-control" placeholder="Password">
                                </div>

                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">
                                            <i class="fa fa-envelope">

                                            </i>
                                        </span>
                                    </div>
                                    <input type="email" id="email" name="email" class="form-control" placeholder="Email">
                                </div>


                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">
                                            <i class="fa fa-phone">

                                            </i>
                                        </span>
                                    </div>
                                    <input type="text" id="no_telp" name="no_telp" class="form-control" placeholder="No Telp">
                                </div>

                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">
                                            <i class="fa fa-address-book">

                                            </i>
                                        </span>
                                    </div>
                                    <input type="text" id="alamat" name="alamat" class="form-control" placeholder="Alamat">
                                </div>

                                <div class="md-form mb-4">
                                    <input type="file" id="foto" class="form-control validate" name="foto" placeholder="Input field">

                                </div>

                        </div>

                    </div>
                    <!--Footer-->
                    <div class="modal-footer">
                        <input type="submit" name="submit" class="btn btn-outline-primary" id="btnSimpanTerapis">
                        <input type="button" class="btn btn-primary" value="Close" data-dismiss="modal">
                        <?php //echo form_close(); 
                        ?>
                    </div>
                    </form>
                </div>
            </div>
        </div>

        <!--Modal EDIT-->

        <div class="modal fade" id="modal-edit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <!--Header-->
                    <div class="modal-header">

                        <h4 class="modal-title" id="myModalLabel">Terapis</h4>
                        <?php echo validation_errors(); ?>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <!--Body-->
                        <div class="modal-body">
                            <div class="modal-body mx-3">
                    <!-- <FORM id="addTerapis"> -->
                    <form method="post" accept-charset="utf-8" id="editTerapis" enctype="multipart/form-data">
                        

                                <input type="hidden" id="edit_id" name="edit_id">
                                <input type="hidden" id="edit_level" name="edit_level">
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">
                                            <i class="fa fa-user">

                                            </i>
                                        </span>
                                    </div>
                                    <input type="text" id="edit_full_name" name="edit_full_name" class="form-control" placeholder="Fullname">
                                </div>


                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">
                                            @
                                        </span>
                                    </div>
                                     <input type="text" id="edit_username" class="form-control validate" name="edit_username" placeholder="Input field">
                                </div>

                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">
                                            @
                                        </span>
                                    </div>
                                     <input type="password" id="edit_password" class="form-control validate" name="edit_password" placeholder="Input field">
                                </div>


                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">
                                            <i class="fa fa-envelope">

                                            </i>
                                        </span>
                                    </div>
                                    <input type="email" id="edit_email" class="form-control validate" name="edit_email" placeholder="Input field">
                                </div>


                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">
                                            <i class="fa fa-phone">

                                            </i>
                                        </span>
                                    </div>
                                   <input type="text" id="edit_no_telp" class="form-control validate" name="edit_no_telp" placeholder="Input field">
                                </div>


                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">
                                            <i class="fa fa-address-book">

                                            </i>
                                        </span>
                                    </div>
                                   <input type="text" id="edit_alamat" class="form-control validate" name="edit_alamat" placeholder="Input field">
                                </div>
                                

                               <div class="md-form mb-4">
                               
                                    <img alt="" width=100 height=100 id="foto_lama">
                                    <input type="file" id="edit_foto" class="form-control validate" name="edit_foto" placeholder="Input field">

                                </div>



                            </div>

                        </div>


                        <!--Footer-->
                        <div class="modal-footer">
                            <input type="submit" name="submit" class="btn btn-outline-primary" id="btnSimpanTerapis">
                            <input type="button" class="btn btn-primary" value="Close" data-dismiss="modal">
                            <?php //echo form_close(); 
                            ?>
                        </div>
                    </form>
                </div>
            </div>
        </div>


        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <!-- Small boxes (Stat box) -->
                <div class="row">
                </div>
                    <!-- /.card -->
        </section>
        <!-- right col -->
    <!-- </div> -->
    <!-- /.row (main row) -->
    </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
    <!-- </div> -->

    <!-- /.content-wrapper -->
    <footer class="main-footer">
        <strong>Copyright &copy; 2014-2019 <a href="http://adminlte.io">AdminLTE.io</a>.</strong>
        All rights reserved.
        <div class="float-right d-none d-sm-inline-block">
            <b>Version</b> 3.0.0-rc.1
        </div>
    </footer>

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
        <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->
    <!-- </div> -->
    <!-- ./wrapper -->

    <script src="<?php echo base_url(); ?>assets/admin/jquery/jquery.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>


    <!-- jQuery -->
    <!-- <script src="<?php //echo base_url(); 
                        ?>assets/admin/plugins/jquery/jquery.min.js"></script> -->
    <!-- jQuery UI 1.11.4 -->
    <script src="<?php echo base_url(); ?>assets/admin/plugins/jquery-ui/jquery-ui.min.js"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
        $.widget.bridge('uibutton', $.ui.button)
    </script>

    <script src="<?php echo base_url(); ?>assets/admin/js/template.js"></script>
    <!-- Bootstrap 4 -->
    <script src="<?php echo base_url(); ?>assets/admin/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- ChartJS -->
    <script src="<?php echo base_url(); ?>assets/admin/plugins/chart.js/Chart.min.js"></script>
    <!-- Sparkline -->
    <script src="<?php echo base_url(); ?>assets/admin/plugins/sparklines/sparkline.js"></script>
    <!-- JQVMap -->
    <script src="<?php echo base_url(); ?>assets/admin/plugins/jqvmap/jquery.vmap.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/admin/plugins/jqvmap/maps/jquery.vmap.world.js"></script>
    <!-- jQuery Knob Chart -->
    <script src="<?php echo base_url(); ?>assets/admin/plugins/jquery-knob/jquery.knob.min.js"></script>
    <!-- daterangepicker -->
    <script src="<?php echo base_url(); ?>assets/admin/plugins/moment/moment.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/admin/plugins/daterangepicker/daterangepicker.js"></script>
    <!-- Tempusdominus Bootstrap 4 -->
    <script src="<?php echo base_url(); ?>assets/admin/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
    <!-- Summernote -->
    <script src="<?php echo base_url(); ?>assets/admin/plugins/summernote/summernote-bs4.min.js"></script>
    <!-- overlayScrollbars -->
    <script src="<?php echo base_url(); ?>assets/admin/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
    <!-- AdminLTE App -->
    <script src="<?php echo base_url(); ?>assets/admin/dist/js/adminlte.js"></script>
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <script src="<?php echo base_url(); ?>assets/admin/dist/js/pages/dashboard.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="<?php echo base_url(); ?>assets/admin/dist/js/demo.js"></script>

    <script src="<?php echo base_url(); ?>assets/admin/plugins/datatables/jquery.dataTables.js"></script>
    <script src="<?php echo base_url(); ?>assets/admin/plugins/datatables-bs4/js/dataTables.bootstrap4.js"></script>
    <!-- AdminLTE App -->
    <script src="<?php echo base_url(); ?>assets/admin/dist/js/adminlte.min.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="<?php echo base_url(); ?>assets/admin/dist/js/demo.js"></script>
    <!-- page script -->
    <script>
        $(function() {
            $("#example1").DataTable();
            $('#example2').DataTable({
                "paging": true,
                "lengthChange": false,
                "searching": false,
                "ordering": true,
                "info": true,
                "autoWidth": false,
            });
        });
    </script>

    <script type="text/javascript">
        $('form#addTerapis').submit(function(e) {
            e.preventDefault();
            var formData = new FormData($('form#addTerapis')[0]);

            $.ajax({
                url: '<?php echo site_url('admin/add_terapis'); ?>',
                type: 'POST',
                data: formData,

                cache: false,
                contentType: false,
                processData: false,

                success: function(response) {

                    if (response = 'true') {
                        alert('berhasil');
                        location.reload();
                    } else {
                        alert('error : ' + response);
                    }

                }
            });
        });

        $('#searchTable').keyup(function() {

            var text = $('#searchTable').val();

            if (text != '' || text != null) {

                $.ajax({
                    url: '<?php echo site_url('admin/search_terapis') ?>',
                    type: 'post',
                    data: {
                        text: text
                    },
                    success: function(data) {
                        //alert(data);
                        $('#divHasil').html(data);
                        //$('#divHasil').innerHTML=data;
                    }
                });
            } else {
                alert('error');
            }
        });

        $('[name="tombolEdit"]').click(function() {

            var id = $(this).attr('value')

            $.ajax({
                url: '<?php echo site_url('admin/get_terapis') ?>',
                type: 'post',
                data: {
                    id: id
                },
                success: function(data) {
                    if (data == null) {
                        alert('kosong');
                    }

                    data = JSON.parse(data);

                    $('#edit_id').val(data.id_user);
                    $('#edit_level').val(data.level);
                    $('#edit_full_name').val(data.full_name);
                    $('#edit_username').val(data.username);
                    $('#edit_password').val(data.password);
                    $('#edit_email').val(data.email);
                    $('#edit_no_telp').val(data.no_telp);
                    $('#edit_alamat').val(data.alamat);
                    $('#foto_lama').attr('src', '<?php echo base_url() ?>/assets/upload/' + data.foto);
                }
            });
        });

        //ajaxformedit
        $('form#editTerapis').submit(function(e) {
            e.preventDefault();
            var formData = new FormData($('form#editTerapis')[0]);

            $.ajax({
                url: '<?php echo site_url('admin/edit_terapis'); ?>',
                type: 'POST',
                data: formData,
                dataType: 'json',

                cache: false,
                contentType: false,
                processData: false,

                success: function(response) {

                    if (response==true) {
                        alert('berhasil');
                        location.reload();
                    } else {
                        alert('error : ' + response);
                    }

                }
            });
        });


        //ajaxdelete
      $('[name="tombolDelete"]').click(function(e){
        e.preventDefault();
        var id = $(this).attr('value')
        //alert(id);
        $.ajax({
          url: '<?php echo site_url('admin/delete_terapis') ?>',
          type: 'post',
          data: {id:id},
          success: function(response) {
            //alert(response);
          if (response)
            {
              alert('berhasil');
              location.reload();
            }
            else
            { alert('error : ' + response); }
          
          }
        });
      });
    </script>

</body>

</html>
