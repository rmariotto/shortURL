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
        <h1>Login</h1>
        <div class="c-input">
            <form method="post" action="login.php">
                <p>
                    <label>Username:</label>
                    <input type="text" id="user" name="user"/>
                </p>
                <p>
                    <label>Password:</label>
                    <input type="password" id="password" name="password"/>
                </p>
                <?php if ( ! empty( $_SESSION['error'] ) ) :?>
					<tr>
						<td style="color: red;"><?php echo $_SESSION['error'];?></td>
						<?php $_SESSION['error'] = ''; ?>
					</tr>
				<?php endif; ?>
                <p>
                 <input type="submit" name="submit" id="submit" value="login">
                </p>
            </form>    
        </div>
        <div class="register">
            <a href="register.php" class="btn-register">register</a>
        </div>
    </div>

    </body>
</html>

