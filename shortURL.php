<?php

require_once 'db.php';

$url = filter_input(INPUT_POST, 'url');

$code = substr(md5(uniqid(rand())), 0, 5);
$query = "INSERT INTO shorten_url (url, short_url) VALUES ('$url','$code')";

if (!mysqli_query($connectDB, $query)) {
    die('erro');
}

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
    <nav>
        <a class="log" href="logout.php">logout</a>
    </nav>

    <div class="container">
        <h1>Your short URL!</h1>
        <div class="c-input">
                <input class="short-input" type="text" name="url" id="url" value="http://localhost:8080/redir.php?c=<?php echo $code; ?>">
            </div>
            <div class="register">
                 <a href="urls.php" class="btn-register">all your urls</a>
            </div>
    </div>

    </body>
</html>
