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
        <a class="log" href="shortURL.php">back</a>
        <a class="log" href="logout.php">logout</a>
    </nav>

    <div class="container">
       
            <div>
                <table>
                    <tr>
                        <th>URLs</th>
                    </tr>
                    <?php
                    require_once 'db.php';
                        $sql = "SELECT url FROM shorten_url";
                        $result = $connectDB->query($sql);

                        if ($result->num_rows > 0) {
                            while ($row = $result->fetch_assoc()) {
                                echo "<tr><td>" . $row['url'] . "</td><td>";
                            }
                        }
                        ?>
                </table>

        </div>
    </div>

    </body>
</html>
