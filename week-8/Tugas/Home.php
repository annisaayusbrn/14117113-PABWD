<HTML>
<HEAD>
	<meta charset="UTF-8">
	<title>Praktikum 8</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="bootstrap/css/bootstrap.css">
	<style type="text/css">
		form{
			display:inline;
		}
	</style>
</HEAD>
<BODY>
	<script src="bootstrap/js/jquery-3.4.1.min.js"></script>
	<script src="bootstrap/js/bootstrap.js"></script>

	<div class="col-md-6">
		<h3>TAMBAH DATA</h3>
		<form action="TambahData.php" method="POST" enctype="multipart/form-data">
			<div class="form-group">
				<label>NRP</label>
				<input type="text" name="nrp" class="form-control">
			</div>
			<div class="form-group">
				<label>Nama</label>
				<input type="text" name="nama" class="form-control">
			</div>
			<div class="form-group">
				<label>Foto</label>
				<input type="file" name="foto" class="form-control">
			</div>
			<div class="form-group">
				<label>Jurusan</label>
				<select name="id" class="form-control">
					<option value="111">Fisika</option>
					<option value="121">Geofisika</option>
					<option value="131">Elektro</option>
					<option value="141">Informatika</option>
				</select>
			</div>
			<button type="submit" name="tambah" class="btn btn-primary">Simpan</button>
		</form>
	</div><br>

	=============================================================

	<div>
		<h3>SEARCH DATA</h3>
		<form action="SearchData.php" method="post">
			Nama :
			<input type="text" name="nama">
			<button type="submit" class="btn btn-primary">Cari Data</button>
		</form>
	</div><br>
	=============================================================

	<div>
		<h3>HAPUS DATA</h3>
		<form action="HapusData.php" method="post">
			Nama :
			<input type="text" name="nama">
			<button type="submit" class="btn btn-primary">Hapus Data</button>
		</form>
	</div><br><br>
</BODY>
</HTML>