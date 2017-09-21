<?php
/**
 * Created by PhpStorm.
 * User: alexandrk
 * Date: 21/09/2017
 * Time: 20:30
 */

ini_set('display_errors', 'On');
error_reporting(E_ALL | E_STRICT);

//Length calculation

if(isset($_POST["submit_length_calc"])) {
    $posts = (int)$_POST["posts"];
    $railings = (int)$_POST["railings"];

    if ($posts > 1 && $railings > 0) {
        $length = length($posts, $railings);
        echo "<p>Length: " . $length . "</p>";
    } else {
        echo "<span style='color: red;'>" . "Provide enough amount of components" . "</span>";
    }
}
function length($posts, $railings)
{
    $max_length = 0.1;

    while ($posts > 1 && $railings > 0) {
        $max_length += 1.6;
        $posts--;
        $railings--;
    }
    return $max_length;
}