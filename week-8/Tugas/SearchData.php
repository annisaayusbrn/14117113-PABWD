<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Tambah Data</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="bootstrap/css/bootstrap.css">
	<style type="text/css">
		form{
			display:inline;
		}
	</style>
</head>
<body>
	<script src="bootstrap/js/jquery-3.4.1.min.js"></script>
	<script src="bootstrap/js/bootstrap.js"></script>

	<?php
	$cari=$_POST['nama'];
	$conn=mysqli_connect("localhost","root","");
	mysqli_select_db($conn,"praktikum8");
	$hasil=mysqli_query($conn,"select * from mahasiswa where
	nama like '%$cari%'");
	$jumlah=mysqli_num_rows($hasil);
	echo "<br>";
	if($jumlah==0) {
		echo "Data Tidak Ditemukan";
	} else {
		echo "<br>";
		while($baris=mysqli_fetch_array($hasil)) {
			echo "NRP : ";
			echo $baris[0];
			echo "<br>";
			echo "Nama : ";
			echo $baris[1];
			echo "<br>";
			echo "Foto :";
			echo $baris[2];
			echo "<br>";
			echo "ID_Jurusan :";
			echo $baris[3];
		}
	}
	?>
	<br><br>
	<form action="Home.php" method="POST"><button type="back" class="btn btn-primary">Kembali</button></form>
</body>
</html>