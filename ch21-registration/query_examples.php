<?php
    include("database.php");

    $username = "Patrick";
    $password = "rock223";
    $hash = password_hash($password, PASSWORD_DEFAULT);

    // insert query
    /*
    $sql_ins_query = "INSERT INTO users (user, password) VALUES ('$username', '$hash')";

    try {
        mysqli_query($conn, $sql_ins_query);
        echo "User is now registered <br>";
    } catch (mysqli_sql_exception) {
        echo "Could not register user <br>";
    }
    */

    $sql_select_query = "SELECT * from users";
    // $sql_select_query = "SELECT * from users WHERE user = 'Spongebob'";
    $result = mysqli_query($conn, $sql_select_query);

    if (mysqli_num_rows($result) > 0) {
        while($row = mysqli_fetch_assoc($result)){
            echo $row['id'] . "<br>";
            echo $row['user'] . "<br>";
            echo $row['reg_date'] . "<br>";
        }
    } else {
        echo "No user found <br>";
    }

    mysqli_close($conn);
?>