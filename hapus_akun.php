<?php
include ('conn.php');

$status = '';
$result = '';

if ($_SERVER['REQUEST_METHOD'] === 'GET') {
  if (isset($_GET['id'])) {
    $id_upd = $_GET['id'];
    $query = "DELETE FROM tb_user WHERE id = '$id_upd'"; 

    $result = mysqli_query(connection(),$query);

    if ($result) {
      $status = 'ok';
    }
    else{
      $status = 'err';
    }

    header('Location: daftar_akun.php?status='.$status);
  }  
}