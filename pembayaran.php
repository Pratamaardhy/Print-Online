<?php
include "connect.php"; 
session_start();
if(! isset($_SESSION['is_login']))
{
  header('location:login.php');
}

$query = mysqli_query($connect, "SELECT * FROM tb_pengiriman ORDER BY id DESC");
$result = mysqli_fetch_array($query);

$jumlah = mysqli_query($connect, "SELECT * FROM tb_order ORDER BY jumlah_halaman DESC");
$halaman = mysqli_fetch_array($jumlah);

$jml = mysqli_query($connect, "SELECT * FROM tb_order ORDER BY jml_order DESC");
$order = mysqli_fetch_array($jml);

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
    <div id="pembayaran" class="container py-3">
      <div class="container text-center py-3">
        <i class="fa-solid fa-cash-register fa-5x my-3" style="color: #64bcf4"></i>
        <h3 class="mb-3">Pembayaran</h3>
        <p>Silahkan lakukan pembayaran dengan metode pembayaran yang tersedia.</p>
        <h5>Nomor pesanan: P20220626001</h5>
      </div>
      <div class="container">
        <div class="row">
          <div class="col">
            <div class="card">
              <div class="card-body">
                <h5 class="card-title">Detail Pembayaran</h5>
                <p class="card-text">
                  <table class="table table-borderless">
                    <tbody>
                        <td class="tbl-kecil">Nomor Pesanan</td>
                        <td class="tbl-titik">:</td>
                        <td>P20220626001</td>
                      </tr>
                      <tr>
                        <td class="tbl-kecil">Metode Pembayaran</td>
                        <td class="tbl-titik">:</td>
                        <td><?php echo $_SESSION['metode']?></td>
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
      <div class="container pt-5">
        <h5>Total Biaya Yang Harus Anda Bayarkan:</h5>
        <h3><?php echo "$c" ?></h3>
      </div>
      <div class="container pt-5">
        <h5 class="mb-3">Transfer Bank</h5>
        <div class="accordion" id="transfer">
          <div class="accordion-item">
            <h2 class="accordion-header" id="heading-transfer-1">
              <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#panel-transfer-1" aria-expanded="true" aria-controls="panel-transfer-1">
                BANK BCA
              </button>
            </h2>
            <div id="panel-transfer-1" class="accordion-collapse collapse show" aria-labelledby="heading-transfer-1" data-bs-parent="#transfer">
              <div class="accordion-body">
                <table class="table table-borderless">
                  <tbody>
                      <td class="tbl-kecil">Nomor Rekening</td>
                      <td class="tbl-titik">:</td>
                      <td>2000919200882</td>
                    </tr>
                    <tr>
                      <td class="tbl-kecil">Atas Nama</td>
                      <td class="tbl-titik">:</td>
                      <td>PT Print Online Indonesia</td>
                    </tr>
                    <tr>
                      <td class="tbl-kecil">Nominal Transfer</td>
                      <td class="tbl-titik">:</td>
                      <td><?php echo "$c" ?></td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header" id="heading-transfer-2">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panel-transfer-2" aria-expanded="false" aria-controls="panel-transfer-2">
                BANK BRI
              </button>
            </h2>
            <div id="panel-transfer-2" class="accordion-collapse collapse" aria-labelledby="heading-transfer-2" data-bs-parent="#transfer">
              <div class="accordion-body">
                <table class="table table-borderless">
                  <tbody>
                      <td class="tbl-kecil">Nomor Rekening</td>
                      <td class="tbl-titik">:</td>
                      <td>35111000200488</td>
                    </tr>
                    <tr>
                      <td class="tbl-kecil">Atas Nama</td>
                      <td class="tbl-titik">:</td>
                      <td>PT Print Online Indonesia</td>
                    </tr>
                    <tr>
                      <td class="tbl-kecil">Nominal Transfer</td>
                      <td class="tbl-titik">:</td>
                      <td><?php echo "$c" ?></td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="container d-flex justify-content-center gap align-items-baseline light my-5">
        <a href="home.php" class="button text-center mb-5" style="width: 100%;">Saya Sudah Transfer</a>
      </div>
      <div class="container d-flex justify-content-center light my-5">
        <form method="POST" action="">
          <button formaction="konfirmasi.php" name="ulang" class="button secondary text-center">
            Batalkan Order
          </button>
        </form>
      </div>
      <p class="text-center" style="font-size: 14px;">Terima kasih telah berbelanja di Print Online!</p>
    </div>
  </main>

  <footer class="footer mt-auto py-3">
    <div class="container text-center">
      <span class="text-white">Jasa Print Online - 2022</span>
    </div>
  </footer>

  <script src="assets/js/bootstrap.min.js"></script>
</body>