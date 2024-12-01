<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checkboxes</title>
</head>
<body>
    <form action="index.php" method="post">
    <input type="checkbox" name="pizza" value="Pizza">Pizza<br>
        <input type="checkbox" name="hamburger" value="Hamburger">Hamburger<br>
        <input type="checkbox" name="hotdog" value="Hotdog">Hotdog<br>
        <input type="checkbox" name="taco" value="Taco">Taco<br>
        <input type="submit" name="submit">
    </form>
</body>
</html>

<?php
    if (isset($_POST['submit'])) {
        if (isset($_POST['pizza'])) {
            echo "You like pizzas!<br>";
        }
        if (isset($_POST['hamburger'])) {
            echo "You like hamburgers!<br>";
        }
        if (isset($_POST['hotdog'])) {
            echo "You like hotdogs!<br>";
        }
        if (isset($_POST['taco'])) {
            echo "You like tacos!<br>";
        }

        if (empty($_POST['pizza'])) {
            echo "You DON'T like pizzas!<br>";
        }
        if (empty($_POST['hamburger'])) {
            echo "You DON'T like hamburgers!<br>";
        }
        if (empty($_POST['hotdog'])) {
            echo "You DON'T like hotdogs!<br>";
        }
        if (empty($_POST['taco'])) {
            echo "You DON'T like tacos!<br>";
        }
    }
?>