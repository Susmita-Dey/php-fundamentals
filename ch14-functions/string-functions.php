<?php
    $username = "Susmita";
    $phone = "123-456-789";
    
    $username = strtolower($username);
    echo $username . "<br><br>";
    
    $username = strtoupper($username);
    echo $username . "<br><br>";
    
    // $username = trim($username); // trims trailing spaces
    
    $username = str_pad($username,20,"0");
    echo $username . "<br><br>";

    $phone = str_replace("-","",$phone);
    echo $phone . "<br><br>";

    $username = "Susmita";
    $username = strrev($username);
    echo $username . "<br><br>";
    
    $username = "Susmita";
    $username = str_shuffle($username);
    echo $username . "<br><br>";
    
    $username = "Susmita";
    $checkEquals = strcmp($username,"SuSMita");
    echo $checkEquals . "<br><br>";
    
    $count = strlen($username);
    echo $count . "<br><br>";
    
    $phone = "123-456-789";
    $index = strpos($phone,"-");
    echo $index . "<br><br>";
    
    $firstname = substr($username,0,3);
    echo $firstname . "<br><br>";
    $lastname = substr($username,4);
    echo $lastname . "<br><br>";

    $fullname = explode(" ", $username);
    foreach ($fullname as $name) {
        echo $name . "<br><br>";
    }
    
    $user = ["Bro","The","Code"];
    $user = implode("-", $user);
    echo $user . "<br><br>";
?>