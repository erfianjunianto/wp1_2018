<?php
// untuk mengambil data koneksi
include "koneksi.php";
// mengambil data dari tabel
$sql 	= "SELECT * FROM artikel";

$query  = $koneksi->query($sql);

while ($data = $query->fetch_object()) {
	echo "<h1>".$data->judul."</h1>";
	echo "<p> <img src=".$data->gambar." width='20%' height='20%'></p>";
	echo "<p>".$data->isi."</p>";
	echo "<hr>";
}



