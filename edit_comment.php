<?php
    include 'config.php';
    session_start();
    $id=$_SESSION['id'];
    $id_comment=$_GET['id'];
    if(isset($_POST['submit'])){
        $comment=stripslashes($_POST['comment']);
        $comment=mysqli_real_escape_string($config,$comment);
        $query = "UPDATE `comment` SET `comment`='$comment' WHERE id='$id_comment'";
        $res=mysqli_query($config,$query);
        if($res){
            header("Location: timeline.php");
            exit();
        }else{
            $error=true;
        }
    }
    $query="SELECT * FROM `comment` WHERE id='$id_comment'";
    $data=mysqli_query($config,$query);
    $data=mysqli_fetch_assoc($data);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add Comment</title>
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
        #main-doc{
            height:74vh;
        }
	</style>
</head>
<body>
<?php
    if(isset($error)&&$error){
        echo '<script>
            alert("Add comment failed");
        </script>';
    }
?>
<div class="container">
        <div class="header">
            <img src="ASET-02.png" alt="logo-ajk" id="header-img">
            <a href="timeline.php" class="nav-link">Back</a>
        </div>
        <main id="main-doc">
            <header id="edit-data">Add Comment</header><br>
            <form method="post" action="">
            <table border="0">
                <input type="hidden" name="id" value="<?=$id; ?>">
                <tr> 
                    <td>Comment</td>
                </tr>
                <tr>
                    <td>
                        <textarea name="comment" rows="5" cols="40" placeholder="Input your comment here"><?=$data['comment']?></textarea>
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="submit" name="submit" value="Edit Comment" class="button" style="background-color:green;" onclick="return confirm('Are you sure?')">
                    </td>
                </tr>
            </table>
        </form>
        </main>
    </div>
</body>
</html>