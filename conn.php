<?php 

function connection() {
  $dbServer = 'localhost';
  $dbUser = 'root';
  $dbPass = '';
  $dbName = "database_order";

  $conn = mysqli_connect($dbServer, $dbUser, $dbPass, $dbName);

  if(! $conn) {
	  die("Koneksi gagal: " . mysqli_error());
  }
  mysqli_select_db($conn,$dbName);

  return $conn;
}