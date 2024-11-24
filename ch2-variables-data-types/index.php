<?php
    // Variables = a reusable container that holds data.
    // Data Types = String, Integer, Float, Boolean
    $name = "Susmita Dey";
    $food = "pizza";
    $email = "hello123@gmail.com";

    $age = 20;
    $users = 2;
    $quantity = 3;

    $gpa = 2.5;
    $price = 10.99;
    $tax_rate = 0.99;

    $employed = true;
    $online = false;
    $for_sale = true;

    $total = null;

    echo "Hello, my name is {$name} and I am {$age} years old. <br/>";
    echo "I love {$food} <br/>";
    echo "My email address is {$email} <br/>";

    echo "I have {$users} users <br/>";
    echo "I have {$quantity} items in my cart <br/>";

    echo "My GPA is {$gpa} <br/>";
    echo "The price is {$price} <br/>";
    echo "The tax rate is {$tax_rate} <br/>";

    echo "I am employed: {$employed} <br/>";
    echo "I am online: {$online} <br/>";
    echo "This item is for sale: {$for_sale} <br/>";

    echo "You have ordered {$quantity} x {$food}s <br/>";
    $total = $quantity * $price;
    echo "Your total is \${$total} <br/>";
?>