<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="noindex,nofollow">  
    <title>Detail | ...</title>
    <link rel="canonical" href="https://www.wrappixel.com/templates/ample-admin-lite/" />
    <!-- Custom CSS -->
    <link href="plugins/bower_components/chartist/dist/chartist.min.css" rel="stylesheet">
    <link rel="stylesheet" href="plugins/bower_components/chartist-plugin-tooltips/dist/chartist-plugin-tooltip.css">
    <!-- Custom CSS -->
    <link href="css/detailartikel.css" rel="stylesheet">
    <link href="css/style.min.css" rel="stylesheet">
    <link rel="stylesheet" href="bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="fonts/montserrat/stylesheet.css"> <!-- font -->
</head>
<?php
     error_reporting(0);
    require_once("koneksi.php");
    session_start();
    $nik=$_SESSION['nik'];
    $nama_depan =$_SESSION['nama_depan'];
    $nama_belakang =$_SESSION['nama_belakang'];
    $tanggal_lahir =$_SESSION['tanggal_lahir'];
    $kelas =$_SESSION['kelas'];
    $id_angkatan =$_SESSION['id_angkatan'];
    $alamat =$_SESSION['alamat'];
    $email =$_SESSION['email'];
    $no_hp =$_SESSION['no_hp'];
    if(isset($_GET['id_karir'])){
        $id_karir = $_GET['id_karir'];
        $kategori = $_GET['kategori'];
        
        $sql = "SELECT * FROM karir WHERE id_karir = '$id_karir';";
        $result=$db->prepare($sql);
        $result->execute();
        $row = $result->fetch(PDO::FETCH_ASSOC);
        $judul = $row['judul_artikel'];
        $tanggal = $row['tanggal'];
        $deskripsi_panjang = $row['deskripsi'];
        $gambar_tampil = $id_karir;
        $id_tampil= "imageartikelkarir_id";
        $nik_author = $row['nik'];
        $tombol_buat = "<a href='buat_artikelkarir.php' class='btn btn-secondary  d-none d-md-block pull-right  hidden-xs hidden-sm waves-effect waves-light' style='border-radius: 25px; background-color: #FFA62B; width: 150px; height: 38.4px; margin-left:50px;' >Buat Artikel</a>";
    }
    if(isset($_GET['id_info'])){
        $id_info = $_GET['id_info'];
        $kategori = $_GET['kategori'];
        
        $sql = "SELECT * FROM info_jurusan WHERE id_info = '$id_info';";
        $result=$db->prepare($sql);
        $result->execute();
        $row = $result->fetch(PDO::FETCH_ASSOC);
        $id_info2 = $row['id_info'];
        $judul = $row['judul'];
        $tanggal = $row['tanggal'];
        $deskripsi_panjang = $row['deskripsi'];
        $nik_author = $row['nik'];
        $id_tampil= "imageartikel_id";
        $gambar_tampil = $id_info2;
        $tombol_buat="";
    }
?>
<body>
    <div id="main-wrapper" data-layout="vertical" data-navbarbg="skin5" data-sidebartype="full"
        data-sidebar-position="absolute" data-header-position="absolute" data-boxed-layout="full">
        <!-- ============================================================== -->
        <!-- Topbar header -->
        <!-- ============================================================== -->
        <header class="topbar navbar-tema" data-navbarbg="skin5">
            <nav class="navbar top-navbar navbar-expand-md navbar-dark">
                <div class="navbar" data-logobg="skin6">
                    <!-- ============================================================== -->
                    <!-- Logo -->
                    <!-- ============================================================== -->
                    <a class="navbar-brand" href="">
                        <!-- Logo icon -->
                        <!-- <b class="logo-icon">
                            <img src="plugins/images/logo-icon.png" alt="homepage" />
                        </b> -->
                        <!--End Logo icon -->
                        <!-- Logo text -->
                        <span class="logo-text">
                            <!-- dark Logo text -->
                            <h8 style="color: #ffffff;">Keluarga Besar RPL</h8>
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
                        <li>
                            <a class="text_navbar" href="index.php">
                                <span class="text-white font-medium">Home</span>
                            </a>
                        </li>
                    </ul>
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
                            <a class="profile-pic">
    <?php
        if($_SESSION['nik'] and $_SESSION['nama_depan']){
    ?>
                                <button type="button" class="btn" data-toggle="modal" data-target="#profil">
                                    <img <?php echo "src='image_view.php?image_id=".$nik."'" ?> alt="user-img" width="36" style="width: 36px; height:36px;"
                                    class="img-circle pp">
                                </button>
                                <span class="text-white font-medium"><?php echo $nama_depan;?></span></a>
    <?php
        }else{        
    ?>
                                <button type="button" class="btn" data-toggle="modal" data-target="#profil">
                                    <img src="img/profil_default.png" alt="user-img" width="36" style="width: 36px; height:36px;"
                                    class="img-circle pp">
                                </button>
                                <span class="text-white font-medium">Guest</span></a>
    <?php
        }
    ?>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <div class="row">
            <div class="d-flex justify-content-center  col-md-7 col-sm-8 col-xs-12">
                <img <?php echo "src='image_view.php?".$id_tampil."=".$gambar_tampil."'"; ?> alt="user-img" class="gambar_artikel">
            </div>
            <div class="d-flex flex-column judul_artikel col-md-5 col-sm-5 col-xs-12">
                <div class="row">
                    <span class="d-flex judul_artikel2 font-bold"><?php echo $judul;?></span>
                </div>
                <div class="row">
                    <span class="tgl_artikel"><?php echo $tanggal;?></span>
                </div>
                <div class="row">
<?php
    if($_SESSION['nik'] and $_SESSION['nama_depan']){
?>   
                    <div class="container-user d-flex justify-content-start">
                    <a href="detail_user.php?nik_user=<?php echo $nik_author?>"><img <?php echo "src='image_view.php?image_id=".$nik_author."'" ?> alt="user-img" class="photo-angkatan"></a>
<?php
    $sql2 = "SELECT * FROM user WHERE nik = '$nik_author';";
    $result2=$db->prepare($sql2);
    $result2->execute();
    $row2 = $result2->fetch(PDO::FETCH_ASSOC);
    $id_angkatan_author = $row2['id_angkatan'];
?>
                        <div class="d-flex flex-column">
                            <span class="nama-angkatan"><?php echo $row2['nama_depan']?> <?php echo $row2['nama_belakang']?></span>
                        <span class="kelas-angkatan">Kelas <?php echo $row2['kelas']?>-<?php
                            $query3= $db->prepare("SELECT angkatan FROM angkatan WHERE id_angkatan = '$id_angkatan_author'");
                            $query3->execute();
                            $hasil3 = $query3->fetch();
                            echo $hasil3['angkatan'];?></span>
                        </div>
                    </div>
                    <?php echo $tombol_buat;?>
<?php
    }else{        
    }
?>
                </div>
            </div>

        </div>

        <div class="row">
            <div class="teks-artikel">
                <span><?php echo $deskripsi_panjang;?></span>
            </div>
        </div>
        <footer class="footer text-center"> 2021 © Website Keluarga Besar RPL
        </footer>

    </div>
    <?php
        if($_SESSION['nik'] and $_SESSION['nama_depan']){
    ?>   
    <!-- ============================================================== -->
        <!-- Modal USER-->
        <!-- ============================================================== -->
        <div class="modal fade user-modal" id="profil" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content" style=" border-radius: 20px;">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalCenterTitle">Profil</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="container-fluid">
                            <div class="row">
                            <div class="col-md-4" >
                                <img class="data_photo" style="width: 125px; height: 125px; border-radius: 10px;" <?php echo "src='image_view.php?image_id=".$nik."'" ?>/>
                            </div>
                                <div class="col-md-8">
                                    <p class="nama_detail_profil"><?php echo $nama_depan?> <?php echo $nama_belakang?></p>
                                    <p class="angkatan_detail_profil">
                                    <?php
                                    $query = $db->prepare("SELECT angkatan FROM angkatan WHERE id_angkatan = '$id_angkatan'");
                                    $query->execute();
                                    $hasil = $query->fetch();
                                    $angkatan = $hasil['angkatan'];
                                    echo "Angkatan".$angkatan;?></p>
                                    <p class="ttl_detail_profil"><?php echo $tanggal_lahir;?></p>
                                    <p class="email_detail_profil"><?php echo $email;?></p>
                                    <p class="alamat_detail_profil"><?php echo $alamat;?></p>
                                </div>
                            </div>
                            <div class="row">
                            <div class="col-md-4" ><a href="user_profil.php" class="btn btn-secondary  d-none d-md-block pull-right  hidden-xs hidden-sm waves-effect waves-light" style="border-radius: 25px; width: 100%">Profil</a></div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                    <a href="a_logout.php" class="btn btn-secondary d-flex justify-content-start  d-none d-md-block pull-right  hidden-xs hidden-sm waves-effect waves-light" style="border-radius: 25px; margin-right:210px; background-color: #16697A">Logout</a>
                    <a href="signup.php" class="btn btn-secondary  d-none d-md-block pull-right  hidden-xs hidden-sm waves-effect waves-light" style="border-radius: 25px; background-color: #FFA62B ">Sign Up</a>
                    <a href="login.php" class="btn btn-primary  d-none d-md-block pull-right  hidden-xs hidden-sm waves-effect waves-light" style="border-radius: 25px;    background-color: #82C0CC; ">Login</a>
                    
                    </div>
                </div>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- End Modal USER-->
        <!-- ============================================================== -->
    <?php
        }else{        
    ?>
        <!-- ============================================================== -->
        <!-- Modal GUEST-->
        <!-- ============================================================== -->
        <div class="modal fade" id="profil" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content" style=" border-radius: 20px;">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalCenterTitle">Profil</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="container-fluid">
                            <div class="row">
                            <div class="col-md-4"><img class="data_photo" style="width: 125px; height: 125px; border-radius: 10px;" src="img/profil_default.png"></div>
                                <div class="col-md-8">
                                    <p class="nama_detail_profil">Anda Belum Login</p>
                                </div>
                            </div>
                            <div class="row">
                            
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                    <a href="signup.php" class="btn btn-secondary  d-none d-md-block pull-right  hidden-xs hidden-sm waves-effect waves-light" style="border-radius: 25px; background-color: #FFA62B ">Sign Up</a>
                    <a href="login.php" class="btn btn-primary  d-none d-md-block pull-right  hidden-xs hidden-sm waves-effect waves-light" style="border-radius: 25px;    background-color: #82C0CC; ">Login</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- End Modal GUEST-->
        <!-- ============================================================== -->

        <?php
        }
        ?>

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
    <!--Custom JavaScript -->
    <script src="js/custom.js"></script>
    <!--This page JavaScript -->
    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/popper.js"></script>
    <script src="assets/js/bootstrap.js"></script>
</body>
</html>