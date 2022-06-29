<?php 
include('conn.php');
include "connect.php";
session_start();
if(! isset($_SESSION['is_login']))
{
  header('location:login.php');
}

$query = mysqli_query($connect, "SELECT * FROM tb_pengiriman ORDER BY id_pengiriman DESC");
$result = mysqli_fetch_array($query);

$login = mysqli_query($connect, "SELECT * FROM tb_user ORDER BY id DESC");
$user = mysqli_fetch_array($login);

$jenis = mysqli_query($connect, "SELECT * FROM tb_order,tb_jenisproduk ORDER BY id_order DESC");
$produk = mysqli_fetch_array($jenis);

$ukuran = mysqli_query($connect, "SELECT * FROM tb_order,tb_ukurankertas ORDER BY id_order DESC");
$kertas = mysqli_fetch_array($ukuran);

$jumlah = mysqli_query($connect, "SELECT * FROM tb_order ORDER BY jumlah_halaman DESC");
$halaman = mysqli_fetch_array($jumlah);

$jml = mysqli_query($connect, "SELECT * FROM tb_order ORDER BY jml_order DESC");
$order = mysqli_fetch_array($jml);

$opsi = mysqli_query($connect, "SELECT * FROM tb_order,tb_opsiprint ORDER BY id_order DESC");
$print = mysqli_fetch_array($opsi);

$metode = mysqli_query($connect, "SELECT * FROM tb_order,tb_pembayaran ORDER BY id_order DESC");
$pembayaran = mysqli_fetch_array($metode);

$harga=1000;

$alamat = $_SESSION['alamat'];
$link   = $_SESSION['link_dokumen'];

if(isset($_POST['ulang'])){



  $del = "DELETE FROM tb_pengiriman WHERE alamat = '$alamat' ";
  $del2 = "DELETE FROM tb_order WHERE link_dokumen = '$link' ";

  mysqli_query(connection(),$del);
  mysqli_query(connection(),$del2);


 header("Location: /Print-Online/order.php");
 exit();

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
                        <td><?php echo $user['username']?></td>
                      </tr>
                      <tr>
                        <td class="tbl-kecil">Nomor Pesanan</td>
                        <td class="tbl-titik">:</td>
                        <td>P20220626001</td>
                      </tr>
                      <tr>
                        <td class="tbl-kecil">Alamat Pengiriman</td>
                        <td class="tbl-titik">:</td>
                        <td><?php echo $result['alamat']?></td>
                      </tr>
                      <tr>
                        <td class="tbl-kecil">Opsi Kurir</td>
                        <td class="tbl-titik">:</td>
                        <td><?php echo $result['ekspedisi']?></td>
                      </tr>
                      <tr>
                        <td class="tbl-kecil">Jenis Produk</td>
                        <td class="tbl-titik">:</td>
                        <td><?php echo $produk['jenis_produk']?></td>
                      </tr>
                      <tr>
                        <td class="tbl-kecil">Ukuran Kertas</td>
                        <td class="tbl-titik">:</td>
                        <td><?php echo $kertas['ukuran_kertas']?></td>
                      </tr>
                      <tr>
                        <td class="tbl-kecil">Jumlah Halaman</td>
                        <td class="tbl-titik">:</td>
                        <td><?php echo $halaman['jumlah_halaman']?></td>
                      </tr>
                      <tr>
                        <td class="tbl-kecil">Jumlah Order</td>
                        <td class="tbl-titik">:</td>
                        <td><?php echo $order['jml_order']?></td>
                      </tr>
                      <tr>
                        <td class="tbl-kecil">Opsi Print</td>
                        <td class="tbl-titik">:</td>
                        <td><?php echo $print['ops_print']?></td>
                      </tr>
                      <tr>
                        <td class="tbl-kecil">Metode Pembayaran</td>
                        <td class="tbl-titik">:</td>
                        <td><?php echo $pembayaran['metode_pembayaran']?></td>
                      </tr>
                      <tr>
                        <td class="tbl-kecil">Biaya Print</td>
                        <td class="tbl-titik">:</td>
                        <td>Rp. 1.000</td>
                      </tr>
                      <tr>
                        <td class="tbl-kecil">Ongkos Kirim</td>
                        <td class="tbl-titik">:</td>
                        <td><?php echo $result['ongkir']?></td>
                      </tr>
                      <tr>
                        <td class="tbl-kecil">Total Biaya</td>
                        <td class="tbl-titik">:</td>
                        <td>
                          <?php
                            $c = $harga * $halaman['jumlah_halaman'] * $order['jml_order'] + $result['ongkir'];
                            echo "$c";
                          ?>
                        </td>
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
        <form method="POST" action="">
          <button formaction="konfirmasi.php" name="ulang" class="button secondary text-center">
            <i class="fa-solid fa-arrow-left pe-2" style="color: #64bcf4"></i>
            Kembali
          </button>
        </form>
        <a href="pembayaran.php" class="button text-center" style="width: 30%;">
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