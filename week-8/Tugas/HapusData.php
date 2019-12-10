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
	$sql="DELETE from mahasiswa where nama like '%$cari%'";
	$hasil=mysqli_query($conn,$sql);
	echo "<br>";
	
	if($hasil){
		echo "Data berhasil dihapus";
	} else {
		echo "Error: ".$sql."<br>".mysqli_error($conn);
	}
	?>

	<br><br>
	<form action="Home.php" method="POST"><button type="back" class="btn btn-primary">Kembali</button></form>
</body>
</html>