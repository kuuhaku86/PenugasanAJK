<?php 

require_once("config.php");

if(isset($_POST['login'])){

    $username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_STRING);
    $password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING);

    $sql = "SELECT * FROM users WHERE username=:username OR email=:email";
    $stmt = $db->prepare($sql);
    
    // bind parameter ke query
    $params = array(
        ":username" => $username,
        ":email" => $username
    );

    $stmt->execute($params);

    $user = $stmt->fetch(PDO::FETCH_ASSOC);

    // jika user terdaftar
    if($user){
        // verifikasi password
        if(password_verify($password, $user["password"])){
            // buat Session
            session_start();
            $_SESSION["user"] = $user;
            // login sukses, alihkan ke halaman timeline
            header("Location: timeline.php");
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <div class="container">
        <div class="big_title">Welcome to My Site</div>
        <div class="login_box">
            <form id="form_login"action="" method="POST">
                <h2 class="title">Login</h2>
                <table>
                        <tr>
                                <p>
                                    <div class="left-tab">
                                        <label  for="username"><b>Username</b></label>
                                    </div>
                                    <div class="right-tab">
                                        <input type="text" class="input-field" placeholder="Enter Username or Email" name="username" required>
                                    </div>
                                </p>
                            </tr>
                            <tr>
                                <p>
                                    <div class="left-tab">
                                        <label  for="password"><b>Password</b></label>
                                    </div>
                                    <div class="right-tab">
                                        <input type="password" name="password" class="input-field"  placeholder="Enter Password" required>
                                    </div>
                                </p>
                                <p>
                                    <input type="submit" name="login" value="Login" />
                                </p>
                                <p class="exception">
                                    Don't have any account? <a href="register.php">Click here</a>
                                </p>
                            </tr>
                    </table>
            </form>
        </div>
    </div>
</body>
</html>