<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="noindex,nofollow">  
    <title>Buat Loker</title>
    <link rel="canonical" href="https://www.wrappixel.com/templates/ample-admin-lite/" />
    <!-- Custom CSS -->
    <link href="plugins/bower_components/chartist/dist/chartist.min.css" rel="stylesheet">
    <link rel="stylesheet" href="plugins/bower_components/chartist-plugin-tooltips/dist/chartist-plugin-tooltip.css">
    <!-- Custom CSS -->
    <link href="css/detailartikel.css" rel="stylesheet">
    <link href="css/admin.css" rel="stylesheet">
    <link href="css/style.min.css" rel="stylesheet">
    <link rel="stylesheet" href="bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="fonts/montserrat/stylesheet.css"> <!-- font -->
</head>
<?php
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
    $sql="SELECT id_loker FROM loker ORDER BY id_loker DESC LIMIT 1";
    $stmt = $db->prepare($sql);
    $stmt->execute();
    $row=$stmt->fetch(PDO::FETCH_ASSOC);

    if(empty($row)){
        $angka=1;
    }else{
        $angka=preg_replace('/[^0-9]/','',$row['id_loker']);
        $angka++;
    }

    $formatted_value = "L".sprintf("%03d", $angka);
    $_SESSION['id_value'] = $formatted_value;
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
                            <a class="profile-pic">
                                <button type="button" class="btn" data-toggle="modal" data-target="#profil">
                                    <img <?php echo "src='image_view.php?image_id=".$nik."'" ?> alt="user-img" width="36" style="width:36px; height:36px;"
                                    class="img-circle pp">
                                </button>
                                <span class="text-white font-medium"><?php echo $nama_depan?></span></a>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <div class="container-fluid" style="background:#EDE7E3; padding: 50px;">
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                <!-- Row -->
                
                <div class="row">
                    <!-- Column -->
                    <div class="col-lg-3 col-xlg-2 col-md-12">
                        <div class="card" style="margin: 0; height: 370px;">
                            <div class="card-body">
                                <img src="img/default_image.jpg " style="width: 237.75px; height:318px" id="gambar_tampil">
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                    <!-- Column -->
                    <div class="d-flex flex-column col-lg-9 col-xlg-10 col-md-12">
                        <div class="d-flex justify-content-start">
                            <span class="d-flex judul_profil font-bold" style="line-height:80px; width: 600px;height: 150px;font-family: Montserrat;font-style: normal;font-weight: bold;font-size: 65px;color: #3b3838;text-align: left;  margin-bottom: 50px; margin-left:100px;">Buat Lowongan Pekerjaan</span>
                        </div>
                        <div class="d-flex justify-content-start">
                            <span class="penjelasan_loker" style="width:550px; margin-left:100px;">Akang dan teteh dapat membagikan lowongan kerja kepada seluruh anggota keluarga besar RPL, tapi lowongan kerja yang akang dan teteh bagikan tidak akan langsung ditampilkan untuk umum, lowongan kerja akan di verifikasi terlebi dahulu oleh admmin untuk menngecek apakah layak atau tidak untuk dipublikasikan. Maka dari itu ayo saling bantu membagikan info lowongan kerja agar dapat bermanfaat bagi yang membutuhkan!</span>                        
                        </div>
                    </div>
                    
                    
                </div>
                <!-- Row -->
                <div class="row">
                    <!-- Column -->
                    <div class="col-lg-12 col-xlg-12 col-md-12">
                        <div class="card"  style="margin-top:50px;">
                            <div class="card-body">
                                <form class="contact100-form validate-form" method="POST" action="a_buat_loker.php" autocomplete="off" enctype="multipart/form-data">
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label for="inputAddress">Id Loker</label>
                                            <input type="text" class="form-control" id="inputAddress" placeholder="L001" disabled="disabled" value="<?php echo $_SESSION['id_value']?>">
                                            <input type="hidden" name="id_loker" value="<?php echo $_SESSION['id_value']?>">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="inputAddress">Tanggal</label>
                                            <input type="date" class="form-control" name="tanggal">
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        
                                        <div class="form-group col-md-12">
                                            <label for="inputAddress">Nama Pekerjaan</label>
                                            <input type="text" class="form-control" id="inputAddress" placeholder="Masukan Nama Pekerjaan" name="nama_pekerjaan">
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-4" >
                                            <label for="exampleFormControlFile1">Gambar Loker</label>
                                        </div>
                                        <div class="form-group col-md-8" >
                                            <input type="file" class="form-control-file" id="gambar"onchange="document.getElementById('gambar_tampil').src=window.URL.createObjectURL(this.files[0])" name="image_loker">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <h3>Info Perusahaan<h3>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputAddress">Nama Perusahaan</label>
                                        <input type="text" class="form-control" id="inputAddress" placeholder="Masukan Nama Perusahaan" name="nama_perusahaan">
                                    </div>
                                    <div class="form-group">
                                        <label for="inputAddress">Alamat Perusahaan</label>
                                        <textarea rows="4" class="form-control" name="alamat" placeholder="Masukan Alamat"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputAddress">Deskripsi Singkat</label>
                                        <textarea rows="3" class="form-control" maxlength="120" placeholder="Maks. 120 karakter" name="deskripsi_singkat"></textarea>
                                    </div>    
                                    <div class="form-group">
                                        <label for="inputAddress">Deskripsi Pekerjaan</label>
                                        <textarea rows="10" class="form-control" name="deskripsi_pekerjaan" placeholder="Masukan Deskripsi Pekerjaan"></textarea>
                                        <input type="hidden" name="verifikasi" value="0">
                                    </div>
                                    <div class="form-group mb-4">
                                        <div class="col-sm-12">
                                            <button class="btn btn-success" name="btn_buatloker" style="width: 198.39px; height: 38.4px; background-color: #FFA62B; border-radius: 20px; ">Ajukan</button>
                                        </div>
                                    </div>    
                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
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
            <footer class="footer text-center"> 2021 ?? Website Keluarga Besar RPL
            </footer>
    </div>        
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
                            <div class="col-md-4" ><a href="user_profil.php" class="btn btn-secondary  d-none d-md-block pull-right  hidden-xs hidden-sm waves-effect waves-light" style="border-radius: 25px;">Profil</a></div>
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


