<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<?php require_once('static/call.php');?>

<html>



<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>Welcome To | Simotita</title>
    <!-- Favicon-->
    <link rel="icon" href="favicon.ico" type="image/x-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">

    <!-- Bootstrap Core Css -->
    <link href="<?php echo base_url()?>assets/plugins/bootstrap/css/bootstrap.css" rel="stylesheet">

    <!-- Waves Effect Css -->
    <link href="<?php echo base_url()?>assets/plugins/node-waves/waves.css" rel="stylesheet" />

    <!-- Animation Css -->
    <link href="<?php echo base_url()?>assets/plugins/animate-css/animate.css" rel="stylesheet" />

    <!-- JQuery DataTable Css -->
    <link href="<?php echo base_url()?>assets/plugins/jquery-datatable/skin/bootstrap/css/dataTables.bootstrap.css" rel="stylesheet">

    <!-- Custom Css -->
    <link href="<?php echo base_url()?>assets/css/style.css" rel="stylesheet">

    <!-- AdminBSB Themes. You can choose a theme from css/themes instead of get all themes -->
    <link href="<?php echo base_url()?>assets/css/themes/all-themes.css" rel="stylesheet" />
    
</head>

<body class="theme-red">
    <!-- Page Loader -->
    <!-- Top Bar -->
    <nav class="navbar">
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand" href="<?php echo base_url('Home/index');?>"><p style="font-family:'Impact' ;font-size: 30px; color: white; ">S i m o t i t a</p></a>
            </div>
        </div>
    </nav>
    <!-- #Top Bar -->
    <section>
        <!-- Left Sidebar -->
        <aside id="leftsidebar" class="sidebar">
            <!-- User Info -->
            <div class="user-info">
                <div class="">
                    <img src="<?php echo base_url('assets/images/user-img-background.jpg');?>" width="250" height="150" alt="User" />
                </div>
                <div class="info-container">
                    <div class="name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="font-size: 20PX; margin-top: -15px"> A d m i n</div>
                    </div>
                </div>
            </div>
            <!-- #User Info -->
            <!-- Menu -->
            <div class="menu">
                    <ul class="list">
                    <li class="">
                        <a href="<?php echo base_url('Home');?>">
                            <i class="material-icons">home</i>
                                <span>Home</span>
                        </a>
                    </li>
                </ul>
            </div>
            <!-- #Menu -->
            <!-- Footer -->
            <div class="legal">
                <div class="copyright">
                    &copy; 2020 <a href="javascript:void(0);">Informatika-Universitas Mataram</a>
                </div>
            </div>
            <!-- #Footer -->
        </aside>
        <!-- #END# Left Sidebar -->
    </section>
    <section class="content">
        <div class="container-fluid">
            <div class="container-fluid">
            <div class="">
                <h1 align="center">ARKADEMY TES </h1>
                <br>
            </div>
        </div>  
        <div class="col-sm-4">
        </div>
            
        <div class="col-sm-4">
                <div class="panel panel-success" style="width: 500px; " >
                    <div class="panel-heading" style="text-align: center;">Tambah Produk
                        <span class="pull-right clickable panel-toggle"><em class="fa fa-toggle-up"></em></span>
                    </div>
                <div class="panel-body">
                    <form action="<?php echo base_url('Home/prosesTambah');?>" method="post">   
                        <div class="form-group">  
                          <label class="control-label" for="pswd">Nama Produk</label>  
                            <div>  
                              <input type="text" class="form-control" id="namaProduk" name="namaProduk" placeholder="namaProduk" required="">  
                            </div>  
                        </div>  
                         <div class="form-group">  
                          <label class="control-label" for="pswd">Keterangan Produk</label>  
                            <div>  
                              <input type="text" class="form-control" id="ketProduk" name="ketProduk" placeholder="ketProduk" required="">  
                            </div>  
                        </div>  
                         <div class="form-group">  
                          <label class="control-label" for="pswd">Harga Produk</label>  
                            <div>  
                              <input type="text" class="form-control" id="hargaProduk" name="hargaProduk" placeholder="hargaProduk" required="">  
                            </div>  
                        </div>  
                         <div class="form-group">  
                          <label class="control-label" for="pswd">Jumlah Produk</label>  
                            <div>  
                              <input type="text" class="form-control" id="jumlahProduk" name="jumlahProduk" placeholder="jumlahProduk" required="">  
                            </div>  
                        </div>  
                        <div class="form-group">   
                          <div class="row">  
                            <div class="col-sm-offset-5 col-sm-3 btn-submit">  
                              <button onclick="javascript:return alert('Data berhasil ditambahkan, silahkan tunggu beberapa saat...')" type="submit" class="btn btn-success">Tambah</button>  
                            </div>  
                          </div>  
                        </div>   
                    </form>
                </div>
                </div>
        </div>
        <div class="col-sm-4">
        </div>  
        </div>
    </section>
    <!-- Jquery Core Js -->
    <script src="<?php echo base_url()?>assets/plugins/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core Js -->
    <script src="<?php echo base_url()?>assets/plugins/bootstrap/js/bootstrap.js"></script>

    <!-- Select Plugin Js -->
    <script src="<?php echo base_url()?>assets/plugins/bootstrap-select/js/bootstrap-select.js"></script>

    <!-- Slimscroll Plugin Js -->
    <script src="<?php echo base_url()?>assets/plugins/jquery-slimscroll/jquery.slimscroll.js"></script>

    <!-- Waves Effect Plugin Js -->
    <script src="<?php echo base_url()?>assets/plugins/node-waves/waves.js"></script>

    <!-- Jquery DataTable Plugin Js -->
    <script src="<?php echo base_url()?>assets/plugins/jquery-datatable/jquery.dataTables.js"></script>
    <script src="<?php echo base_url()?>assets/plugins/jquery-datatable/skin/bootstrap/js/dataTables.bootstrap.js"></script>
    <script src="<?php echo base_url()?>assets/plugins/jquery-datatable/extensions/export/dataTables.buttons.min.js"></script>
    <script src="<?php echo base_url()?>assets/plugins/jquery-datatable/extensions/export/buttons.flash.min.js"></script>
    <script src="<?php echo base_url()?>assets/plugins/jquery-datatable/extensions/export/jszip.min.js"></script>
    <script src="<?php echo base_url()?>assets/plugins/jquery-datatable/extensions/export/pdfmake.min.js"></script>
    <script src="<?php echo base_url()?>assets/plugins/jquery-datatable/extensions/export/vfs_fonts.js"></script>
    <script src="<?php echo base_url()?>assets/plugins/jquery-datatable/extensions/export/buttons.html5.min.js"></script>
    <script src="<?php echo base_url()?>assets/plugins/jquery-datatable/extensions/export/buttons.print.min.js"></script>

    <!-- Custom Js -->
    <script src="<?php echo base_url()?>assets/js/admin.js"></script>
    <script src="<?php echo base_url()?>assets/js/pages/tables/jquery-datatable.js"></script>

    <!-- Demo Js -->
    <script src="<?php echo base_url()?>assets/js/demo.js"></script>
</body>


</html>
