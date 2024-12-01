<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sanitize Input</title>
</head>
<body>
    <form action="index.php" method="post">
        <input type="text" name="username"><br>
        <input type="text" name="age"><br>
        <input type="text" name="email"><br>
        <input type="submit" name="login" value="login">
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

    echo 'Hello {$username}';
    echo 'You are {$age} years old';
    echo "Your email is: {$email}";
}
?>