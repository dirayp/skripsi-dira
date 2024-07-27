<?php
include "../inc/koneksi.php";
if (isset($_POST['proses'])) {
	$id_admin = $_GET['id_admin'];
	$username = $_POST['username'];
	$password = $_POST['password'];
	

	$query_insert = mysqli_query($koneksi,"UPDATE admin SET username='$username',password='$password' WHERE id_admin='$id_admin'");
	if ($query_insert) {
		header("location: ../../master-admin");
	} else {
		echo "<script> alert(DATA GAGAL DITAMBAH, SILAHKAN COBA KEMBALI');
              window.location = '../../master-admin';
              </script>";
	}
}
?>