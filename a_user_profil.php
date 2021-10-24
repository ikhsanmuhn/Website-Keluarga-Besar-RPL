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
     $kelas = $_POST['kelas'];
     $id_angkatan = $_POST['angkatan'];
     $tgl_lahir = $_POST['tanggal_lahir'];
     $image_file = $_FILES['photo_profil']['name'];
     $propertiesgambar = getimageSize($_FILES['gambar']['tmp_name']);
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
            $sql="UPDATE user set nama_depan='$nama_depan', nama_belakang='$nama_belakang',tanggal_lahir='$tgl_lahir', kelas='$kelas', id_angkatan='$id_angkatan', alamat='$alamat', no_hp='$no_hp', email='$email', image='$image', image_type='" . $propertiesgambar['mime'] . "' WHERE nik='$nik'";
            $query=$db->prepare($sql);
            $query->execute();
            $_SESSION['nik'] = $nik;
            $_SESSION['nama_depan'] = $nama_depan;
            $_SESSION['nama_belakang'] = $nama_belakang;
            $_SESSION['tanggal_lahir'] = $tgl_lahir;
            $_SESSION['kelas'] = $kelas;
            $_SESSION['email'] = $email;
            $_SESSION['no_hp'] = $no_hp;
            $_SESSION['id_angkatan'] = $id_angkatan;
            $_SESSION['alamat'] = $alamat;

            echo "<script>alert('File Add Successfully !')</script>";
            header("location:index.php");
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