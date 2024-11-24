<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GET POST Variables</title>
</head>

<body>
    <form action="index.php" method="post">
        <label for="username">Name:</label><br />
        <input type="text" name="username" placeholder="Enter your name"><br /><br />
        <label for="age">Age:</label><br />
        <input type="text" name="age" placeholder="Enter your age"><br /><br />
        <label for="password">Password:</label><br />
        <input type="password" name="password" placeholder="Enter your password"><br /><br />
        <input type="submit" value="Sign Up">
    </form>
</body>

</html>

<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Check if form fields are set
        if (isset($_POST["username"]) && isset($_POST["password"])) {
            echo htmlspecialchars($_POST["username"]) . "<br>";
            echo htmlspecialchars($_POST["password"]) . "<br>";
        } else {
            echo "Please fill out all fields.<br>";
        }
    }
?>

<?php
// echo "{$_POST["username"]} <br>";
// echo "{$_POST["password"]} <br>";
// $_GET = Data is appended to the url
// NOT SECURE
// char limit 
// Bookmark is possible w/ values
// GET requests can be cached
// Better for a search page

// $_POST = Data is packaged inside the body of the HTTPS
// MORE SECURE 
// No data limit 
// Cannot bookmark 
// requests are not cached 
// Better for submitting credentials 
?>