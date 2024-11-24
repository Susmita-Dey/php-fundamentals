<?php
    // isset() = Returns TRUE if a variable is declared and not null
    // empty() = Returns TRUE if a variable is not declared, false, null, ""

    $username = "Susmita";
    echo isset($username) . "<br>"; // returns 1 which means TRUE in php.
    $username = null;
    echo isset($username) . "<br>"; // returns nothing meaning FALSE.

    if (isset($username)) {
        echo "This variable is set.<br>";
    } else{
        echo "This variable is NOT set.<br>";
    }

    $user = false;
    if (empty($user)) {
        echo "This variable is empty.<br>";
    } else{
        echo "This variable is NOT empty.<br>";
    }
?>