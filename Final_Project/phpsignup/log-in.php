<?php
    include("config.php");
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="login-page.css">
        <title>Login</title>
    </head>
    <body>
        <section>
            <img src="Hellcat.jpeg" class="bg">
            <form id="login" method="POST" action="createAccount.php">
                <h2>Log In</h2>
                <div class="inputBox">
                    <input type="text" name="Username"placeholder="Username" required>
                </div>
                <div class="inputBox">
                    <input type="email" name="Email"placeholder="Email" required>
                </div>
                <div class="inputBox">
                    <input type="password" name="Password" placeholder="Password" required>
                </div>
                <div class="inputBox">
                    <a href="index.html"><input type="submit" name="submit" value="Login" id="btn"></a> 
                </div>
                <div class="group">
                    <a href="sign-up-page.html">Don't have an account?</a>
                </div>
            </form>
        </section>
    </body>
</html>