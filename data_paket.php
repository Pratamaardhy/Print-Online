<?php

$tipe_ekspedisi = $_POST['tipe_ekspedisi'];
$kabupaten_kota = $_POST['kabupaten_kota'];
$total_berat = $_POST['total_berat'];

$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => "http://api.rajaongkir.com/starter/cost",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 30,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "POST",
  CURLOPT_POSTFIELDS => "origin=444&destination=".$kabupaten_kota."&weight=".$total_berat."&courier=".$tipe_ekspedisi, // origin=Kota Surabaya
  CURLOPT_HTTPHEADER => array(
    "content-type: application/x-www-form-urlencoded",
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
  $data_paket = $array_response['rajaongkir']['results']['0']['costs'];

  echo "<option value=''>Pilih Paket</option>";
  foreach ($data_paket as $data) {
    echo "<option
    paket='".$data['service']."'
    ongkir='".$data['cost']['0']['value']."'
    estimasi='".$data['cost']['0']['etd']."' >";
    echo $data['service']." ";
    echo "</option>";
  }
}