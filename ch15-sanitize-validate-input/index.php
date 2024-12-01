<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sanitize Input</title>
</head>
<body>
    <form action="index.php" method="post">
        <input type="text" name="username" placeholder="Name"><br>
        <input type="text" name="age" placeholder="Age"><br>
        <input type="text" name="email" placeholder="Email"><br>
        <input type="submit" name="login" value="login"><br>
    </form>
</body>
</html>

<?php
if (isset($_POST["login"])) {
    // $username = $_POST['username']; // we're not going to use this line bcoz it's risky as if someone puts some js malicious script in the input field, then it would affect our code.

    // below code filters out all illegal characters
    $username = filter_input(INPUT_POST, "username", FILTER_SANITIZE_SPECIAL_CHARS);

    $age = filter_input(INPUT_POST, "age", FILTER_SANITIZE_NUMBER_INT);

    $email = filter_input(INPUT_POST, "email", FILTER_SANITIZE_EMAIL);

    echo "Hello {$username}<br>";
    echo "You are {$age} years old<br>";
    echo "Your email is: {$email}<br>";
}
?>