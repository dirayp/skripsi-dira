<?php
include "../inc/koneksi.php";
if (isset($_POST['proses'])) {
	$username = $_POST['username'];
	$password = $_POST['password'];

	$query_insert = mysqli_query($koneksi,"INSERT INTO admin (username,password) VALUES ('$username','$password')");
	if ($query_insert) {
		header("location: ../master-admin");
	} else {
		echo "<script> alert(DATA GAGAL DITAMBAH, SILAHKAN COBA KEMBALI');
              window.location = '../master-admin';
              </script>";
	}
}
?>
