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
  <link rel="stylesheet" type="text/css" href="assets/css/style.css?<?php echo time(); ?>" />
  <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css?<?php echo time(); ?>" />
  <link rel="icon" type="image/x-icon" href="assets/img/favicon.ico">
  <script src="https://kit.fontawesome.com/fbdc7f93a3.js" crossorigin="anonymous"></script>
</head>

<body>
  <nav class="navbar navbar-expand-lg sticky-top light">
    <div class="container-fluid">
      <a class="navbar-brand" href="home.php">
        <img src="assets/img/logo.png" alt="" width="50" height="50" class="d-inline me-3">
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
              <a class="nav-link" href="home.php#pembayaran">Metode Pembayaran</a>
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
        <i class="fa-solid fa-truck-fast fa-5x my-3" style="color: #64bcf4"></i>
        <h3 class="mb-5">Opsi Pengiriman</h3>
      </div>

      <div class="container">
        <h5 style="color: #64bcf4;" class="mb-3">Opsi Kurir</h5>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="radio" id="kurir-cod" value="kurir-cod" checked>
          <label class="form-check-label" for="kurir-cod">
            Kurir COD
          </label>
        </div>
        <div class="form-check mb-5">
          <input class="form-check-input" type="radio" name="radio" id="kurir-reguler" value="kurir-reguler">
          <label class="form-check-label" for="kurir-reguler">
            Kurir Reguler
          </label>
        </div>
      </div>
      
      <form method="post" action="">
        <div class="container">
          <h5 style="color: #64bcf4;" class="mb-3">Alamat Rumah</h5>
          <div class="mb-3">
            <label for="alamat" class="form-label" style="color:#64bcf4">Alamat</label>
            <textarea class="form-control" name="alamat" id="alamat" rows="5"></textarea>
          </div>
          <div class="row mb-3">
            <div class="col">
              <label for="kode_pos" class="form-label" style="color:#64bcf4">Kode Pos</label>
              <input type="text" class="form-control" name="kode_pos" id="kode_pos" placeholder="Kode Pos">
            </div>
            <div class="col"></div>
          </div>
          <div class="row mb-3">
            <div class="col">
              <label for="provinsi" class="form-label" style="color:#64bcf4">Provinsi</label>
              <select class="form-select" aria-label="Default select example">
                <option selected>Pilih Provinsi</option>
              </select>
            </div>
            <div class="col">
              <label for="kabupaten-kota" class="form-label" style="color:#64bcf4">Kabupaten/Kota</label>
              <select class="form-select" aria-label="Default select example">
                <option selected>Pilih Kabupaten/Kota</option>
              </select>
            </div>
          </div>
          <div class="row mb-3">
            <div class="col">
              <label for="kecamatan" class="form-label" style="color:#64bcf4">Kecamatan</label>
              <select class="form-select" aria-label="Default select example">
                <option selected>Pilih Kecamatan</option>
              </select>
            </div>
            <div class="col"></div>
          </div>
          <h5 style="color: #64bcf4;" class="mt-5 mb-3">Nomor Telepon Pemesan</h5>
          <div class="row g-3 mb-3">
            <label for="nomor_telepon" class="form-label" style="color:#64bcf4">Nomor Telepon</label>
            <div class="input-group col-sm">
              <span class="input-group-text">+62</span>
              <input type="text" class="form-control" name="nomor_telepon" id="nomor_telepon" placeholder="Nomor Telepon">
            </div>
            <div class="col"></div>
          </div>
        </div>
        
        <div class="container mt-5">
          <h5 style="color: #64bcf4;" class="mb-3">Ongkos Kirim</h5>
          
        </div>

        <div class="container d-flex justify-content-between light my-5">
          <a href="order.php" class="button secondary text-center" style="width: 25%;">
            <i class="fa-solid fa-arrow-left pe-2" style="color: #64bcf4"></i>
            Kembali
          </a>
          <a href="konfirmasi.php" class="button text-center" style="width: 25%;">
            Lanjutkan
            <i class="fa-solid fa-arrow-right ps-2" style="color: #fff"></i>
          </a>
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

  <script src="assets/js/bootstrap.min.js"></script>
</body>

</html>