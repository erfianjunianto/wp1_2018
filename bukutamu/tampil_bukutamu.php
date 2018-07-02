<?php 
	include ("koneksi.php");
	$sql = "SELECT * FROM bukutamu ORDER BY created_at desc";
	#$sql = "SELECT * FROM bukutamu WHERE deleted_at is null ORDER BY created_at desc";

	$query = $koneksi->query($sql);


if(isset($_GET['msg'])){
	if($_GET['msg'] == "edit_ok"){
		echo "<h1>EDIT DATA BERHASIL</h1>";
	}else
	if($_GET['msg'] == "edit_gagal"){
		echo "<h1>EDIT DATA GAGAL</h1>";
	}else
	if($_GET['msg'] == "simpan_ok"){
		echo "<h1>SIMPAN DATA BERHASIL</h1>";
	}else
	if($_GET['msg'] == "simpan_gagal"){
		echo "<h1>SIMPAN DATA GAGAL</h1>";
	}else{
		echo "<h1>TIDAK ADA PESAN</h1>";
	}
}else{
	echo"<h1>TIDAK ADA GET</h1>";
}


?>
<table border="1" align="center" cellpadding="2" cellspacing="0" width="70%">
	<caption>BUKU TAMU</caption>
	<thead>
		<tr bgcolor="#CCC">
			<th>No.</th>
			<th>Nama</th>
			<th>Pesan</th>
			<th>Tanggal</th>
			<th>Aksi</th>
		</tr>
	</thead>
	<tbody>
		<?php
			$no=1;
			while ($data = $query->fetch_object()) {
			echo"
				<tr>
					<td>".$no."</td>
					<td>".$data->nama."</td>
					<td>".$data->pesan."</td>
					<td>".date('d-m-Y', strtotime($data->created_at))."</td>
					<td>
						<a href='edit_bukutamu.php?id=".$data->id."'>[EDIT]</a> 
						";
						if(is_null($data->deleted_at)){

							echo"<a href='hapus_bukutamu.php?id=".$data->id."'>[HAPUS]</a>";
						}else{
							echo"<a href='restore_bukutamu.php?id=".$data->id."'>[KEMBALIKAN]</a>";
						}
			echo"
						<a href='form_bukutamu.php'>[TAMBAH]</a>
					</td>
				</tr>
			";
				$no++;
			}
		?>
	</tbody>
	<tfoot>
		<tr bgcolor="#CCC">
			<th>No.</th>
			<th>Nama</th>
			<th>Pesan</th>
			<th>Tanggal</th>
			<th>Aksi</th>
		</tr>
	</tfoot>
</table>