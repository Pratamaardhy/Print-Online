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
          <h3 class="mb-3">Daftar Pesanan</h3>
        </div>
        <body>
  <table style="width:100%";>
    <caption>STATISTIK ORDERAN ( Seminggu Terakhir )</caption>
     <thead>
        <tr>
          <th>Tanggal</th>
          <th>Order</th>
          <th>Total</th>
        </tr>
     </thead>
        <tbody>
<?php
$konek = mysqli_connect("localhost","root","","(db kita)");

$tgl_skrg = date("Ymd"); // dapatkan tanggal sekarang saat online
// $tgl_skrg = date("Y-m-d"); // untuk simulasi saja sesuai dengan di database

// dapatkan 6 hari sblm tgl sekarang 
$seminggu = strtotime("-1 week +1 day",strtotime($tgl_skrg));
$hasilnya = date("Y-m-d", $seminggu);

//lakukan looping sebanyak 6 kali   
for ($i=0; $i<=6; $i++){
  $urutan_tgl   = strtotime("+$i day",strtotime($hasilnya));
  $hasil_urutan = date("d-M-Y", $urutan_tgl);
    
  $tgl_order   = strtotime("+$i day",strtotime($hasilnya));
  $hasil_order = date("Y-m-d", $tgl_order);
  $query_order = mysqli_num_rows(mysqli_query($konek, "SELECT * FROM (nama tabel kita) WHERE tanggal='$hasil_order'"));
   
  $tgl_total   = strtotime("+$i day",strtotime($hasilnya));
  $hasil_total = date("Y-m-d", $tgl_total);
  $query_total = mysqli_fetch_array(mysqli_query($konek, "SELECT SUM(total) as hitstoday FROM (nama tabel kita) WHERE tanggal='$hasil_total'"));
    
  $total_today = $query_total['totaltoday'];
    
  if ($total_today==""){ $total_today="0"; }
      
  echo "<tr>
        <td>$hasil_urutan</td>
        <td>$query_pengujung</td>
        <td>$total_today</td>
        </tr>";    
}
?> 
      </tbody>
    </table>

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