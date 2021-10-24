<?php
    error_reporting(0);
     session_start();
     require_once ("koneksi.php");
    if (isset($_POST['btn_updateartikel'])){
        try{
            $id_info= $_POST['id_info'];
            $id_kategori= $_POST['id_kategori'];
            echo $id_kategori;
            $judul= addslashes($_POST['judul']);
            $prolog= addslashes($_POST['prolog']);
            $image_file = $_FILES['image_artikel']['name'];
            $type = $_FILES['image_artikel']['type'];
            $size = $_FILES['image_artikel']['size'];
            $temp = $_FILES['image_artikel']['tmp_name'];
            $deskripsi= addslashes($_POST['deskripsi']);
            $tanggal= $_POST['tanggal'];
            $orientasi= $_POST['orientasi'];
            $verifikasi= $_POST['verifikasi'];
            if (empty($image_file)) {
                $errorMsg="Please Select Image";
                $sql="UPDATE info_jurusan set prolog='$prolog', judul='$judul', deskripsi='$deskripsi', tanggal='$tanggal', orientasi='$orientasi',verifikasi='$verifikasi' WHERE id_info='$id_info'";
                $query=$db->prepare($sql);
                $query->execute();
                header("location:info_jurusan.php");
            }
            else if ($size < 5000000 and ($type=="image/jpg"||$type=='image/png'||$type=='image/jpeg'||$type=='image/gif'))
            {   
                $image   = addslashes(file_get_contents($_FILES['image_artikel']['tmp_name']));
                $image_properties = getimagesize($_FILES['image_artikel']['tmp_name']);
                $sql="UPDATE info_jurusan set prolog='$prolog', judul='$judul', deskripsi='$deskripsi', tanggal='$tanggal', image='$image', image_type='" . $image_properties['mime'] . "', orientasi='$orientasi', verifikasi='$verifikasi' WHERE id_info='$id_info'";
                $query=$db->prepare($sql);
                $query->execute();
    
                echo "<script>alert('File Add Successfully !')</script>";
                header("location:info_jurusan.php");
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
    if (isset($_POST['btn_deleteartikel'])) {

        $id_info = $_POST['id_info'];

        $sql2 = "DELETE FROM info_jurusan WHERE id_info= '$id_info'";
        $delete_stmt2=$db->prepare($sql2);
        $delete_stmt2 -> execute();
        
        header("location:info_jurusan.php");
        
    }
?>