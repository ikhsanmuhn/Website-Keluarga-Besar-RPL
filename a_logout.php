<?php
  
        session_start();
        $_SESSION['nik'] = ' ';
        $_SESSION['nama_depam'] = ' ';
        $_SESSION['image'] = ' ';
        $_SESSION['nama_belakang'] = ' ';
        $_SESSION['tanggal_lahir'] = ' ';
        $_SESSION['kelas'] = ' ';
        $_SESSION['id_angkatan'] = ' ';
        $_SESSION['alamat'] = ' ';
        $_SESSION['email'] = ' ';
        $_SESSION['no_hp'] = ' ';
        $_SESSION['password'] = ' ';
        unset($_SESSION['image']);
        unset($_SESSION['nik']);
        unset($_SESSION['tanggal_lahir']);
        unset($_SESSION['kelas']);
        unset($_SESSION['id_angkatan']);
        unset($_SESSION['alamat']);
        unset($_SESSION['email']);
        unset($_SESSION['no_hp']);
        unset($_SESSION['password']);
        unset($_SESSION['nama_depan']);
        unset($_SESSION['nama_belakang']);
        session_unset();
        session_destroy();
        header("location: index.php");

    

?>