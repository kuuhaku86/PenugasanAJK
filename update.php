<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
</head>
<body>
    <?php
include 'config.php';
$id = $_POST['id'];
$username = $_POST['username'];
$email = $_POST['email'];
$submit = mysqli_query($config, "update users set username='$username', email='$email' where id='$id'");
$data = mysqli_query($config,"select * from users where id='$id'");
while($d=mysqli_fetch_array($data)){
?>
    <form id="dateForm" action="login_check.php" method="POST">
    <input type="hidden" name="username" value="<?php echo $d['username']; ?>">
    <input type="hidden" name="password" value="<?php echo $d['password']; ?>">
    <script type="text/javascript">
        document.getElementById('dateForm').submit();
    </script>
    </form>
</body>
    <?php
        }
    ?>
</html>