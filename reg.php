<?php
require_once 'db.php';

if (isset($_POST['submit'])) {
    if (empty($_POST['user']) || empty($_POST['password'])) {
        header('Location: register.php?Empty=Please fill out the fields!');
    }

$query = "SELECT * FROM users WHERE username = '$_POST[user]' ";

$result = $connectDB->query($query);
$count = mysqli_num_rows($result);

if($count == 1){
    echo "Username already exists";
} else {
    $password = $_POST['password'];
    $hash = password_hash($password, PASSWORD_BCRYPT);

    $sql = "INSERT INTO users (username, password) VALUES ('$_POST[user]','$hash')";

    if($connectDB->query($sql) === TRUE) {
        header('Location: page.php');
    } else {
        die('error to create user');
    }
}
}