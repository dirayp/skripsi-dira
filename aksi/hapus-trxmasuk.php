<?php 
include "../inc/koneksi.php";
$id_trxmasuk = $_GET['id_trxmasuk'];

$q  = mysqli_query($koneksi,"DELETE FROM trx_masuk WHERE id_trxmasuk='$id_trxmasuk'");
header("location: ../../trx-masuk");
?>