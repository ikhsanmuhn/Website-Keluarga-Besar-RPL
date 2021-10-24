<?php 
 $dbHost = 'localhost';
 $dbName = 'projek2';
 $dbUsername = "root";
 $dbPassword = "";

 try{
     $dbConn= new PDO("mysql:host=$dbHost; dbname=$dbName",$dbUsername,$dbPassword);
     $dbConn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
 } catch(PDOException $e){
    echo $e->getMassage();
 }
 ?>
