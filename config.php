<?php
/**
 * using mysqli_connect for database connection
 */

$databaseHost = 'localhost';
$databaseName = 'penugasanajk';
$databaseUsername = 'kuuhaku86';
$databasePassword = 'Yhn12345678!';

$config = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName); 

?>