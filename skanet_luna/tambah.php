<?php
include "koneksi.php";

// Kalau tombol simpan ditekan
if (isset($_POST['simpan'])) {
    $nis = $_POST['nis'];
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];

    // Masukkan data ke database
    $query = mysqli_query($koneksi, "INSERT INTO siswa VALUES ('$nis', '$nama', '$alamat')");

    if ($query) {
        echo "<script>alert('Data berhasil ditambahkan!'); location='index.php';</script>";
    } else {
        echo "<script>alert('Data gagal ditambahkan!');</script>";
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Tambah Data Siswa</title>
    <style>
        body { font-family: Arial; }
        h2 { margin-bottom: 20px; }
        form { width: 300px; }
        label { display: block; margin: 10px 0 5px; }
        input { width: 100%; padding: 6px; margin-bottom: 5px; }
        button { padding: 8px 15px; margin-top: 10px; cursor: pointer; }
        .btn-kembali { text-decoration: none; padding: 6px 12px; background: #ccc; color: #000; margin-left: 10px; }
    </style>
</head>
<body>

<h2>Tambah Data Siswa</h2>

<form method="post" action="">
    <label>NIS</label>
    <input type="number" name="nis" required>

    <label>Nama</label>
    <input type="text" name="nama" required>

    <label>Alamat</label>
    <input type="text" name="alamat" required>

    <button type="submit" name="simpan">Simpan</button>
    <a href="index.php" class="btn-kembali">Kembali</a>
</form>

</body>
</html>