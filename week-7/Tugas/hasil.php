<!DOCTYPE html>
<html>
<head>
	<title>Hasil dari form php</title>
</head>
<body>
	<?php 
		function cetak ($array){
			print_r($array);
		}
		
		if (isset($_POST['proses'])) {

			if(empty($_POST['hobi1'])){
			    $hobi11 = ""; // default value
			}else{
			    $hobi11 = $_POST['hobi1'];
			}

			if(empty($_POST['hobi2'])){
			    $hobi22 = ""; // default value
			}else{
			    $hobi22 = $_POST['hobi2'];
			}

			if(empty($_POST['hobi3'])){
			    $hobi33 = ""; // default value
			}else{
			    $hobi33 = $_POST['hobi3'];
			}

			if(empty($_POST['jk'])){
			    $jenis_kelamin = ""; // default value
			}else{
			    $jenis_kelamin = $_POST['jk'];
			}

            $user = [
                'namaa' => $_POST['nama'],
                'alamatt' => $_POST['alamat'],
                'jkk' => $jenis_kelamin,
                'gdd' => $_POST['gd'],
                'hobii1' => $hobi11,
                'hobii2' => $hobi22,
                'hobii3' => $hobi33,
                'keterangann' => $_POST['keterangan']
            ];
            cetak($user);
        }
	 ?>
</body>
</html>