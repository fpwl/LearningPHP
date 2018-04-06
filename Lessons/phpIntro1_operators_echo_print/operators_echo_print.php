<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="css/default.css">
	<title>Title</title>
</head>
<body>

    <?php
        // $ in front of a variable

        // // M = month
        // // j = date i.e 12th
        // // Y = year
        // // g = hour
        // // i = minutes
        // // s = seconds
        // // a = am/pm
        // // this displays full date
            // $currentdate = date("M j, Y g:i:s a");

        // // this displays only dd/mm/yyyy
            // $cd = date("d/m/y");

        // print "current date and time is $currentdate.<br>";
        
        // $printValue = print("Good afternoon, today's date is $cd.");

        // echo "<br>$printValue";



        // $a = 5;
        // $b = 3.4;
        // $c = $a + $b;

        // $name = "Florence";

        // echo "the sum of $c <br>";
        // // asking for what type of data type it is
        // echo gettype($name) . "<br>"; 

        // // Changing/setting the value data type
        // settype($a, "float");
        // echo gettype($a) . "<br>";

        // // Contverts number to a whole number
        // echo intval($b) . "<br>";

        // // dividing
        // echo $a / $b . "<br>";
        // // getting a remainder 
        // echo $a % $b . "<br>";



        // $a = 5;
        // $b = 4;
        // $c = --$a;
        // $d = $a--;

        // echo = $c . "<br>" $d, $a; 



        $per1 = 32;
        $per2 = 45;
        $per3 = 89;

        if($per1 > $per2 && $per1 > $per3) {
            echo "Person one is one old fossil they are $per1!";
        }
         else if ($per2 > $per1 && $per2 > $per3){
            echo "Person two is one old fossil they are $per2!";
        } 
        else if ($per3 > $per1 && $per3 > $per2) {
            echo "Person three is one old fossil they are $per3!";
        }

    ?>
    
</body>
</html>