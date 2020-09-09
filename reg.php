<?php

require_once 'db.php';

if (isset($_POST['submit'])) {
    if (empty($_POST['user']) || empty($_POST['password'])) {
        header('Location: register.php?Emptyreg=Please fill out the fields!');
    } else {
        $username = mysqli_real_escape_string($connectDB, $_POST['user']);
        $password = mysqli_real_escape_string($connectDB, $_POST['password']);

        $query = "SELECT id,password FROM users WHERE username = '$username'";

        $result = mysqli_query($connectDB, $query) or die(mysqli_error($connectDB));
        $count = mysqli_num_rows($result);

        if ($count === 1) {
            header('Location: register.php?invalid=Username already exists');
        } else {

            $hash = password_hash($password, PASSWORD_BCRYPT);

            $sql = "INSERT INTO users (username, password) VALUES ('$username','$hash')";

            if ($connectDB->query($sql) === true) {
                header('Location: page.php');
            } else {
                die('error to create user');
            }
        }
    }

}
