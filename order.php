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
        <i class="fa-solid fa-cart-plus fa-5x my-3" style="color: #64bcf4"></i>
        <h3 class="mb-5">Form Order</h3>
      </div>

      <form method="post" action="" class="was-validated">
        <div class="container">
          <h5 style="color: #64bcf4;" class="mb-3">Rincian Produk</h5>
          <div class="mb-3">
            <label for="jenis-produk" class="form-label" style="color:#64bcf4">Jenis Produk</label>
            <select class="form-select" aria-label="Default select example" name="id_jp" required>
              <option value="">Jenis Produk</option>
              <?php
                include "connect.php";
                $query = mysqli_query($connect, "SELECT * FROM tb_jenisproduk") or die (mysqli_error($connect));
                while($data = mysqli_fetch_array($query))
                {
                echo"<option value=$data[id_jp]> $data[jenis_produk] </option>";
                }
              ?>
            </select>
            <div class="invalid-feedback">Mohon isi bagian ini terlebih dahulu!</div>
          </div>
          <div class="row mb-3">
            <div class="col">
              <label for="ukuran-kertas" class="form-label" style="color:#64bcf4">Pilih Ukuran Kertas</label>
              <select class="form-select" aria-label="Default select example" name="id_uk" required>
                <option value="">Pilih Ukuran Kertas</option>
                <?php
                  include "connect.php";
                  $query = mysqli_query($connect, "SELECT * FROM tb_ukurankertas") or die (mysqli_error($connect));
                  while($data = mysqli_fetch_array($query)){
                    echo"<option value=$data[id_uk]> $data[ukuran_kertas] </option>";
                  }
                ?>
              </select>
              <div class="invalid-feedback">Mohon isi bagian ini terlebih dahulu!</div>
            </div>

            <div class="col">
              <label for="jumlah-halaman" class="form-label" style="color:#64bcf4">Pilih Jumlah Halaman</label>
              <input type="text" class="form-control" aria-label="default select example" name="jumlah_halaman" placeholder="1 (Halaman)" required>
              <div class="invalid-feedback">Mohon isi bagian ini terlebih dahulu!</div>
            </div>
          </div>
          <div class="row mb-5">
            <div class="col">
              <label for="jumlah-order" class="form-label" style="color:#64bcf4">Pilih Jumlah Order</label>
              <input type="text" class="form-control" aria-label="default select example" name="jml_order" placeholder="1 (Kali)" required>
              <div class="invalid-feedback">Mohon isi bagian ini terlebih dahulu!</div>
            </div>
            <div class="col">
              <label for="opsi-print" class="form-label" style="color:#64bcf4">Pilih Opsi Print</label>
              <select class="form-select" aria-label="Default select example" name="id_op" required>
                <option value="">Pilih Opsi Print</option>
                <?php
                  include "connect.php";
                  $query = mysqli_query($connect, "SELECT * FROM tb_opsiprint") or die (mysqli_error($connect));
                  while($data = mysqli_fetch_array($query)){
                    echo"<option value=$data[id_op]> $data[ops_print] </option>";
                  }
                ?>
              </select>
              <div class="invalid-feedback">Mohon isi bagian ini terlebih dahulu!</div>
            </div>
          </div>
        </div>

        <div class="container mb-5">
          <label for="metode-pembayaran" class="form-label" style="color:#64bcf4">Metode Pembayaran</label>
          <select class="form-select" aria-label="Default select example" name="id_mp" required>
            <option value="">Pilih Metode Pembayaran</option>
            <?php
                    include "connect.php";
                    $query = mysqli_query($connect, "SELECT * FROM tb_pembayaran") or die (mysqli_error($connect));
                    while($data = mysqli_fetch_array($query)){
                      echo"<option value=$data[id_mp]> $data[metode_pembayaran] </option>";
                    }
                  ?>
          </select>
          <div class="invalid-feedback">Mohon isi bagian ini terlebih dahulu!</div>
        </div>

        <div class="container">
          <label for="link-dokumen" class="form-label" style="color:#64bcf4">Link Google Drive Dokumen</label>
          <p>Harap masukkan link google drive dokumen yang akan di print, <strong>FILE HARUS DI SHARE PUBLIK!</strong></p>
          <input type="text" class="form-control" aria-label="default select example" name="link_dokumen" placeholder="Link Dokumen" required>
          <div class="invalid-feedback">Mohon isi bagian ini terlebih dahulu!</div>
        </div>
    </div>

    <div class="container d-flex justify-content-center gap align-items-baseline light my-5">
      <button class="button" type="submit" value="Submit" name="proses" style="width: 100%;">Submit</button>
    </div>
    </form>
    <?php
        
        if(isset($_POST['proses'])){

          $_SESSION['link_dokumen'] = $_POST['link_dokumen'];
          
          mysqli_query($connect, "insert into tb_order set
          id_jp = '$_POST[id_jp]',
          id_uk = '$_POST[id_uk]',
          jumlah_halaman = '$_POST[jumlah_halaman]',
          jml_order = '$_POST[jml_order]',
          id_op = '$_POST[id_op]',
          id_mp = '$_POST[id_mp]',
          link_dokumen = '$_POST[link_dokumen]'") or die (mysqli_error($connect));

          echo "<script>location.href='pengiriman.php'</script>";
        }

        ?>
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