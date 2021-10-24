<?php
   session_start();
   require_once ("koneksi.php");
   if (isset($_POST['btn_update'])){
    try 
    {
     $nik = $_POST['nik'];
     $nama_depan = $_POST['nama_depan'];
     $nama_belakang = $_POST['nama_belakang'];
     $email = $_POST['email'];
     $no_hp = $_POST['no_hp'];
     $alamat = $_POST['alamat'];
     $tgl_lahir = $_POST['tanggal_lahir'];
     $image_file = $_FILES['photo_profil']['name'];
     $type = $_FILES['photo_profil']['type'];
        $size = $_FILES['photo_profil']['size'];
        $temp = $_FILES['photo_profil']['tmp_name'];
        if (empty($image_file)) {
            $errorMsg="Please Select Image";
            echo $errorMsg;
        }
        else if ($size < 5000000 and ($type=="image/jpg"||$type=='image/png'||$type=='image/jpeg'||$type=='image/gif'))
        {   
            $image   = addslashes(file_get_contents($_FILES['photo_profil']['tmp_name']));
            $sql="UPDATE user set nik='$nik', nama_depan='$nama_depan', nama_belakang='$nama_belakang',tanggal_lahir='$tgl_lahir', alamat='$alamat', no_hp='$no_hp', email='$email', image='$image', image_type='$type' WHERE nik='$nik'";
            $query=$db->prepare($sql);
            $query->execute();

            $_SESSION['image'] = $image;
            $_SESSION['nik'] = $nik;
            $_SESSION['nama_depan'] = $nama_depan;

            echo "<script>alert('File Add Successfully !')</script>";
            header("location:admin_profil.php");
        }
        else
        {
            $errorMsg="File lebih dari 5MB atau Format file tidak didukung";
            echo $errorMsg;
        }                     
    } catch (PDOExeption $e) {
        echo $e->getMessage();
    }
   }
   
?>