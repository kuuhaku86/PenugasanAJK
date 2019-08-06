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
        /* .main-doc{
            height:720;
        } */
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
                $id=$_GET['id']; 
                $result = mysqli_query($config, "select * from users where id='$id'");
                while($d = mysqli_fetch_array($result)){
            ?>
            <form name="update" method="post" action="update.php">
            <table border="0">
                <input type="hidden" name="id" value="<?php echo $d['id']; ?>">
                <tr> 
                    <td>Username</td>
                    <td class="insert"><input type="text" name="username" value="<?=$d['username']; ?>"></td>
                </tr>
                <tr> 
                    <td>Email</td>
                    <td class="insert"><input type="text" name="email" value="<?=$d['email']; ?>"></td>
                </tr>
                <tr> 
                    <td>Password</td>
                    <td class="insert"><input type="password" name="password"></td>
                </tr>
                <tr>
                    <td><input type="submit" name="update" class="button" value="Update" style="background-color:yellow; color:black;" onclick="return confirm('Are you sure to update this account info?')"></td>
                </tr>
            </table>
        </form>
        <?php 
	}
	?>
        <p>
            <a href='delete.php?id=<?=d['id']; ?>' class="button" style="background-color:red;" onclick="return confirm('Are you sure to delete this account?')">Delete Account</a>
        </p>
        </main>
    </div>
</body>
</html>