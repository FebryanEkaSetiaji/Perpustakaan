<?php
$host = "localhost"; 
$user = "root";
$pass = "";
  $nama_db = "crud_perpustakaan"; //nama database
  $koneksi = mysqli_connect($host,$user,$pass,$nama_db); //pastikan urutan nya seperti ini, jangan tertukar

    if (!$koneksi) {
        die("Koneksi dengan database gagal: ".mysql_connect_error());
    }
?>