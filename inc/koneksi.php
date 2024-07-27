<?php 
$hostname = "localhost";
$username = "root";
$password = "";
$database = "skripsi";
$koneksi = mysqli_connect($hostname,$username,$password,$database);

if (mysqli_connect_errno()){
	echo "Koneksi database gagal : " . mysqli_connect_error();
}
?>