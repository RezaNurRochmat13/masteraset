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
  <link href="<?php echo base_url().'assets/'?>dist/css/footer.css" rel="stylesheet">
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
      <!-- <form action="#" method="get" class="sidebar-form">
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
        <small>Penyusutan Aset</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo site_url('software/getSoftware');?>"><i class="glyphicon glyphicon-th-list"></i>Penyusutan Aset</a></li>
        <li class="active">Lihat Data</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
           <div class="container">
             <?php echo $this->session->flashdata('msg1');?>  
             <?php echo $this->session->flashdata('msg2');?>
      <!-- Main component for a primary marketing message or call to action -->
      <div class="panel panel-default">
  <div class="panel-heading"><b>Data Penyusutan Aset</b></div>
  <div class="panel-body">
     <form action="<?php echo site_url('penyusutan/cariData');?>" method = "post">
        <div class="col-md-7">
    
      </div>
        <div class="form-group-row">
          <div class="col-xs-4">
        <input type="text" class="form-control" placeholder="Masukkan nama aset yang dicari" name ="keyword" />
        </div>
      </div>
       <input type="submit" class="btn btn-info" value = "Search" />
      </form>
       <table class="table table-striped">
        <thead>
         <tr>
          <th>No</th>
         <th>Kode Aset</th>
         <th>Nama Aset</th>
         <th>PIC</th>
         <th>Deskripsi Aset</th>
         <th>Tanggal Susut</th>
         <th>Harga Susut</th>
         <th>Tanggal Update</th>
         <th>Kategori Aset</th>
         <th>Aksi</th>
         </tr>
        </thead>
        <tbody>
        <?php if(empty($qdata)){ ?>
         <tr>
          <td colspan="6">Data tidak ditemukan</td>
         </tr>
        <?php }else{
          $no=$this->uri->segment('3')+1;
          foreach($qdata as $data){ $no;?>
         <tr height="50px">
          <td><?php echo $no++?></td>
          <td width="100px"><?php echo $data->kode_aset?></td>
          <td width="100px"><?php echo $data->nama_aset?></td>
          <td width="100px"><?php echo $data->pic?></td>
          <td width="100px"><?php echo $data->deskripsi_aset?></td>
          <td width="100px"><?php echo date("d F Y",strtotime($data->tanggal_susut)); ?></td>
          <td width="100px"><?php echo $rp ="Rp".number_format($data->harga_susut,2,',','.')?></td>
          <td width="100px"><?php echo date("d F Y",strtotime($data->update_at)); ?></td>
          <td width="100px"><?php echo $data->nama_kategori_aset?></td>
          <td width="400px">
           <?php echo anchor('penyusutan/edit/'.$data->kode_aset,'<button type="button" class="btn btn-info"><i class="glyphicon glyphicon-pencil"></i>Registrasi</button>');?>
           <?php echo anchor('penyusutan/susut/'.$data->kode_aset,'<button type="button" class="btn btn-warning"><i class="glyphicon glyphicon-folder-close"></i>Susutkan</button>');?>
           <?php echo anchor('penyusutan/delete/'.$data->kode_aset,'<button type="button" class="btn btn-danger"><i class="glyphicon glyphicon-trash"></i>Disposal</button>');?>
          </td>
         </tr>
        <?php }}?>
        </tbody>
       </table>
       <div class="row">
        <div class="col-md-12 text-center">
            <?php echo $this->pagination->create_links(); ?>
        </div>
    </div>
        </div>
    </div>    <!-- /panel -->
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
<!-- Optionally, you can add Slimscroll and FastClick plugins.
     Both of these plugins are recommended to enhance the
     user experience. Slimscroll is required when using the
     fixed layout. -->
</body>
</html>
