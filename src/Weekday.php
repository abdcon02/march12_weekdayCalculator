<?php
    class Date
    {
        function checkWeekday($input)
        {
            $timestamp = strtotime('03-12-2015');
            $today = getdate($timestamp);
            
            return $today['weekday'];
        }
    }

 ?>
