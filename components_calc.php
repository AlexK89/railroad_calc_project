<?php
/**
 * Created by PhpStorm.
 * User: alexandrk
 * Date: 21/09/2017
 * Time: 20:29
 */

ini_set('display_errors', 'On');
error_reporting(E_ALL | E_STRICT);

if(isset($_POST["submit_components_calc"])) {
    $length = filter_var($_POST["length"], FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION);
    if ($length) {
        $components = components_calc($length);
        echo "<p>Post: " . $components["posts"] . "</p>";
        echo "<p>Railings: " . $components["railings"] . "</p>";
    } else {
        echo "<span style='color: red;'>" . "Provide the length you need." . "</span>";
    }
}
/*
 * components_calc based on requested length calculate how much components of each type user need;
 *
 * @params $length integer      -   requested length;
 *
 * @return $components array    -   return an array with amount of each type of components;
 */
function components_calc($length)
{
    $components = array("posts" => 0, "railings" => 0);
    if ($length > 0) {
        $components = array("posts" => 2, "railings" => 1);
        while($length >= 1.7 ) {
            $components["posts"]++;
            $components["railings"]++;
            $length -= 1.6;
        }
    }
    return $components;
}