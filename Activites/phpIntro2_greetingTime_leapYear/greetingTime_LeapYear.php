<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title> Greetings and Leap year</title>
    </head>
    <body>
        <?php
        
        // Using real time date
        $currentTime = date("g:i:s a");

        $hour = date("g");
        $minute = date("i");
        $amOrpm = date("a");
        $year = date("Y");

        // Using Manual input
        // $hour = 11;
        // $minute = 03;
        // $amOrpm = "am";


        echo "current time is $currentTime. <br>";
        
        if(($hour >= 5 && $amOrpm === "am") && ($hour <= 11 && $minute <= 59 && $amOrpm === "am")) {
            echo "GOOD MORNING!!!";
        } elseif(($hour == 12  && $minutes <= 59 && $amOrpm === "pm") || (($hour >= 1 && $amOrpm === "pm") && ($hour <= 4 && $minute <= 59 && $amOrpm === "pm"))){
            echo "GOOD AFTERNOON!!!";
        }
        elseif(($hour >= 5 && $amOrpm === "pm") && ($hour <= 7 && $minute <= 59 && $amOrpm === "pm")){
            echo "GOOD EVENING!!!";
        }
        elseif(($hour >= 8 && $amOrpm === "pm") && ($hour <= 11 && $minute <= 59 && $amOrpm === "pm")){
            echo "GOOD NIGHT!!!";
        }
        elseif(($hour == 12  && $minutes <= 59 && $amOrpm === "am") || (($hour >= 1 && $amOrpm === "am") && ($hour <= 4 && $minute <= 59 && $amOrpm === "am"))){
            echo "WHY ARE YOU AWAKE!!!!!";
        }
        else{
            echo "Ehhhh WTF IS THE TIME!!!";
        }


        // If its a leap Year

        // L will return 1 or 0 for leap years
        // Using real time
        echo "<p>";
        $leapYear = date('L', $year);

        if ($leapYear == 0){
            echo "This year is $year, therefore it is not a leap year.";
        } elseif ($leapYear == 1) {
             echo "This year is $year, therefore it is a leap year!";
        }


        // ((year % 4 == 0) && (year % 100 != 0)) || (year % 400 == 0);

        ?>
    </body>
</html>