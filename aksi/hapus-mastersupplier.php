<?php 
include "../inc/koneksi.php";
$id_namasupplier = $_GET['id_namasupplier'];

$q  = mysqli_query($koneksi,"DELETE FROM master_supplier WHERE id_namasupplier='$id_namasupplier'");
header("location: ../../master-supplier");
?>