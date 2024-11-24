<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Check</title>
</head>
<body>
    <form action="form.php" method="post">
        <label for="">username: </label>
        <input type="text" name="username"><br><br>
        <label for="">password: </label>
        <input type="text" name="password"><br><br>
        <input type="submit" value="Log in" name="login">
    </form><br>
</body>
</html>

<?php
    /*
    foreach ($_POST as $key => $value) {
        echo "{$key} = {$value} <br>";
    }
    */

    if (isset($_POST["login"])) {
        // echo "You tried to login";
        $username = $_POST["username"];
        $password = $_POST["password"];

        if (empty($username)) {
            echo "Username is missing!";
        } elseif (empty($password)) {
            echo "Password is missing!";
        } else {
            echo "Hello, {$username}";
        }
    }
?>