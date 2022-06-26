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
    <div id="konfirmasi" class="container py-3">
      <div class="container text-center py-3">
        <i class="fa-solid fa-circle-check fa-5x my-3" style="color: #64bcf4"></i>
        <h3 class="mb-3">Konfirmasi Order</h3>
        <p>Silahkan periksa kembali pesanan anda, sebelum lanjut ke proses pembayaran.</p>
        <h5>Nomor pesanan: P20220626001</h5>
      </div>
      <div class="container">
        <div class="row">
          <div class="col">
            <div class="card">
              <div class="card-body">
                <h5 class="card-title">Detail Pesanan</h5>
                <p class="card-text">
                  <table class="table table-borderless">
                    <tbody>
                      <tr>
                        <td class="tbl-kecil">Nama Pembeli</td>
                        <td class="tbl-titik">:</td>
                        <td>Rizky</td>
                      </tr>
                      <tr>
                        <td class="tbl-kecil">Nomor Pesanan</td>
                        <td class="tbl-titik">:</td>
                        <td>P20220626001</td>
                      </tr>
                      <tr>
                        <td class="tbl-kecil">Alamat Pengiriman</td>
                        <td class="tbl-titik">:</td>
                        <td>Jalan Raya Taman No. 15 Kel. Taman, Kec. Taman, Kab. Sidoarjo Jawa Timur 61257</td>
                      </tr>
                      <tr>
                        <td class="tbl-kecil">Opsi Kurir</td>
                        <td class="tbl-titik">:</td>
                        <td>Kurir COD</td>
                      </tr>
                      <tr>
                        <td class="tbl-kecil">Jenis Produk</td>
                        <td class="tbl-titik">:</td>
                        <td>Print Warna</td>
                      </tr>
                      <tr>
                        <td class="tbl-kecil">Ukuran Kertas</td>
                        <td class="tbl-titik">:</td>
                        <td>A4</td>
                      </tr>
                      <tr>
                        <td class="tbl-kecil">Jumlah Halaman</td>
                        <td class="tbl-titik">:</td>
                        <td>3 Halaman</td>
                      </tr>
                      <tr>
                        <td class="tbl-kecil">Jumlah Order</td>
                        <td class="tbl-titik">:</td>
                        <td>Print 1 Kali</td>
                      </tr>
                      <tr>
                        <td class="tbl-kecil">Opsi Print</td>
                        <td class="tbl-titik">:</td>
                        <td>Print Satu Sisi</td>
                      </tr>
                      <tr>
                        <td class="tbl-kecil">Metode Pembayaran</td>
                        <td class="tbl-titik">:</td>
                        <td>Cash On Delivery</td>
                      </tr>
                      <tr>
                        <td class="tbl-kecil">Biaya Print</td>
                        <td class="tbl-titik">:</td>
                        <td>Rp. 3.000</td>
                      </tr>
                      <tr>
                        <td class="tbl-kecil">Ongkos Kirim</td>
                        <td class="tbl-titik">:</td>
                        <td>Rp. 8.000</td>
                      </tr>
                      <tr>
                        <td class="tbl-kecil">Total Biaya</td>
                        <td class="tbl-titik">:</td>
                        <td>Rp. 11.500</td>
                      </tr>
                      <tr>
                        <td class="tbl-kecil"></td>
                        <td class="tbl-titik"></td>
                        <td style="font-size: 10pt;">+Rp. 500 Biaya Jasa</td>
                      </tr>
                    </tbody>
                  </table>
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="container d-flex justify-content-between light my-5">
        <a href="pengiriman.php" class="button secondary text-center" style="width: 25%;">
          <i class="fa-solid fa-arrow-left pe-2" style="color: #64bcf4"></i>
          Kembali
        </a>
        <a href="#" class="button text-center" style="width: 25%;">
          Lanjutkan Ke Pembayaran
          <i class="fa-solid fa-arrow-right ps-2" style="color: #fff"></i>
        </a>
      </div>
  </main>

  <footer class="footer mt-auto py-3">
    <div class="container text-center">
      <span class="text-white">Jasa Print Online - 2022</span>
    </div>
  </footer>
</body>