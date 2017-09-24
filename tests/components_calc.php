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