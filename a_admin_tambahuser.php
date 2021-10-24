<?php
    session_start();
    require_once ("koneksi.php");
    if (isset($_POST['btn_tambahuser'])){
        try 
        {
         $nik = $_POST['nik'];
         $nama_depan = $_POST['nama_depan'];
         $nama_belakang = $_POST['nama_belakang'];
         $kelas = $_POST['kelas'];
         $angkatan = $_POST['angkatan'];
         $email = $_POST['email'];
         $pw = md5($_POST['pw']);
         $no_hp = $_POST['no_hp'];
         $alamat = $_POST['alamat'];
         $tgl_lahir = $_POST['tgl_lahir'];
         $image_file = $_FILES['photo_profil']['name'];
            $type = $_FILES['photo_profil']['type'];
            $size = $_FILES['photo_profil']['size'];
            $temp = $_FILES['photo_profil']['tmp_name'];
            if (empty($image_file)) {
                $errorMsg="Please Select Image";
            }
            else if ($size < 5000000 and ($type=="image/jpg"||$type=='image/png'||$type=='image/jpeg'||$type=='image/gif'))
            {   
                $image   = addslashes(file_get_contents($_FILES['photo_profil']['tmp_name']));
                $image_properties = getimagesize($_FILES['photo_profil']['tmp_name']);
                $sql="INSERT INTO user (nik, nama_depan, nama_belakang,tanggal_lahir, kelas, id_angkatan, alamat, no_hp, email, password, image, image_type) VALUES('" .$nik. "','" .$nama_depan. "','" .$nama_belakang. "','" .$tanggal_lahir. "','" .$kelas. "','" .$angkatan. "','" .$alamat. "','" .$no_hp. "','" .$email. "','" .$pw. "','" .$image. "','" .$image_properties['mime']. "')";
                $query=$db->prepare($sql);
        
                $query->execute();
                echo "<script>alert('File Add Successfully !')</script>";
                header("location:admin_angkatan.php");
            }
            else
            {
                $errorMsg="File lebih dari 5MB atau Format file tidak didukung";
            }                     
        } catch (PDOExeption $e) {
            echo $e->getMessage();
        }
    }
?>