<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Data</title>
    <link rel="stylesheet" href="style_landing_page.css">
	<style>
		tr {
			display:block;
			margin-top: 10px;
		}
		table{
			display:block;
			width : 100px;
		}
		.insert{
			float:right;
		}
	</style>
</head>
<body>
    <div class="container">
        <div class="header">
            <img src="ASET-02.png" alt="logo-ajk" id="header-img">
            <a href="timeline.php" class="nav-link">Back</a>
        </div>
        <main id="main-doc">
            <header id="edit-data">Edit Data</header><br>
            <?php
                include 'config.php';
                $username=$_GET['username']; 
                $result = mysqli_query($config, "select * from users where username='$username'");
                while($d = mysqli_fetch_array($result)){
            ?>
            <form name="update" method="post" action="update.php">
            <table border="0">
                <input type="hidden" name=”id” value="<?php echo $d['id']; ?>">
                <tr> 
                    <td>Username</td>
                    <td class="insert"><input type="text" name="username" value="<?php echo $d['username']; ?>"></td>
                </tr>
                <tr> 
                    <td>Email</td>
                    <td class="insert"><input type="text" name="email" value="<?php echo $d['email']; ?>"></td>
                </tr>
                <tr>
                    <td><input style="margin-top:10px;  display: block; width: 100px; height:30px; background-color: white; border-radius: 25px; border: 1px solid rgb(155, 139, 129); color:#33691e;" type="submit" name="update" value="Update"></td>
                </tr>
            </table>
        </form>
        <?php 
	}
	?>
        </main>
    </div>
</body>
</html>