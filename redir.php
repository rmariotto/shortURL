<?php

require_once 'db.php';

$code = filter_input(INPUT_GET, 'c');
$sql = "SELECT url FROM shorten_url WHERE short_url = '$code' ";
$result = $connectDB->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        header('Location:' . $row["url"]);
    }
} else {
    echo "0 results";
}

