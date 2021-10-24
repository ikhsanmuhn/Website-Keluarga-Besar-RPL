<?php //require the database connection file
       require_once("../koneksi.php");

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
            $query->bindparam(':alamat', '');
            $query->bindparam(':nno_hp', '');
            $query->bindparam(':email', $email);
            $query->bindparam(':pass', $pass);
            $query->bindparam(':image', '');
            $query->execute();
 
            //display success message
            echo "<p align='center'>";
            echo "<font color='green'->Data added succesfully.";
            echo "<br/><br/><a href='index.php'>View Result</a>";
            echo "</p>";
       }
           ?>