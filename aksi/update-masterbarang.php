<?php
include "../inc/koneksi.php";
if (isset($_POST['proses'])) {
	$id_namabarang = $_GET['id_namabarang'];
	$username = $_POST['username'];
	$nama_barang = $_POST['nama_barang'];
	$satuan = $_POST['satuan'];
	$ukuran = $_POST['ukuran'];
	$warna = $_POST['warna'];

	$query_insert = mysqli_query($koneksi,"UPDATE master_barang SET id_admin='$username',nama_barang='$nama_barang',satuan='$satuan',ukuran='$ukuran',warna='$warna' WHERE id_namabarang='$id_namabarang'");
	if ($query_insert) {
		header("location: ../../master-barang");
	} else {
		echo "<script> alert(DATA GAGAL DITAMBAH, SILAHKAN COBA KEMBALI');
              window.location = '../../master-barang';
              </script>";
	}
}
?>