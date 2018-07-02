<?php
include ("koneksi.php");

$id    = $_GET['id'];

$sql   = "UPDATE bukutamu SET deleted_at='".date('Y-m-d H:i:s')."' WHERE id='$id'";

#$sql   = "DELETE FROM bukutamu WHERE id='$id'";

$insert = $koneksi->query($sql);

if($insert){
	echo "Berhasil <a href='tampil_bukutamu.php'> Lihat Data</a>";
}else{
	echo "Gagal <a href='form_bukutamu.php'> Kembali</a>";
}