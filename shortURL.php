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
        <div>
                <table>
                    <tr>
                        <th>URLs</th>
                    </tr>
                    <?php
                    $sql = "SELECT url FROM shorten_url";
                    $result = $connectDB->query($sql);

                    if($result->num_rows>0){
                        while($row = $result->fetch_assoc()){
                            echo "<tr><td>" . $row['url'] . "</td><td>";
                        }
                    }
                    ?>
                </table>    

        </div>
    </div>

    </body>
</html>
