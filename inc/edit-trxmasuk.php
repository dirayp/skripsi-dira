<?php
include "koneksi.php";
include "../session.php";
$user = mysqli_fetch_array(mysqli_query($koneksi,"SELECT * FROM admin WHERE username='$cek_session'"));
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="../../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../../assets/img/logo1.jpg">
  <title>
    UMKM Lareech Clothing
  </title>
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
  <!-- Nucleo Icons -->
  <link href="../../assets/css/nucleo-icons.css" rel="stylesheet" />
  <link href="../../assets/css/nucleo-svg.css" rel="stylesheet" />
  <!-- Font Awesome Icons -->
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
  <link href="../../assets/css/nucleo-svg.css" rel="stylesheet" />
  <!-- CSS Files -->
  <link id="pagestyle" href="../../assets/css/argon-dashboard.css?v=2.0.4" rel="stylesheet" />
</head>

<body class="g-sidenav-show bg-gray-100">
  <div class="min-height-300 bg-primary position-absolute w-100"></div>
  <aside class="sidenav bg-white navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-4" id="sidenav-main">
    <div class="sidenav-header">
      <i class="fas fa-times p-3 cursor-pointer text-secondary opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
      <a class="navbar-brand m-0" href="#">
        <img src="../../assets/img/logo1.jpg" class="navbar-brand-img h-100" alt="main_logo">
        <span class="ms-1 font-weight-bold text-sm">Admin Lareech Clothing</span>
      </a>
    </div>
    <hr class="horizontal dark mt-0">
    <div class="collapse navbar-collapse w-auto" id="sidenav-collapse-main">
      
    </div>
  </aside>

  <main class="main-content position-relative border-radius-lg ">
    <!-- Navbar -->
    <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl " id="navbarBlur" data-scroll="false">
      <div class="container-fluid py-1 px-3">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
            <li class="breadcrumb-item text-sm"><a class="opacity-5 text-white" href="">Pages</a></li>
            <li class="breadcrumb-item text-sm text-white active" aria-current="page">Edit Transaksi Masuk</li>
          </ol>
          <h6 class="font-weight-bolder text-white mb-0">Edit Transaksi Masuk</h6>
        </nav>
        <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
          <div class="ms-md-auto pe-md-3 d-flex align-items-center">
            <div class="input-group">
              
            </div>
          </div>
          <ul class="navbar-nav  justify-content-end">
            <li class="nav-item d-flex align-items-center">
              <a href="logout.php" class="nav-link text-white font-weight-bold px-0">
                <i class="fa fa-user me-sm-1"></i>
                <span class="d-sm-inline d-none">Keluar</span>
              </a>
            </li>
        </div>
      </div>
    </nav>
    <!-- End Navbar -->
    <div class="container-fluid py-4">
      <div class="row">
        <div class="col-12">
          <div class="card mb-4">
            <div class="card-header pb-0">
              <h5>Edit Transaksi Masuk</h5>
            </div>
            <div class="card-body px-0 pt-0 pb-2">
              <div class="table-responsive p-0">
                <?php
                  include "koneksi.php";
                  $id_trxmasuk = $_GET['id_trxmasuk'];
                  $query = mysqli_query($koneksi,"SELECT * FROM trx_masuk WHERE id_trxmasuk='$id_trxmasuk'");
                  $ambil = mysqli_fetch_array($query);
                ?>
                  <div class="card-body ">
                  <a href="../../trx-masuk" class="btn btn-danger btn-sm"><i class="fa fa-arrow-left"></i> Kembali</a>
                  <hr style="margin-top: 13px;">
                  <form class="form-horizontal" action="../../aksi/update-trxmasuk/<?php echo $ambil['id_trxmasuk'];?>" method="POST">

                  <div class="form-group row">
                  <label class="col-sm-3 text-sm control-label">Nama Staff</label>
                  <div class="col-sm-3">
                  <select name="username" class="form-control" required="">
                <?php
                  $select = mysqli_query($koneksi,"SELECT * FROM admin ORDER BY id_admin DESC");
                  while ($pilihadmin = mysqli_fetch_array($select)) {
                  if ($pilihadmin['id_admin'] == $ambil['id_admin']) {
                  $pilih = "selected";
                  } else {
                  $pilih = "";
                  }
                  echo '<option value="'.$pilihadmin['id_admin'].'" '.$pilih.'>'.$pilihadmin['username'].'</option>';
                  }
                ?>
                  </select>
                  </div>
                  </div>
                  <div class="form-group row">
                  <label class="col-sm-3 text-sm control-label">Nama Barang</label>
                  <div class="col-sm-3">
                  <select name="nama_barang" class="form-control" required="">
                <?php
                  $select = mysqli_query($koneksi,"SELECT * FROM master_barang ORDER BY id_namabarang DESC");
                  while ($pilihbarang = mysqli_fetch_array($select)) {
                  if ($pilihbarang['id_namabarang'] == $ambil['id_namabarang']) {
                  $pilih = "selected";
                  } else {
                  $pilih = "";
                  }
                  echo '<option value="'.$pilihbarang['id_namabarang'].'" '.$pilih.'>'.$pilihbarang['nama_barang'].'</option>';
                  }
                ?>
                  </select>
                  </div>
                  </div>
                  <div class="form-group row">
                  <label class="col-sm-3 text-sm control-label">Ukuran</label>
                  <div class="col-sm-3">
                  <select name="nama_barang" class="form-control" required="">
                <?php
                  $select = mysqli_query($koneksi,"SELECT * FROM master_barang ORDER BY id_namabarang DESC");
                  while ($pilihukuran = mysqli_fetch_array($select)) {
                  if ($pilihukuran['id_namabarang'] == $ambil['id_namabarang']) {
                  $pilih = "selected";
                  } else {
                  $pilih = "";
                  }
                  echo '<option value="'.$pilihukuran['id_namabarang'].'" '.$pilih.'>'.$pilihukuran['ukuran'].'</option>';
                  }
                ?>
                  </select>
                  </div>
                  </div>
                  <div class="form-group row">
                  <label class="col-sm-3 text-sm control-label">Warna</label>
                  <div class="col-sm-3">
                  <select name="nama_barang" class="form-control" required="">
                <?php
                  $select = mysqli_query($koneksi,"SELECT * FROM master_barang ORDER BY id_namabarang DESC");
                  while ($pilihwarna = mysqli_fetch_array($select)) {
                  if ($pilihwarna['id_namabarang'] == $ambil['id_namabarang']) {
                  $pilih = "selected";
                  } else {
                  $pilih = "";
                  }
                  echo '<option value="'.$pilihwarna['id_namabarang'].'" '.$pilih.'>'.$pilihwarna['warna'].'</option>';
                  }
                ?>
                  </select>
                  </div>
                  </div>
                  <div class="form-group row">
                  <label class="col-sm-3 text-sm control-label">Nama Supplier</label>
                  <div class="col-sm-3">
                  <select name="nama_supplier" class="form-control" required="">
                <?php
                  $select = mysqli_query($koneksi,"SELECT * FROM master_supplier ORDER BY id_namasupplier DESC");
                  while ($pilihsupplier = mysqli_fetch_array($select)) {
                  if ($pilihsupplier['id_namasupplier'] == $ambil['id_namasupplier']) {
                  $pilih = "selected";
                  } else {
                  $pilih = "";
                  }
                  echo '<option value="'.$pilihsupplier['id_namasupplier'].'" '.$pilih.'>'.$pilihsupplier['nama_supplier'].'</option>';
                  }
                ?>
                  </select>
                  </div>
                  </div>
                  <div class="form-group row">
                  <label class="col-sm-3 text-sm control-label">Tanggal Beli</label>
                  <div class="col-sm-3">
                  <input type="date" name="tgl_beli" class="form-control" value="<?php echo $ambil['tgl_beli'];?>">
                  </div>
                  </div>
                  <div class="form-group row">
                  <label class="col-sm-3 text-sm control-label">Jumlah Barang Masuk</label>
                  <div class="col-sm-3">
                  <input type="number" id="jml_barangmasuk" name="jml_barangmasuk" class="form-control" value="<?php echo $ambil['jml_barangmasuk'];?>" onchange="calculateTotal()">
                  </div>
                  </div>
                  <div class="form-group row">
                  <label class="col-sm-3 text-sm control-label">Harga Beli</label>
                  <div class="col-sm-3">
                  <input type="number" id="harga_beli" name="harga_beli" class="form-control" value="<?php echo $ambil['harga_beli'];?>" onchange="calculateTotal()">
                  </div>
                  </div>
                  <div class="form-group row">
                  <label class="col-sm-3 text-sm control-label">Total</label>
                  <div class="col-sm-3">
                  <input type="number" id="total" name="total" class="form-control" required="" readonly="readonly" value="<?php echo $ambil['total'];?>">
                  </div>
                  </div>
                  <hr>
                  <div class="form-group">
                  <div class="offset-md-3 col-md-9">
                  <button type="submit" name="proses" class="btn btn-primary btn-sm">Edit</button>
                  </div>
                  </div>
                  </form>
                  </div>
                  <script>
                  function calculateTotal() {
                  var harga_beli = parseFloat(document.getElementById('harga_beli').value) || 0;
                  var jml_barangmasuk = parseFloat(document.getElementById('jml_barangmasuk').value) || 0;
                  var result = harga_beli * jml_barangmasuk;
                                  
                  document.getElementById('total').value = result;
                  }
                 </script>
              </div>
            </div>
            
  <footer class="footer pt-3">
    <div class="container-fluid">
      <div class="row align-items-center justify-content-lg-between">
        <div class="col-lg-6 mb-lg-0 mb-4">
          <div class="copyright text-center text-sm text-muted text-lg-start">
            © <script>document.write(new Date().getFullYear())</script>, made with <i class="fa fa-heart"></i> by <a href="#">UMKM Lareech Clothing</a>
          </div>
        </div>
      </div>
    </div>
  </footer>
</body>
</html>