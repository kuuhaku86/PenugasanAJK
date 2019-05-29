<?php 
// koneksi database
include 'config.php';

// menangkap data id yang di kirim dari url
$username = $_GET['username'];


// menghapus data dari database
mysqli_query($config,"delete from users where username='$username'");

// mengalihkan halaman kembali ke index.php
header("location:logout.php");

?>