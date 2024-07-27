<?php
include "inc/koneksi.php";
include "session.php";
$user = mysqli_fetch_array(mysqli_query($koneksi,"SELECT * FROM admin WHERE username='$cek_session'"));
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="./assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="./assets/img/logo1.jpg">
  <title>
    UMKM Lareech Clothing
  </title>
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
  <!-- Nucleo Icons -->
  <link href="./assets/css/nucleo-icons.css" rel="stylesheet" />
  <link href="./assets/css/nucleo-svg.css" rel="stylesheet" />
  <!-- Font Awesome Icons -->
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
  <link href="./assets/css/nucleo-svg.css" rel="stylesheet" />
  <!-- CSS Files -->
  <link id="pagestyle" href="./assets/css/argon-dashboard.css?v=2.0.4" rel="stylesheet" />
  <link rel="stylesheet" type="text/css" href="https://code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.13.6/css/dataTables.jqueryui.min.css">
</head>

<body class="g-sidenav-show   bg-gray-100">
  <div class="min-height-300 bg-primary position-absolute w-100"></div>
  <aside class="sidenav bg-white navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-4 " id="sidenav-main">
    <div class="sidenav-header">
      <i class="fas fa-times p-3 cursor-pointer text-secondary opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
      <a class="navbar-brand m-0" href="#">
        <img src="./assets/img/logo1.jpg" class="navbar-brand-img h-100" alt="main_logo">
        <span class="ms-1 font-weight-bold">Admin Lareech Clothing</span>
      </a>
    </div>
<hr class="horizontal dark mt-0">
    <div class="collapse navbar-collapse w-auto" id="sidenav-collapse-main">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" href="index.php">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="ni ni-tv-2 text-primary text-sm opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">Beranda</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="" data-bs-toggle="collapse" data-bs-target="#masterdata">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="ni ni-world-2 text-danger text-sm opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">Master Data</span>
          </a>
          <div class="collapse" id="masterdata">
            <ul class="navbar-nav ps-3">
              <li class="nav-item">
                <a href="master-admin.php" class="nav-link px-3">
                  <span class="nav-link-text ms-1">Master Admin</span>
                </a>
              </li>
              <li class="nav-item">
                <a href="master-barang.php" class="nav-link px-3">
                  <span class="nav-link-text ms-1">Master Barang</span>
                </a>
              </li>
              <li class="nav-item">
                <a href="master-supplier.php" class="nav-link px-3">
                  <span class="nav-link-text ms-1">Master Supplier</span>
                </a>
              </li>
            </ul>
          </div>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="" data-bs-toggle="collapse" data-bs-target="#transaksi">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="ni ni-credit-card text-success text-sm opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">Transaksi</span>
          </a>
          <div class="collapse" id="transaksi">
            <ul class="navbar-nav ps-3">
              <li class="nav-item">
                <a href="trx-masuk.php" class="nav-link px-3">
                  <span class="nav-link-text ms-1">Transaksi Masuk</span>
                </a>
              </li>
              <li class="nav-item">
                <a href="trx-keluar.php" class="nav-link px-3">
                  <span class="nav-link-text ms-1">Transaksi Keluar</span>
                </a>
              </li>
            </ul>
          </div>
        </li>
      </ul>
    </div>
  </aside>
  <main class="main-content position-relative border-radius-lg ">
    <!-- Navbar -->
    <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl " id="navbarBlur" data-scroll="false">
      <div class="container-fluid py-1 px-3">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
            <li class="breadcrumb-item text-sm"><a class="opacity-5 text-white" href="">Pages</a></li>
            <li class="breadcrumb-item text-sm text-white active" aria-current="page">Beranda</li>
          </ol>
          <h6 class="font-weight-bolder text-white mb-0">Beranda</h6>
        </nav>
        <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
          <div class="ms-md-auto pe-md-3 d-flex align-items-center">
            <div class="input-group">
              <ul class="navbar-nav  justify-content-end">
              <li class="nav-item d-flex align-items-center">
                <a href="logout.php" class="nav-link text-white font-weight-bold px-0">
                  <i class="fa fa-user me-sm-1"></i>
                  <span class="d-sm-inline d-none">Keluar</span>
                </a>
              </li>
            </div>
          </div>
        </div>
      </div>
    </nav>
    <!-- End Navbar -->
    <div class="container-fluid py-4">
      <div class="row">
        <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
          <div class="card">
            <div class="card-body p-3">
              <div class="row">
                <div class="col-8">
                  <div class="numbers">
                    <p>Master Barang</p>
                  </div>
                  <a href="master-barang.php" class="small-box-footer">Selengkapnya <i class="fas fa-arrow-circle-right"></i></a>
                </div>
                <div class="col-4 text-end">
                  <div class="icon icon-shape bg-gradient-primary shadow-primary text-center rounded-circle">
                    <i class="ni ni-money-coins text-lg opacity-10" aria-hidden="true"></i>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
          <div class="card">
            <div class="card-body p-3">
              <div class="row">
                <div class="col-8">
                  <div class="numbers">
                    <p>Master Supplier</p>
                  </div>
                  <a href="master-supplier.php" class="small-box-footer">Selengkapnya <i class="fas fa-arrow-circle-right"></i></a>
                </div>
                <div class="col-4 text-end">
                  <div class="icon icon-shape bg-gradient-danger shadow-danger text-center rounded-circle">
                    <i class="ni ni-world text-lg opacity-10" aria-hidden="true"></i>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
          <div class="card">
            <div class="card-body p-3">
              <div class="row">
                <div class="col-8">
                  <div class="numbers">
                    <p>Transaksi Masuk</p>
                  </div>
                  <a href="trx-masuk.php" class="small-box-footer">Selengkapnya <i class="fas fa-arrow-circle-right"></i></a>
                </div>
                <div class="col-4 text-end">
                  <div class="icon icon-shape bg-gradient-success shadow-success text-center rounded-circle">
                    <i class="ni ni-paper-diploma text-lg opacity-10" aria-hidden="true"></i>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-sm-6">
          <div class="card">
            <div class="card-body p-3">
              <div class="row">
                <div class="col-8">
                  <div class="numbers">
                    <p>Transaksi Keluar</p>
                  </div>
                  <a href="trx-keluar.php" class="small-box-footer">Selengkapnya <i class="fas fa-arrow-circle-right"></i></a>
                </div>
                <div class="col-4 text-end">
                  <div class="icon icon-shape bg-gradient-warning shadow-warning text-center rounded-circle">
                    <i class="ni ni-cart text-lg opacity-10" aria-hidden="true"></i>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="row mt-4">
        <div class="col-12">
          <div class="card mb-4">
            <div class="card-header pb-0">
              <h5>Stok Barang</h5>
            </div>
            <div class="card-body px-0 pt-0 pb-2">
              <div class="table-responsive p-0">
                  <table class="display" id="example" style="width:100%">
                      <thead>
                          <tr>
                              <th class="text-center text-dark text-secondary text-sm font-weight-bolder opacity-7">No</th>
                              <th class="text-dark text-secondary text-sm font-weight-bolder opacity-7 ps-2">Nama Barang</th>
                              <th class="text-dark text-secondary text-sm font-weight-bolder opacity-7 ps-2">Ukuran</th>
                              <th class="text-dark text-secondary text-sm font-weight-bolder opacity-7 ps-2">Warna</th>
                              <th class="text-dark text-secondary text-sm font-weight-bolder opacity-7 ps-2">Stok MIN</th>
                              <th class="text-dark text-secondary text-sm font-weight-bolder opacity-7 ps-2">Stok MAX</th>
                              <th class="text-dark text-secondary text-sm font-weight-bolder opacity-7 ps-2">Sisa</th>
                              <th class="text-dark text-secondary text-sm font-weight-bolder opacity-7 ps-2">Satuan</th>
                              <th class="text-dark text-secondary text-sm font-weight-bolder opacity-7 ps-2">Safety Stock</th>
                          </tr>
                      </thead>
                      <tbody>
                          <?php
                          $query = mysqli_query($koneksi,"SELECT * FROM trx_masuk GROUP BY id_namabarang ORDER BY id_trxmasuk ASC");
                          $tanggalsekarang = date("Y-m-d");
                          $tanggalawal = date("Y-m-01", strtotime($tanggalsekarang));

                          $no = 1;
                          while ($trx_masuk = mysqli_fetch_array($query)) {
                              $master_barang = mysqli_fetch_array(mysqli_query($koneksi,"SELECT * FROM master_barang WHERE id_namabarang='$trx_masuk[id_namabarang]'"));
                              $jumlah_persediaan = mysqli_fetch_array(mysqli_query($koneksi,"SELECT SUM(jml_barangmasuk) AS total FROM trx_masuk WHERE id_namabarang='$master_barang[id_namabarang]'"));
                              $jumlah_permintaan = mysqli_fetch_array(mysqli_query($koneksi,"SELECT SUM(jml_barangkeluar) AS total FROM trx_keluar WHERE id_namabarang='$master_barang[id_namabarang]'"));
                              $sisa = $jumlah_persediaan['total'] - $jumlah_permintaan['total'];
                              $minimum = mysqli_fetch_array(mysqli_query($koneksi,"SELECT AVG(jml_barangkeluar)*14 AS total FROM trx_keluar WHERE id_namabarang='$master_barang[id_namabarang]'AND tgl_jual BETWEEN '$tanggalawal' AND '$tanggalsekarang' "));
                              $maximum = mysqli_fetch_array(mysqli_query($koneksi,"SELECT MAX(jml_barangkeluar)*14 AS total FROM trx_keluar WHERE id_namabarang='$master_barang[id_namabarang]'AND tgl_jual BETWEEN '$tanggalawal' AND '$tanggalsekarang' "));
                              $nilaitengah = (($minimum['total'] + $maximum['total']) / 2);

                              // Perhitungan Safety Stock
                              $safety_stock = round($nilaitengah - $sisa);
                              if ($safety_stock > 0) {
                                  $style = '<td style="background:green;color:white;">Tambah Stok: ' . $safety_stock . '</td>';
                              } else {
                                  $style = '<td style="background:red;color:white;">Stok Aman</td>';
                              }

                              // Menampilkan hasil Safety Stock dalam tabel
                              echo '<tr>';
                              echo '<td>' . $no . '</td>';
                              echo '<td>' . $master_barang['nama_barang'] . '</td>';
                              echo '<td>' . $master_barang['ukuran'] . '</td>';
                              echo '<td>' . $master_barang['warna'] . '</td>';
                              echo '<td>' . ceil($minimum['total']) . '</td>';
                              echo '<td>' . $maximum['total'] . '</td>';
                              echo '<td>' . $sisa . '</td>';
                              echo '<td>' . $master_barang['satuan'] . '</td>';
                              echo $style;
                              echo '</tr>';

                              $no++;
                          }
                          ?>
                      </tbody>
                  </table>
              </div>
          </div>
          </div>
        </div>
      </div>
    <footer class="footer pt-3">
      <div class="container-fluid">
        <div class="row align-items-center justify-content-lg-between">
          <div class="col-lg-6 mb-lg-0 mb-4">
            <div class="copyright text-center text-sm text-muted text-lg-start">
              © <script>document.write(new Date().getFullYear())</script>,
              made with <i class="fa fa-heart"></i> by
              <a href="#">UMKM Lareech Clothing</a>
             </div>
            </div>
          </div>
        </div>
      </footer>
    </div>
  </main>
  <!--   Core JS Files   -->
  <script src="./assets/js/core/popper.min.js"></script>
  <script src="./assets/js/core/bootstrap.min.js"></script>
  <script src="./assets/js/plugins/perfect-scrollbar.min.js"></script>
  <script src="./assets/js/plugins/smooth-scrollbar.min.js"></script>
  <script src="./assets/js/plugins/chartjs.min.js"></script>
  <script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true,
      "autoWidth": false,
    });
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>
  <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
  <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/1.13.6/js/dataTables.jqueryui.min.js"></script>
  <!-- Github buttons -->
  <script async defer src="https://buttons.github.io/buttons.js"></script>
  <!-- Control Center for Soft Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="./assets/js/argon-dashboard.min.js?v=2.0.4"></script>
  <script>
    $('#example').DataTable();
  </script>
</body>

</html>