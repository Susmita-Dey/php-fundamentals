<?php
    $temp = 15;
    $cloudy = false;

    if ($temp < 0 || $temp > 30) {
        echo "The weather is bad<br>";
    } else {
        echo "The weather is good.<br>";
    }

    if (!$cloudy) {
        echo "It's sunny!<br>";
    } else {
        echo "It's cloudy!<br>";
    }

    // voting system
    $age = 18;
    $citizen = true;

    if (!$age >= 18 || !$citizen) {
        echo "You cannot vote!<br>";
    } else {
        echo "You can vote!<br>";
    }

    // selling movie tickets
    $child = false;
    $senior = false;
    $ticket = null;

    if ($child || $senior) {
        $ticket = 10;
    } else {
        $ticket = 15;
    }

    echo "The ticket price is \${$ticket}";
?>

// NOTE:
// LOGICAL OPERATORS = combine conditional statements
// if(condition1 && condition2)

// && = True if both conditions are true
// || = True if at least one condition is true
// '!' = True if false. False if true