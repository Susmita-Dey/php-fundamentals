<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Stopwatch</title>
</head>
<body>
    <form action="whileloop.php" method="post">
        <input type="submit" value="stop" name="stop">
    </form>
</body>
</html>

<?php
    // while loop = do some code indefinitely while some condition remains true

    // $counter = 1;
    // while ($counter <= 10) {
    //     $counter++; // gives an amazing no series output
    //     echo $counter . "<br>";
    // }

    $seconds = 0;
    $running = true;

    while ($running) {
        if ($isset($_POST["stop"])) {
            $running = false;
        } else {
            // wait 1 second 
            $seconds++;
            echo $seconds . "<br>";
        }
    }
?>