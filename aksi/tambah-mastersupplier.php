<?php
include "../inc/koneksi.php";
if (isset($_POST['proses'])) {
	$username = $_POST['username'];
	$nama_supplier = $_POST['nama_supplier'];
	$alamat = $_POST['alamat'];
	$no_telp = $_POST['no_telp'];

	$query_insert = mysqli_query($koneksi,"INSERT INTO master_supplier (id_admin,nama_supplier,alamat,no_telp) VALUES ('$username','$nama_supplier','$alamat','$no_telp')");
	if ($query_insert) {
		header("location: ../master-supplier");
	} else {
		echo "<script> alert(DATA GAGAL DITAMBAH, SILAHKAN COBA KEMBALI');
              window.location = '../master-supplier';
              </script>";
	}
}
?>