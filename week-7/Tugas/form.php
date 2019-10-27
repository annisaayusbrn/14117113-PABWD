<!DOCTYPE html>
<html>
<head>
	<title>Tugas Mingguan</title>
</head>
<body>
	<form method="post" action="hasil.php" enctype="multipart/form-data">
		<label>Nama : </label><br>
		<input type="text" name="nama" required="required"><br><br>
		<label>Alamat : </label><br>
		<input type="text" name="alamat"><br><br>
		<label>Jenis Kelamin : </label><br>
		<input type="radio" name="jk" value="male">Laki-Laki<br>
		<input type="radio" name="jk" value="female">Perempuan<br><br>
		<label>Golongan Darah : </label><br>
		<select name="gd">
		  <option value="A">A</option>
		  <option value="B">B</option>
		  <option value="AB">AB</option>
		  <option value="O">O</option>
		</select><br><br>
		<label>Hobby : </label><br>
		<input type="checkbox" name="hobi1" value="Berenang"> Berenang<br>
		<input type="checkbox" name="hobi2" value="Bulutangkis"> Bulutangkis<br>
		<input type="checkbox" name="hobi3" value="Futsal"> Futsal<br><br>
		<label>Keterangan : </label><br>
		<textarea name="keterangan" rows="5" cols="30"> </textarea><br><br><br>
		<input type="submit" value="Kirim" name="proses">
	</form>


</body>
</html>