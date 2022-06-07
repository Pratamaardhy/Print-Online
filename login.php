<?php 
session_start();
include_once('db_connect.php');
$database = new database();

if(isset($_SESSION['is_login']))
{
    header('location:home.php');
}

if(isset($_COOKIE['username']))
{
  $database->relogin($_COOKIE['username']);
  header('location:home.php');
}

if(isset($_POST['login']))
{
    $username = $_POST['username'];
    $password = $_POST['password'];
    if(isset($_POST['remember']))
    {
      $remember = TRUE;
    }
    else
    {
      $remember = FALSE;
    }

    if($database->login($username,$password,$remember))
    {
      header('location:home.php');
    }
}
?>
<!doctype html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Form Login</title>
  <link rel="stylesheet" type="text/css" href="./css/style.css?<?php echo time(); ?>" />
  <link rel="stylesheet" type="text/css" href="./css/bootstrap.min.css?<?php echo time(); ?>" />
  <link rel="icon" type="image/x-icon" href="./img/favicon.ico">
</head>

<body class="d-flex flex-column h-100 big-wrapper light text-center">
  <header>
    <nav class="navbar navbar-expand-lg">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">
          <img src="./img/logo.png" alt="" width="50" height="50" class="d-inline me-3">
          Jasa Print Online
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
          aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end links" id="navbarNav">
          <ul class="navbar-nav me-5">
            <li class="nav-item">
              <a class="nav-link" href="index.php">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#">Form Login</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </header>
  <main>
    <div class="container">
      <h1 class="mt-5">Form Login</h1>
      <p class="lead mb-5">Silahkan Login Dengan Akun Anda</p>
      <form method="post" action="">
        <div class="form-group row pb-3">
          <label for="username" class="col-sm-2 col-form-label">Username</label>
          <div class="col-sm-10">
            <input type="text" id="username" class="form-control" placeholder="Username" name="username" required
              autofocus>
          </div>
        </div>
        <div class="form-group row pb-3">
          <label for="password" class="col-sm-2 col-form-label">Password</label>
          <div class="col-sm-10">
            <input type="password" id="password" class="form-control" placeholder="Password" name="password" required>
          </div>
        </div>
        <div class="checkbox mb-5">
          <label>
            <input type="checkbox" value="remember-me" name="remember"> Ingat saya
          </label>
        </div>

        <div class="container d-flex gap justify-content-center align-items-baseline">
          <button class="button" type="submit" name="login">Masuk</button>
          <p>Atau</p>
          <a href="register.php" class="button secondary">Daftar</a>
        </div>
      </form>
    </div>
    </div>
  </main>

  <footer class="footer mt-auto py-3">
    <div class="container">
      <span class="text-muted">Jasa Print Online - 2022</span>
    </div>
  </footer>

  <!-- JavaScript Files -->

  <script src="js/bootstrap.min.js"></script>
  <script src="https://kit.fontawesome.com/a81368914c.js"></script>
</body>

</html>