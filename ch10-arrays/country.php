<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Countries and Capitals</title>
</head>
<body>
    <form action="country.php" method="post">
        <label for="">Enter a country:</label>
        <input type="text" name="country">
        <input type="submit" value="Submit">
    </form>
</body>
</html>

<?php
    $capitals = array("USA"=>"Washington D.C.",
    "Japan"=>"Kyoto",
    "South Korea"=>"Seoul",
    "India"=>"New Dehli");

    $capital = $capitals[$_POST["country"]];
    echo $capital;
?>