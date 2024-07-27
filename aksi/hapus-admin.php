<?php 
include "../inc/koneksi.php";
$id_admin = $_GET['id_admin'];

$q  = mysqli_query($koneksi,"DELETE FROM admin WHERE id_admin='$id_admin'");
header("location: ../../master-admin");
?>