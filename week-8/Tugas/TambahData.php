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
		$conn=mysqli_connect ("localhost","root","") or die ("koneksi gagal");
		mysqli_select_db($conn,"praktikum8");

		$nrp = $_POST['nrp'];
		$nm = $_POST['nama'];
		$ft = $_FILES['foto']['name'];
		$tmp = $_FILES['foto']['tmp_name'];
		$id = $_POST['id'];

		$ftbaru = date('dmYHis').$ft;

		$path = "foto/".$ftbaru;

		date_default_timezone_set("Asia/Jakarta");
		$tgl = date("Y:m:d");

		if(move_uploaded_file($tmp, $path)) {
			$sql = "INSERT INTO mahasiswa(nrp,nama,foto,id_jur) VALUES('$nrp','$nm','$ftbaru','$id')";
			$query = mysqli_query($conn, $sql);

			echo "<br>";
			if($query){
			echo "Data berhasil ditambahkan";
			} else {
			echo "Error: ".$sql."<br>".mysqli_error($conn);
			}
		}
	?>
	<br><br>
	<form action="Home.php" method="POST"><button type="back" class="btn btn-primary">Kembali</button></form>
</body>
</html>