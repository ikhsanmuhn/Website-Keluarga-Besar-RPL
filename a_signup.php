<?php
   session_start();
   error_reporting(0);
   require_once ("koneksi.php");
   if (isset($_POST['signup'])){
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
     $sql_cek = "SELECT * FROM nik_user WHERE nik = $nik";
     $select_cek=$db->prepare($sql_cek);
     $select_cek->execute();
     $row_cek=$select_cek->fetch();
     if($row_cek['nik'] == ""){
         echo  "Maaf Anda Bukan bagian dari kelluarga besar RPL <a href='signup.php'>Back</a>";
     }
     else{
        if (empty($image_file)) {
            $errorMsg="Please Select Image";
        }
        else if ($size < 5000000 and ($type=="image/jpg"||$type=='image/png'||$type=='image/jpeg'||$type=='image/gif'))
        {   
            $image   = addslashes(file_get_contents($temp));
            $image_properties = getimagesize($temp);
            $sql="INSERT INTO user (nik, nama_depan, nama_belakang,tanggal_lahir, kelas, id_angkatan, alamat, no_hp, email, password, image, image_type) VALUES(:nik, :nama_depan, :nama_belakang, :tanggal_lahir, :kelas, :id_angkatan, :alamat, :no_hp, :email, :password, :image, :image_type)";
            $query=$db->prepare($sql);
    
            $query->bindparam(':nik',$nik);
            $query->bindparam(':nama_depan',$nama_depan);
            $query->bindparam(':nama_belakang',$nama_belakang);
            $query->bindparam(':tanggal_lahir',$tgl_lahir);
            $query->bindparam(':kelas',$kelas);
            $query->bindparam(':id_angkatan',$angkatan);
            $query->bindparam(':alamat',$alamat);
            $query->bindparam(':no_hp',$no_hp);
            $query->bindparam(':email',$email);
            $query->bindparam(':password',$pw);
            $query->bindparam(':image',$image);
            $query->bindparam(':image_type',$image_properties['mime']);
            $query->execute();

            $sql2="SELECT * FROM user WHERE nik = '$nik'";
            $select_stmt=$db->prepare($sql2);
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

            echo "<script>alert('File Add Successfully !')</script>";
            header("location:index.php");
        }
        else
        {
            $errorMsg="File lebih dari 5MB atau Format file tidak didukung";
        }                     
     }
     

     
        
    } catch (PDOExeption $e) {
        echo $e->getMessage();
    }
   }
   
?>