<?php
    include 'config.php';
    if($_POST['action']=="Update"){
        $id = $_POST['id'];
        $username = $_POST['username'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $data = mysqli_query($config,"SELECT * FROM users WHERE id='$id'");
        $data = mysqli_fetch_assoc($data);
        if(password_verify($password,$data['password'])){
            $submit = mysqli_query($config, "UPDATE users SET username='$username', email='$email' WHERE id='$id'");
            header("Location: timeline.php?pesan=updatesuccess");
            exit();
        }
        header("Location: edit.php?pesan=pwdnotmatch&id=".$id);
        exit();
        
    }else if($_POST['action']=="Delete Account"){
        $id = $_POST['id'];
        $password = $_POST['password'];
        $data = mysqli_query($config,"SELECT * FROM users WHERE id='$id'");
        $data=mysqli_fetch_assoc($data);
        if(password_verify($password,$data['password'])) {
            mysqli_query($config,"DELETE FROM users WHERE id='$id'");
            header("location:logout.php");
            exit();
        }
        header("location: edit.php?pesan=pwdnotmatch&id=".$id);
        exit();
    }
    header("Location: timeline.php");
?>