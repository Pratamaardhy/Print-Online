<?php 
class database{
	var $host = "localhost";
	var $username = "root";
	var $password = "";
	var $database = "database_user";
	var $koneksi;

	function __construct(){
		$this->koneksi = mysqli_connect($this->host, $this->username, $this->password,$this->database);
	}


	function register($username,$password,$nama,$level="user")
	{	
		$insert = mysqli_query($this->koneksi,"insert into tb_user values ('','$username','$password','$nama','$level')");
		return $insert;
	}

	function login($username,$password,$remember)
	{
		$query = mysqli_query($this->koneksi,"select * from tb_user where username='$username'");
		$data_user = $query->fetch_array();
		if(password_verify($password,$data_user['password']))
		{
			if($remember)
			{
				setcookie('username', $username, time() + (60 * 60 * 24 * 5), '/');
				setcookie('nama', $data_user['nama'], time() + (60 * 60 * 24 * 5), '/');
			}
			if($data_user['level'] == "admin")
			{
				$_SESSION['username'] = $username;
				$_SESSION['nama'] = $data_user['nama'];
				$_SESSION['level'] = "admin";
				$_SESSION['is_login_admin'] = TRUE;
				return TRUE;
			}
			else if($data_user['level'] == "user")
			{
				$_SESSION['username'] = $username;
				$_SESSION['nama'] = $data_user['nama'];
				$_SESSION['level'] = "user";
				$_SESSION['is_login'] = TRUE;
				return TRUE;
			}
		}
	}

	function relogin($username)
	{
		$query = mysqli_query($this->koneksi,"select * from tb_user where username='$username'");
		if($data_user['level'] == "admin")
		{
			$_SESSION['username'] = $username;
			$_SESSION['nama'] = $data_user['nama'];
			$_SESSION['level'] = "admin";
			$_SESSION['is_login_admin'] = TRUE;
			return TRUE;
		}
		else if($data_user['level'] == "user")
		{
			$_SESSION['username'] = $username;
			$_SESSION['nama'] = $data_user['nama'];
			$_SESSION['level'] = "user";
			$_SESSION['is_login'] = TRUE;
			return TRUE;
		}
	}
} 


?>