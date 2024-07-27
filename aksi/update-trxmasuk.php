<?php
include "../inc/koneksi.php";
if (isset($_POST['proses'])) {
	$id_trxmasuk = $_GET['id_trxmasuk'];
	$username = $_POST['username'];
	$nama_barang = $_POST['nama_barang'];
	$nama_supplier = $_POST['nama_supplier'];
	$tgl_beli = $_POST['tgl_beli'];
	$jml_barangmasuk = $_POST['jml_barangmasuk'];
	$harga_beli = $_POST['harga_beli'];
	$total = $_POST['total'];
	

	$query_insert = mysqli_query($koneksi,"UPDATE trx_masuk SET id_admin='$username',id_namabarang='$nama_barang',id_namasupplier='$nama_supplier',tgl_beli='$tgl_beli',jml_barangmasuk='$jml_barangmasuk',harga_beli='$harga_beli',total='$total' WHERE id_trxmasuk='$id_trxmasuk'");
	if ($query_insert) {
		header("location: ../../trx-masuk");
	} else {
		echo "<script> alert(DATA GAGAL DITAMBAH, SILAHKAN COBA KEMBALI');
              window.location = '../../trx-masuk';
              </script>";
	}
}
?>