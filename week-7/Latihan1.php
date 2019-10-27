<!DOCTYPE html>
<html>
<head>
	<title>Latihan 1</title>
</head>
<body>
	<?php 
		function tukar (&$a,&$b){
			$temp = $a;
			$a = $b;
			$b = $temp;
		}
		$satu = 1;
		$dua = 2;
		echo "Variable sebelumnya : <br>";
		echo "Variabel 1 : $satu <br>";
		echo "Variabel 2 : $dua <br><br>";
		tukar($satu,$dua);
		echo "Variable setelah ditukar : <br>";
		echo "Variabel 1 : $satu <br>";
		echo "Variabel 2 : $dua <br>";
	 ?>
</body>
</html>