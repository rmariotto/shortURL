<?php
session_start();

require_once 'db.php';

$_SESSION['error'] = false;

if(isset($_POST['submit'])){
    if(empty($_POST['user']) || empty($_POST['password'])){
        header('Location: index.php');
    }

$username = mysqli_real_escape_string($connectDB, $_POST['user']);
$password = mysqli_real_escape_string($connectDB, $_POST['password']);

$query = "SELECT * FROM users WHERE username = '$username' AND password = '$password' ";

if (!mysqli_query($connectDB, $query)) {
    die('erro');
} else {
    $result = mysqli_query($connectDB,$query);
    while ($row = $result->fetch_assoc()) {
        echo $row;
    }
    $_SESSION['user'] = $username;
    header('Location: page.php');
}

}
