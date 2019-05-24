<?php

$db_host = "localhost";
$db_user = "kuuhaku86";
$db_pass = "Yhn12345678!";
$db_name = "penugasanajk";

try {    
    //create PDO connection 
    $db = new PDO("mysql:host=$db_host;dbname=$db_name", $db_user, $db_pass);
} catch(PDOException $e) {
    //show error
    die("Terjadi masalah: " . $e->getMessage());
}