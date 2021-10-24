<!DOCTYPE html>
<html lang="en">
<head>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <!-- Tell the browser to be responsive to screen width -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="robots" content="noindex,nofollow">  
        <title>Signup | Keluarga Besar RPL</title>
        <link rel="canonical" href="https://www.wrappixel.com/templates/ample-admin-lite/" />
        <!-- Custom CSS -->
        <link href="plugins/bower_components/chartist/dist/chartist.min.css" rel="stylesheet">
        <link rel="stylesheet" href="plugins/bower_components/chartist-plugin-tooltips/dist/chartist-plugin-tooltip.css">
        <!-- Custom CSS -->
        <link href="css/signup.css" rel="stylesheet">
        <link href="css/util.css" rel="stylesheet">
        <link href="css/style.min.css" rel="stylesheet">
        <link rel="stylesheet" href="bootstrap/dist/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="fonts/montserrat/stylesheet.css"> <!-- font -->
    </head>
</head>
<body>
    <div class="container-contact100">
		<div class="wrap-contact100">
            <div class="contact100-form-title" style="background-image: url(images/bg-01.jpg);">
                <div class="row">
                    <div class="col-md-7 col-sm-7 col-xs-12">
                        <span class="contact100-form-title-1">
                            Signup
                        </span>
                    </div>
                    <div class="col-md-5 col-sm-5 col-xs-12 d-flex justify-content-end">
                        <span class="contact100-form-title-2">
                            Website Keluarga Besar Rekayasa Perangkat Lunak
                        </span>
                    </div>
                </div>
            </div>
            <div class="contact100-form-body">
                <form class="contact100-form validate-form" method="POST" action="a_signup.php" autocomplete="off" enctype="multipart/form-data">
                    <div class="wrap-input100 validate-input" data-validate="NIK is required">
                        <span class="label-input100">NIK</span>
                        <input class="input100" type="text" name="nik" placeholder="Masukan Nomor Induk Kependudukan">
                        <span class="focus-input100"></span>
                    </div>
                    <div class="wrap-input100 validate-input" data-validate="Nama Depan is required">
                        <span class="label-input100">Nama Depan</span>
                        <input class="input100" type="text" name="nama_depan" placeholder="Masukan Nama Belakang">
                        <span class="focus-input100"></span>
                    </div>
                    <div class="wrap-input100 validate-input" data-validate="Nama Belakang is required">
                        <span class="label-input100">Nama Belakang</span>
                        <input class="input100" type="text" name="nama_belakang" placeholder="Masukan Nama Belakang">
                        <span class="focus-input100"></span>
                    </div>
                    <div class="wrap-input100 validate-input" data-validate="Kelas is required">
                        <span class="label-input100">Kelas</span>
                        <select id="inputKelas" class="form-control" name="kelas" style="background: transparent;">
                            <option selected value=""></option>
                            <option value="A">A</option>
                            <option value="B">B</option>
                            <option value="C">C</option>
                        </select>
                        <span class="focus-input100"></span>
                    </div>
                    <div class="wrap-input100 validate-input" data-validate="Angkatan is required">
                        <span class="label-input100">Angkatan</span>
                        <select id="inputAngkatan" class="form-control" name="angkatan" style="background: transparent;">
                            <option selected value=""></option>
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
                        <span class="focus-input100"></span>
                    </div>
                    <div class="wrap-input100 validate-input" data-validate="Email is required">
                        <span class="label-input100">Email</span>
                        <input class="input100" type="email" name="email" placeholder="Masukan Email">
                        <span class="focus-input100"></span>
                    </div>
                    <div class="wrap-input100 validate-input" data-validate="Password is required">
                        <span class="label-input100">Password:</span>
                        <input class="input100" type="password" name="pw" placeholder="Masukan Password">
                        <span class="focus-input100"></span>
                    </div>
                    <div class="wrap-input100 validate-input" data-validate="No.HP is required">
                        <span class="label-input100">No. HP</span>
                        <input class="input100" type="text" name="no_hp" placeholder="Masukan Nomor Handphone">
                        <span class="focus-input100"></span>
                    </div>
                    <div class="wrap-input100 validate-input" data-validate="Alamat is required">
                        <span class="label-input100">Alamat</span>
                        <textarea rows="4" class="input100" name="alamat" placeholder="Masukan Alamat"></textarea>
                        <span class="focus-input100"></span>
                    </div>
                    <div class="wrap-input100 validate-input" data-validate="Tanggal Lahir is required">
                        <span class="label-input100">Tanggal Lahir</span>
                        <input class="input100" type="date" name="tgl_lahir" placeholder="Masukan Tanggal Lahir">
                        <span class="focus-input100"></span>
                    </div>
                    <div class="wrap-input100 validate-input" data-validate="Foto Profil is required">
                        <span class="label-input100">Foto Profil</span>
                            <input class="input100" type="file" name="photo_profil" id="gambar"onchange="document.getElementById('gambar_tampil').src=window.URL.createObjectURL(this.files[0])" placeholder="Masukan foto Profil">
                        <img id="gambar_tampil" src="" height="150" width="100"/>
                    </div>
                    <div class="container-contact100-form-btn d-flex justify-content-end">
                        <button class="contact100-form-btn" name="signup" style="background-color: #FFA62B;">
                            <span>
                                Sign Up
                                <i class="fa fa-long-arrow-right m-l-7" aria-hidden="true"></i>
                            </span>
                        </button>
                    </div>
                </form>
            </div>
			
		</div>
	</div>
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