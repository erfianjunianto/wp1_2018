<!DOCTYPE html>
<html>
<head>
	<title>Form Input Mahasiswa</title>
</head>
<body>
	<h2>PENGELOLAAN DATA MAHASISWA</h2>
	<form action="tampilmahasiswa.php" method="post" accept-charset="utf-8">
		<label for="nama">Nama</label>
		<input type="text" name="nama" value="" placeholder="Nama Lengkap">
		<br>
		<label for="alamat">Alamat</label>
		<input type="text" name="alamat" value="" placeholder="Alamat">
		<br>
		<label for="jeniskelamin">Jenis Kelamin</label>
		<input type="radio" name="jenis_kelamin" value="Laki-Laki" placeholder="">Laki-Laki
		<input type="radio" name="jenis_kelamin" value="Perempuan" placeholder=""> Perempuan
		<br>
		<label for="pekerjaan">Pekerjaan</label>
		<select name="pekerjaan" size="1">
			<option value="Swasta">Pegawai Swasta</option>
			<option value="Negeri">Pegawai Negeri</option>}
		</select>
		<br>
		<label for="hobi">Hobi</label>
		<input type="checkbox" name="hobi[]" value="Olahraga"> Olahraga
		<input type="checkbox" name="hobi[]" value="Musik">Musik
		<input type="checkbox" name="hobi[]" value="Jalan-Jalan">Jalan-Jalan
		<br>
		<input type="submit" name="Kirim"> <input type="reset" name="batal" value="Batal">
	</form>
</body>
</html>