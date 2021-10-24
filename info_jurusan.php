<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="noindex,nofollow">
    <title>Admin Keluarga Besar RPL | Info Jurusan</title>
    <link rel="canonical" href="https://www.wrappixel.com/templates/ample-admin-lite/" />
    <!-- Favicon icon -->
    <!-- <link rel="icon" type="image/png" sizes="16x16" href="plugins/images/favicon.png"> -->
    <!-- Custom CSS -->
    <link href="plugins/bower_components/chartist/dist/chartist.min.css" rel="stylesheet">
    <link rel="stylesheet" href="plugins/bower_components/chartist-plugin-tooltips/dist/chartist-plugin-tooltip.css">
    <!-- Custom CSS -->
    <link href="css/admin.css" rel="stylesheet">
    <link href="css/style.min.css" rel="stylesheet">
    <link rel="stylesheet" href="bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="fonts/montserrat/stylesheet.css"> <!-- font -->
</head>
<?php
    session_start();
    require_once("koneksi.php");
    $gambar=$_SESSION['image'];
    $nik=$_SESSION['nik'];
    $nama_depan =$_SESSION['nama_depan'];
?>
<body>
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
        <div class="lds-ripple">
            <div class="lds-pos"></div>
            <div class="lds-pos"></div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper" data-layout="vertical" data-navbarbg="skin5" data-sidebartype="full"
        data-sidebar-position="absolute" data-header-position="absolute" data-boxed-layout="full">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <header class="topbar" data-navbarbg="skin5">
            <nav class="navbar top-navbar navbar-expand-md navbar-dark">
                <div class="navbar-header" data-logobg="skin6">
                    <!-- ============================================================== -->
                    <!-- Logo -->
                    <!-- ============================================================== -->
                    <a class="navbar-brand" >
                        <!-- Logo icon -->
                        <b class="logo-icon">
                            <!-- Dark Logo icon -->
                            
                        </b>
                        <!--End Logo icon -->
                        <!-- Logo text -->
                        <span class="logo-text">
                            <!-- dark Logo text -->
                            <img src="img/admin_logo.png" alt="homepage" />
                        </span>
                    </a>
                    <!-- ============================================================== -->
                    <!-- End Logo -->
                    <!-- ============================================================== -->
                    <!-- ============================================================== -->
                    <!-- toggle and nav items -->
                    <!-- ============================================================== -->
                    <a class="nav-toggler waves-effect waves-light text-dark d-block d-md-none"
                        href="javascript:void(0)"><i class="ti-menu ti-close"></i></a>
                </div>
                <!-- ============================================================== -->
                <!-- End Logo -->
                <!-- ============================================================== -->
                <div class="navbar-collapse collapse" id="navbarSupportedContent" data-navbarbg="skin5">
                    <ul class="navbar-nav d-none d-md-block d-lg-none">
                        <li class="nav-item">
                            <a class="nav-toggler nav-link waves-effect waves-light text-white"
                                href="javascript:void(0)"><i class="ti-menu ti-close"></i></a>
                        </li>
                    </ul>
                    <!-- ============================================================== -->
                    <!-- Right side toggle and nav items -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav ml-auto d-flex align-items-center">

                        <!-- ============================================================== -->
                        <!-- Search -->
                        <!-- ============================================================== -->
                        <li class=" in">
                        </li>
                        <!-- ============================================================== -->
                        <!-- User profile and search -->
                        <!-- ============================================================== -->
                        <li>
                            <a class="profile-pic" href="admin_profil.php">
                                <img <?php echo "src='image_view.php?image_id=".$nik."'" ?> alt="user-img" width="36"
                                    class="img-circle"><span class="text-white font-medium"><?php echo $nama_depan; ?></span></a>
                        </li>
                        <!-- ============================================================== -->
                        <!-- User profile and search -->
                        <!-- ============================================================== -->
                    </ul>
                </div>
            </nav>
        </header>
        <!-- ============================================================== -->
        <!-- End Topbar header -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <aside class="left-sidebar" data-sidebarbg="skin6">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">
                        <!-- User Profile-->
                        <li class="sidebar-item pt-2">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="dashboard.php"
                                aria-expanded="false">
                                <i class="far fa-clock" aria-hidden="true"></i>
                                <span class="hide-menu">Dashboard</span>
                            </a>
                        </li>
                        <li class="sidebar-item pt-2">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="info_jurusan.php"
                                aria-expanded="false">
                                <i class="far fa-clock" aria-hidden="true"></i>
                                <span class="hide-menu">Info Jurusan</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="admin_karir.php"
                                aria-expanded="false">
                                <i class="fa fa-user" aria-hidden="true"></i>
                                <span class="hide-menu">Karir</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="admin_angkatan.php"
                                aria-expanded="false">
                                <i class="fa fa-table" aria-hidden="true"></i>
                                <span class="hide-menu">Angkatan</span>
                            </a>
                        </li>
                    </ul>

                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </aside>
        <!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="page-breadcrumb bg-white">
                <div class="row align-items-center">
                    <div class="col-lg-10 col-md-10 col-sm-10 col-xs-12">
                        <h4 class="page-title text-uppercase font-medium font-14">INFO JURUSAN</h4>
                    </div>
                    <div class="col-lg-2 col-sm-2 col-md-2 col-xs-12">
                        <div class="d-md-inline">
                            <a href="admin_buatartikel.php"
                                class="btn btn-primary  d-none d-md-block pull-right  hidden-xs hidden-sm waves-effect waves-light" style="border-radius: 20px;">Buat Artikel</a>
                        </div>
                    </div>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- ============================================================== -->
            <!-- End Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Three charts -->
                <!-- ============================================================== -->
                <div class="row justify-content-left">
                    <?php
                        
                        $sql = "SELECT * FROM info_jurusan";
                        $result=$db->prepare($sql);
                        $result->execute();
                        $total = $result->rowCount();
                        $index = 0;
                        while($row = $result->fetch(PDO::FETCH_ASSOC)){

                    ?>
                    <div class="col-lg-6 col-sm-6 col-xs-12">
                        <img class="artikel_img" <?php echo "src='image_view.php?imageartikel_id=".$row['id_info']."'" ?>>
                        <div class="white-box analytics-info">
                            <div class="row justify-content-left">
                                <div class="col-lg-8 col-sm-8 col-xs-12">
                                    <p class="judul_artikel"><?php echo $row['judul'];?></p>
                                    <p class="tgl_artikel"><?php echo $row['tanggal'];?></p>
                                </div>
                                <div class="col-lg-4 col-sm-4 col-xs-12">
                                    <!-- Button trigger modal -->
                                    <a href="" class="btn btn-primary d-none d-md-block pull-right  hidden-xs hidden-sm waves-effect waves-light" data-toggle="modal" data-target="#artikel<?php echo $index;?>" style="border-radius: 20px;">
                                        Edit
                                    </a>
                                    
                                    <!-- Modal -->
                                    <div class="modal fade" id="artikel<?php echo $index;?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalCenterTitle">Edit Artikel</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                            </div>
                                            <form class="contact100-form validate-form" method="POST" action="a_info_jurusan.php"enctype="multipart/form-data">
                                            <div class="modal-body">
                                                <div class="form-row">
                                                    <div class="form-group col-md-6">
                                                        <label for="inputAddress">Id Info</label>
                                                        <input type="text" class="form-control" disabled="disabled" value="<?php echo $row['id_info'];?>">
                                                        <input type="hidden" name="id_info"  value="<?php echo $row['id_info'];?>">
                                                    </div>
                                                    <div class="form-group col-md-6">
                                                        <label for="inputAddress">Id Kategori</label>
                                                        <select id="inputKategori" disabled="disabled" class="form-control" name="id_kategori" style="background: transparent;">
                                                            <option selected value="
                                                            <?php 
                                                                $id_kategori = $row['id_kategori'];
                                                                $query2= $db->prepare("SELECT kategori FROM kategori WHERE id_kategori = '$id_kategori'");
                                                                $query2->execute();
                                                                $row2 = $query2->fetch();
                                                                echo $row2['kategori'];
                                                            ?>"><?php echo $row2['kategori'];?></option>
                                                            <option value="K001">Acara</option>
                                                            <option value="K002">Prestasi</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="inputAddress">NIK</label>
                                                    <input type="text" class="form-control" disabled="disabled" value="<?php echo $row['nik'];?>">
                                                    <input type="hidden" name="nik"  value="<?php echo $row['nik'];?>">
                                                </div>
                                                <div class="form-group">
                                                    <label for="inputAddress">Judul</label>
                                                    <input type="text" class="form-control" name="judul" value="<?php echo $row['judul']?>">
                                                </div>
                                                <div class="form-group">
                                                    <label for="inputAddress">Prolog</label>
                                                    <textarea rows="3"  maxlength="120" class="form-control" name="prolog"><?php echo $row['prolog'];?></textarea>
                                                </div>
                                                <div class="form-group">
                                                    <label for="inputAddress">Deskripsi</label>
                                                    <textarea rows="6" class="form-control" name="deskripsi"><?php echo $row['deskripsi'];?></textarea>
                                                </div>
                                                <div class="form-group">
                                                    <label for="inputAddress">Tanggal</label>
                                                    <input type="date" class="form-control" name="tanggal" value="<?php echo date('Y-m-d', strtotime($row["tanggal"])); ?>">
                                                </div>
                                                <div class="form-row">
                                                    <div class="form-group col-md-6" >
                                                        <img <?php echo "src='image_view.php?imageartikel_id=".$row['id_info']."'" ?> style="width: 100%; height:100%" id="gambar_tampil2<?php echo $row['id_info']?>">
                                                    </div>
                                                    <div class="form-group col-md-6" >
                                                        <label for="exampleFormControlFile1">Gambar Artikel</label>
                                                        <input type="file" class="form-control-file" id="gambar"onchange="document.getElementById('gambar_tampil2<?php echo $row['id_info']?>').src=window.URL.createObjectURL(this.files[0])" name="image_artikel">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="inputAddress">Orientasi</label>
                                                    <select id="inputKategori" class="form-control" name="orientasi" style="background: transparent;">
                                                        <option selected value="<?php echo $row['orientasi']?>"><?php echo $row['orientasi']?></option>
                                                        <option value="landscape">Landscape</option>
                                                        <option value="potrait">Potrait</option>
                                                    </select>
                                                </div>
                                                <div class="form-row">
                                                    <div class="form-group col-md-6">
                                                        <label for="inputAddress">Apakah Artikel ini layak dipublikasikan?</label>
                                                    </div>
                                                    <div class="form-group col-md-6">
                                                    <?php
                                                        if($row['verifikasi']==1){
                                                    ?>        
                                                        
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio" name="verifikasi" id="verifikasi1" value="1" checked>
                                                            <label class="form-check-label" for="exampleRadios1">
                                                            Ya
                                                            </label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio" name="verifikasi" id="verifikasi2" value="0">
                                                            <label class="form-check-label" for="exampleRadios2">
                                                            Tidak
                                                            </label>
                                                        </div>
                                                    <?php    
                                                    }else{
                                                    ?>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio" name="verifikasi" id="verifikasi1" value="1">
                                                            <label class="form-check-label" for="exampleRadios1">
                                                            Ya
                                                            </label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio" name="verifikasi" id="verifikasi2" value="0"  checked>
                                                            <label class="form-check-label" for="exampleRadios2">
                                                            Tidak
                                                            </label>
                                                        </div>
                                                    <?php    
                                                    }
                                                    ?>
                                                </div>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="submit" class="btn btn-secondary" name="btn_deleteartikel" style="border-radius: 20px;">Delete</button>
                                                <button type="submit" class="btn btn-primary" name="btn_updateartikel" style="border-radius: 20px;">Update</button>
                                            </div>
                                            </form>
                                        </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    <?php
                        $index++;}
                    ?>
                </div>
            </div>   
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
            <footer class="footer text-center"> 2021 © Website Keluarga Besar RPL
            </footer>
            <!-- ============================================================== -->
            <!-- End footer -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Page wrapper  -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="plugins/bower_components/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="plugins/bower_components/popper.js/dist/umd/popper.min.js"></script>
    <script src="bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="js/app-style-switcher.js"></script>
    <script src="plugins/bower_components/jquery-sparkline/jquery.sparkline.min.js"></script>
    <!--Wave Effects -->
    <script src="js/waves.js"></script>
    <!--Menu sidebar -->
    <script src="js/sidebarmenu.js"></script>
    <!--Custom JavaScript -->
    <script src="js/custom.js"></script>
    <!--This page JavaScript -->
    <!--chartis chart-->
    <script src="plugins/bower_components/chartist/dist/chartist.min.js"></script>
    <script src="plugins/bower_components/chartist-plugin-tooltips/dist/chartist-plugin-tooltip.min.js"></script>
    <script src="js/pages/dashboards/dashboard1.js"></script>
</body>

</html>