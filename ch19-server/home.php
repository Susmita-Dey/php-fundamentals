<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP SERVER</title>
</head>
<body>
    <!-- PHP_SELF = redirecting to the same file where you're (NOTE: this is vulnearable to use like this so it's highly recommended to filter it while using in order to avoid any cross-site scripts) -->
    <form action="<?php htmlspecialchars($_SERVER["PHP_SELF"]) ?>" method="post">
        username:<br>
        <input type="text" name="username">
        <input type="submit">
    </form>
</body>
</html>

<?php
    // $_SERVER = SGB that contains headers, paths, and script locations.
    // The entries in this array are created by the web server.
    // Shows nearly everything you need to know about the current web page env.

    /*
    foreach ($_SERVER as $key => $value) {
        echo "{$key} = {$value} <br>";
    } */

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        echo "Hello";
    }
?>