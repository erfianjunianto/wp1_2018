<?php
include ("koneksi.php");

$id    = $_POST['id'];
$nama  = $_POST['nama'];
$pesan = $_POST['pesan'];

$sql   = "UPDATE bukutamu SET nama='$nama', pesan='$pesan' WHERE id='$id'";

$update = $koneksi->query($sql);

if($update){
	#echo "Berhasil <a href='tampil_bukutamu.php'> Lihat Data</a>";
	header("location:tampil_bukutamu.php?msg=edit_ok");
}else{
	#echo "Gagal <a href='form_bukutamu.php'> Kembali</a>";
	header("location:tampil_bukutamu.php?msg=edit_gagal");
}