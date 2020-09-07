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
        <h1>Short URL</h1>
        <div class="c-input">
            <form method="post" action="shortURL.php">
                <input type="text" name="url" id="url" placeholder="insert your URL" required>
                <input type="submit" name="submit" id="button" value="shorten URL">
            </form>
        </div>
    </div>

    </body>
</html>
