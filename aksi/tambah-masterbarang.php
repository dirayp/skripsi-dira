<?php
include "../inc/koneksi.php";
if (isset($_POST['proses'])) {
	$username = $_POST['username'];
	$nama_barang = $_POST['nama_barang'];
	$satuan = $_POST['satuan'];
	$ukuran = $_POST['ukuran'];
	$warna = $_POST['warna'];

	$query_insert = mysqli_query($koneksi,"INSERT INTO master_barang (id_admin,nama_barang,satuan,ukuran,warna) VALUES ('$username','$nama_barang','$satuan','$ukuran','$warna')");
	if ($query_insert) {
		header("location: ../master-barang");
	} else {
		echo "<script> alert(DATA GAGAL DITAMBAH, SILAHKAN COBA KEMBALI');
              window.location = '../master-barang';
              </script>";
	}
}
?>
