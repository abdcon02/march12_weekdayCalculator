<?php

    require_once "src/Weekday.php";

    class DateTest extends PHPUnit_Framework_TestCase
    {



        function test_checkWeekday_today()
        {
            //Arrange
            $test_Weekday = new Date;
            $input = "12-03-2015";

            //Act
            $result = $test_Weekday->checkWeekday($input);

            //Assert
            $this->assertEquals("Thursday", $result);
        }

        function test_checkWeekday_yesterday()
        {
            //Arrange
            $test_Weekday = new Date;
            $input = "11-03-2015";

            //Act
            $result = $test_Weekday->checkWeekday($input);

            //Assert
            $this->assertEquals("Wednesday", $result);
        }

        function test_checkWeekday_tomorrow()
        {
            //Arrange
            $test_Weekday = new Date;
            $input = "13-03-2015";

            //Act
            $result = $test_Weekday->checkWeekday($input);

            //Assert
            $this->assertEquals("Friday", $result);
        }

        function test_checkWeekday_2DaysAgo()
        {
            //Arrange
            $test_Weekday = new Date;
            $input = "10-03-2015";

            //Act
            $result = $test_Weekday->checkWeekday($input);

            //Assert
            $this->assertEquals("Tuesday", $result);
        }

        function test_checkWeekday_7DaysAgo()
        {
            //Arrange
            $test_Weekday = new Date;
            $input = "05-03-2015";

            //Act
            $result = $test_Weekday->checkWeekday($input);

            //Assert
            $this->assertEquals("Thursday", $result);
        }

        function test_checkWeekday_2DaysFuture()
        {
            //Arrange
            $test_Weekday = new Date;
            $input = "14-03-2015";

            //Act
            $result = $test_Weekday->checkWeekday($input);

            //Assert
            $this->assertEquals("Saturday", $result);
        }

        function test_checkWeekday_7DaysFuture()
        {
            //Arrange
            $test_Weekday = new Date;
            $input = "19-03-2015";

            //Act
            $result = $test_Weekday->checkWeekday($input);

            //Assert
            $this->assertEquals("Thursday", $result);
        }
    }

 ?>
