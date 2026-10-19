<?php
include "koneksi.php";
$ambil = mysqli_query($koneksi, "SELECT * FROM siswa");
?>
<!DOCTYPE html>
<html>
<head>
    <title>Data Siswa</title>
    <style>
        body { font-family: Arial; }
        table { border-collapse: collapse; border: 1px solid black; margin-top: 15px; }
        th, td { border: 1px solid black; padding: 6px 12px; }
        .btn-tambah { text-decoration: none; padding: 8px 15px; background: #4CAF50; color: white; display: inline-block; margin-bottom: 10px; }
        .btn-ubah { text-decoration: none; padding: 4px 8px; background: #FFC107; color: #000; margin-right: 5px; }
        .btn-hapus { text-decoration: none; padding: 4px 8px; background: #f44336; color: white; }
    </style>
</head>
<body>

<h2>Data Siswa</h2>

<a href="tambah.php" class="btn-tambah">+ Tambah Data</a>

<table>
    <tr>
        <th>Nis</th>
        <th>Nama</th>
        <th>Alamat</th>
        <th>Aksi</th>
    </tr>
    <?php while ($data = mysqli_fetch_assoc($ambil)) { ?>
    <tr>
        <td><?php echo $data['nis']; ?></td>
        <td><?php echo $data['nama']; ?></td>
        <td><?php echo $data['alamat']; ?></td>
        <td>
            <a href="hapus.php?nis=<?php echo $data['nis'] ?>">hapus</a>
            <a href="edit.php?nis=<?php echo $data['nis'] ?>">edit</a>
        </td>
    </tr>
    <?php } ?>
</table>

</body>
</html>