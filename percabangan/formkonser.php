<!DOCTYPE html>
<html>
<head>
	<title>Form Konser</title>
</head>
<body>
	<form method="post" action="tampilkonser.php" name="formkonser">
		<table align="center" border="1" cellpadding="2">
			<tbody>
				<tr>
					<td colspan="3"><h2>KONSER AMAL INDAHNYA BERBAGI</h2></td>
				</tr>
				<tr>
					<td>Nama Pemesan</td>
					<td>:</td>
					<td>
						<input type="text" name="nama" value="" placeholder="Nama Pemesan" required="required">
					</td>
				</tr>
				<tr>
					<td>Kode Studio</td>
					<td>:</td>
					<td>
						<select name="kode_studio" size="1">
							<option value="1">STUDIO 1</option>
							<option value="2">STUDIO 2</option>
						</select>
					</td>
				</tr>
				<tr>
					<td>Jenis Kelas</td>
					<td>:</td>
					<td>
						<input type="radio" name="jenis_kelas" value="vip" checked="checked"> VIP
						<input type="radio" name="jenis_kelas" value="festival"> Festival
						<input type="radio" name="jenis_kelas" value="family"> Family
					</td>
				</tr>
				<tr>
					<td>Jumlah Tiket</td>
					<td>:</td>
					<td>
						<input type="number" name="jumlah_tiket" value="0" min="0">
					</td>
				</tr>
				<tr>
					<td></td>
					<td></td>
					<td>
						<button type="submit" name="submit">Tampil</button>
						<button type="reset" name="reset">Batal</button>
					</td>
				</tr>
			</tbody>
		</table>
	</form>
</body>
</html>