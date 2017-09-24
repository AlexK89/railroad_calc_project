<?php
/**
 * Created by PhpStorm.
 * User: alexandrk
 * Date: 24/09/2017
 * Time: 18:30
 */

use PHPUnit\Framework\TestCase;

require ("../length_calc.php");

class StackTest extends TestCase
{
    const COUNTER_1 = 10;
    const COUNTER_2 = 0;
    const COUNTER_3 = -10;

    /*
     * testcheck_amount_string checking if string is the return of main function
     */
    public function testcheck_amount_string() {
        $result = check_amount(self::COUNTER_1, self::COUNTER_2);
        $expect = "string";
        $this -> assertInternalType($expect, $result);
    }
    /*
     * testcheck_amount_positive checking if the main function return string
     * with correct length based on positive number of components
     */
    public function testcheck_amount_positive() {
        $result = check_amount(self::COUNTER_1, self::COUNTER_1);
        $expect = "<p>Length: 14.5</p>";
        $this -> assertEquals($expect, $result);
    }
    /*
     * testcomponents_calc_zero checking if the main function return string
     * with correct length based on zero number of components
     */
    public function testcomponents_calc_zero() {
        $result = check_amount(self::COUNTER_2, self::COUNTER_2);
        $expect = "<span style='color: red;'>Provide enough amount of components</span>";
        $this -> assertEquals($expect, $result);
    }
    /*
     * testcomponents_calc_minus checking if the main function return string
     * with correct length based on negative number of components
     */
    public function testcomponents_calc_minus() {
        $result = check_amount(self::COUNTER_3, self::COUNTER_3);
        $expect = "<span style='color: red;'>Provide enough amount of components</span>";
        $this -> assertEquals($expect, $result);
    }
    /*
     * testcomponents_calc_mixed checking if the main function return string
     * with correct length based on mixed(positive and negative) amount of components
     */
    public function testcomponents_calc_mixed() {
        $result = check_amount(self::COUNTER_1, self::COUNTER_3);
        $expect = "<span style='color: red;'>Provide enough amount of components</span>";
        $this -> assertEquals($expect, $result);
    }
    /*
     * testlength_number checking if number is the return of main function
     */
    public function testlength_number() {
        $result = length(self::COUNTER_1, self::COUNTER_2);
        $expect = "float";
        $this -> assertInternalType($expect, $result);
    }
    /*
     * testlength_positive checking if the main function return number
     * with correct length based on positive number of components
     */
    public function testlength_positive() {
        $result = length(self::COUNTER_1, self::COUNTER_1);
        $expect = 14.5;
        $this -> assertEquals($expect, $result);
    }
    /*
     * testlength_zero checking if the main function return number
     * with correct length based on zero number of components
     */
    public function testlength_zero() {
        $result = length(self::COUNTER_2, self::COUNTER_2);
        $expect = 0.1;
        $this -> assertEquals($expect, $result);
    }
    /*
     * testlength_minus checking if the main function return number
     * with correct length based on negative number of components
     */
    public function testlength_minus() {
        $result = length(self::COUNTER_3, self::COUNTER_3);
        $expect = 0.1;
        $this -> assertEquals($expect, $result);
    }
    /*
     * testlength_mixed checking if the main function return number
     * with correct length based on mixed(positive and negative) amount of components
     */
    public function testlength_mixed() {
        $result = length(self::COUNTER_1, self::COUNTER_3);
        $expect = 0.1;
        $this -> assertEquals($expect, $result);
    }
}