<?php
include 'config.php';
$id = $_POST['id'];
$username = $_POST['username'];
$email = $_POST['email'];
$submit = mysqli_query($config, "update users set username='$username', email='$email' where id='$id'");
header("location:timeline.php");
?>