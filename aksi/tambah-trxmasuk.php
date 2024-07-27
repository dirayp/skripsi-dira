<?php
include "../inc/koneksi.php";
if (isset($_POST['proses'])) {
	$username = $_POST['username'];
	$nama_barang = $_POST['nama_barang'];
	$nama_supplier = $_POST['nama_supplier'];
	$tgl_beli = $_POST['tgl_beli'];
	$jml_barangmasuk = $_POST['jml_barangmasuk'];
	$harga_beli = $_POST['harga_beli'];
	$total = $_POST['total'];

	$query_insert = mysqli_query($koneksi,"INSERT INTO trx_masuk (id_admin,id_namabarang,id_namasupplier,tgl_beli,jml_barangmasuk,harga_beli,total) VALUES ('$username','$nama_barang','$nama_supplier','$tgl_beli','$jml_barangmasuk','$harga_beli','$total')");
	if ($query_insert) {
		header("location: ../trx-masuk");
	} else {
		echo "<script> alert(DATA GAGAL DITAMBAH, SILAHKAN COBA KEMBALI');
              window.location = '../trx-masuk';
              </script>";
	}
}
?>