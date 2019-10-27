<!DOCTYPE html>
<html>
<head>
	<title>Latihan 1</title>
</head>
<body>
	<?php 
		function faktorial(&$a){
			$hasil=1;
			for ($i=$a; $i>0 ; $i--) { 
				$hasil = $hasil * $i;
			}
			return $hasil;
		}
		echo "Angka faktorial yang dimasukkan : 5<br><br>";
		$fak = 5;
		$hasilnya = faktorial($fak);
		echo "Hasilnya : $hasilnya";
	 ?>
</body>
</html>