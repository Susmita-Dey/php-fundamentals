<?php

    // array = "variable which can hold more than one value at a time

    $foods = array("apple", "orange", "banana", "coconut");

    // echo $foods[0] . "<br>";
    // echo $foods[1] . "<br>";
    // echo $foods[2] . "<br>";
    // echo $foods[3] . "<br>";

    // $foods[0] = "pineapple";
    array_push($foods, "pineapple","kiwi"); //appends array elements at the last index of the array
    array_shift($foods); // removes the topmost element from the array
    array_pop($foods); // deletes the last element in the array

    foreach($foods as $food){
        echo $food . "<br>";
    }

    echo "<br>-------------------<br>";
    echo "<strong>Reversed Array</strong><br><br>";
    $reversed_foods = array_reverse($foods);

    foreach ($reversed_foods as $rf) {
        echo $rf . "<br>";
    }
?>