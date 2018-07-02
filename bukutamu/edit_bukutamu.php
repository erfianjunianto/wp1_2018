<?php 
	include ("koneksi.php");

	$id = $_GET['id'];

	$sql = "SELECT * FROM bukutamu WHERE id='$id'";

	$query = $koneksi->query($sql);

	$data = $query->fetch_object();
?>

<table align="center" border="1" cellpadding="10" cellspacing="0">
	<caption>Form Edit Buku Tamu</caption>
	<form action="update_bukutamu.php" method="post" accept-charset="utf-8">
		<input type="hidden" name="id" value="<?=$data->id;?>">
		<tr>
			<td><label for="inputNama">Nama</label></td>
			<td><input type="text" name="nama" value="<?=$data->nama;?>" placeholder="Nama Lengkap"></td>
		</tr>
		<tr>
			<td><label for="inputPesan">Pesan</label></td>
			<td><textarea name="pesan" cols="20" rows="5"><?=$data->pesan;?></textarea></td>
		</tr>
		<tr>
			<td colspan="2" align="right"><button type="submit" name="simpan">Update</button></td>
		</tr>
	</form>
</table>