<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<?php
require('config.php');
// If form submitted, insert values into the database.
if (isset($_REQUEST['username'])){
        // removes backslashes
	$username = stripslashes($_REQUEST['username']);
        //escapes special characters in a string
	$username = mysqli_real_escape_string($config,$username); 
	$email = stripslashes($_REQUEST['email']);
    $email = mysqli_real_escape_string($config,$email);
	$password = $_REQUEST['password'];
    $passwordConfirm = $_REQUEST['passwordConfirm'];
    if($password==$passwordConfirm){
        $password = password_hash($password, PASSWORD_BCRYPT);
        $query = "INSERT into `users` (username, password, email) 
            VALUES ('$username', '$password', '$email')";
            $result = mysqli_query($config,$query);
            if($result){
                header("Location: login.php?pesan=regissuccess");
            }
    }else{
        header("Location: register.php?pesan=regissuccess");
    }
    }else{
        if(isset($_GET['passwordmatch'])){
            echo "<script>
            alert('The password confirmation doesn\'t match');
            </script>";
        }
    ?>
    <div class="container">
        <div class="login_box" style=" height:300px; padding-top:10px; padding-bottom:90px;">
            <form id="form_login" action="register.php" method="POST">
                <h2 class="title">Create Account</h2>
                <table>
                    <tr>
                        <p>
                            <input type="text" class="input-field item" placeholder="Enter Username" name="username" required>
                        </p>
                    </tr>
                    <tr>
                        <p>
                            <input type="text" class="input-field item" placeholder="Enter Email" name="email" required>
                        </p>
                        <p>
                            <input type="password" class="input-field item" name="password" placeholder="Enter Password" required>
                        </p>
                        <p>
                            <input type="password" class="input-field item" name="passwordConfirm" placeholder="Confirm Password" required>
                        </p>
                        <p>
                            <input type="submit" name="register" class="button item" value="Register" />
                        </p>
                        <p class="exception">
                            Already have an account? <a href="login.php" class="exception-link">Click here</a>
                        </p>
                    </tr>
                    </table>
            </form>
        </div>
    </div>
    <?php } ?>
</body>
</html>