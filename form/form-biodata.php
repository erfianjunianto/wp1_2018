<!DOCTYPE html>
<html>
<head>
	<title>FORM BIODATA</title>
</head>
<body>
	<form action="kiriman-biodata.php" method="post">
		<label>Nama Lengkap</label>
		<input type="text" name="nama_lengkap" value=""> 
		<br>

		<label>Jenis Kelamin</label>
		<input type="radio" name="jenis_kelamin" value="Laki-Laki"> Laki-Laki
		<input type="radio" name="jenis_kelamin" value="Perempuan"> Perempuan
		<br>

		<label>Alamat</label>
		<textarea name="alamat" cols="10" rows="2"></textarea>
		<br>

		<label>Kota</label>
		<select name="kota" size="1">
			<option value="Kota Bandung"> Kota Bandung </option>
			<option value="Kota Cimahi"> Kota Cimahi </option>
		</select>
		<br>

		<label>Kode Pos</label>
		<input type="number" name="kodepos" value="0" min="0">
		<br>
		<button type="submit" name="submit">KIRIM</button>
	</form>
</body>
</html>