<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="noindex,nofollow">  
    <title>Info Jurusan</title>
    <link rel="canonical" href="https://www.wrappixel.com/templates/ample-admin-lite/" />
    <!-- Custom CSS -->
    <link href="plugins/bower_components/chartist/dist/chartist.min.css" rel="stylesheet">
    <link rel="stylesheet" href="plugins/bower_components/chartist-plugin-tooltips/dist/chartist-plugin-tooltip.css">
    <!-- Custom CSS -->
    <link href="css/jurusan.css" rel="stylesheet">
    <link href="css/style.min.css" rel="stylesheet">
    <link rel="stylesheet"  type="text/css" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet"  type="text/css" href="assets/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="fonts/montserrat/stylesheet.css"> <!-- font -->
</head>
<?php
    error_reporting(0);
    require_once "koneksi.php";
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
        <div class="row justify-content-center header2">
            <div class="d-flex justify-content-center  col-md-12 col-sm-12 col-xs-12">
                <span class="d-flex position-absolute align-self-center jargon text-white font-bold">Info Jurusan</span>
                <div class="align-self-end ml-auto p-2  bulat "></div>
            </div>
        </div>
        <div class="row justify-content-left header3">
            <div class="d-flex justify-content-start  align-self-center  col-md-2 col-sm-2 col-xs-12">
                <span class="judul_thread">Artikel Jurusan</span>                    
            </div>
            <div class="d-flex justify-content-start align-self-center col-md-6 col-sm-6 col-xs-12">
                <span class="intro">Akang dan teteh dapat turut bnerkontribusi dalam mentampaikan konten di dalam website keluarga besar RPL denngan mengirimkan artikel yang akang dan teteh buat, tentunya artikel yang dikirimkan artikel yang berhubungan dengan informasi jurusan, seputar RPL atau yang lainnya.</span>
            </div>
            <div class="d-flex justify-content-end align-self-center col-md-4 col-sm-4 col-xs-12">
                <!-- <div class="dropdown">
                    <button style="border-radius: 25px; margin-right:50px; background-color: #FFA62B; width: 198.39px; height: 38.4px;" class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                        Dropdown button
                    </button>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                        <li><a class="dropdown-item" href="#">Action</a></li>
                        <li><a class="dropdown-item" href="#">Another action</a></li>
                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                    </ul>
                </div> -->
    <?php
        if($_SESSION['nik'] and $_SESSION['nama_depan']){
    ?>                
                <a href="buat_artikel.php" class="btn btn-secondary  d-none d-md-block pull-right  hidden-xs hidden-sm waves-effect waves-light" style="border-radius: 25px; background-color: #FFA62B; width: 150px; height: 38.4px; margin-right:50px;" >Buat Artikel</a>
    <?php
        }
    ?>
            </div>
        </div>
        <div class="container-infojur">
                <div class="container-infojur2 d-flex justifty-content-start col-md-12">
                    <div class="row">
<?php
    $sql = "SELECT * FROM info_jurusan WHERE verifikasi=1";
    $result=$db->prepare($sql);
    $result->execute();
    while($row = $result->fetch(PDO::FETCH_ASSOC)){
?>
                        <div class="container-info">
                            <div class="image-info">
                                <a href="detail_artikel.php?id_info=<?php echo $row['id_info']?>&kategori=info"><img <?php echo "src='image_view.php?imageartikel_id=".$row['id_info']."'" ?> alt="user-img" class="image-info2"></a>
                            </div>
                            <div class="artikel-info">
                                <span class="tgl_artikel"><?php echo $row['tanggal']?></span>
                                <span class="judul_artikel"><?php echo $row['judul']?></span>
                            </div>
                        </div>
<?php } ?>                        
                    </div>
                </div>       
        </div>
        <div class="row justify-content-left header3" style="background: #EDE7E3;">
            <div class="d-flex justify-content-start  align-self-center  col-md-2 col-sm-2 col-xs-12">
                <span class="judul_thread">Thread Jurusan</span>                    
            </div>
            <div class="d-flex justify-content-start align-self-center col-md-6 col-sm-8 col-xs-12">
                <span class="intro">Thread jurusan merupakan tempat bagi akang dan teteh yang ingn membagikan tips ataupun tutorial untuk semua anggota keluarga besar rpl, tips dan tutorial yang dibagikan tentunya merupakan tips yang berhubungan dengan jurusan yaa!</span>
            </div>
            <div class="d-flex justify-content-end align-self-center col-md-4 col-sm-4 col-xs-12">
    <?php
        if($_SESSION['nik'] and $_SESSION['nama_depan']){
    ?>
                <a href="#" class="btn btn-secondary  d-none d-md-block pull-right  hidden-xs hidden-sm waves-effect waves-light" style="border-radius: 25px; background-color: #FFA62B; width: 150px; height: 38.4px; margin-right:50px;" >Buat Thread</a>
    <?php
        }
    ?>
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
    <script src="assets/js/bootstrap.min.js"></script>
    
</body>
</html>