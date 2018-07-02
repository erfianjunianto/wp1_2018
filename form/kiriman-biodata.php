<?php
$nama 	= $_POST['nama_lengkap'];
$kel 	= $_POST['jenis_kelamin'];
$almt 	= $_POST['alamat'];
$kota 	= $_POST['kota'];
$kodepos = $_POST['kodepos'];

echo "<h1>BIODATA</h1>";

echo "Nama         : ". $nama;
echo "<br>";
echo "Jenis Kelamin : ".$kel;
echo "<br>";
echo "Alamat : ".$almt;
echo "<br>";
echo "Kota : ".$kota;
echo "<br>";
echo "kodepos : ".$kodepos;
echo "<br>";
