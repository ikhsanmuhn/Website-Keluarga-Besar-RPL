<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign Up Form by Colorlib</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <?php
     require("koneksi.php");
      //require the database connection file
      function submit(){
        require("koneksi.php");
       if(isset($_POST['Submit'])){
           $nama_d = $_POST['nama_depan'];
           $nama_b = $_POST['nama_belakang'];
           $gender = $_POST['gender'];
           $nik = $_POST['nik'];
           $kelas = $_POST['kelas'];
           $angkatan = $_POST['angkatan'];
           $tgl_lahir = $_POST['tgl_lahir'];
           $email = $_POST['email'];
           $pass = $_POST['pass'];
           $alamat = '';
           $no_hp = '';
           $img = '';
            //insert data to database
            $sql = "INSERT INTO user(nik, nama_depan, nama_belakang, gender, tanggal_lahir, kelas, id_angkatan, alamat, no_hp, email, password, image) 
            VALUES(:nik, :nama_d, :nama_b, :gender, :tgl_lahir, :kelas, :angkatan, :alamat, :no_hp, :email, :pass, :image)";
            $query = $dbConn->prepare($sql);
            $query->bindparam(':nik', $nik);
            $query->bindparam(':nama_d', $nama_d);
            $query->bindparam(':nama_b', $nama_b);
            $query->bindparam(':gender', $gender);
            $query->bindparam(':tgl_lahir', $tgl_lahir);
            $query->bindparam(':kelas', $kelas);
            $query->bindparam(':angkatan', $angkatan);
            $query->bindparam(':alamat', $alamat);
            $query->bindparam(':no_hp', $no_hp);
            $query->bindparam(':email', $email);
            $query->bindparam(':pass', $pass);
            $query->bindparam(':image', $img);
            $query->execute();
 
            //display success message
            echo "<script>";
            echo "function myFunction() {";
            echo "alert('Success')}";
            echo "</script>";
       }
       else{
        echo "<script>";
        echo "function myFunction() {";
        echo "alert('Not Success')}";
        echo "</script>";
       }
    }
           
?>
    <div class="main">
        <div class="container">
            <div class="signup-content">
                <div class="signup-img">
                    <img src="images/signup-img.jpg" alt="">
                </div>
                <div class="signup-form">
                    <form method="POST" class="register-form" id="register-form">
                        <h2>Registrasi</h2>
                        <div class="form-row">
                            <div class="form-group">
                                <label for="name">Nama Depan :</label>
                                <input type="text" name="nama_depan" id="nama_depan" required/>
                            </div>
                            <div class="form-group">
                                <label for="father_name">Nama Belakang :</label>
                                <input type="text" name="nama_belakang" id="nama_belakang" required/>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="address">NIK :</label>
                            <?php 
                            if(!isset($_POST['Submit'])){
                            echo "<input type='text' name='nik' id='nik' required/>";
                            }
                            else if(isset($_POST['Submit'])){
                                $nik = $_POST['nik'];
                                $stmt = $dbConn->prepare("SELECT * FROM user WHERE nik=?");
                                $stmt->execute([$nik]); 
                                $user = $stmt->fetch();
                            if ($user) {
                                echo "<input type='text' name='nik' id='nik' onempty='this.setCustomValidity('NIK sudah ada')'
                                 oninput='this.setCustomValidity('')'/>";
                            } else {
                                echo "<input type='text' name='nik' id='nik' required/>";
                                submit();
                            }
                        }
                            ?>
                        </div>
                        <div class="form-radio">
                            <label for="gender" class="radio-label">Gender :</label>
                            <div class="form-radio-item">
                                <input type="radio" name="gender" id="male" value="laki" checked>
                                <label for="male">Laki-Laki</label>
                                <span class="check"></span>
                            </div>
                            <div class="form-radio-item">
                                <input type="radio" name="gender" id="female" value="perempuan">
                                <label for="female">Perempuan</label>
                                <span class="check"></span>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group">
                                <label for="kelas">Kelas :</label>
                                <div class="form-select">
                                    <select name="kelas" id="kelas">
                                        <option value=""></option>
                                        <option value="A">A</option>
                                        <option value="B">B</option>
                                        <option value="C">C</option>
                                    </select>
                                    <span class="select-icon"><i class="zmdi zmdi-chevron-down"></i></span>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="angkatan">Angkatan :</label>
                                <div class="form-select">
                                    <select name="angkatan" id="angkatan">
                                        <option value=""></option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                        <option value="6">6</option>
                                        <option value="7">7</option>
                                        <option value="8">8</option>
                                        <option value="9">9</option>
                                        <option value="10">10</option>
                                        <option value="11">11</option>
                                        <option value="12">12</option>
                                        <option value="13">13</option>
                                        <option value="14">14</option>
                                        <option value="15">15</option>
                                        <option value="16">16</option>
                                    </select>
                                    <span class="select-icon"><i class="zmdi zmdi-chevron-down"></i></span>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="birth_date">Tanggal Lahir :</label>
                            <input type="date" name="tgl_lahir" id="tgl_lahir">
                        </div>
                        <div class="form-group">
                            <label for="email">E-mail :</label>
                            <?php 
                            if(!isset($_POST['Submit'])){
                            echo "<input type='email' name='email' id='email'>";
                            }
                            else if(isset($_POST['Submit'])){
                                $email = $_POST['email'];
                                $stmt = $dbConn->prepare("SELECT * FROM user WHERE email=?");
                                $stmt->execute([$email]); 
                                $user = $stmt->fetch();
                            if ($user) {
                                echo "<input type='email' name='email' id='email'>";
                            } else {
                                submit();
                            }
                        }
                            ?>
                            
                        </div>
                        <div class="form-group">
                            <label for="email">Password :</label>
                            <input type="password" name="pass" id="pass" />
                        </div>
                        <div class="form-submit">
                            <input type="submit" value="Reset" class="submit" name="reset" id="reset" />
                            <input type="submit" value="Submit" class="submit" name="Submit" id="submit" />
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>

    <!-- JS -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="js/main.js"></script>
    
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>
