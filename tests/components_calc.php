<?php
/**
 * Created by PhpStorm.
 * User: alexandrk
 * Date: 24/09/2017
 * Time: 17:10
 */

use PHPUnit\Framework\TestCase;

require ("../components_calc.php");

class StackTest extends TestCase
{
    const COUNTER_1 = 10;
    const COUNTER_2 = 0;
    const COUNTER_3 = -10;

    /*
     * testcheck_input_string checking if string is the return of main function
     */
    public function testcheck_input_string() {
        $result = check_input(self::COUNTER_1);
        $expect = "string";
        $this -> assertInternalType($expect, $result);
    }
    /*
  * testcheck_input_success checking if string is the return correct string
  */
    public function testcheck_input_success() {
        $result = check_input(self::COUNTER_1);
        $expect = "<span>Post:</span> 8 <span>Railings:</span> 7";
        $this -> assertEquals($expect, $result);
    }
    /*
     * testcheck_input_fail checking if string is the return correct string
     */
    public function testcheck_input_fail() {
        $result = check_input(self::COUNTER_2);
        $expect = "<span class='error'>Provide the length you need. <br> Min length - 1.7m</span>";
        $this -> assertEquals($expect, $result);
    }
    /*
     * testcomponents_calc_array checking if array is the return of main function
     */
    public function testcomponents_calc_array() {
        $result = components_calc(self::COUNTER_1);
        $expect = "array";
        $this -> assertInternalType($expect, $result);
    }
    /*
     * testcomponents_calc_positive checking if the main function return correct
     * amount of components if length is positive
     */
    public function testcomponents_calc_positive() {
        $result = components_calc(self::COUNTER_1);
        $expect = array("posts"=>8, "railings" => 7);
        $this -> assertEquals($expect, $result);
    }
    /*
     * testcomponents_calc_positive checking if the main function return correct
     * amount of components if length equals zero
     */
    public function testcomponents_calc_zero() {
        $result = components_calc(self::COUNTER_2);
        $expect = array("posts"=>0, "railings" => 0);
        $this -> assertEquals($expect, $result);
    }
    /*
     * testcomponents_calc_positive checking if the main function return correct
     * amount of components if length is negative
     */
    public function testcomponents_calc_minus() {
        $result = components_calc(self::COUNTER_3);
        $expect = array("posts"=>0, "railings" => 0);
        $this -> assertEquals($expect, $result);
    }
}