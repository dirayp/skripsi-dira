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
          <a class="nav-link" href="index.php">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="ni ni-tv-2 text-primary text-sm opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">Beranda</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="" data-bs-toggle="collapse" data-bs-target="#masterdata">
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
                <a href="master-barang.php" class="nav-link active px-3">
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
            <li class="breadcrumb-item text-sm text-white active" aria-current="page">Barang</li>
          </ol>
          <h6 class="font-weight-bolder text-white mb-0">Barang</h6>
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
          <h5>Master Barang</h5>

          <!-- Button trigger modal -->
          <button type="button" class="btn bg-gradient-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
            Tambah Data Barang
          </button>

          <!-- Modal -->
          <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Masukkan Data</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  <form action="aksi/tambah-masterbarang" method="POST">
                    <div class="form-group">
                    <label class="col-form-label">Nama Staff</label>
                    <select name="username" id="username" class="form-control" required="" onchange='changeValue(this.value)'>
                    <option value="" disabled selected>Pilih Nama staff</option>
                      <?php 
                       include "inc/koneksi.php";
                        $query = mysqli_query($koneksi, "select * from admin order by username asc");   
                        while ($ambil = mysqli_fetch_array($query)) {  
                             echo '<option name="username" value="'.$ambil['id_admin'].'">'.$ambil['username'].'</option>';
                       }?> 
                    </select>
                    </div>
                    <div class="form-group">
                    <label for="recipient-name" class="col-form-label">Nama Barang</label>
                    <input type="text" name="nama_barang" class="form-control" required="">
                    </div>
                    <div class="form-group">
                    <label for="recipient-name" class="col-form-label">Satuan</label>
                    <input type="text" name="satuan" class="form-control" required="">
                    </div>
                    <div class="form-group">
                    <label for="recipient-name" class="col-form-label">Ukuran</label>
                    <input type="text" name="ukuran" class="form-control" required="">
                    </div>
                    <div class="form-group">
                    <label for="recipient-name" class="col-form-label">Warna</label>
                    <input type="text" name="warna" class="form-control" required="">
                    </div>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn bg-gradient-secondary" data-bs-dismiss="modal">Keluar</button>
                  <button type="submit" class="btn bg-gradient-primary" name="proses">Tambah</button>
                </div>
                </form>
              </div>
            </div>
          </div>
        </div>

        <div class="card-body px-0 pt-0 pb-2">
          <div class="table-responsive p-0">
            <table class="display" id="example" style="width:100%">
              <thead>
                <tr>
                  <th class="text-center text-dark text-secondary text-sm font-weight-bolder opacity-7">No</th>
                      <th class="text-dark text-secondary text-sm font-weight-bolder opacity-7 ps-2">Nama Staff</th>
                      <th class="text-dark text-secondary text-sm font-weight-bolder opacity-7 ps-2">Nama Barang</th>
                      <th class="text-dark text-secondary text-sm font-weight-bolder opacity-7 ps-2">Satuan</th>
                      <th class="text-dark text-secondary text-sm font-weight-bolder opacity-7 ps-2">Ukuran</th>
                      <th class="text-dark text-secondary text-sm font-weight-bolder opacity-7 ps-2">Warna</th>
                      <th class="text-center text-dark text-secondary text-sm font-weight-bolder opacity-7">Aksi</th>
                </tr>
              </thead>
              <tbody>
                    <?php
                      $query = mysqli_query($koneksi,"SELECT * FROM master_barang INNER JOIN admin ON master_barang.id_admin = admin.id_admin ORDER BY admin.username, master_barang.id_namabarang DESC");
                      $no = 1;
                      while ($master_barang = mysqli_fetch_array($query)) {                    
                      ?>

                <tr>
                    <td class="align-middle text-center">
                          <span class="text-secondary text-dark text-sm font-weight-bold">
                            <?php echo $no; ?>
                          </span>
                        </td>
                        <td class="align-middle text-secondary">
                          <span class="text-secondary text-dark text-sm font-weight-bold">
                            <?php echo ucwords(strtolower($master_barang['username'])); ?>
                          </span>
                        </td>
                        <td class="align-middle text-secondary">
                          <span class="text-secondary text-dark text-sm font-weight-bold">
                            <?php echo $master_barang['nama_barang']; ?>
                          </span>
                        </td>
                        <td class="align-middle text-uppercase">
                          <span class="text-secondary text-dark text-sm font-weight-bold">
                            <?php echo $master_barang['satuan']; ?>
                          </span>
                        </td>
                        <td class="align-middle text-uppercase">
                          <span class="text-secondary text-dark text-sm font-weight-bold">
                            <?php echo $master_barang['ukuran']; ?>
                          </span>
                        </td>
                        <td class="align-middle text-secondary">
                          <span class="text-secondary text-dark text-sm font-weight-bold">
                            <?php echo $master_barang['warna']; ?>
                          </span>
                        </td>
                        <td class="align-middle text-center">
                          <span class="text-secondary text-dark text-sm font-weight-bold">
                            <a href="aksi/hapus-masterbarang/<?php echo $master_barang['id_namabarang']; ?>" onclick="return confirm('HAPUS DATA BARANG INI ?')" style="color: red;"><i class="fa fa-trash"></i></a>&nbsp;&nbsp;
                            <a href="inc/edit-masterbarang/<?php echo $master_barang['id_namabarang']; ?>" style="color: blue;"><i class="fa fa-edit"></i></a>
                          </span>
                        </td>
                </tr>
                <?php $no++; } ?>
              </tbody>
            </table>
          </div>
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
    var ctx1 = document.getElementById("chart-line").getContext("2d");

    var gradientStroke1 = ctx1.createLinearGradient(0, 230, 0, 50);

    gradientStroke1.addColorStop(1, 'rgba(94, 114, 228, 0.2)');
    gradientStroke1.addColorStop(0.2, 'rgba(94, 114, 228, 0.0)');
    gradientStroke1.addColorStop(0, 'rgba(94, 114, 228, 0)');
    new Chart(ctx1, {
      type: "line",
      data: {
        labels: ["Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
        datasets: [{
          label: "Mobile apps",
          tension: 0.4,
          borderWidth: 0,
          pointRadius: 0,
          borderColor: "#5e72e4",
          backgroundColor: gradientStroke1,
          borderWidth: 3,
          fill: true,
          data: [50, 40, 300, 220, 500, 250, 400, 230, 500],
          maxBarThickness: 6

        }],
      },
      options: {
        responsive: true,
        maintainAspectRatio: false,
        plugins: {
          legend: {
            display: false,
          }
        },
        interaction: {
          intersect: false,
          mode: 'index',
        },
        scales: {
          y: {
            grid: {
              drawBorder: false,
              display: true,
              drawOnChartArea: true,
              drawTicks: false,
              borderDash: [5, 5]
            },
            ticks: {
              display: true,
              padding: 10,
              color: '#fbfbfb',
              font: {
                size: 11,
                family: "Open Sans",
                style: 'normal',
                lineHeight: 2
              },
            }
          },
          x: {
            grid: {
              drawBorder: false,
              display: false,
              drawOnChartArea: false,
              drawTicks: false,
              borderDash: [5, 5]
            },
            ticks: {
              display: true,
              color: '#ccc',
              padding: 20,
              font: {
                size: 11,
                family: "Open Sans",
                style: 'normal',
                lineHeight: 2
              },
            }
          },
        },
      },
    });
  </script>
  <script>
    var win = navigator.platform.indexOf('Win') > -1;
    if (win && document.querySelector('#sidenav-scrollbar')) {
      var options = {
        damping: '0.5'
      }
      Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
    }
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