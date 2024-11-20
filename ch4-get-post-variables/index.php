<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order Food</title>
</head>

<body>
    <form action="index.php" method="post">
        <label for="quantity">Quantity:</label><br>
        <input type="text" name="quantity">
        <input type="submit" value="Calculate Total">
    </form>
</body>

</html>

<?php
$item = "pizza";
$price = 5.99;
$quantity = $_POST["quantity"];
$total = null;

$total = $quantity * $price;

echo "You have ordered {$quantity} x {$item}'s <br>";
echo "Your total is: \${$total}";
?>