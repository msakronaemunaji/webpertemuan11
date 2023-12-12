<?php 

	require 'database-proses.php'; // METODE FUNCION ON


	
	if( isset($_POST["submit"])){ // METODE FUNCION ON


		if (tambah($_POST) > 0){ // METODE FUNCION ON

		
			echo "
				<script>
					alert('Data Berhasil Di Tambahkan');
					document.location.href = 'database.php';
				</script>
			";
		}else{
			echo " 
				<script>
					alert('Data Gagal Di Tambahkan');
					document.location.href = 'database.php';
				</script>
			";
		}
	}
 ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>INPUT DATA  MAHASISWA</title>
</head>
<body>
	<h1>INPUT DATA MAHASISWA</h1>
</body>
</html>
	<!-- FROM HARUS MEMPUNYAI DUA PARAMETER -->
	<form action="" method="post">
		<input type="hidden" name="id" value="<?php echo $mhs["id"]; ?>">
		<ul>
			<li>
				<label>Nim :</label>
				<input type="text" name="nim" required>
			</li>
			<li>
				<label>Nama :</label>
				<input type="text" name="nama" required>
			</li>
			<li>
				<label>Tgl Lahir :</label>
				<input type="text" name="tgllahir" required>
			</li>
			<li>
				<label>Alamat :</label>
				<input type="text" name="alamat" required>
			</li>
			<li>
				<label>Agama :</label>
				<input type="text" name="agama" required>
			</li>
			<li>
				<button type="submit" name="submit">Kirim</button>
			</li>
		</ul>
	</form>