<?php 
include_once ('conn.php');
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
      <?php
        $berhasil = <<<OK
          <html>
          <div class="alert alert-success container mt-3" role="alert">
            <i data-feather="x" onclick="this.parentElement.style.display='none';" style="color: #fff;" width="20"></i>
            Data Tarawih berhasil di-update
          </div>
          </html>
        OK;

        $gagal = <<<ERR
          <html>
          <body>
            <div class="alert alert-danger" role="alert">
              <span class="close" onclick="this.parentElement.style.display='none';">&times;</span>
              Data Tarawih gagal di-update
            </div>
          </body>
          </html>
        ERR;

        if (@$_GET['status'] !== NULL) {
          $status = $_GET['status'];
          if ($status == 'ok') {
            echo $berhasil;
          }
          elseif ($status == 'err') {
            echo $gagal;
          }
        }
      ?>

      <nav class="navbar navbar-header navbar-expand navbar-light" style="background-color: #f7faff!important;">
        <a class="sidebar-toggler" href="#"><span class="navbar-toggler-icon"></span></a>
        <button class="btn navbar-toggler" type="button" data-bs-toggle="collapse"
          data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
          aria-label="Toggle navigation">
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
          <h3 class="mb-5">Daftar Akun Pengguna</h3>
        </div>
        <div class="container">
          <div class="tambah mb-5">
            <a class="button light" href="register.php">Tambah Akun</a>
          </div>
          <div class="table-responsive mb-5 text-center">
            <table class="table">
              <thead>
                <tr>
                  <th class="tbl-titik">No</th>
                  <th>Username</th>
                  <th>Nama</th>
                  <th>Level</th>
                  <th>Aksi</th>
                </tr>
              </thead>
              <tbody>
                <?php
                $id = 1;
                $query = "SELECT * FROM tb_user";
                $result = mysqli_query(connection(), $query);
                ?>

                <?php while ($row = mysqli_fetch_array($result)): ?>
                  <tr>
                    <td><?php echo $id++; ?></td>
                    <td><?php echo $row['username']; ?></td>
                    <td><?php echo $row['nama']; ?></td>
                    <td><?php echo $row['level']; ?></td>
                    <td>
                      <a class="button light" href="hapus_akun.php?id=<?php echo $row['id']; ?>">Hapus</a>
                    </td>
                  </tr>
                <?php endwhile ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>

      <footer>
        <div class="footer clearfix mb-0 pt-2 text-white">
          <div class="float-start">
            <p>2022 &copy; Jasa Print Online</p>
          </div>
        </div>
      </footer>
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