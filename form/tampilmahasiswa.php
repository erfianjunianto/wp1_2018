<?php
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$pekerjaan = $_POST['pekerjaan'];
$hobi = $_POST['hobi'];
?>

<table border="1" cellpadding="1" cellspacing="0">
	<caption><h2>DATA MAHASISWA</h2></caption>
	<tbody>
		<tr>
			<td>Nama</td>
			<td><?=$nama;?></td>
		</tr>
		<tr>
			<td>Alamat</td>
			<td><?=$alamat;?></td>
		</tr>
		<tr>
			<td>Jenis Kelamin</td>
			<td><?=$jenis_kelamin;?></td>
		</tr>
		<tr>
			<td>Pekerjaan</td>
			<td><?=$pekerjaan;?></td>
		</tr>
		<tr>
			<td>Hobi</td>
			<td><?=implode(", ",$hobi);?></td>
		</tr>
	</tbody>
</table>