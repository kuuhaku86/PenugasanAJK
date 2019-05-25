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
	$password = stripslashes($_REQUEST['password']);
	$password = mysqli_real_escape_string($config,$password);
    $query = "INSERT into `users` (username, password, email)
VALUES ('$username', '$password', '$email')";
        $result = mysqli_query($config,$query);
        if($result){
            echo "<div class='form'>
<h3>You are registered successfully.</h3>
<br/>Click here to <a href='login.php'>Login</a></div>";
        }
    }else{
?>
    <div class="container">
        <div class="big_title" >Welcome to My Site</div>
        <div class="login_box" style=" height:300px;">
            <form id="form_login" action="" method="POST">
                <h2 class="title">Create Account</h2>
                <table>
                    <tr>
                        <p>
                            <div class="left-tab">
                                <label  for="username"><b>Username</b></label>
                            </div>
                            <div class="right-tab">
                                <input type="text" class="input-field" placeholder="Enter Username" name="username" required>
                            </div>
                        </p>
                    </tr>
                    <tr>
                        <p>
                            <div class="left-tab">
                                <label  for="email"><b>E-mail</b></label>
                            </div>
                            <div class="right-tab">
                                <input type="text" class="input-field" placeholder="Enter Email" name="email" required>
                            </div>
                        </p>
                        <p>
                            <div class="left-tab">
                                <label  for="password"><b>Password</b></label>
                            </div>
                            <div class="right-tab">
                                <input type="password" class="input-field" name="password" placeholder="Enter Password" required>
                            </div>
                        </p>
                        <p>
                            <input type="submit" name="register" class="button" style="color:grey; height:30px;border-radius:10px; display:block; margin-top:50px; " value="Register" />
                        </p>
                        <p class="exception">
                            Already have an account? <a href="login.php">Click here</a>
                        </p>
                    </tr>
                    </table>
            </form>
        </div>
    </div>
    <?php } ?>
</body>
</html>