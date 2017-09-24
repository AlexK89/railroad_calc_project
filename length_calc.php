<?php
/**
 * Created by PhpStorm.
 * User: alexandrk
 * Date: 21/09/2017
 * Time: 20:30
 */

ini_set('display_errors', 'On');
error_reporting(E_ALL | E_STRICT);

if(isset($_POST["submit_length_calc"])) {
    $posts = filter_var($_POST["posts"], FILTER_SANITIZE_NUMBER_INT);
    $railings = filter_var($_POST["railings"], FILTER_SANITIZE_NUMBER_INT);

    echo check_amount($posts, $railings);
}

/*
 * check_amount checking for enough amount of components
 *
 * @params $posts integer       -   amount of provided posts;
 * @params $railings integer    -   amount of provided railings;
 *
 * @return string               -   max length what we can get with available components / warning message;
 */
function check_amount($posts, $railings)
{
    if ($posts > 1 && $railings > 0) {
        $length = length($posts, $railings);
        return "<span>Length:</span> " . $length . " m";
    } else {
        return "<span class='error'>" . "Provide enough amount of components" . "</span>";
    }
}
/*
 * length based on providing available components calculating
 * max length of railroad what we can build;
 *
 * @params $posts integer       -   amount of available posts;
 * @params $railings integer    -   amount of available railings;
 *
 * @return $max_length integer  -   max length what we can get with available components;
 */
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