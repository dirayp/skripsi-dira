<?php
session_start();
include "inc/koneksi.php";
include "inc/anti_injeksi.php";
if (isset($_POST['login_admin'])) {
	$username = anti_injeksi($_POST['username']);
	$password = anti_injeksi($_POST['password']);
	$query = mysqli_query($koneksi,"SELECT * FROM admin WHERE username='$username' AND password='$password'");
	$row = mysqli_num_rows($query);
	if ($row > 0) {
		$_SESSION['login_admin'] = $username;
		header("location: ./");
	} else {
		echo "<script> alert('USERNAME ATAU PASSWORD TIDAK DITEMUKAN, SILAHKAN COBA KEMBALI');
			  window.location = 'login';
			  </script>";
	}
}
?>