<?php

require_once("config.php");

if(isset($_POST['register'])){

    // filter data yang diinputkan
    $username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_STRING);
    // enkripsi password
    $password = password_hash($_POST["password"], PASSWORD_DEFAULT);
    $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);


    // menyiapkan query
    $sql = "INSERT INTO users (username, email, password) 
            VALUES (:username, :email, :password)";
    $stmt = $db->prepare($sql);

    // bind parameter ke query
    $params = array(
        ":username" => $username,
        ":password" => $password,
        ":email" => $email
    );

    // eksekusi query untuk menyimpan ke database
    $saved = $stmt->execute($params);

    // jika query simpan berhasil, maka user sudah terdaftar
    // maka alihkan ke halaman login
    if($saved) header("Location: login.php");
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
        <div class="big_title" style="margin-top:20px;">Welcome to My Site</div>
        <div class="login_box" style="margin-top:50px; height:300px;">
            <form id="form_login" action="" method="POST">
                <h2 class="title">Register</h2>
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
                                <label  for="username"><b>E-mail</b></label>
                            </div>
                            <div class="right-tab">
                                <input type="text" class="input-field" placeholder="Enter Username" name="username" required>
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
                            <button type="submit">Register</button>
                        </p>
                        <p class="exception">
                            Already have an account? <a href="login.php">Click here</a>
                        </p>
                    </tr>
                    </table>
            </form>
        </div>
    </div>
</body>
</html>