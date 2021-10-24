<?php
    $sql = "SELECT * FROM karir WHERE verifikasi=1";
    $result=$db->prepare($sql);
    $result->execute();
    $total = $result->rowCount();

?>
<div class="container-karir" id="karir">
    <div class="row header-karir">
        <div class="header-karir2 d-flex justify-content-start align-items-center col-md-6 col-sm-6 col-xs-12">
            <div id="konten1-karir" class="carousel slide konten1-karir" data-ride="carousel">
                <ol class="carousel-indicators">
<?php
    for($i=0;$i<$total;$i++){
?>
                    <li data-target="#konten1-karir" data-slide-to="<?php echo $i;?>"></li>
<?php
    }
?>
                </ol>
                <div class="carousel-inner inner_konten1-karir">
<?php
   $row = $result->fetch(PDO::FETCH_ASSOC);
   $id_pertama_karir = $row['id_karir'];
?>
                    <div class="carousel-item active">
                        <a href="detail_artikel.php?id_karir=<?php echo $row['id_karir']?>&kategori=karir"><img class="d-block w-100  gambar_konten1-karir" <?php echo "src='image_view.php?imageartikelkarir_id=".$row['id_karir']."'" ?> alt="First slide"></a>
                        <div id="judul1-karir">
                            <?php echo $row['judul_artikel']?>
                        </div>
                        <div id="isi1-karir">
                            <p id="paragrafteks1-karir"><?php echo $row['prolog']?></p>
                        </div>
                    </div>
<?php
    $sql4 = "SELECT * FROM karir WHERE id_karir NOT IN ('$id_pertama_karir') AND verifikasi=1;";
    $result4=$db->prepare($sql4);
    $result4->execute();
    $total4 = $result4->rowCount();
    while( $row4 = $result4->fetch(PDO::FETCH_ASSOC)){
?>
                    <div class="carousel-item">
                        <a href="detail_artikel.php?id_karir=<?php echo $row4['id_karir']?>&kategori=karir"><img class="d-block w-100  gambar_konten1-karir" <?php echo "src='image_view.php?imageartikelkarir_id=".$row4['id_karir']."'" ?> alt="First slide"></a>
                        <div id="judul1-karir">
                            <?php echo $row4['judul_artikel']?>
                        </div>
                        <div id="isi1-karir">
                            <p id="paragrafteks1-karir"><?php echo $row4['prolog']?></p>
                        </div>
                    </div>
<?php
    }
?>
<?php
    $sql2 = "SELECT * FROM loker WHERE verifikasi=1";
    $result2=$db->prepare($sql2);
    $result2->execute();
    $total2 = $result2->rowCount();
    
    
?>
                </div>
            </div>
        </div>
        <div class="header-karir3 d-flex justify-content-end align-itemscenter col-md-6 col-sm-6 col-xs-12">
            <div id="konten2-karir" class="carousel slide konten2-karir" data-ride="carousel">
                <ol class="carousel-indicators">
<?php
    for($j=0;$j<$total;$j++){
?>
                    <li data-target="#konten2-karir" data-slide-to="<?php echo $j;?>"></li>
                    
<?php
   }
?>
                </ol>
                <div class="carousel-inner">
<?php
$row2 = $result2->fetch(PDO::FETCH_ASSOC);
$id_pertama = $row2['id_loker'];
?>
                    <div class="carousel-item active" data-wrap="false">
                        <div class="loker-container align-self-center">
                            <div class="row">
                                <div class="col-md-5 col-sm-5 col-xs-12">
                                    <a href="detail_loker.php?id_loker=<?php echo $row2['id_loker']?>"><img class="gambar_loker" <?php echo "src='image_view.php?imageloker_id=".$row2['id_loker']."'" ?>></a>
                                </div>
                                <div class="col-md-7 col-sm-7 col-xs-12">
                                    <div class="loker_judul">
                                        <span><?php echo $row2['nama_pekerjaan'];?></span>
                                    </div>
                                    <div class="loker_perusahaan">
                                        <span><?php echo $row2['nama_perusahaan'];?></span>
                                    </div>
                                    <div class="loker_alamat">
                                        <?php echo $row2['alamat'];?>
                                    </div>
                                    <div class="loker_persyaratan">
                                        <span><?php echo $row2['deskripsi_singkat'];?></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
<?php
    $sql3 = "SELECT * FROM loker WHERE id_loker NOT IN ('$id_pertama') AND verifikasi=1;";
    $result3=$db->prepare($sql3);
    $result3->execute();
    $total3 = $result3->rowCount();
    while( $row3 = $result3->fetch(PDO::FETCH_ASSOC)){
?>                    
                    <div class="carousel-item align-self-center">
                        <div class="loker-container">                                
                        <div class="row">
                            <div class="col-md-5 col-sm-5 col-xs-12">
                                <a href="detail_loker.php?id_loker=<?php echo $row3['id_loker']?>"><img class="gambar_loker" <?php echo "src='image_view.php?imageloker_id=".$row3['id_loker']."'" ?>></a>
                            </div>
                            <div class="col-md-7 col-sm-7 col-xs-12">
                            <div class="loker_judul">
                                    <span><?php echo $row3['nama_pekerjaan'];?></span>
                                </div>
                                <div class="loker_perusahaan">
                                    <span><?php echo $row3['nama_perusahaan'];?></span>
                                </div>
                                <div class="loker_alamat">
                                    <?php echo $row3['alamat'];?>
                                </div>
                                <div class="loker_persyaratan">
                                    <span><?php echo $row3['deskripsi_singkat'];?></span>
                                </div>
                            </div>
                        </div>
                        </div> 
                    </div>
<?php
    }
?>
                </div>
                <a class="carousel-control-prev" href="#konten2-karir" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#konten2-karir" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
                </div>
        </div>
    </div>
    <div class="row penjelasan_karir">
        <div class="d-flex justify-content-start penjelasan_karir2 align-self-center  col-md-2 col-sm-2 col-xs-12">
            <span class="judul_karir">Karir & Lowongan Pekerjaan</span>                    
        </div>
        <div class="d-flex justify-content-start penjelasan_karir2 align-self-center  col-md-4 col-sm-4 col-xs-12">
            <span class="penjelasan_karir3">Karir merupakan bagian yang memuat informasi seputar bagaimana cara mempersiapkan diri untuk menata karir akang dan teteh dan memuat informasi seputar lowongan pekerjaan di RPL. </span>                    
        </div>
        <div class ="d-flex justify-content-end buatloker align-self-center col-md-5 col-sm-5 col-xs-12">
            <a href="buat_loker.php" class="btn btn-secondary  d-none d-md-block pull-right  hidden-xs hidden-sm waves-effect waves-light" style="border-radius: 25px; background-color: #FFA62B; width: 198.39px; height: 38.4px;" >Buat Lowongan Pekerjaan</a>
        </div>
    </div>
</div>

<div class="container-angkatan" id="angkatan">
    <div class="row angkatan-penjelasan">
        <div class="align-self-center col-md-4 col-sm-4 col-xs-12">
            <span class="judul_pembukaan">Angkatan</span>
        </div>
        <div class="align-self-center d-flex justify-content-end col-md-8 col-sm-8 col-xs-12">
            <span class="isi_pembukaan">Akang dan teteh dapat melihat siapa saja yang menjadi bagian dari keluarga besar RPL. Akang dan teteh juga dapat melihat informasi seputar profil orang tersebut dan mengirim nya pesan.</span>
        </div>
    </div>
    <div class="row kontrol-angkatan">
        <div class="col-md-8 col-sm-8 col-xs-12">
            <form action="" method="POST" enctype="multipart/form-data">
                <div class="form-row">
                    <div class="form-group col-md-3">
                        <select id="inputAngkatan" class="form-control" name="angkatan" style="background: transparent; margin-left: 50px;">
                            <option selected value="">Angkatan</option>
                            <option value="A001">Angkatan 1</option>
                            <option value="A002">Angkatan 2</option>
                            <option value="A003">Angkatan 3</option>
                            <option value="A004">Angkatan 4</option>
                            <option value="A005">Angkatan 5</option>
                            <option value="A006">Angkatan 6</option>
                            <option value="A007">Angkatan 7</option>
                            <option value="A008">Angkatan 8</option>
                            <option value="A009">Angkatan 9</option>
                            <option value="A010">Angkatan 10</option>
                            <option value="A011">Angkatan 11</option>
                            <option value="A012">Angkatan 12</option>
                            <option value="A013">Angkatan 13</option>
                            <option value="A014">Angkatan 14</option>
                            <option value="A015">Angkatan 15</option>
                            <option value="A016">Angkatan 16</option>
                            <option value="A017">Angkatan 17</option>
                            <option value="A018">Angkatan 18</option>
                        </select>
                    </div>
                    <div class="form-group col-md-3">
                        <select id="inputKelas" class="form-control" name="kelas" style="background: transparent; margin-left:50px;">
                            <option selected value="">Kelas</option>
                            <option value="A"> Kelas A</option>
                            <option value="B">Kelas B</option>
                            <option value="C">Kelas C</option>
                        </select>
                    </div>
                    <div class="form-group col-md-2">
                        <div class="col-sm-12">
                            <button class="btn btn-success" name="btn_tampil" style="width: 130px; height: 38.4px; background-color: #FFA62B; border-radius: 20px; margin-left:50px;">Tampilkan</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
        <div class="col-md-4 col-sm-4 col-xs-12">
            <div class="row cari-angkatan d-flex justify-content-end">
                <form role="search" class="app-search d-none d-md-block cari-angkatan2" action="" method="GET">
                    <input type="text" placeholder="Search..." class="cari-angkatan3" name="cari">
                    <button class="active tombol-search" type="submit" style="background: transparent; border: transparent;">
                        <i class="fa fa-search"></i>
                    </button>
                </form>
            </div>
        </div>
    </div>
    <div class="row angkatan-isi">
        <div class="container-isi-angkatan col-md-12">
            <div class="row">
                <?php
                    require "koneksi.php";
                    if (isset($_POST['btn_tampil'])){
                        try{
                            $id_angkatan_db = $_POST['angkatan'];
                            $kelas_db = $_POST['kelas'];
                            $sql = "SELECT * FROM user WHERE id_angkatan = '$id_angkatan_db' AND kelas='$kelas_db'";
                            $result=$db->prepare($sql);
                            $result->execute();
                            $index2 = 0;
                            while($row_tampil = $result->fetch(PDO::FETCH_ASSOC)){
                        
                ?>
               <div class="container-user d-flex justify-content-start">
               <a href="detail_user.php?nik_user=<?php echo $row_tampil['nik']?>"><img <?php echo "src='image_view.php?image_id=".$row_tampil['nik']."'" ?> alt="user-img" class="photo-angkatan"></a>
                    <div class="d-flex flex-column">
                        <span class="nama-angkatan"><?php echo $row_tampil['nama_depan']?> <?php echo $row_tampil['nama_belakang']?></span>
                        <span class="kelas-angkatan">Kelas <?php echo $row_tampil['kelas']?>-<?php
                                         $query2= $db->prepare("SELECT angkatan FROM angkatan WHERE id_angkatan = '$id_angkatan_db'");
                                         $query2->execute();
                                         $hasil2 = $query2->fetch();
                                         echo $hasil2['angkatan'];?></span>
                    </div>
                </div>
                <?php
                            }
                        }
                        catch (PDOExeption $e) {
                            echo $e->getMessage();
                        }
                    }
                ?>
                <?php
                     if(isset($_GET['cari'])){
                        try{
                            $cari="%".$_GET['cari']."%";
                            
                            $sql = "SELECT * FROM user WHERE nik LIKE :pencarian OR nama_depan LIKE :pencarian OR nama_belakang LIKE :pencarian OR kelas LIKE :pencarian";
                            $result=$db->prepare($sql);
                            $result->bindparam(':pencarian',$cari);
                            $result->execute();
                            while($row_tampil = $result->fetch(PDO::FETCH_ASSOC)){
                        
                    
                ?>
                 <div class="container-user d-flex justify-content-start">
               <a href="detail_user.php?nik_user=<?php echo $row_tampil['nik']?>"><img <?php echo "src='image_view.php?image_id=".$row_tampil['nik']."'" ?> alt="user-img" class="photo-angkatan"></a>
                    <div class="d-flex flex-column">
                        <span class="nama-angkatan"><?php echo $row_tampil['nama_depan']?> <?php echo $row_tampil['nama_belakang']?></span>
                        <span class="kelas-angkatan">Kelas <?php echo $row_tampil['kelas']?>-<?php
                                         $query2= $db->prepare("SELECT angkatan FROM angkatan WHERE id_angkatan = '$id_angkatan_db'");
                                         $query2->execute();
                                         $hasil2 = $query2->fetch();
                                         echo $hasil2['angkatan'];?></span>
                    </div>
                </div>
                <?php
                            }
                        }
                        catch (PDOExeption $e) {
                            echo $e->getMessage();
                        }
                    }
                ?>
            </div>
        </div>    
    </div>
</div>
<script src="js/tambah_angkatan.js"></script>
