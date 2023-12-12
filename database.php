<?php
    require 'database-proses.php';
    $maba = query("SELECT * FROM maba");
    
?>



<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>HALAMAN ADMIN</title>
</head>
<body>
    <h1>DATA MAHASISWA</h1>
    <a href="database-input.php">Tambah Data Mahasiswa</a>
    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>Aksi</th>
            <th>No.</th>
            <th>Nim</th>
            <th>Nama</th>
            <th>Tgl Lahir</th>
            <th>Alamat</th>
            <th>Agama</th>
        </tr>
        <?php $i = 1; ?>
        <?php foreach($maba as $row): ?>
        <tr>
            <td>
                <a href="database-ubah.php?id=<?php echo $row["id"]; ?>">Ubah</a>
                <a href="database-hapus.php?id=<?php echo $row["id"]; ?>" onclick="return confirm('yakin?');">Hapus</a>
            </td>
            <td><?php echo $i; ?></td>
            <td><?php echo $row["nim"]; ?></td>
            <td><?php echo $row["nama"]; ?></td>
            <td><?php echo $row["tgllahir"]; ?></td>
            <td><?php echo $row["alamat"]; ?></td>
            <td><?php echo $row["agama"]; ?></td>
        </tr>
        <?php $i++; ?>
    <?php endforeach; ?>
    </table>
</body>
</html>