<?php
    require_once("connection.php");
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="login-page.css">
        <title>Sign Up</title>
    </head>
    <body>
        <section>
            <img src="Hellcat.jpeg" class="bg">
            <form id="login" method="POST" action="createAccount.php">
                <h2>Sign Up</h2>
                <div class="inputBox">
                    <input type="text" name="Username" placeholder="Username">
                </div>
                <div class="inputBox">
                    <input type="email" name="Email" placeholder="Email">
                </div>
                <div class="inputBox">
                    <input type="password" name="Password" placeholder="Create Password">
                </div>
                <div class="inputBox">
                    <input type="submit" value="Create Account" id="btn">
                </div>
                <div class="group">
                    <a href="log-in.php">Already have an account?</a>
                </div>
            </form>
        </section>
    </body>
</html>