<?php
session_start();

require_once 'db.php';

if (isset($_POST['submit'])) {
    if (empty($_POST['user']) || empty($_POST['password'])) {
        header('Location: index.php?Empty=Please fill out the fields!');
    }

    $username = mysqli_real_escape_string($connectDB, $_POST['user']);
    $password = mysqli_real_escape_string($connectDB, $_POST['password']);
    $username = stripslashes($username);
    $password = stripslashes($password);

    if ($username != "" && $password != "") {

        $query = "SELECT * FROM users WHERE username = '$username' AND password = '$password' ";

        if (!mysqli_query($connectDB, $query)) {
            die('erro');
        } else {
            $result = mysqli_query($connectDB, $query);
            $row = $result->fetch_assoc();
            $_SESSION['user'] = $username;
            header('Location: page.php');
        }

    }
}
