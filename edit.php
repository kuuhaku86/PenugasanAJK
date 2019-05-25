<?php
// include database connection file
include_once("config.php");

// Check if form is submitted for user update, then redirect to homepage after update
if(isset($_POST['update']))
{   
    $id = $_POST['id'];

    $username=$_POST['username'];
    $email=$_POST['email'];

    // update user data
    $result = mysqli_query($config, "UPDATE users SET username='$username',email='$email' WHERE id=$id");

    // Redirect to homepage to display updated user in list
    header("Location: timeline.php");
}
?>
<?php
include_once("config.php");
// Display selected user data based on id
// Getting id from url
$id = $_SESSION['id'];

// Fetech user data based on id
$result = mysqli_query($config, "SELECT * FROM users WHERE id=$id");

while($user_data = mysqli_fetch_array($result))
{
    $username = $user_data['username'];
    $email = $user_data['email'];
}
?>

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
            <form name="update_user" method="post" action="">
        <table border="0">
            <tr> 
                <td>Username</td>
                <td class="insert"><input type="text" name="username" value=<?php echo $username;?>></td>
            </tr>
            <tr> 
                <td>Email</td>
                <td class="insert"><input type="text" name="email" value=<?php echo $email;?>></td>
            </tr>
            <tr>
                <td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>
				<td><input style="margin-top:10px;  display: block; width: 100px; height:30px; background-color: white; border-radius: 25px; border: 1px solid rgb(155, 139, 129); color:#33691e;" type="submit" name="update" value="Update"></td>
            </tr>
        </table>
    </form>
        </main>
    </div>
</body>
</html>