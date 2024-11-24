<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Math Functions</title>
</head>

<body>
    <form action="index.php" method="post">
        <label for="x">x:</label>
        <input type="text" name="x"><br>
        <label for="y">y:</label>
        <input type="text" name="y"><br>
        <label for="z">z:</label>
        <input type="text" name="z"><br>
        <input type="submit" value="Total">
    </form>
</body>

</html>

<?php
    $x = $_POST["x"];
    $y = $_POST["y"];
    $z = $_POST["z"];
    $absoluteVal = null;
    $roundVal = null;
    $floorVal = null;
    $ceilVal = null;
    $squareRootVal = null;
    $powerOfVal = null;
    $maxVal = null;
    $minVal = null;
    $piValue = null;
    $total = null;

    $absoluteVal = abs($x); // absoulute value
    $roundVal = round($y);
    $floorVal = floor($z);
    $ceilVal = ceil($x);
    $squareRootVal = sqrt($z);
    $powerOfVal = pow($x, $y);
    $maxVal = max($x, $y, $z);
    $minVal = min($x, $y, $z);
    $piValue = pi();
    $total = rand(1, 100);

    echo "Absolute value of x: " . $absoluteVal . "<br>";
    echo "Round value of y: " .  $roundVal . "<br>";
    echo "Floor value of z: " .  $floorVal . "<br>";
    echo "Ceil value of x: " .  $ceilVal . "<br>";
    echo "Square root of z: " .  $squareRootVal . "<br>";
    echo "Power of x to the power y: " .  $powerOfVal . "<br>";
    echo "Maximum value: " .  $maxVal . "<br>";
    echo "Minimum value: " .  $minVal . "<br>";
    echo "Pi value: " .  $piValue . "<br>";
    echo "Random number between 1 and 100: " .  $total . "<br>";
    echo "That's it!";
?>