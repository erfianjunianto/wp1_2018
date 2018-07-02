<!DOCTYPE html>
<html>
<head>
	<title>Form PHP</title>
</head>
<body>
	<form action="../file-kiriman-2.php" method="post">
		<label for="Nama"> Nama Lengkap: </label>
		<input type="text" name="nama" value="" placeholder="Masukin nama lengkap">
		<input type="submit" name="submit" value="Proses">
		<input type="reset" name="reset" value="Hapus">
	</form>

	<h2> Isi Data dari Form </h2>
	<p> Nama Lengkap Anda adalah: <b> 
		<?php if(isset($_POST['nama'])) echo $_POST['nama']; ?> </b></p>
</body>
</html>