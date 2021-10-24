<?php
   session_start();
   require_once("koneksi.php");
   $admin = 'admin@gmail.com';
   $email = $_POST['email'];
   $pass = md5($_POST['pw']);
   $query = $db->prepare("SELECT * FROM user WHERE email = '$email'");
   $query->execute();
   $hasil = $query->fetch();
   if($query->rowCount() == 0) {
     echo "<div align='center'>Email Belum Terdaftar! <a href='login.php'>Back</a></div>";
   } 
   else {
     if($pass <> $hasil['password']) 
     {
       echo "<div align='center'>Password salah! <a href='login.php'>Back</a></div>";
     } 
     else {
        if($hasil['email'] == $admin){
          $nik=$hasil['nik'];
          $sql="SELECT * FROM user WHERE nik = '$nik'";
          $select_stmt=$db->prepare($sql);
          $select_stmt->execute();
          $row=$select_stmt->fetch();
          $_SESSION['image'] = $row['image'];
          $_SESSION['nik'] = $row['nik'];
          $_SESSION['nama_depan'] = $row['nama_depan'];
          header('location:dashboard.php');
        }
        else{
          $nik=$hasil['nik'];
          $sql="SELECT * FROM user WHERE nik = '$nik'";
          $select_stmt=$db->prepare($sql);
          $select_stmt->execute();
          $row=$select_stmt->fetch();
          $_SESSION['image'] = $row['image'];
          $_SESSION['nik'] = $row['nik'];
          $_SESSION['nama_depan'] = $row['nama_depan'];
          $_SESSION['nama_belakang'] = $row['nama_belakang'];
          $_SESSION['tanggal_lahir'] = $row['tanggal_lahir'];
          $_SESSION['kelas'] = $row['kelas'];
          $_SESSION['email'] = $row['email'];
          $_SESSION['no_hp'] = $row['no_hp'];
          $_SESSION['password'] = $row['password'];
          $_SESSION['id_angkatan'] = $row['id_angkatan'];
          $_SESSION['alamat'] = $row['alamat'];
          header('location:index.php');            
        }
        
        
        
     }
   }
?>