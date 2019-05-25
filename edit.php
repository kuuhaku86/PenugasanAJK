<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Data</title>
    <link rel="stylesheet" href="style_landing_page.css">
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
	            include "connect.php";
	            $id = $_GET['id'];
	            $query_mysql = mysql_query("SELECT * FROM users WHERE id='$id'")or die(mysql_error());
	            $nomor = 1;
	            while($data = mysql_fetch_array($query_mysql)){
	?>
	<form action="update.php" method="post">		
		<table>
			<tr>
				<td>Username</td>
				<td>
					<input type="hidden" name="id" value="<?php echo $data['id'] ?>">
					<input type="text" name="username" value="<?php echo $data['username'] ?>">
				</td>					
			</tr>	
			<tr>
				<td>Email</td>
				<td><input type="text" name="email" value="<?php echo $data['email'] ?>"></td>					
			</tr>	
			<tr>
				<td></td>
				<td><input type="submit" value="Save"></td>					
			</tr>				
		</table>
	</form>
	<?php } ?>
        </main>
    </div>
</body>
</html>