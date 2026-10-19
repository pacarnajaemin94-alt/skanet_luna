<?php
include "koneksi.php";

// Ambil NIS dari link
$nis = $_GET['nis'];

// Hapus data
$query = mysqli_query($koneksi, "DELETE FROM siswa WHERE nis='$nis'");

if ($query) {
    echo "<script>alert('Data berhasil dihapus!'); location='index.php';</script>";
} else {
    echo "<script>alert('Data gagal dihapus!'); location='index.php';</script>";
}
?>