<?php 

require 'database-proses.php';

	$id = $_GET["id"];

	if(hapus($id) > 0){
		echo "
				<script>
					alert('Data Berhasil Di Hapus');
					document.location.href = 'database.php';
				</script>
			";
	}else{
		echo "
				<script>
					alert('Data Gagal Di Hapus');
					document.location.href = 'database.php';
				</script>
			";
	}
 ?>