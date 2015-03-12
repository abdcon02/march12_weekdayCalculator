<?php
    class Date
    {
        function checkWeekday($input)
        {
            date_default_timezone_set('America/Los_Angeles');
            $timestamp = strtotime($input);
            $today = getdate($timestamp);

            return $today['weekday'];
        }
    }

 ?>
