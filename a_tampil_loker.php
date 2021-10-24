<?php
    session_start();
    require_once ("koneksi.php");
    if (isset($_POST['btn_buatloker'])){
        try{
            $id_loker= $_POST['id_loker'];
            $nik= $_SESSION['nik'];
            $tanggal= $_POST['tanggal'];
            $nama_pekerjaan= $_POST['nama_pekerjaan'];
            $image_file = $_FILES['image_loker']['name'];
            $type = $_FILES['image_loker']['type'];
            $size = $_FILES['image_loker']['size'];
            $temp = $_FILES['image_loker']['tmp_name'];
            $nama_perusahaan= $_POST['nama_perusahaan'];
            $alamat= $_POST['alamat'];
            $deskripsi_singkat= $_POST['deskripsi_singkat'];
            $deskripsi_pekerjaan= $_POST['deskripsi_pekerjaan'];
            $verifikasi= $_POST['verifikasi'];
            if (empty($image_file)) {
                $errorMsg="Please Select Image";
            }
            else if ($size < 5000000 and ($type=="image/jpg"||$type=='image/png'||$type=='image/jpeg'||$type=='image/gif'))
            {   
                $image   = addslashes(file_get_contents($_FILES['image_loker']['tmp_name']));
                $image_properties = getimagesize($_FILES['image_loker']['tmp_name']);
                $sql="INSERT INTO loker (id_loker, nik,tanggal, nama_pekerjaan, nama_perusahaan, alamat, deskripsi_singkat, deskripsi_pekerjaan, image, image_type, verifikasi) VALUES('" .$id_loker. "','" .$nik. "','" .$tanggal. "','" .$nama_pekerjaan. "', '" .$nama_perusahaan. "','" .$alamat. "', '" .$deskripsi_singkat. "','" .$deskripsi_pekerjaan. "', '" .$image. "', '" . $image_properties['mime'] . "',  '" .$verifikasi. "')";
                $query=$db->prepare($sql);
        
        
                
                
                $query->bindparam(':image',$image);
                $query->execute();
    
                echo "<script>alert('File Add Successfully !')</script>";
                header("location:admin_karir.php");
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