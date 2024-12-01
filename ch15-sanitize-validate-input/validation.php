<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Validate Input</title>
</head>
<body>
    <form action="validation.php" method="post">
    <input type="text" name="username" placeholder="Name"><br>
        <input type="text" name="age" placeholder="Age"><br>
        <input type="text" name="email" placeholder="Email"><br>
        <input type="submit" name="login" value="login"><br>
    </form>
</body>
</html>

<?php
if (isset($_POST["login"])) {
    $age = filter_input(INPUT_POST, "age",FILTER_VALIDATE_INT);
    
    if (empty($age)) {
        echo "That number wasn't valid!<br>";
    } else {
        echo "You are {$age} years old!<br>";
    }
    
    $email = filter_input(INPUT_POST, "email",FILTER_VALIDATE_EMAIL);
    
    if (empty($email)) {
        echo "That email wasn't valid!<br>";
    } else {
        echo "You email is: {$email}<br>";
    }
}
?>