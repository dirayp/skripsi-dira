<?php
session_start();
include "inc/koneksi.php";

$cek_session = $_SESSION['login_admin'];
$session_sql = mysqli_query($koneksi,"SELECT username FROM admin WHERE username='$cek_session'");
$row = mysqli_fetch_array($session_sql);
$login_session = $row['username'];

if (!isset($login_session)) {
	header("location: login");
}
?>