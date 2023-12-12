<?php 	
	$conn = mysqli_connect("localhost", "root", "", "mahasiswa");
 
	function query($query) {
		global $conn;
		$result = mysqli_query($conn, $query);
		$rows = [];
		while ($row = mysqli_fetch_assoc($result)) {
			$rows[] = $row;
		}
		return $rows;
	}

	function tambah($data){
		global $conn;

		$nim = htmlspecialchars($data["nim"]);
		$nama = htmlspecialchars($data["nama"]);
		$tgllahir = htmlspecialchars($data["tgllahir"]);
		$alamat = htmlspecialchars($data["alamat"]);
		$agama = htmlspecialchars($data["agama"]);

		$query = "INSERT INTO maba VALUES ('','$nim','$nama','$tgllahir','$alamat','$agama')";
		mysqli_query($conn, $query);

		return mysqli_affected_rows($conn);
	}

	function hapus($id) {
		global $conn;
		mysqli_query($conn, "DELETE FROM maba WHERE id = $id");

		return mysqli_affected_rows($conn);
	}

	function ubah($data) {
		global $conn;

		$id = $data["id"];
		$nim = htmlspecialchars($data["nim"]);
		$nama = htmlspecialchars($data["nama"]);
		$tgllahir = htmlspecialchars($data["tgllahir"]);
		$alamat = htmlspecialchars($data["alamat"]);
		$agama = htmlspecialchars($data["agama"]);

		$query = "UPDATE maba SET
				nim = '$nim',
				nama = '$nama',
				tgllahir = '$tgllahir',
				alamat = '$alamat',
				agama = '$agama'
				WHERE id = $id;
				";

		mysqli_query($conn, $query);
		return mysqli_affected_rows($conn);
	}

 ?>