<?php 

include ('conn.php');
session_start();
if(! isset($_SESSION['is_login']))
{
  header('location:login.php');
}
 
 if(isset($_POST['button-pengiriman'])){

  $_SESSION['alamat'] = $_POST['alamat_pelanggan'];
  $alamat = $_POST['alamat_pelanggan'];
  $provinsi = $_POST['nama_provinsi'];
  $kabupaten_kota = $_POST['nama_kabkota'];
  $jenis_ekspedisi = $_POST['nama_ekspedisi'];
  $jenis_paket = $_POST['nama_paket'];
  $berat_paket = $_POST['total_berat'];
  $ongkir = $_POST['ongkir'];
  $estimasi = $_POST['estimasi'];
  $no_telp = $_POST['telp_pelanggan'];

  $insert = "INSERT INTO `tb_pengiriman`(`id_pengiriman`, `alamat`, `provinsi`, `kota`, `ekspedisi`, `paket`, `berat`, `ongkir`, `estimasi`, `nohp`) VALUES 
              ('','$alamat','$provinsi','$kabupaten_kota','$jenis_ekspedisi','$jenis_paket','$berat_paket','$ongkir','$estimasi','$no_telp')";

  mysqli_query(connection(),$insert);

  header("Location: /Print-Online/konfirmasi.php");
  exit();              
}

$link   = $_SESSION['link_dokumen'];

if(isset($_POST['ulang'])){
  
  $del2 = "DELETE FROM tb_order WHERE link_dokumen = '$link' ";

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
    <div id="form-order" class="container py-3">
      <div class="container text-center py-3">
        <i class="fa-solid fa-truck-fast fa-5x my-3" style="color: #64bcf4"></i>
        <h3 class="mb-5">Opsi Pengiriman</h3>
      </div>

      <form method="post" action="" class="was-validated">
        <div class="container">
          <h5 style="color: #64bcf4;" class="mb-3">Alamat Pelanggan</h5>
          <div class="mb-3">
            <label for="alamat" class="form-label" style="color:#64bcf4">Alamat Lengkap</label>
            <textarea class="form-control" name="alamat" id="alamat" rows="5" placeholder="Alamat Lengkap (RT, RW, Kelurahan, Kecamatan, Kode Pos)" required></textarea>
            <div class="invalid-feedback">Mohon isi bagian ini terlebih dahulu!</div>
            <textarea class="form-control mt-2" name="alamat_pelanggan" rows="5" readonly></textarea>
          </div>
          <div class="row mb-3">
            <div class="col">
              <label for="provinsi" class="form-label" style="color:#64bcf4">Provinsi</label>
              <select class="form-select" aria-label="Default select example" name="provinsi" required>

              </select>
              <div class="invalid-feedback">Mohon isi bagian ini terlebih dahulu!</div>
              <input type="text" class="form-control mt-2" name="nama_provinsi" readonly>
            </div>
            <div class="col">
              <label for="kabupaten-kota" class="form-label" style="color:#64bcf4">Kabupaten/Kota</label>
              <select class="form-select" aria-label="Default select example" name="kabupaten-kota" required>

              </select>
              <div class="invalid-feedback">Mohon isi bagian ini terlebih dahulu!</div>
              <input type="text" class="form-control mt-2" name="nama_kabkota" readonly>
            </div>
          </div>
          <div class="row mb-3">
            <div class="col">
              <label for="jenis-ekspedisi" class="form-label" style="color:#64bcf4">Jenis Ekspedisi</label>
              <select class="form-select" aria-label="Default select example" name="tipe-ekspedisi" required>
                <option value="">Pilih Ekspedisi</option>
                <option value="jne">JNE</option>
                <option value="pos">POS INDONESIA</option>
              </select>
              <div class="invalid-feedback">Mohon isi bagian ini terlebih dahulu!</div>
              <input type="text" class="form-control mt-2" name="nama_ekspedisi" readonly>
            </div>
            <div class="col">
              <label for="jenis-paket" class="form-label" style="color:#64bcf4">Jenis Paket</label>
              <select class="form-select" aria-label="Default select example" name="jenis-paket" required>

              </select>
              <div class="invalid-feedback">Mohon isi bagian ini terlebih dahulu!</div>
              <input type="text" class="form-control mt-2" name="nama_paket" readonly>
            </div>
          </div>
          <div class="row mb-3">
            <div class="col">
              <label for="total_berat" class="form-label" style="color:#64bcf4">Berat Paket</label>
              <input type="text" class="form-control" name="total_berat" value="1000" readonly>
            </div>
            <div class="col">
              <br>
              <br>
              <p> atau 1 Kg</p>
            </div>
          </div>
          <div class="row mb-3">
            <div class="col">
              <label for="ongkir" class="form-label" style="color:#64bcf4">Ongkos Kirim</label>
              <div class="input-group col-sm">
                <span class="input-group-text">Rp.</span>
                <input type="text" class="form-control" name="ongkir" readonly>
              </div>
            </div>
            <div class="col">
              <label for="estimasi" class="form-label" style="color: #64bcf4;">Estimasi Pengiriman</label>
              <input type="text" class="form-control" name="estimasi" readonly>
            </div>
          </div>
          <h5 style="color: #64bcf4;" class="mt-5 mb-3">Nomor Telepon Pemesan</h5>
          <div class="row g-3 mb-3">
            <label for="nomor_telepon" class="form-label" style="color:#64bcf4">Nomor Telepon</label>
            <div class="input-group col-sm">
              <span class="input-group-text">+62</span>
              <input type="text" class="form-control" name="nomor_telepon" id="nomor_telepon" placeholder="Nomor Telepon" required>
              <div class="invalid-feedback">Mohon isi bagian ini terlebih dahulu!</div>
            </div>
            <div class="input-group col-sm">
              <span class="input-group-text">+62</span>
              <input type="text" class="form-control" name="telp_pelanggan" readonly>
            </div>
          </div>
        </div>

        <div class="container d-flex justify-content-between light my-5">
          <form method="POST" action="">
            <button formaction="pengiriman.php" name="ulang" class="button secondary text-center">
              <i class="fa-solid fa-arrow-left pe-2" style="color: #64bcf4"></i>
              Kembali
            </button>
          </form>
          <button type="submit" class="button text-center" name="button-pengiriman" style="width: 25%;" formaction="pengiriman.php">
            Lanjutkan
            <i class="fa-solid fa-arrow-right ps-2" style="color: #fff"></i>
          </button>
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
  <script src="assets/js/jquery-3.6.0.min.js"></script>
  <script>
    $(document).ready(function () {
      $('textarea').on('keyup', function () {
        var textarea = $(this).val();
        var textarea_length = textarea.length;
        $('#textarea_length').text(textarea_length);
        $("textarea[name='alamat_pelanggan']").val(textarea);
      });

      $.ajax({
        type: "post",
        url: 'data_provinsi.php',
        success: function (hasil_provinsi)
        {
          $('select[name="provinsi"]').html(hasil_provinsi);
        }
      });
    
      $("select[name='provinsi']").change(function () {
        var id_provinsi_terpilih = $("option:selected", this).attr("id_provinsi");
        var prov = $("option:selected", this).attr("nama_prov");
        $.ajax({
          type: "post",
          url: 'data_kabkota.php',
          data: 'id_provinsi=' + id_provinsi_terpilih,
          success: function (hasil_kabupaten)
          {
            $('select[name="kabupaten-kota"]').html(hasil_kabupaten);
          }
        });
        $("input[name='nama_provinsi']").val(prov);
      });

      $("select[name='tipe-ekspedisi']").on("change", function () {
        var tipe_ekspedisi_terpilih = $("select[name='tipe-ekspedisi'] option:selected").val();
        var kabupaten_kota_terpilih = $("option:selected", $("select[name='kabupaten-kota']")).attr("id_kabkota");
        var total_berat = $("input[name='total_berat']").val();
        $.ajax({
          type: "post",
          url: 'data_paket.php',
          data: 'tipe_ekspedisi=' + tipe_ekspedisi_terpilih + '&kabupaten_kota=' + kabupaten_kota_terpilih + '&total_berat=' + total_berat,
          success: function (hasil_paket)
          {
            $('select[name="jenis-paket"]').html(hasil_paket);
          }
        });
        $("input[name='nama_ekspedisi']").val(tipe_ekspedisi_terpilih);
      });

      $("select[name='jenis-paket']").on("change", function () {
        var ongkos = $("option:selected", this).attr("ongkir");
        var jenis_paket = $("option:selected", this).attr("paket");
        var estimasi = $("option:selected", this).attr("estimasi");
        $("input[name='ongkir']").val(ongkos);
        $("input[name='nama_paket']").val(jenis_paket);
        $("input[name='estimasi']").val(estimasi + " hari");
      });

      $("select[name='kabupaten-kota']").on("change", function () {
        var tipe_kabkot = $("option:selected", this).attr("tipe");
        var kabkot = $("option:selected", this).attr("kab_kota");
        $("input[name='nama_kabkota']").val(tipe_kabkot + " " + kabkot);
      });

      $("input[name='nomor_telepon']").on("keyup", function () {
        var nomor_telepon = $("input[name='nomor_telepon']").val();
        $("input[name='telp_pelanggan']").val(nomor_telepon);
      });
    });
  </script>
</body>

</html>