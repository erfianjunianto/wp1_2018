<?php
include ("koneksi.php");

$nama  = $_POST['nama'];
$pesan = $_POST['pesan'];

$sql   = "INSERT INTO bukutamu(nama, pesan) VALUES('$nama','$pesan')";

$insert = $koneksi->query($sql);

if($insert){
	#echo "Berhasil <a href='tampil_bukutamu.php'> Lihat Data</a>";
	header("location:tampil_bukutamu.php?msg=simpan_ok");
}else{
	#echo "Gagal <a href='form_bukutamu.php'> Kembali</a>";
	header("location:tampil_bukutamu.php?msg=simpan_gagal");
}