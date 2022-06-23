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
    <div class="big-wrapper light">
      <img src="./img/shape.png" alt="" class="shape" />

      <header>
        <nav class="navbar navbar-expand-lg">
          <div class="container-fluid">
            <a class="navbar-brand" href="#">
              <img src="./img/logo.png" alt="" width="50" height="50" class="d-inline me-3">
              Jasa Print Online
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
              aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end links" id="navbarNav">
              <ul class="navbar-nav me-5">
                <li class="nav-item">
                  <a class="nav-link active" aria-current="page" href="#">Home</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Layanan Kami</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Biaya</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Pembayaran</a>
                </li>
              </ul>
              <div class="d-flex">
                <a class="button" href="login.php" role="button">Masuk</a>
                <a class="button secondary" href="register.php" role="button">Daftar</a>
              </div>
            </div>
          </div>
        </nav>
      </header>

      <div class="showcase-area">
        <div class="container">
          <div class="left">
            <div class="big-title pb-5">
              <h1>Print Murah,</h1>
              <h1>Yuk Cetak Dari Rumah.</h1>
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

      <div class="container text-center" id="layanan-kami">
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
    </div>
  </main>

  <!-- JavaScript Files -->

  <script src="js/bootstrap.min.js"></script>
</body>

</html>