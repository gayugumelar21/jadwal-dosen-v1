<?php
$db_host = "localhost";
$db_user = "root";
$db_pass = "";
$db_name = "db_uti";
 
$koneksi = mysqli_connect($db_host, $db_user, $db_pass, $db_name);
 
    if(mysqli_connect_errno()){
      echo 'Gagal terhubung ke Database! : '.mysqli_connect_error();
    }else{
      // echo 'Berhasil terhubung ke Database!';
    }
?>