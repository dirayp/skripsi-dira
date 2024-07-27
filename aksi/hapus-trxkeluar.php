<?php 
include "../inc/koneksi.php";
$id_trxkeluar = $_GET['id_trxkeluar'];

$q  = mysqli_query($koneksi,"DELETE FROM trx_keluar WHERE id_trxkeluar='$id_trxkeluar'");
header("location: ../../trx-keluar");
?>