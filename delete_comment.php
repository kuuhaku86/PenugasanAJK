<?php
    require 'config.php';
    $id=$_GET['id'];
    $query="DELETE FROM `comment` WHERE id='$id'";
    mysqli_query($config,$query);
    header("Location: timeline.php");
    exit();