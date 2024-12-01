<?php
    // function = write some code once, reuse when you need it
    //            type () after function name to invoke
    //            example: add(), subtract(), multiply(), divide()

    function happy_birthday($first_name="you", $age=0){
        echo "Happy Birthday dear {$first_name}!<br>";
        echo "Happy Birthday to you!<br>";
        echo "Happy Birthday dear you!<br>";
        echo "You are {$age} years old!<br><br>";
    }
    
    happy_birthday();
    happy_birthday("Spongebob",30);
    happy_birthday("Patrick",35);

    function is_evennum($number) {
        // $result = $number % 2;
        // return $result;
        return $number % 2;
    }
    
    echo is_evennum(10) . "<br>";
    echo is_evennum(13) . "<br><br>";

    function hypotenuse(float $a, float $b){
        $c = sqrt($a ** 2 + $b ** 2);
        return $c;
    }
    echo hypotenuse(5, 6);
?>