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
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Jasa Print Online</title>
  <link rel="stylesheet" type="text/css" href="./css/style.css?<?php echo time(); ?>" />
  <link rel="stylesheet" type="text/css" href="./css/bootstrap.min.css?<?php echo time(); ?>" />
  <link rel="icon" type="image/x-icon" href="./img/favicon.ico">
  <script src="https://kit.fontawesome.com/fbdc7f93a3.js" crossorigin="anonymous"></script>
</head>

<body>
  <main>
    <nav class="navbar navbar-expand-lg sticky-top light">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">
          <img src="./img/logo.png" alt="" width="50" height="50" class="d-inline me-3">
          Jasa Print Online
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
          aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="d-flex justify-content-end">
          <div class="collapse navbar-collapse links" id="navbarNav">
            <ul class="navbar-nav me-5">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#layanan-kami">Layanan Kami</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#biaya">Biaya</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#pembayaran">Pembayaran</a>
              </li>
            </ul>
          </div>
          <div class="d-flex gap-5">
            <a class="button" style="margin-left: 0;" href="logout.php" role="button">Logout</a>
          </div>
        </div>
      </div>
    </nav>

    <div class="big-wrapper light">
      <div class="showcase-area">
        <div class="container">
          <div class="left">
            <div class="big-title pb-5">
                <h1>Selamat Datang <?php echo $_SESSION['nama']; ?>,</h1>
                <h1>Yuk Print Online Aja.</h1>
            </div>
            <p class="text">
              Masih bingung mau print tugas yang lebih mudah dan terjangkau?
            </p>
            <p class="text pb-5">
              Jasa print online memberikan solusi, buat kalian para deadliner yang pastinya terpercaya!
            </p>
            <div class="cta">
              <a href="#" class="button">Coba Sekarang !</a>
            </div>
          </div>

          <div class="right">
            <img src="./img/Image.png" alt="Printer" class="printer" />
          </div>
        </div>
      </div>

      <div class="container text-center my-3" id="layanan-kami">
        <h3 class="mb-5">
          Layanan Kami
        </h3>
        <div class="row">
          <div class="col">
            <div class="card">
              <div class="card-body">
                <i class="fa-solid fa-print fa-5x my-3" style="color: #64bcf4"></i>
                <h5>Print Berbagai Ukuran</h5>
                <p>Print A4, F4, Legal</p>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card">
              <div class="card-body">
                <i class="fa-solid fa-file-pen fa-5x my-3" style="color: #64bcf4"></i>
                <h5>Print Tugas Apa Saja</h5>
                <p>Print Skripsi, Makalah, Laporan, dll.</p>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card">
              <div class="card-body">
                <i class="fa-solid fa-palette fa-5x my-3" style="color: #64bcf4"></i>
                <h5>Print Berwarna & Hitam Putih</h5>
                <p>Print Warna, Hitam Putih Harga Murah!</p>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="container text-center my-5" id="biaya">
        <h3 class="mb-5">
          Biaya
        </h3>
        <table class="table">
          <thead>
            <tr>
              <th style="width: 50px;">No</th>
              <th>Jenis Print</th>
              <th>Biaya</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>1</td>
              <td>Print A4, F4, Legal Warna</td>
              <td>Rp.1.000/Lembar</td>
            </tr>
            <tr>
              <td>2</td>
              <td>Print A4, F4, Legal Hitam Putih</td>
              <td>Rp.500/Lembar</td>
            </tr>
            <tr>
              <td>3</td>
              <td>Print A3 HVS Warna</td>
              <td>Rp1.500/Lembar</td>
            </tr>
            <tr>
              <td>4</td>
              <td>Print A3 HVS Hitam Putih</td>
              <td>Rp1.000/Lembar</td>
            </tr>
            <tr>
              <td>5</td>
              <td>Print A3 Artpaper Warna</td>
              <td>Rp2.000/Lembar</td>
            </tr>
            <tr>
              <td>6</td>
              <td>Print A3 Artpaper Hitam Putih</td>
              <td>Rp1.500/Lembar</td>
            </tr>
          </tbody>
        </table>
      </div>

      <div class="container text-center my-5" id="layanan-kami">
        <h3 class="mb-5">
          Pembayaran
        </h3>
        <div class="row">
          <div class="col">
            <div class="card">
              <div class="card-body">
                <i class="fa-solid fa-money-bill fa-5x my-3" style="color: #64bcf4"></i>
                <h5>Cash On Delivery</h5>
                <p>Bayar di tempat, anti khawatir!</p>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card">
              <div class="card-body">
                <i class="fa-solid fa-money-bill-transfer fa-5x my-3" style="color: #64bcf4"></i>
                <h5>Transfer Bank</h5>
                <p>Bayar dengan transfer, mudah dan cepat!</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </main>

  <footer class="w-100 pt-4 flex-shrink-0">
    <div class="container py-3">
      <div class="row gy-3 gx-5">
        <div class="col-lg-4 col-md-6">
          <h5 class="h3 text-white">Jasa Print Online</h5>
          <p class="small text-muted mb-0">&copy; Copyrights. All rights reserved. <a class="text-primary"
              href="#">Jasa Print Online</a></p>
        </div>
        <div class="col-lg-2 col-md-6">
          <h5 class="text-white mb-3">Link Penting</h5>
          <ul class="list-unstyled links text-muted">
            <li><a href="#" class="mb-2" style="margin-left: 0;">Home</a></li>
            <li><a href="#layanan-kami" class="mb-2" style="margin-left: 0;">Layanan Kami</a></li>
            <li><a href="#biaya" class="mb-2" style="margin-left: 0;">Biaya</a></li>
            <li><a href="#pembayaran" class="mb-2" style="margin-left: 0;">Pembayaran</a></li>
          </ul>
        </div>
      </div>
    </div>
  </footer>

  <!-- JavaScript Files -->

  <script src="js/bootstrap.min.js"></script>
</body>

</html>