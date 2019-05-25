<?php 

include 'connect.php';
$id = $_POST['id'];
$username = $_POST['username'];
$email = $_POST['email'];

mysql_query("UPDATE user SET username='$username', email='$email' WHERE id='$id'");

header("location:timeline.php?pesan=update");
?>