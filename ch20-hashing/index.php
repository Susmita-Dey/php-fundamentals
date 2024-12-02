<?php
    // hashing = transforming sensitive data (password) into letters, number, and/or symbols via a mathemetical process. (similar to encryption).
    // Hides the original data from 3rd parties.

    $password = "pizza123";
    $hash = password_hash($password, PASSWORD_DEFAULT); // PASSWORD_DEFAULT generally uses BCRYPT hashing algorithm
    echo $hash . "<br>";

    if (password_verify("pizza123",$hash)) {
        echo "You are logged in! <br>";
    } else{
        echo "Incorrect password! <br>";
    }
?>