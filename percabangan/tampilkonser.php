<?php 
$nama = $_POST['nama'];
$kode_studio = $_POST['kode_studio'];
$jenis_kelas = $_POST['jenis_kelas'];
$jumlah_tiket = $_POST['jumlah_tiket'];


/*
	baris kode untuk mendapatkan bintang tamu
	berdasarkan kode studio
	dalam contoh ini kode studio dijabarkan sbb:
	1 => STUDIO 1
	2 => STUDIO 2

	karena kodenya pasti, kita akan gunakan switch
*/
switch ($kode_studio) {
	case '1':
		$nama_studio = "STUDIO 1";
		$bintang_tamu = "Opick";
		break;
	case '2':
		$nama_studio = "STUDIO 2";
		$bintang_tamu = "Raihan";
		break;
	
	default:
		$nama_studio = "-";
		$bintang_tamu = "-";
		break;
}

/*
	baris kode berikut digunakan untuk mendapatkan harga tiket
	berdasarkan jenis kelas, jika VIP maka harga tiket Rp500.000
	sedangkan jika Festival harga tiket hanya Rp250.000
	dalam contoh ini jenis festival dijabarkan sebagai berikut:
	vip => VIP
	festival => Festival

	kode ini pasti, namun bisa terjadi kesalahan penulisan, misal 
	vIp, Vip, VIP, viP dan lainya, maka kita bisa menggunakan switch 
	atau if
*/

if(strtolower($jenis_kelas) == 'vip'){
	$harga_tiket =500000;
	$nama_kelas = "VIP";
	$max_tiket = 10;
}else
if(strtolower($jenis_kelas) == 'festival'){
	$harga_tiket =250000;
	$nama_kelas = "Festival";
	$max_tiket = 10;
}else
if(strtolower($jenis_kelas) == 'family'){
	$harga_tiket =700000;
	$nama_kelas = "Family";
	$max_tiket = 2;
}else{
	$harga_tiket =0;
	$nama_kelas = "-";
}


if($jumlah_tiket > $max_tiket){
	$pesan = "Anda memesan melebihi batas maksimal tiket yang diperbolehkan yaitu $max_tiket";
	$qty   = $max_tiket;
}else{
	$pesan = "-";
	$qty   = $jumlah_tiket;
}

/* 
	baris kode berikut untuk menghitung total harga dari perkalian
	antara harga_tiket dengan jumlah tiket
*/

#$total_harga = $harga_tiket * $jumlah_tiket;
	$total_harga = $harga_tiket * $qty;

/* 
	baris kode berikut untuk menampilkan datanya
*/

?>

	
		<h2>KONSER AMAL INDAHNYA BERBAGI</h2>
		<p>=====================================</p>
		<p>
			Nama Pemesan : <?=$nama;?><br>
			Kode Studio  : <?=$nama_studio;?><br>
			Bintang Tamu : <?=$bintang_tamu;?><br>
			Jenis Kelas  : <?=$nama_kelas;?><br>
			Harga Tiket  : Rp<?=number_format($harga_tiket,0, ',' , '.');?><br>
			Jumlah Beli  : <?=$qty;?><br>
			Pesan        : <?=$pesan;?> <br>
		</p>
		<p>=====================================</p>
		<p>
			Total Harga  : <?=number_format($total_harga,0, ',' , '.')?>
		</p>
		<p>
			<a href="formkonser.php">Kembali Ke Awal</a>
		</p>
