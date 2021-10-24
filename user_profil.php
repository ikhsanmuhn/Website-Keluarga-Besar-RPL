<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="noindex,nofollow">  
    <title>Profil</title>
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
        session_start();
        $nama_depan =$_SESSION['nama_depan'];
        $nama_belakang =$_SESSION['nama_belakang'];
        $tanggal_lahir =$_SESSION['tanggal_lahir'];
        $kelas =$_SESSION['kelas'];
        $id_angkatan =$_SESSION['id_angkatan'];
        $alamat =$_SESSION['alamat'];
        $email =$_SESSION['email'];
        $no_hp =$_SESSION['no_hp'];
        require_once("koneksi.php");
        $nik=$_SESSION['nik'];
        $query = $db->prepare("SELECT * FROM user WHERE nik = '$nik'");
        $query->execute();
        $row = $query->fetch();

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
                                    <img  <?php echo "src='image_view.php?image_id=".$nik."'" ?> alt="user-img" width="36" style="width:36px; height:36px;"
                                    class="img-circle pp">
                                </button>
                                <span class="text-white font-medium"><?php echo $nama_depan; ?></span></a>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <div class="container-fluid" style="padding: 50px; background:#EDE7E3">
        <!-- ============================================================== -->
        <!-- Start Page Content -->
        <!-- ============================================================== -->
        <!-- Row -->
        <div class="row">
            <span class="d-flex judul_profil font-bold" style="width: 300px;height: 50px;font-family: Montserrat;font-style: normal;font-weight: bold;font-size: 55px;color: #3b3838;text-align: left; margin-left: 15px; margin-bottom: 50px;">Profil</span>
        </div>
        <div class="row">
            <!-- Column -->
            <div class="col-lg-4 col-xlg-3 col-md-12">
                <div class="user-bg"> 
                    <img alt="user" <?php echo "src='image_view.php?image_id=".$nik."'" ?> style="border-radius: 25px;" id="gambar_tampil">
                </div>

            </div>
            <!-- Column -->
            <!-- Column -->
            <div class="col-lg-8 col-xlg-9 col-md-12">
                <div class="card">
                    <div class="card-body">
                        <form class="form-horizontal form-material" method="POST" action="a_user_profil.php" enctype="multipart/form-data">
                            <div class="form-group mb-4">
                                <label class="col-md-12 p-0">NIK</label>
                                <div class="col-md-12 border-bottom p-0">
                                    <input type="text" disabled="disabled" placeholder="Masukan NIK"
                                        class="form-control p-0 border-0" value="<?php echo $row['nik']?>"></div>
                                    <input type="hidden"name="nik" value="<?php echo $row['nik']?>">
                            </div>
                            <div class="form-group mb-4">
                                <label class="col-md-12 p-0">Nama Depan</label>
                                <div class="col-md-12 border-bottom p-0">
                                    <input type="text" placeholder="Nama Depan" name="nama_depan"
                                        class="form-control p-0 border-0" value="<?php echo $row['nama_depan']?>"> </div>
                            </div>
                            <div class="form-group mb-4">
                                <label class="col-md-12 p-0">Nama Belakang</label>
                                <div class="col-md-12 border-bottom p-0">
                                    <input type="text" placeholder="Nama Belakang" name="nama_belakang"
                                        class="form-control p-0 border-0" value="<?php echo $row['nama_belakang']?>"> </div>
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
                                    <button class="btn btn-success" name="btn_update" style="width: 198.39px; height: 38.4px; background-color: #FFA62B; border-radius: 20px; ">Update Profile</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <!-- Column -->
        </div>
        <!-- Row -->
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