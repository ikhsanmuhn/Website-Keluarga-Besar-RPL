<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <title>Admin Keluarga Besar RPL | Edit User</title>
    <link rel="canonical" href="https://www.wrappixel.com/templates/ample-admin-lite/" />
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="plugins/images/favicon.png">
     <!-- Custom CSS -->
     <link href="plugins/bower_components/chartist/dist/chartist.min.css" rel="stylesheet">
     <link rel="stylesheet" href="plugins/bower_components/chartist-plugin-tooltips/dist/chartist-plugin-tooltip.css">
     <!-- Custom CSS -->
     <link href="css/style.min.css" rel="stylesheet">
     <link rel="stylesheet" href="bootstrap/dist/css/bootstrap.min.css">
     <link rel="stylesheet" type="text/css" href="fonts/montserrat/stylesheet.css"> <!-- font -->
</head>
<?php
    session_start();
    require "koneksi.php";
    $gambar=$_SESSION['image'];
    $nik=$_SESSION['nik'];
    $nama_depan =$_SESSION['nama_depan'];
    $nik_user = $_GET['nik'];
    $query = $db->prepare("SELECT * FROM user WHERE nik = $nik_user");
    $query->execute();
    $row = $query->fetch();
    
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
                    <a class="navbar-brand" href="dashboard.php">
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
                                    class="img-circle"><span class="text-white font-medium"><?php echo $nama_depan;?></span></a>
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
                        <h4 class="page-title text-uppercase font-medium font-14">Edit User</h4>
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
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-lg-4 col-xlg-3 col-md-12">
                        <div class="user-bg"> 
                            <img alt="user" <?php echo "src='image_view.php?image_id=".$nik_user."'" ?> style="border-radius: 25px;" id="gambar_tampil">
                        </div>
                    </div>
                    <!-- Column -->
                    <!-- Column -->
                    <div class="col-lg-8 col-xlg-9 col-md-12">
                        <div class="card">
                            <div class="card-body">
                            <form class="form-horizontal form-material" method="POST" action="a_admin_angkatan.php" enctype="multipart/form-data">
                                <div class="form-group mb-4">
                                    <label class="col-md-12 p-0">NIK</label>
                                    <div class="col-md-12 border-bottom p-0">
                                        <input type="text" placeholder="Masukan NIK" disabled="disabled"
                                            class="form-control p-0 border-0" value="<?php echo $row['nik']?>"></div>
                                    <input type="hidden"name="nik" value="<?php echo $row['nik']?>">
                                </div>
                                <div class="form-group mb-4">
                                    <label class="col-md-12 p-0">Nama Depan</label>
                                    <div class="col-md-12 border-bottom p-0">
                                        <input type="text" placeholder="Nama Depan" name="nama_depan" value="<?php echo $row['nama_depan']?>"
                                            class="form-control p-0 border-0"> </div>
                                </div>
                                <div class="form-group mb-4">
                                    <label class="col-md-12 p-0">Nama Belakang</label>
                                    <div class="col-md-12 border-bottom p-0">
                                        <input type="text" placeholder="Nama Belakang" name="nama_belakang" value="<?php echo $row['nama_belakang']?>"
                                            class="form-control p-0 border-0"> </div>
                                </div>
                                <div class="form-group mb-4">
                                    <label class="col-md-12 p-0">Kelas</label>
                                    <div class="col-md-12 border-bottom p-0">
                                        <select id="inputKelas" class="form-control" name="kelas" style="background: transparent;">
                                            <option selected value="<?php echo $row['kelas']?>"><?php echo $row['kelas']?></option>
                                            <option value="A">A</option>
                                            <option value="B">B</option>
                                            <option value="C">C</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group mb-4">
                                    <label class="col-md-12 p-0">Angkatan</label>
                                    <div class="col-md-12 border-bottom p-0">
                                    <select id="inputAngkatan" class="form-control" name="angkatan" style="background: transparent;">
                                        <option selected value="<?php echo $row['id_angkatan'];?>">
                                        <?php 
                                            $id_angkatan= $row['id_angkatan'];
                                            $query2= $db->prepare("SELECT angkatan FROM angkatan WHERE id_angkatan = '$id_angkatan'");
                                            $query2->execute();
                                            $hasil = $query2->fetch();
                                            echo "Angkatan ".$hasil['angkatan'];
                                        ?></option>
                                        <option value="A001">Angkatan 1</option>
                                        <option value="A002">Angkatan 2</option>
                                        <option value="A003">Angkatan 3</option>
                                        <option value="A004">Angkatan 4</option>
                                        <option value="A005">Angkatan 5</option>
                                        <option value="A006">Angkatan 6</option>
                                        <option value="A007">Angkatan 7</option>
                                        <option value="A008">Angkatan 8</option>
                                        <option value="A009">Angkatan 9</option>
                                        <option value="A010">Angkatan 10</option>
                                        <option value="A011">Angkatan 11</option>
                                        <option value="A012">Angkatan 12</option>
                                        <option value="A013">Angkatan 13</option>
                                        <option value="A014">Angkatan 14</option>
                                        <option value="A015">Angkatan 15</option>
                                        <option value="A016">Angkatan 16</option>
                                        <option value="A017">Angkatan 17</option>
                                        <option value="A018">Angkatan 18</option>
                                    </select>
                                    </div>
                                </div>
                                <div class="form-group mb-4">
                                    <label for="example-email" class="col-md-12 p-0">Email</label>
                                    <div class="col-md-12 border-bottom p-0">
                                        <input type="email" placeholder="Masukan Email"
                                            class="form-control p-0 border-0" name="email"
                                            value="<?php echo $row['email']?>">
                                    </div>
                                </div>
                                <div class="form-group mb-4">
                                    <label class="col-md-12 p-0">No. HP</label>
                                    <div class="col-md-12 border-bottom p-0">
                                        <input type="text" placeholder="Masukan No HP" name="no_hp"
                                            class="form-control p-0 border-0" value="<?php echo $row['no_hp']?>">
                                    </div>
                                </div>
                                <div class="form-group mb-4">
                                    <label class="col-md-12 p-0">Alamat</label>
                                    <div class="col-md-12 border-bottom p-0">
                                        <textarea rows="4" class="form-control p-0 border-0" name="alamat"><?php echo $row['alamat']?></textarea>
                                    </div>
                                </div>
                                <div class="form-group mb-4">
                                    <label class="col-md-12 p-0">Tanggal Lahir</label>
                                    <div class="col-md-12 border-bottom p-0">
                                        <input type="date"
                                        class="form-control p-0 border-0" name="tanggal_lahir" value="<?php echo date('Y-m-d', strtotime($row["tanggal_lahir"])); ?>">
                                    </div>
                                </div>
                                <div class="form-group mb-4">
                                    <label class="col-md-12 p-0">Ubah Foto Profil</label>
                                    <div class="col-md-12 border-bottom p-0">
                                        <input class="form-control p-0 border-0" type="file" name="photo_profil" id="gambar"onchange="document.getElementById('gambar_tampil').src=window.URL.createObjectURL(this.files[0])" placeholder="Masukan foto Profil">
                                    </div>
                                </div>
                                <div class="form-group mb-4">
                                    <div class="col-sm-12">
                                        <button class="btn btn-success" name="btn_updateuser" style="width: 198.39px; height: 38.4px; background-color: #FFA62B; border-radius: 20px; ">Update</button>
                                        <button class="btn btn-secondary" name="btn_deleteuser" style=" margin-left: 20px;width: 198.39px; height: 38.4px; border-radius: 20px; ">Delete</button>
                                    </div>
                                </div>
                            </form>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- End PAge Content -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Right sidebar -->
                <!-- ============================================================== -->
                <!-- .right-sidebar -->
                <!-- ============================================================== -->
                <!-- End Right sidebar -->
                <!-- ============================================================== -->
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
    <!--Wave Effects -->
    <script src="js/waves.js"></script>
    <!--Menu sidebar -->
    <script src="js/sidebarmenu.js"></script>
    <!--Custom JavaScript -->
    <script src="js/custom.js"></script>
</body>

</html>