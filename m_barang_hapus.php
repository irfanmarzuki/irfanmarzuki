<?php
//menambahkan modul koneksi
include 'koneksi.php';

$kd_barang = $_GET['kd_barang'];

$sql = "DELETE FROM barang WHERE kd_barang = '$kd_barang'";
if ($del = mysqli_query($koneksi,$sql))
echo "<script>alert('Data ini sudah dihapus...');window.location='m_barang.php'</script>";
else die('Gagal Menyimpan karena'.mysqli_error());

?>