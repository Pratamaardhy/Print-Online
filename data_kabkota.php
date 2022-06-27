<?php

$id_provinsi_terpilih = $_POST['id_provinsi'];
$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => "http://api.rajaongkir.com/starter/city?province=".$id_provinsi_terpilih,
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 30,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "GET",
  CURLOPT_HTTPHEADER => array(
    "key: 5ba017295c2d3a9225c4fea1fe585a22"
  ),
));

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

if ($err) {
  echo "cURL Error #:" . $err;
} else {
  $array_response = json_decode($response, true);
  $data_kabkota = $array_response['rajaongkir']['results'];

  echo "<option value=''>Pilih Kab/Kota</option>";

  foreach ($data_kabkota as $data) {
    echo "<option value=''
    id_kabkota='".$data['city_id']."'
    provinsi='".$data['province_id']."'
    kab_kota='".$data['city_name']."'
    tipe='".$data['type']."'
    kode_pos='".$data['postal_code']."' >";
    echo $data['type']." ";
    echo $data['city_name'];
    echo "</option>";
  }
}