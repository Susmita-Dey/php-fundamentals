<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order Food</title>
</head>

<body>
    <form action="index.php" method="post">
        <label for="qunatity">Quantity:</label><br>
        <input type="text" name="quantity">
        <input type="submit" value="Calculate Total">
    </form>
</body>

</html>

<?php
$item = "pizza";
$price = 5.99;
?>