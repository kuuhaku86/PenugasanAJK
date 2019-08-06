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
            echo "<script>
                alert('Login gagal karena username atau password salah');
            </script>";
		}else if($_GET['pesan'] == "logout"){
            echo "<script>
            alert('Anda berhasil logout');
            </script>";
		}else if($_GET['pesan'] == "regissuccess"){
            echo "<script>
            alert('Register success');
            </script>";
        }
	}
	?>
    <div class="container">
        <div class="login_box">
            <form id="form_login"action="login_check.php" method="POST">
                <h2 class="title">Login</h2>
                <table>
                        <tr>
                                <p>
                                    <div>
                                        <input type="text" class="input-field item" placeholder="Enter Username or Email" name="username" required>
                                    </div>
                                </p>
                            </tr>
                            <tr>
                                <p>
                                    <div>
                                        <input type="password" name="password" class="input-field item"  placeholder="Enter Password" required>
                                    </div>
                                </p>
                                <p>
                                    <input  type="submit" name="login" value="Login" class="button item" />
                                </p>
                                <p class="exception">
                                    Don't have any account? <a href="register.php" class="exception-link">Click here</a>
                                </p>
                            </tr>
                    </table>
            </form>
        </div>
    </div>
</body>
</html>