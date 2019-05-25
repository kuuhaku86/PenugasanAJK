<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <?php 
	if(isset($_GET['pesan'])){
		if($_GET['pesan'] == "gagal"){
			echo "Login gagal! username dan password salah!";
		}else if($_GET['pesan'] == "logout"){
			echo "Anda telah berhasil logout";
		}else if($_GET['pesan'] == "belum_login"){
			echo "Anda harus login untuk mengakses halaman admin";
		}
	}
	?>
    <div class="container">
        <div class="big_title">Welcome to My Site</div>
        <div class="login_box">
            <form id="form_login"action="login_check.php" method="POST">
                <h2 class="title">Login</h2>
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
                                        <label  for="password"><b>Password</b></label>
                                    </div>
                                    <div class="right-tab">
                                        <input type="password" name="password" class="input-field"  placeholder="Enter Password" required>
                                    </div>
                                </p>
                                <p>
                                    <input  type="submit" name="login" value="Login" class="button" style="color:grey; height:30px;border-radius:10px; display:block; margin-top:50px; " />
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