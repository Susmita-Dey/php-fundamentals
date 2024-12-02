<?php
    include("database.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
</head>
<body>
    <form action="<?php htmlspecialchars($_SERVER["PHP_SELF"]) ?>" method="post">
        <h2>Welcome to FakeBook!</h2>
        username:<br>
        <input type="text" name="username"><br>
        password:<br>
        <input type="password" name="password"><br><br>
        <input type="submit" value="Register" name="submit">
    </form><br>
</body>
</html>

<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $username = filter_input(INPUT_POST, "username", FILTER_SANITIZE_SPECIAL_CHARS);
        $password = filter_input(INPUT_POST, "password", FILTER_SANITIZE_SPECIAL_CHARS);

        if (empty($username)) {
            echo "Please enter a username.";
        } elseif (empty($password)) {
            echo "Please enter a password.";
        } else {
            $hash = password_hash($password, PASSWORD_DEFAULT);

            $query = "INSERT INTO users (user, password) VALUES ('$username', '$hash')";

            try {
                mysqli_query($conn, $query);
                echo "You are now registered!";
            } catch(mysqli_sql_exception) {
                echo "That username is taken";
            }
        }
        
    }

    mysqli_close($conn);
?>