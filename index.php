<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="noindex,nofollow">  
    <script type="text/javascript" src="js/jquery-3.5.1.min.js"></script>
    <title>Keluarga Besar RPL</title>
    <link rel="canonical" href="https://www.wrappixel.com/templates/ample-admin-lite/" />
    <!-- Custom CSS -->
    <link href="plugins/bower_components/chartist/dist/chartist.min.css" rel="stylesheet">
    <link rel="stylesheet" href="plugins/bower_components/chartist-plugin-tooltips/dist/chartist-plugin-tooltip.css">
    <!-- Custom CSS -->
    <link href="fonts/font-awesome-4.7.0/css/font-awesome.css" rel="stylesheet">
    <link href="fonts/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="css/index.css" rel="stylesheet">
    <link href="css/style.min.css" rel="stylesheet">
    <link rel="stylesheet" href="bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="fonts/montserrat/stylesheet.css"> <!-- font -->
</head>
<?php
        error_reporting(0);
        require_once("koneksi.php");
        session_start();
        $gambar=$_SESSION['image'];
        $nik=$_SESSION['nik'];
        $nama_depan =$_SESSION['nama_depan'];
        $nama_belakang =$_SESSION['nama_belakang'];
        $tanggal_lahir =$_SESSION['tanggal_lahir'];
        $kelas =$_SESSION['kelas'];
        $id_angkatan =$_SESSION['id_angkatan'];
        $alamat =$_SESSION['alamat'];
        $email =$_SESSION['email'];
        $no_hp =$_SESSION['no_hp'];
        $password =$_SESSION['password'];
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
                    <a class="navbar-brand" >
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
                            <a class="text_navbar" href="#">
                                <span class="text-white font-medium">Home</span>
                            </a>
                            <a class="text_navbar" href="index.php#infojur">
                                <span class="text-white font-medium">Info Jurusan</span>
                            </a>
                            <a class="text_navbar" href="#karir">
                                <span class="text-white font-medium">karir</span>
                            </a>
                            <a class="text_navbar" href="#angkatan">
                                <span class="text-white font-medium">Angkatan</span>
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
    <?php
        if($_SESSION['nik'] and $_SESSION['nama_depan']){
    ?>
                            <a class="profile-pic">
                                <button type="button" class="btn" data-toggle="modal" data-target="#profil">
                                    <img  <?php echo "src='image_view.php?image_id=".$nik."'" ?> alt="user-img" width="36" style="width: 36px; height:36px;"
                                    class="img-circle pp">
                                </button>
                                <span class="text-white font-medium"><?php echo $nama_depan;?></span>
                            </a>
    <?php
        }else{        
    ?>
                            <a class="profile-pic">
                                <button type="button" class="btn" data-toggle="modal" data-target="#profil">
                                    <img  src="img/profil_default.png" alt="user-img" width="36" style="width: 36px; height:36px;"
                                    class="img-circle pp">
                                </button>
                                <span class="text-white font-medium">Guest</span>
                            </a>
    <?php
        }
    ?>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <div class="row justify-content-left header2">
            <div class="d-flex justify-content-start col-md-6 col-sm-6 col-xs-12">
                <img class="img_header"src="img/komputer.png">
            </div>
            <div class="d-flex justify-content-center  col-md-6 col-sm-6 col-xs-12">
                <span class="d-flex position-absolute align-self-center jargon text-white font-bold">Software Engineer Relation<br>
                    for your career solution</span>
                <div class="align-self-end ml-auto p-2  bulat "></div>
            </div>
        </div>
        <div class="row justify-content-left header3">
            <div class="d-flex justify-content-start align-self-center col-md-12 col-sm-12 col-xs-12">
                <span class="intro">Website keluarga besar RPL merupakan website khusus untuk alumni san siswa RPL SMK Negeri 1 Cimahi dalam menjalin relasi sesama Keluarga Besar RPL SMK Negeri 1 Cimahi dengan berbagai informasi mengenai jurusan dan karir untuk menunjang masa depan.</span>
            </div>
        </div>
        <div class="container-infojur" id="infojur">
            <div class="row container-infojur2">
                <div class="d-flex justify-content-start align-items-center col-md-9 col-sm-9 col-xs-12">
                    <div id="konten1" class="carousel slide konten1" data-ride="carousel">
                        <ol class="carousel-indicators">
<?php
     $sql2 = "SELECT * FROM info_jurusan WHERE verifikasi=1";
     $result2=$db->prepare($sql2);
     $result2->execute();
     $total2 = $result2->rowCount();
     for($i=0;$i<=$total2;$i++){
?>
                          <li data-target="#konten1" data-slide-to="<?php echo $i?>"></li>
<?php
     }
?>
                        </ol>
                        <div class="carousel-inner inner_konten1">
                            <div class="carousel-item active">
                                <img class="d-block w-100  gambar_konten1" src="img/infojur_1.png" alt="First slide">
                                <div id="judul1">
                                    Haii mau tau info seputar mading di Jurusan?
                                </div>
                                <div id="isi1">
                                    <p id="paragrafteks1">Cek Disini</p>
                                </div>
                            </div>
<?php
while($row2 = $result2->fetch(PDO::FETCH_ASSOC)){
?>
                            <div class="carousel-item">
                                <a href="detail_artikel.php?id_info=<?php echo $row2['id_info']?>&kategori=info"><img class="d-block w-100  gambar_konten1" <?php echo "src='image_view.php?imageartikel_id=".$row2['id_info']."'" ?> alt="First slide"></a>
                                <div id="judul1">
                                    <?php echo $row2['judul']?>
                                </div>
                                <div id="isi1">
                                    <p id="paragrafteks1"><?php echo $row2['prolog']?></p>
                                </div>
                            </div>
<?php
}
?>
                        </div>
                    </div>
                    <div class="d-flex flex-column">
                        <div id="konten2" class="carousel slide konten2" data-ride="carousel">
                            <ol class="carousel-indicators">
                              <li data-target="#konten2" data-slide-to="0" class="active"></li>
                            </ol>
                            <div class="carousel-inner inner_konten2">
                                <div class="carousel-item active">
                                    <img class="d-block w-100 gambar_konten2" src="img/infojurusan_2.png" alt="Second slide">
                                    <div id="judul2" style="color: #ffff;">
                                        Info Jurusan Potrait
                                    </div>
                                    <div id="isi2">
                                        <p id="paragrafteks2" style="color: #ffffff;">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam. </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="konten3" class="justify-content-start carousel slide konten3" data-ride="carousel">
                            <ol class="carousel-indicators">
                              <li data-target="#konten3" data-slide-to="0" class="active"></li>
                              
                            </ol>
                            <div class="carousel-inner inner_konten3">
                                <div class="carousel-item active">
                                    <img class="d-block w-100 gambar-konten3" src="img/thread_jurusan.png" alt="Third slide" style="height: 152px;">
                                    <div id="judul3">
                                        Thread Juruan!
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="justify-content-center col-md-3 col-sm-3 col-xs-12">
                    <div class="d-flex flex-column deskripsi_infojur">
                        <div class="align-self-center judul_infojur">
                            <span>Info Jurusan</span>
                        </div>
                        <div class="align-self-center penjelasan_infojur">
                            <span>Akang dan teteh pasti ingin tahu kabar di RPL SMK Negeri 1 Cimahi bukan? tentunya akang dan teteh dapat memperoleh berbagai informasi menarik seputar jurusan di Info Jurusan. Info Jurusan memuat berbagai informasi mengenai kegiatan apa saja sih yang ada di RPL atau bagaimana perkembangan prestasi siswa dan siswi RPL SMK Negeri 1 Cimahi saat ini.</span>
                        </div>
                        <div class="align-self-center">
                            <a href="jurusan.php" class="btn btn-secondary  d-none d-md-block pull-right  hidden-xs hidden-sm waves-effect waves-light" style="border-radius: 25px; background-color: #FFA62B; width: 198.39px; height: 38.4px;" >Info Lebih Lanjut</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row container-tentangrpl">
            <div class="d-flex flex-column justify-content-start col-md-6 col-sm-6 col-xs-12 container-tentangrpl2">
                <div class="tentang_rpl">
                    <span>Tentang RPL SMK Negeri 1 Cimahi</span>
                </div>
                <div class="penjelasan_tentang">
                    <span>RPL SMK Negeri 1 Cimahi merupakan salah satu kompetensi keahlian yang berada di SMK Negeri 1 Cimahi. Kompetensi ini bergerak di bidang Teknologi Informasi dengan mempelajari programming, Dekstop, Web, Android, Desain grafis, Database, serta Pemodelan Perangkat Lunak. Lama belajar di kompetensi ini adalah 3 tahun yang semula 4 tahun, di jurusan RPL sendiri tidak hanya diajarkan sebatas software dan web disini juga kita diberi pengetahuan seputar teknologi informasi dengan adanya mata pembelajaran Sistem Komputer dan Komputer Jaringan Dasar.</span>
                </div>
            </div>
            <div class="justify-content-end align-self-center col-md-6 col-sm-6 col-xs-12">
                <div class="foto_tentang">
                    <img class="foto_penjelasan" src="img/rpl.jpg">
                </div>
            </div>
        </div>
        <?php 
            if($_SESSION['nik'] and $_SESSION['nama_depan']){ 
                
                include "user.php";

            }
            else{
                include "guest.php";
                $input=1;
                $query_guest="INSERT INTO guest (masuk) VALUES('" .$input. "')";
                $guest_isi=$db->prepare($query_guest);
                $guest_isi->execute();
            }
            
            
        ?>
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
        }
        else{
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