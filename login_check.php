<?php
session_start();
include 'config.php';
$username = $_POST['username'];
$password = $_POST['password'];
$data = mysqli_query($config,"SELECT * FROM users WHERE username='$username' OR email='$username'");
$cek = mysqli_num_rows($data);
if($cek > 0){
	while ($allData = mysqli_fetch_array($data)) {
		if(password_verify($password,$allData['password'])){
			$_SESSION['id']=$allData['id'];
			$_SESSION['status'] = "login";
			header("location:timeline.php");
			exit();
		}
	}

}
header("location:login.php?pesan=gagal");
?>