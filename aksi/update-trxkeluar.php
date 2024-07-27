<?php
include "../inc/koneksi.php";
if (isset($_POST['proses'])) {
  $id_trxkeluar = $_GET['id_trxkeluar'];
  $username = $_POST['username'];
  $nama_barang = $_POST['nama_barang'];
  $tgl_jual = $_POST['tgl_jual'];
  $jml_barangkeluar = $_POST['jml_barangkeluar'];
  $harga_jual = $_POST['harga_jual'];
  $total = $_POST['total'];
  

  $query_insert = mysqli_query($koneksi,"UPDATE trx_keluar SET id_admin='$username',id_namabarang='$nama_barang',tgl_jual='$tgl_jual',jml_barangkeluar='$jml_barangkeluar',harga_jual='$harga_jual',total='$total' WHERE id_trxkeluar='$id_trxkeluar'");
  if ($query_insert) {
    header("location: ../../trx-keluar");
  } else {
    echo "<script> alert(DATA GAGAL DITAMBAH, SILAHKAN COBA KEMBALI');
              window.location = '../../trx-keluar';
              </script>";
  }
}
?>