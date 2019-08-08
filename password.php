<?php
    require 'config.php';
    session_start();
    $id=$_SESSION['id'];
    $data=mysqli_query($config,"SELECT * FROM users WHERE id='$id'");
    $data=mysqli_fetch_assoc($data);
    if(isset($_POST['submit'])){
        $password = $_POST['password'];
        $newPassword = $_POST['newpassword'];
        $newPasswordConfirm = $_POST['confirmpassword'];
        $data = mysqli_query($config,"SELECT * FROM users WHERE id='$id'");
        $data=mysqli_fetch_assoc($data);
        if(password_verify($password,$data['password'])){
            if($newPassword==$newPasswordConfirm){
                $newPassword=password_hash($newPassword,PASSWORD_BCRYPT);
                $query = mysqli_query($config,"UPDATE users SET password='$newPassword' WHERE id='$id'");
                if($query){
                    header("Location: timeline.php?pesan=passwordsuccess");
                    exit();
                }else{
                    header("Location: password.php?pesan=error");
                    exit();
                }
            }else{
                header("Location: password.php?pesan=passwordnotmatch");
                exit();
            }
        }else{
            header("Location: password.php?pesan=currentpasswordnotmatch");
                exit();
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Password</title>
    <link rel="stylesheet" href="style_landing_page.css">
    <style>
        #main-doc{
            height:74vh;
        }
		table{
			display:block;
			width : 100px;
		}
        tr {
			display:block;
			margin-top: 10px;
		}
    </style>
</head>
<body>
    <?php
        if(isset($_GET['pesan'])){
            if($_GET['pesan']=="error"){
                echo "
                    <script>
                        alert('Ada kesalahan');
                    </script>
                ";
            }else if($_GET['pesan']=="passwordnotmatch"){
                echo "
                    <script>
                        alert('Password baru tidak cocok dengan konfirmasinya');
                    </script>
                ";
            }else if($_GET['pesan']=="currentpasswordnotmatch"){
                echo "
                    <script>
                        alert('Password lama salah');
                    </script>
                ";
            }
        }
    ?>
    <div class="container">
        <div class="header">
            <img src="ASET-02.png" alt="logo-ajk" id="header-img">
            <a href="edit.php" class="nav-link">Back</a>
        </div>
        <div id="main-doc">
            <form action="" method="post">
                <table>
                    <tr>
                        <td>
                            <input class="insert" type="password" name="password" placeholder="Your current password">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input type="password" class="insert" name="newpassword" placeholder="Your new password">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input type="password" class="insert" name="confirmpassword"placeholder="Your new password(again)">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input type="submit" class="insert" value="Submit" style="cursor:pointer;" name="submit">
                        </td>
                    </tr>
                </table>
            </form>
        </div>
    </div>
</body>
</html>