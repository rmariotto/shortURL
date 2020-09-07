<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>URL Shortener</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/styles.css">
    </head>
    <body>
    
    <div class="container">
        <h1>Register</h1>
        <div class="c-input">
            <form method="post" action="reg.php">
                <p>
                    <label>Username:</label>
                    <input type="text" id="user" name="user"/>
                </p>
                <p>
                    <label>Password:</label>
                    <input type="password" id="password" name="password"/>
                </p>
                <p>
                 <input type="submit" name="submit" id="button" value="register">
                </p>
            </form>    
            
        </div>
        <div>

        </div>
    </div>

    </body>
</html>

