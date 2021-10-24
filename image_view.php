<?php
require "koneksi.php";
if(isset($_GET['image_id'])){
      $nik = $_GET['image_id'];
      $query = $db->prepare("SELECT image, image_type FROM user where nik='$nik'");
      $query->execute();
      $row = $query->fetch();
      // header("Content-type: " . $row["image_type"]);
      echo $row["image"];
}


if(isset($_GET['imageloker_id'])){
      $id_loker = $_GET['imageloker_id'];
      $query = $db->prepare("SELECT image, image_type FROM loker where id_loker='$id_loker'");
      $query->execute();
      $row = $query->fetch();
      // header("Content-type: " . $row["image_type"]);
      echo $row["image"];
}


if(isset($_GET['imageartikelkarir_id'])){
      $id_karir = $_GET['imageartikelkarir_id'];
      $query = $db->prepare("SELECT image, image_type FROM karir where id_karir='$id_karir'");
      $query->execute();
      $row = $query->fetch();
      // header("Content-type: " . $row["image_type"]);
      echo $row["image"];
}

if(isset($_GET['imageartikel_id'])){
      $id_info = $_GET['imageartikel_id'];
      $query = $db->prepare("SELECT image, image_type FROM info_jurusan where id_info='$id_info'");
      $query->execute();
      $row = $query->fetch();
      // header("Content-type: " . $row["image_type"]);
      echo $row["image"];
}




?>