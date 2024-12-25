<?php
//menambahkan modul koneksi
include 'koneksi.php';

$kd_customer = $_GET['kd_customer'];

$sql = "DELETE FROM customer WHERE kd_customer = '$kd_customer'";
if ($del = mysqli_query($koneksi,$sql))
echo "<script>alert('Data ini sudah dihapus...');window.location='m_customer.php'</script>";
else die('Gagal Menyimpan karena'.mysqli_error());

?>