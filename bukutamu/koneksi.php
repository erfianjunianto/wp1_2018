<?php 

$host = "localhost";
$user = "root";
$pass = "password"; // jika tidak ada maka kosongkan saja ("")
$db   = "db_berita";

$koneksi = new mysqli($host, $user, $pass, $db);

if(!$koneksi){
	
	echo "Koneksi gagal silahkan cek: ".$koneksi->connect_error;
}