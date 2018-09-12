<?php
/**
 * Created by PhpStorm.
 * User: tuan
 * Date: 12/09/2018
 * Time: 10:49
 */
use PHPUnit\Framework\TestCase;

require_once "appTTD.php";
class appTTDTest extends TestCase {
    function testMon(){
        $mon = 0;
        $expected = "không có ngày này";
        $actual = LivedTimeCalculator::getLivedHours($mon);
        $this->assertEquals($expected, $actual);
    }

    function testMon1(){
        $mon = 32;
        $expected = "không có ngày này";
        $actual = LivedTimeCalculator::getLivedHours($mon);
        $this->assertEquals($expected, $actual);
    }

    function testMon2() {
        $mon = 33;
        $expected = "không có ngày này";
        $actual = LivedTimeCalculator::getLivedHours($mon);
        $this->assertEquals($expected, $actual);

    }
    function testMon3() {
        $mon = 34;
        $expected = "không có ngày này";
        $actual = LivedTimeCalculator::getLivedHours($mon);
        $this->assertEquals($expected, $actual);
    }
}