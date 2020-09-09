<?php
session_start();

require_once 'db.php';

if (isset($_POST['submit'])) {
    if (empty($_POST['user']) || empty($_POST['password'])) {
        header('Location: index.php?Empty=Please fill out the fields!');
    } else {
        $username = mysqli_real_escape_string($connectDB, $_POST['user']);
        $password = mysqli_real_escape_string($connectDB, $_POST['password']);
        $username = stripslashes($username);
        $password = stripslashes($password);

        $query = "SELECT * FROM users WHERE username = '$username'";
        $result = mysqli_query($connectDB, $query) or die(mysqli_error($connectDB));

        if (mysqli_fetch_assoc($result)) {
            $_SESSION['user'] = $username;
            header('Location: page.php');
        } else {
            header('Location: index.php?notMatch=Please, enter correct username and password');

        }

    }

}
