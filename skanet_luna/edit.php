<?php
include"koneksi.php";
$nis=$_GET['nis'];
$querry=mysqli_query($koneksi,"select * from siswa where nis='$nis'");
$data=mysqli_fetch_array($query);

?>
<h1>edit data</h1>
<form action="simpan.php" method="POST">
    nis : <input type="text" name="nis" value="<?php echo $data['nis'] ?>">
    <br>
    nama : <input type="text" name="nama" value="<?php echo $data['nama'] ?>">
    <br>
    alamat : <input type="text" name="alamat" value="<?php echo $data['alamat'] ?>">
    <br>
    <button>simpan</button>
</form> 