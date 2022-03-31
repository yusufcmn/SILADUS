<?php 

$koneksi = mysqli_connect("localhost","root","raqi2104","arsip_kita");

// Check connection
if (mysqli_connect_errno()){
	echo "Koneksi database gagal : " . mysqli_connect_error();
}

?>