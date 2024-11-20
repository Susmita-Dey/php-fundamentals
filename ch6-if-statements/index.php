<?php
$age = 0;

if ($age >= 18) {
    echo "You may enter this site.";
} elseif ($age <= 0) {
    echo "That wasn't a valid age.";
} else {
    echo "You must be 18+ to enter.";
}
