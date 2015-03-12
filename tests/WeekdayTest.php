<?php

    require_once "src/Weekday.php";

    class DateTest extends PHPUnit_Framework_TestCase
    {
        function test_checkWeekday_today()
        {
            //Arrange
            $test_Weekday = new Date;
            $input = "03-12-2015";

            //Act
            $result = $test_Weekday->checkWeekday($input);

            //Assert
            $this->assertEquals("Thursday", $result);
        }
    }

 ?>
