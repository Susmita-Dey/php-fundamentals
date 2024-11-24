<?php
    // Arithmetic Operators
    // +, -, *, /,, **, %
    echo "<h2>Arithmetic Operators</h2><br/>";
    $x = 10;
    $y = 3;
    $z = null;

    // Addition
    $z = $x + $y;
    echo $z . "<br>";

    // Subtraction
    $z = $x - $y;
    echo $z . "<br>";

    // Multiplication
    $z = $x * $y;
    echo $z . "<br>";

    // Division
    $z = $x / $y;
    echo $z . "<br>";

    // Modulus
    $z = $x % $y;
    echo $z . "<br>";

    // Exponentiation
    $z = $x ** $y;
    echo $z . "<br>";

    // Increment/Decrement Operators
    // ++, --
    echo "<h2>Increment/Decrement Operators</h2><br/>";
    $counter = 0;
    $counter++;
    echo $counter . "<br>";
    $counter--;
    echo $counter . "<br>";
    $counter += 5;
    echo $counter . "<br>";
    $counter -= 2;
    echo $counter . "<br>";

    // Operator Precedence
    echo "<h2>Operator Precedence</h2><br/>";
    // PEMDAS
    // Parentheses, Exponents, Multiplication, Division, Addition, Subtraction
    // ()
    // **
    // * / %
    // + -
    $total = 1 + 2 - 3 * 4 / 5 ** 6;
    echo $total . "<br>";
?>