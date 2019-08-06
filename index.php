<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Welcome</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <?php
        if(isset($_GET['pesan'])){
            if($_GET['pesan']=="belum_login"){
                echo "<script>
                alert('Anda belum login');
            </script>";
            }
        }
    ?>
    <div class="container">
        <div class="login_box" style=" height:100px; width:330px;">
            <a href="login.php" style="text-decoration:none; font-size:20px;font-weight:300;"><div class="button item" style="padding-top:13px; height:32px;">Login</div></a>
            <a href="register.php" style="font-size:20px;font-weight:300; text-decoration:none; margin-top:20px; "><div class="button item" style="padding-top:13px; height:32px;">Register</div></a>
            
        </div>
    </div>
</body>
</html>