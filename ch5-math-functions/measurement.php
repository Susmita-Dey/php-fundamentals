<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Measurement</title>
</head>

<body>
    <form action="measurement.php" method="post">
        <label for="radius">Radius:</label>
        <input type="text" name="radius"><br>
        <input type="submit" value="Calculate">
    </form>
</body>

</html>

<?php
    $radius = $_POST["radius"];
    $circumference = null;
    $area = null;

    $circumference = 2 * pi() * $radius;
    $circumference = round($circumference, 2);

    $area = pi() * pow($radius, 2);
    $area = round($area, 2);

    $volume = 4 / 3 * pi() * pow($radius, 3);
    $volume = round($volume, 2);

    echo "Circumference = {$circumference}cm <br>";
    echo "Area = {$area}cm<sup>2</sup> <br>";
    echo "Volume = {$volume}cm<sup>3</sup> <br>";
?>