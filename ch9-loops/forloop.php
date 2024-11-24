<?php
// for loop = repeat some code a certain # of times

    for ($i = 1; $i <= 5; $i++) {
        echo "{$i}. Hello <br>";
    }

    echo "<br>----------<br><br>";

    for ($i = 1; $i <= 100; $i+=10) {
        echo "{$i}. Hello <br>";
    }

    echo "<br>----------<br><br>";

    for ($i = 10; $i > 0; $i-=2) {
        echo "{$i}. Hello <br>";
    }
?>