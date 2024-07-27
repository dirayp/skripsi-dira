<?php
include "../inc/koneksi.php";
if (isset($_POST['proses'])) {
	$username = $_POST['username'];
	$nama_barang = $_POST['nama_barang'];
	$tgl_jual = $_POST['tgl_jual'];
	$jml_barangkeluar = $_POST['jml_barangkeluar'];
	$harga_jual = $_POST['harga_jual'];
	$total = $_POST['total'];

	$query_insert = mysqli_query($koneksi,"INSERT INTO trx_keluar (id_admin,id_namabarang,tgl_jual,jml_barangkeluar,harga_jual,total) VALUES ('$username','$nama_barang','$tgl_jual','$jml_barangkeluar','$harga_jual','$total')");
	if ($query_insert) {
		header("location: ../trx-keluar");
	} else {
		echo "<script> alert(DATA GAGAL DITAMBAH, SILAHKAN COBA KEMBALI');
              window.location = '../trx-keluar';
              </script>";
	}
}
?>