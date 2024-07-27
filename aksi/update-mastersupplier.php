<?php
include "../inc/koneksi.php";
if (isset($_POST['proses'])) {
	$id_namasupplier = $_GET['id_namasupplier'];
	$username = $_POST['username'];
	$nama_supplier = $_POST['nama_supplier'];
	$alamat = $_POST['alamat'];
	$no_telp = $_POST['no_telp'];

	$query_insert = mysqli_query($koneksi,"UPDATE master_supplier SET id_admin='$username',nama_supplier='$nama_supplier',alamat='$alamat',no_telp='$no_telp' WHERE id_namasupplier='$id_namasupplier'");
	if ($query_insert) {
		header("location: ../../master-supplier");
	} else {
		echo "<script> alert(DATA GAGAL DITAMBAH, SILAHKAN COBA KEMBALI');
              window.location = '../../master-supplier';
              </script>";
	}
}
?>