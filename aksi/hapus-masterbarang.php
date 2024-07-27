<?php 
include "../inc/koneksi.php";
$id_namabarang = $_GET['id_namabarang'];

$q  = mysqli_query($koneksi,"DELETE FROM master_barang WHERE id_namabarang='$id_namabarang'");
header("location: ../../master-barang");
?>