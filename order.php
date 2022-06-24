<?php 
session_start();
if(! isset($_SESSION['is_login']))
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
  <nav class="navbar navbar-expand-lg sticky-top light">
    <div class="container-fluid">
      <a class="navbar-brand" href="home.php">
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
              <a class="nav-link" href="home.php">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="order.php">Order Print</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="home.php#layanan-kami">Layanan Kami</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="home.php#biaya">Biaya</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="home.php#pembayaran">Pembayaran</a>
            </li>
          </ul>
        </div>
        <div class="d-flex gap-5">
          <a class="button" style="margin-left: 0;" href="logout.php" role="button">Logout</a>
        </div>
      </div>
    </div>
  </nav>
  <main class="light big-wrapper">
    <div id="form-order" class="container py-3">
      <div class="container text-center py-3">
        <i class="fa-solid fa-cart-plus fa-5x my-3" style="color: #64bcf4"></i>
        <h3 class="mb-5">Form Order</h3>
      </div>
      
      <form method="post" action="">
        <div class="container">
          <h5 style="color: #64bcf4;" class="mb-3">Rincian Produk</h5>
          <div class="mb-3">
            <label for="jenis-produk" class="form-label" style="color:#64bcf4">Jenis Produk</label>
            <select class="form-select" aria-label="Default select example">
              <option selected>Pilih jenis produk</option>
              <option value="warna">Print Warna</option>
              <option value="hitam-putih">Print Hitam Putih</option>
              <option value="foto">Print Foto</option>
            </select>
          </div>
          <div class="row mb-3">
            <div class="col">
              <label for="ukuran-kertas" class="form-label" style="color:#64bcf4">Pilih Ukuran Kertas</label>
              <select class="form-select" aria-label="Default select example">
                <option selected>Pilih ukuran kertas</option>
                <option value="A4">Kertas A4</option>
                <option value="F4">Kertas F4</option>
                <option value="Legal">Kertas Legal</option>
                <option value="A3">Kertas A3</option>
              </select>
            </div>
            <div class="col">
              <label for="jumlah-halaman" class="form-label" style="color:#64bcf4">Pilih Jumlah Halaman</label>
              <select class="form-select" aria-label="Default select example">
                <option selected>Pilih jumlah halaman</option>
                <option value="1">1 Halaman</option>
                <option value="2">2 Halaman</option>
                <option value="3">3 Halaman</option>
                <option value="4">4 Halaman</option>
                <option value="5">5 Halaman</option>
              </select>
            </div>
          </div>
          <div class="row mb-5">
            <div class="col">
              <label for="jumlah-order" class="form-label" style="color:#64bcf4">Pilih Jumlah Order</label>
              <select class="form-select" aria-label="Default select example">
                <option selected>Pilih jumlah order</option>
                <option value="1-kali">Print 1 Kali</option>
                <option value="2-kali">Print 2 Kali</option>
                <option value="3-kali">Print 3 Kali</option>
              </select>
            </div>
            <div class="col">
              <label for="opsi-print" class="form-label" style="color:#64bcf4">Pilih Opsi Print</label>
              <select class="form-select" aria-label="Default select example">
                <option selected>Pilih opsi print</option>
                <option value="satu-sisi">Print Satu Sisi</option>
                <option value="bolak-balik">Print Bolak Balik</option>
              </select>
            </div>
          </div>
        </div>
        
        <div class="container">
          <h5 style="color: #64bcf4;" class="mb-3">Metode Pembayaran</h5>
          <div class="form-check">
            <input class="form-check-input" type="radio" name="cod" id="cod" checked>
            <label class="form-check-label" for="cod">
              Cash On Delivery
            </label>
          </div>
          <div class="form-check mb-5">
            <input class="form-check-input" type="radio" name="transfer" id="transfer">
            <label class="form-check-label" for="transfer">
              Transfer ATM
            </label>
          </div>
        </div>

        <div class="container d-flex justify-content-center gap align-items-baseline light my-5">
          <button class="button"  style="width: 100%;"type="submit" name="login">Lanjutkan</button>
        </div>
      </form>
    </div>
  </main>

  <footer class="footer mt-auto py-3">
    <div class="container text-center">
      <span class="text-white">Jasa Print Online - 2022</span>
    </div>
  </footer>

  <!-- JavaScript Files -->

  <script src="js/bootstrap.min.js"></script>
</body>

</html>