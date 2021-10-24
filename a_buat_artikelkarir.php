<?php
     session_start();
     require_once ("koneksi.php");
     if (isset($_POST['btn_buatartikel'])){
        try{
            $id_karir= $_POST['id_karir'];
            $nik = $_POST['nik'];
            $judul_artikel= addslashes($_POST['judul_artikel']);
            $image_file = $_FILES['image_artikel']['name'];
            $type = $_FILES['image_artikel']['type'];
            $size = $_FILES['image_artikel']['size'];
            $temp = $_FILES['image_artikel']['tmp_name'];
            $tanggal= $_POST['tanggal'];
            $prolog= addslashes($_POST['prolog']);
            $deskripsi= addslashes($_POST['deskripsi']);
            $verifikasi = $_POST['verifikasi'];
            if (empty($image_file)) {
                $errorMsg="Please Select Image";
            }
            else if ($size < 5000000 and ($type=="image/jpg"||$type=='image/png'||$type=='image/jpeg'||$type=='image/gif'))
            {   
                $image   = addslashes(file_get_contents($_FILES['image_artikel']['tmp_name']));
                $image_properties = getimagesize($_FILES['image_artikel']['tmp_name']);
                $sql="INSERT INTO karir (id_karir,nik,prolog, judul_artikel, deskripsi, tanggal, image, image_type,verifikasi) VALUES('" .$id_karir. "','" .$nik. "','" .$prolog. "', '" .$judul_artikel. "','" .$deskripsi. "','" .$tanggal. "','" .$image. "','" .$image_properties['mime']. "','" .$verifikasi. "')";
                $query=$db->prepare($sql);
                $query->execute();
    
                echo "<script>alert('File Add Successfully !')</script>";
                header("location:index.php");
            }
            else
            {
                $errorMsg="File lebih dari 5MB atau Format file tidak didukung";
            }

        }
            catch (PDOExeption $e) {
            echo $e->getMessage();
        }
    }
?>