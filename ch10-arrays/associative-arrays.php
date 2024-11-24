<?php
    // associative array = An array made of key=>value pairs

    $capitals = array("USA"=>"Washington D.C.",
                      "Japan"=>"Kyoto",
                      "South Korea"=>"Seoul",
                      "India"=>"New Dehli");
    
    // array_shift($capitals); // removes the topmost element from the array
    // array_pop($capitals); // deletes the last element in the array

    foreach ($capitals as $key => $value) {
        echo "{$key} = {$value} <br>";
    }

    echo "<br>-------------------<br>";
    $capitals["USA"] = "Las Vegas";
    echo $capitals["USA"] . "<br>";    
    
    echo "<br>-------------------<br>";
    echo "<strong>Keys:</strong><br><br>";
    $keys = array_keys($capitals); // returns all the keys

    foreach ($keys as $key) {
        echo "{$key} <br>";
    }
   
    echo "<br>-------------------<br>";
    echo "<strong>Values:</strong><br><br>"; 
    $values = array_values($capitals); // returns all the values

    foreach ($values as $value) {
        echo "{$value} <br>";
    }
    
    echo "<br>-------------------<br>";
    echo "<strong>Flipped Associative Array</strong><br><br>";

    $flipcapitals = array_flip($capitals); // exchanges keys to values and vice-versa.
    foreach ($flipcapitals as $key => $value) {
        echo "{$key} = {$value} <br>";
    }
    
    echo "<br>-------------------<br>";
    echo "<strong>Reversed Associative Array</strong><br><br>";

    $reversedcapitals = array_reverse($capitals); // exchanges keys to values and vice-versa.
    foreach ($reversedcapitals as $key => $value) {
        echo "{$key} = {$value} <br>";
    }
        
    echo "<br>-------------------<br>";
    echo "<strong>Count no of elements in Associative Array</strong>: ";
    echo count($capitals);
?>