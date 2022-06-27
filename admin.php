<?php 
session_start();
if(! isset($_SESSION['is_login_admin']))
{
  header('location:login.php');
}

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Jasa Print Online - Admin Dashboard</title>

    <link rel="stylesheet" href="assets/css/bootstrap.css?<?php echo time(); ?>" />
    <link rel="stylesheet" type="text/css" href="assets/css/style.css?<?php echo time(); ?>" />
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico">

    <link rel="stylesheet" href="assets/vendors/chartjs/Chart.min.css?<?php echo time(); ?>" />

    <link rel="stylesheet" href="assets/vendors/perfect-scrollbar/perfect-scrollbar.css?<?php echo time(); ?>" />
    <link rel="stylesheet" href="assets/css/app.css?<?php echo time(); ?>" />
  </head>

  <body>
    <div id="app">
      <div id="sidebar" class="active">
        <div class="sidebar-wrapper active">
          <div class="sidebar-header">
            <a href="#" style="color: #64bcf4;">
              <img src="assets/img/logo.png" alt="" width="30" class="d-inline me-3">
              Jasa Print Online
            </a>
          </div>
          <div class="sidebar-menu">
            <ul class="menu">
              <li class="sidebar-title">Menu Utama</li>

              <li class="sidebar-item active">
                <a href="admin.php" class="sidebar-link">
                  <i data-feather="home" width="20"></i>
                  <span>Dashboard</span>
                </a>
              </li>

              <li class="sidebar-item">
                <a href="daftar_akun.php" class="sidebar-link">
                  <i data-feather="user" width="20"></i>
                  <span>Akun Pengguna</span>
                </a>
              </li>

              <li class="sidebar-item">
                <a href="pesanan.php" class="sidebar-link">
                  <i data-feather="shopping-cart" width="20"></i>
                  <span>Daftar Pesanan</span>
                </a>
              </li>
            </ul>
          </div>
          <button class="sidebar-toggler btn x"><i data-feather="x"></i></button>
        </div>
      </div>
      <div id="main">
        <nav class="navbar navbar-header navbar-expand navbar-light" style="background-color: #f7faff!important;">
          <a class="sidebar-toggler" href="#"><span class="navbar-toggler-icon"></span></a>
          <button class="btn navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav d-flex align-items-center navbar-light ms-auto">
              <li class="dropdown nav-icon">
                <div class="d-flex gap-5 light">
                  <a class="button" style="margin-left: 0;" href="logout.php" role="button">Logout</a>
                </div>
              </li>
            </ul>
          </div>
        </nav>

        <div class="main-content container-fluid">
          <div class="page-title">
            <h3 class="mb-3">Dashboard Admin</h3>
          </div>
          <section class="section">
            <div class="row mb-2">
              <div class="col-12 col-md-3">
                <div class="card card-statistic">
                  <div class="card-body p-0">
                    <div class="d-flex flex-column">
                      <div class="px-3 py-3 d-flex justify-content-between">
                        <h3 class="card-title">Kas</h3>
                        <div class="card-right d-flex align-items-center">
                          <p>Rp.2.500.000</p>
                        </div>
                      </div>
                      <div class="chart-wrapper">
                        <canvas id="canvas1" style="height: 100px !important"></canvas>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-12 col-md-3">
                <div class="card card-statistic">
                  <div class="card-body p-0">
                    <div class="d-flex flex-column">
                      <div class="px-3 py-3 d-flex justify-content-between">
                        <h3 class="card-title">Laba</h3>
                        <div class="card-right d-flex align-items-center">
                          <p>Rp.250.000</p>
                        </div>
                      </div>
                      <div class="chart-wrapper">
                        <canvas id="canvas2" style="height: 100px !important"></canvas>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-12 col-md-3">
                <div class="card card-statistic">
                  <div class="card-body p-0">
                    <div class="d-flex flex-column">
                      <div class="px-3 py-3 d-flex justify-content-between">
                        <h3 class="card-title">Diterima</h3>
                        <div class="card-right d-flex align-items-center">
                          <p>200</p>
                        </div>
                      </div>
                      <div class="chart-wrapper">
                        <canvas id="canvas3" style="height: 100px !important"></canvas>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-12 col-md-3">
                <div class="card card-statistic">
                  <div class="card-body p-0">
                    <div class="d-flex flex-column">
                      <div class="px-3 py-3 d-flex justify-content-between">
                        <h3 class="card-title">Diproses</h3>
                        <div class="card-right d-flex align-items-center">
                          <p>15</p>
                        </div>
                      </div>
                      <div class="chart-wrapper">
                        <canvas id="canvas4" style="height: 100px !important"></canvas>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="row mb-4">
              <div class="col-md-8">
                <div class="card">
                  <div class="card-header">
                    <h3 class="card-heading p-1 pl-3">Chart Penjualan</h3>
                  </div>
                  <div class="card-body">
                    <div class="row">
                      <div class="col-md-4 col-12">
                        <div class="pl-3">
                          <h1 class="mt-5">Rp.250.000</h1>
                          <p class="text-xs">
                            <span class="text-green"><i data-feather="bar-chart" width="15"></i> +19%</span> dari bulan lalu
                          </p>
                          <div class="legends">
                            <div class="legend d-flex flex-row align-items-center">
                              <div class="w-3 h-3 rounded-full bg-info me-2"></div>
                              <span class="text-xs">Bulan Lalu</span>
                            </div>
                            <div class="legend d-flex flex-row align-items-center">
                              <div class="w-3 h-3 rounded-full bg-blue me-2"></div>
                              <span class="text-xs">Bulan Ini</span>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-8 col-12">
                        <canvas id="bar"></canvas>
                      </div>
                    </div>
                  </div>
                </div>
                
              </div>
              <div class="col-md-4">
                <div class="card">
                  <div class="card-header">
                    <h4>Pendapatan</h4>
                  </div>
                  <div class="card-body">
                    <div class="text-center mb-5">
                      <h6>Dari bulan lalu</h6>
                      <h1 class="text-green">+Rp.250.000</h1>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section>
        </div>

        <footer>
          <div class="footer clearfix mb-0 pt-2 text-white">
            <div class="float-start">
              <p>2022 &copy; Jasa Print Online</p>
            </div>
          </div>
        </footer>
      </div>
    </div>
    <script src="assets/js/feather-icons/feather.min.js"></script>
    <script src="assets/vendors/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    <script src="assets/js/app.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>

    <script src="assets/vendors/chartjs/Chart.min.js"></script>
    <script src="assets/vendors/apexcharts/apexcharts.min.js"></script>
    <script src="assets/js/pages/dashboard.js"></script>

    <script src="assets/js/main.js"></script>
  </body>
</html>
