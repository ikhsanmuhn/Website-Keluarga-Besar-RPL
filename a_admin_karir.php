<?php
    session_start();
    require_once ("koneksi.php");
    if (isset($_POST['btn_updateloker'])){
        try{
            $id_loker= $_POST['id_loker'];
            $tanggal= $_POST['tanggal'];
            $nama_pekerjaan= $_POST['nama_pekerjaan'];
            $image_file = $_FILES['image_loker']['name'];
            $type = $_FILES['image_loker']['type'];
            $size = $_FILES['image_loker']['size'];
            $temp = $_FILES['image_loker']['tmp_name'];
            $nama_perusahaan= $_POST['nama_perusahaan'];
            $alamat= $_POST['alamat'];
            $deskripsi_singkat= addslashes($_POST['deskripsi_singkat']);
            $deskripsi_pekerjaan= addslashes($_POST['deskripsi_pekerjaan']);
            $verifikasi= $_POST['verifikasi'];

            if (empty($image_file)) {
                echo "kosong";
                // $query2 = $db->prepare("SELECT image, image_type FROM loker where id_loker='$id_loker'");
                // $query2->execute();
                // $row2 = $query2->fetch();
                // $image = $row2[''];
                // $image_properties = $_FILES['image_loker_default'];
                // $sql="UPDATE loker set tanggal='$tanggal', nama_pekerjaan='$nama_pekerjaan', nama_perusahaan='$nama_perusahaan', alamat='$alamat', deskripsi_singkat='$deskripsi_singkat', deskripsi_pekerjaan='$deskripsi_pekerjaan', image='$image', image_type='$image_properties', verifikasi='$verifikasi' WHERE id_loker='$id_loker'";
                // $query=$db->prepare($sql);
                // $query->execute();
                $sql="UPDATE loker set tanggal='$tanggal', nama_pekerjaan='$nama_pekerjaan', nama_perusahaan='$nama_perusahaan', alamat='$alamat', deskripsi_singkat='$deskripsi_singkat', deskripsi_pekerjaan='$deskripsi_pekerjaan', verifikasi='$verifikasi' WHERE id_loker='$id_loker'";
                $query=$db->prepare($sql);
                $query->execute();
                echo "<script>alert('File Add Successfully !')</script>";
                header("location:admin_karir.php");
            }
            else if ($size < 5000000 and ($type=="image/jpg"||$type=='image/png'||$type=='image/jpeg'||$type=='image/gif'))
            {   
                
                $image   = addslashes(file_get_contents($_FILES['image_loker']['tmp_name']));
                $image_properties = getimagesize($_FILES['image_loker']['tmp_name']);
                $sql="UPDATE loker set tanggal='$tanggal', nama_pekerjaan='$nama_pekerjaan', nama_perusahaan='$nama_perusahaan', alamat='$alamat', deskripsi_singkat='$deskripsi_singkat', deskripsi_pekerjaan='$deskripsi_pekerjaan', image='$image', image_type='" . $image_properties['mime'] . "', verifikasi='$verifikasi' WHERE id_loker='$id_loker'";
                $query=$db->prepare($sql);
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
    if (isset($_POST['btn_updateartikel'])){
        try{
            $id_karir= $_POST['id_karir'];
            $judul_artikel=  addslashes($_POST['judul_artikel']);
            $prolog=  addslashes($_POST['prolog']);
            $image_file = $_FILES['image_artikel']['name'];
            $type = $_FILES['image_artikel']['type'];
            $size = $_FILES['image_artikel']['size'];
            $temp = $_FILES['image_artikel']['tmp_name'];
            $deskripsi=  addslashes($_POST['deskripsi']);
            $verifikasi= $_POST['verifikasi'];
            $tanggal= $_POST['tanggal'];
            if (empty($image_file)) {
                $errorMsg="Please Select Image";
                $sql="UPDATE karir set prolog='$prolog', judul_artikel='$judul_artikel', deskripsi='$deskripsi', tanggal='$tanggal', verifikasi='$verifikasi' WHERE id_karir='$id_karir'";
                $query=$db->prepare($sql);
                $query->execute();
    
                echo "<script>alert('File Add Successfully !')</script>";
                header("location:admin_karir.php");

            }
            else if ($size < 5000000 and ($type=="image/jpg"||$type=='image/png'||$type=='image/jpeg'||$type=='image/gif'))
            {   
                $image   = addslashes(file_get_contents($_FILES['image_artikel']['tmp_name']));
                $image_properties = getimagesize($_FILES['image_artikel']['tmp_name']);
                $sql="UPDATE karir set prolog='$prolog', judul_artikel='$judul_artikel', deskripsi='$deskripsi', tanggal='$tanggal', image='$image', image_type='" . $image_properties['mime'] . "', verifikasi='$verifikasi' WHERE id_karir='$id_karir'";
                $query=$db->prepare($sql);
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
    if (isset($_POST['btn_deleteartikel'])) {

        $id_karir = $_POST['id_karir'];

        $sql2 = "DELETE FROM karir WHERE id_karir= '$id_karir'";
        $delete_stmt2=$db->prepare($sql2);
        $delete_stmt2 -> execute();
        
        header("location:admin_karir.php");
        
    }
    if (isset($_POST['btn_deleteloker'])) {

        $id_loker = $_POST['id_loker'];

        $sql2 = "DELETE FROM loker WHERE id_loker= '$id_loker'";
        $delete_stmt2=$db->prepare($sql2);
        $delete_stmt2 -> execute();
        
        header("location:admin_karir.php");
        
    }
?>