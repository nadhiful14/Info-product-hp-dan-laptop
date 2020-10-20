<?php
//Melakukan koneksi ke database
$dbHost = "localhost";
$dbUser = "root";
$dbPass = "";
$dbDatabase="uas";
$db = mysql_connect("$dbHost", "$dbUser", "$dbPass") or die ("koneksi gagal nih, cek apakah variabel sudah benar apa belum");

//memilih database
mysql_select_db("$dbDatabase", $db) or die ("Gagal memilih database");
?>
