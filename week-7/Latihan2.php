<!DOCTYPE html>
<html>
<head>
	<title>Latihan 2</title>
</head>
<body>
	<h1>TULISAN ERROR HILANG JIKA FORM SUDAH DIISI</h1>
	<form method="GET" action="latihan2.php">
		<label>Nama : </label>
		<input type="text" name="name"><br>
		<label>Warna : </label>
		<input type="text" name="warna"><br>
		<input type="submit" value="Kirim" name="proses">
	</form>
	<?php 
		function hitung ($nama){
			$hasil = strlen($nama);
			if($hasil > 20){
				$jumlah = $hasil * 700;
				return $jumlah;
			}else if ($hasil < 20 && $hasil > 10) {
				$jumlah = $hasil * 500;
				return $jumlah;
			}else{
				$jumlah = $hasil * 300;
				return $jumlah;
			}
		}

		$nama_saya = $_GET['name'];
		$warna_nama = "red";
		if ($_GET['warna'] != "") {
			$warna_nama = $_GET['warna'];
		}
		$harga = hitung($nama_saya);
		echo "<font color=$warna_nama>Namanya adalah : $nama_saya</font><br>";
		echo "<font color=$warna_nama>Harga nama adalah : $harga</font>";
	 ?>
</body>
</html>