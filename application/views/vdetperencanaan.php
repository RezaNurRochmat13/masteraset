<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Sistem Informasi Aset PT Aino Indonesia</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link  href="<?php echo base_url().'assets/'?>bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Font Awesome -->
  <link href="<?php echo base_url().'assets/'?>dist/css/font-awesome.css" rel="stylesheet">
  <!-- Ionicons -->
  <link href="<?php echo base_url().'assets/'?>dist/css/ionicons.css" rel="stylesheet">
  <!-- Theme style -->
  <link href="<?php echo base_url().'assets/'?>dist/css/AdminLTE.min.css" rel="stylesheet">
  <link rel="stylesheet" href="<?php echo base_url().'assets/'?>dist/css/jquery-ui.css">
  <link href="<?php echo base_url().'assets/'?>dist/css/footer.css" rel="stylesheet">
  <link href="<?php echo base_url().'assets/'?>dist/css/glyphicon.css" rel="stylesheet">

  <!-- AdminLTE Skins. We have chosen the skin-blue for this starter
        page. However, you can choose any other skin. Make sure you
        apply the skin class to the body tag so the changes take effect.
  -->
  <link href="<?php echo base_url().'assets/'?>dist/css/skins/skin-blue.min.css" rel="stylesheet">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>

<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <!-- Main Header -->
  <header class="main-header">

    <!-- Logo -->
    <a href="index2.html" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>A</b>LT</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg">Sistem Informasi Aset </span>
    </a>

    <!-- Header Navbar -->
    <nav class="navbar navbar-static-top" role="navigation">
      <!-- Sidebar toggle button-->
        <span class="sr-only">Toggle navigation</span>
      </a>
      <!-- Navbar Right Menu -->
      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- Messages: style can be found in dropdown.less-->
          <li class="dropdown messages-menu">
            <!-- Menu toggle button -->
            <ul class="dropdown-menu">
              <li>
                <!-- inner menu: contains the messages -->
                <ul class="menu">
                  <li><!-- start message -->
                    <a href="#">
                      <div class="pull-left">
                        <!-- User Image -->
                        <img src="<?php echo base_url().'assets/'?>dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
                      </div>
                      <!-- Message title and timestamp -->
                      <!-- The message -->
                    </a>
                  </li>
                  <!-- end message -->
                </ul>
                <!-- /.menu -->
              </li>
              
            </ul>
          </li>
          <!-- /.messages-menu -->

          <!-- User Account Menu -->
          <li class="dropdown user user-menu">
            <!-- Menu Toggle Button -->
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <!-- The user image in the navbar-->
              <img src="<?php echo base_url().'assets/'?>dist/img/user2-160x160.jpg" class="user-image" alt="User Image">
              <!-- hidden-xs hides the username on small devices so only the image appears. -->
              <span class="hidden-xs">Administrator</span>
            </a>
            <ul class="dropdown-menu">
              <!-- The user image in the menu -->
              <li class="user-header">
                <img src="<?php echo base_url().'assets/'?>dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">

                <p>
                  Alexander Pierce - Web Developer
                  <small>Member since Nov. 2012</small>
                </p>
              </li>
              <!-- Menu Body -->
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-right">
                  <a href="<?php echo site_url('home/logout')?>" class="btn btn-default btn-flat">Sign out</a>
                </div>
              </li>
            </ul>
          </li>
          <!-- Control Sidebar Toggle Button -->
          <li>
            <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
          </li>
        </ul>
      </div>
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

      <!-- Sidebar user panel (optional) -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="<?php echo base_url().'assets/'?>dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>Administrator</p>
          <!-- Status -->
        </div>
      </div>

      <!-- search form (Optional) -->
     <!--  <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
              <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form> -->
      <!-- /.search form -->

      <!-- Sidebar Menu -->
      <ul class="sidebar-menu">
        <li class="header">Navigation Menu</li>
        <li><a href="<?php echo site_url('grafiktotal/getGrafik');?>"><i class="glyphicon glyphicon-home"></i> <span>Dashboard</span></a></li>
        <li class="treeview">
          <a href="#"><i class="glyphicon glyphicon-th-list"></i> <span>Transaksi Aset</span> <i class="fa-fa arrow"></i></a>
          <ul class="treeview-menu">
            <li><a href="<?php echo site_url('perencanaan/getData');?>">Registrasi Aset</a></li>
            <li><a href="<?php echo site_url('penyusutan/getData');?>">Penyusutan Aset</a></li>
            <li><a href="<?php echo site_url('tambahKategori/getKategori');?>">Tambah Kategori Aset</a></li>
          </ul>
        </li>
         <li class="treeview">
          <a href="#"><i class="glyphicon glyphicon-list-alt"></i> <span>Laporan Transaksi Aset</span></a>
          <ul class="treeview-menu">
           <li><a href="<?php echo site_url('laporanperencanaan/getLaporanPerencanaan');?>">Laporan Registrasi Aset</a></li>
            <li><a href="<?php echo site_url('laporanpenyusutan/getLaporanPenyusutan');?>">Laporan Penyusutan Aset</a></li>
          </ul>
        </li>
         <li><a href="<?php echo site_url('grafikaset/getGrafikAset');?>"><i class="glyphicon glyphicon-signal"></i> <span>Grafik Aset</span></a></li>
          <li class="treeview">
           <a href="<?php echo site_url('user/getData')?>"><i class="glyphicon glyphicon-user"></i> <span>Management User</span></a>
        </li>
      </ul>
      <!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Transaksi Aset
        <small>Perencanaan Aset</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="glyphicon glyphicon-th-list"></i>Perencanaan Aset</a></li>
        <li class="active">Update Data</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">     
 <div class="container">
      <!-- Main component for a primary marketing message or call to action -->
<div class="panel panel-default">
  <div class="panel-heading"><b>Form Update Data Perencanaan Aset</b></div>
  <div class="panel-body">
     <?php echo $this->session->flashdata('msg1')?>  
    <?php foreach ($edit as $u) { ?>
    <form action="<?php echo base_url(). 'index.php/perencanaan/update'; ?>" method="post">
         <table class="table table-striped">
         <tr>
          <td>
            <div class="form-group-row">
              <label for="example-text-input" class="col-xs-2 col-form-label">Nama Aset</label>
              <div class="col-xs-10">
                <div class="right-inner-addon">
                  <input type="hidden" name="kode_aset" value="<?php echo $u->kode_aset ?>">
                  <i class="glyphicon glyphicon-pencil"></i><input type="text" name="nama_aset" class="form-control" value="<?php echo $u->nama_aset?>">
                </div>
            </div>
            </td>
         </tr>
         <tr>
          <td> 
            <div class="form-group-row">
               <label for="example-text-input" class="col-xs-2 col-form-label">PIC Aset</label>
                <div class="col-xs-10">
                  <div class="right-inner-addon">
                   <i class="glyphicon glyphicon-pencil"></i><input type="text" name="pic" class="form-control" value="<?php echo $u->pic?>">
                 </div>
                </div>
          </div>
          </td>
         </tr>
         <tr>
          <td>
            <div class="form-group-row">
              <label for="example-text-input" class="col-xs-2 col-form-label">Deskripsi Aset</label>
              <div class="col-xs-10">
                <div class="right-inner-addon">
                <i class="glyphicon glyphicon-pencil"></i><input type="text" name="deskripsi_aset" class="form-control" value="<?php echo $u->deskripsi_aset?>">
                </div>
              </div>
          </div>
          </td>
         </tr>
          <tr>
          <td>
            <div class="form-group-row">
              <label for="example-text-input" class="col-xs-2 col-form-label">Harga Perolehan Aset</label>
              <div class="col-xs-10">
                <div class="right-inner-addon">
                    <i class="glyphicon glyphicon-usd"></i><input type="text" name="harga_perolehan" class="form-control" value="<?php echo $u->harga_perolehan?>">
                </div>
              </div>
          </div>
          </td>
         </tr>
          <tr>
          <td>
            <div class="form-group-row">
              <label for="example-text-input" class="col-xs-2 col-form-label">Tanggal Perolehan Aset</label>
              <div class="col-xs-10">
                <div class="right-inner-addon">
                     <i class="glyphicon glyphicon-calendar"></i><input type="text" name="tanggal_perolehan" id="datepicker" class="form-control" value="<?php echo $u->tanggal_perolehan?>">
                   </div>
                </div>
            </div>
          </td>
         </tr>
          <tr>
          <td>
            <div class="form-group-row">
               <label for="example-text-input" class="col-xs-2 col-form-label">Kategori Aset</label>
              <div class="col-xs-10">
                    <div class="form-group">
                      <select class="selectpicker form-control" name="kode_kategori_aset" value="<?php echo $u->kode_kategori_aset?>">
                        <?php 
                          foreach ($kategori as $key) { ?>
                            <option value='<?php echo $key->kode_kategori_aset?>' ><?php echo $key->nama_kategori_aset?></option>
        
                        <?php
                          }

                        ?>
                      </select>
                  </div>
              </div>
          </div>
          </td>
         </tr>
          <tr>
          <td>
            <div class="form-group-row">
              <label for="example-text-input" class="col-xs-2 col-form-label">Status Aset</label>
                <div class="col-xs-10">
                    <div class="form-group">
                      <select class="selectpicker form-control" name="kode_status_aset" value="<?php echo $u->kode_status_aset?>">
                        <option>Pilih Status</option>
                        <option value="1">Baik</option>
                        <option value="2">Sedang</option>
                        <option value="3">Buruk</option>
                      </select>
                  </div>
              </div>
          </div>
          </td>
         </tr>
         <tr>
          <td colspan="2">
            <input type="submit" name="submit" class="btn btn-success" value="Simpan">
            <button type="reset" class="btn btn-default">Batal</button>
          </td>
         </tr>
       </table>
     </form>
      <?php } ?>
        </div>
        
    </div>
</div>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Main Footer -->
  <footer class="main-footer">
    <!-- To the right -->
    <div class="pull-right hidden-xs">
      Developed By Reza Nur Rochmat KOMSI UGM
    </div>
    <!-- Default to the left -->
    <strong>Powered By &copy; 2016 <a href="#">Aino System Integration</a>.</strong> All rights reserved.
  </footer>
</div>
<!-- ./wrapper -->

<!-- REQUIRED JS SCRIPTS -->

<!-- jQuery 2.2.0 -->
<script src="<?php echo base_url().'assets/'?>plugins/jQuery/jQuery-2.2.0.min.js"></script>
<!-- Bootstrap 3.3.6 -->
<script src="<?php echo base_url().'assets/'?>bootstrap/js/bootstrap.min.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url().'assets/'?>dist/js/app.min.js"></script>
<script src="<?php echo base_url().'assets/'?>dist/js/jquery-1.12.4.js"></script>
<script src="<?php echo base_url().'assets/'?>dist/js/jquery-ui.js"></script>
  <script>
  $( function() {
    $( "#datepicker" ).datepicker({
      dateFormat:'yy-mm-dd',
      changeMonth: true,
      changeYear: true
    });
  });
  </script>
  <script>
      function myFunction() {
          var x = document.getElementById("kode_kategori_aset").value;
          document.getElementById("kategori").innerHTML = x;
      }
</script>
<!-- Optionally, you can add Slimscroll and FastClick plugins.
     Both of these plugins are recommended to enhance the
     user experience. Slimscroll is required when using the
     fixed layout. -->
</body>
</html>
