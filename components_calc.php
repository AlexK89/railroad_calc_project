<?php
/**
 * Created by PhpStorm.
 * User: alexandrk
 * Date: 21/09/2017
 * Time: 20:29
 */

ini_set('display_errors', 'On');
error_reporting(E_ALL | E_STRICT);

//Components calculation form

if(isset($_POST["submit_components_calc"])) {
    $length = (float)$_POST["length"];

    if ($length > 0) {
        $components = components_calc($length);

        foreach ($components as $key => $value) {
            echo "<p>" . $key . ": " . " " . $value . "</p>";
        }
    } else {
        echo "<span style='color: red;'>" . "Provide the length you need" . "</span>";
    }
}

function components_calc($length)
{
    $components = array("posts" => 1, "railings" => 0);

    while($length > 0 ) {
        $components["posts"]++;
        $components["railings"]++;
        $length -= 1.7;
    }
    return $components;
}