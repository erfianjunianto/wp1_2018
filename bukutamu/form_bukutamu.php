<table align="center" border="1" cellpadding="10" cellspacing="0">
	<caption>Form Buku Tamu</caption>
	<form action="simpan_bukutamu.php" method="post" accept-charset="utf-8">
		<tr>
			<td><label for="inputNama">Nama</label></td>
			<td><input type="text" name="nama" value="" placeholder="Nama Lengkap"></td>
		</tr>
		<tr>
			<td><label for="inputPesan">Pesan</label></td>
			<td><textarea name="pesan" cols="20" rows="5"></textarea></td>
		</tr>
		<tr>
			<td colspan="2" align="right"><button type="submit" name="simpan">Simpan</button></td>
		</tr>
	</form>
</table>