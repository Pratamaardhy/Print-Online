<?php
$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => "http://api.rajaongkir.com/starter/province",
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
  $data_provinsi = $array_response['rajaongkir']['results'];

  echo "<option value=''>Pilih Provinsi</option>";

  foreach ($data_provinsi as $data) {
    echo "<option value=''
    id_provinsi='".$data['province_id']."'
    nama_prov='".$data['province']."' >";
    echo $data['province'];
    echo "</option>";
  }
}