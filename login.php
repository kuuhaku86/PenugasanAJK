<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <div class="container">
        <div class="big_title">Welcome to My Site</div>
        <div class="login_box">
            <form id="form_login"action="action_page.php">
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
                                    <button type="submit">Register</button>
                                </p>
                                <p class="exception">
                                    Already have an account? <a href="register.php">Click here</a>
                                </p>
                            </tr>
                    </table>
            </form>
        </div>
    </div>
</body>
</html>