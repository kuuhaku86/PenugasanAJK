<?php 
// mengaktifkan session php
session_start();

// menghubungkan dengan koneksi
include 'config.php';

// menangkap data yang dikirim dari form
$username = $_POST['username'];
$password = $_POST['password'];
$password = stripslashes($password);
$password = mysqli_real_escape_string($config,$password);
$password = password_hash($password, PASSWORD_BCRYPT);
echo $password;
// menyeleksi data admin dengan username dan password yang sesuai
$data = mysqli_query($config,"SELECT * FROM users WHERE username='$username' OR email='$username'");

// menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($data);

if($cek > 0){
	$dataUser=mysqli_fetch_assoc($data);
	if(password_verify($dataUser))
	$_SESSION['userData'] = $dataUser;
	$_SESSION['status'] = "login";
	header("location:timeline.php");
}else{
	// header("location:login.php?pesan=gagal");
}
?>