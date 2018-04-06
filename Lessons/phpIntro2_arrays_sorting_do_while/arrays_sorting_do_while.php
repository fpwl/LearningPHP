<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>arrays_sorting_do_while</title>
    </head>
    <body>
        <?php
            // // Choosing a certian value in an array.
            // $n = array(65, 73, 45);
            // echo $n[1] . "<br>";

            // // Different ways to display entire arrays all att once.

            // // Looping through the array to display the values
            // for ($i = 0; $i < 3; $i++) { 
            //     echo $n[$i] . "<br>";
            // }

            // // Using print_r to print array values. result = Array ( [0] => 65 [1] => 73 [2] => 45 ) 
            // echo "<br>";
            // print_r($n);
            // echo "<br>";

            // // Using foreach to reassign the array variable to $v. 
            // foreach ($n as $v) {
            //     echo $v . "<br>";
            // }



            // // Sorting data in array in accending order

            // // This to sort in a for loop and an if else statement. After looping print_r all $n data.
            // $n = array(5,3,1,4,2);

            // for ($i = 0; $i < 5; $i++) { 
            //     for ($j = 0; $j < 5 ; $j++) { 
            //         if ($n[$i] > $n[$j]) {

            //             $temp = $n[$j];
            //             $n[$i] = $n[$j];
            //             $n[$j] = $temp;

            //         }
            //     }
            // }

            // echo "<br>";
            // print_r($n);

            // // Sorting data using the 'sort' keyword.
            // echo "<br>";
            // $marks = array(84, 56,83, 94, 50);
            // sort($marks);
            // print_r($marks);



            // // Sorting data in array in deccending order

            // // This to sort in a for loop and an if else statement. After looping print_r all $n data. To sort in decending order 2nd loop must reference previous loop. (it just works.)
            // $a = array(5,3,1,4,2);

            // for ($d = 0; $d < 5; $d++) { 
            //     for ($f = $d; $f < 5 ; $f++) { 
            //         if ($a[$d] < $a[$f]) {

            //             $temp = $a[$d];
            //             $a[$d] = $a[$f];
            //             $a[$f] = $temp;
            //         }
            //     }
            // }

            // echo "<br>";
            // print_r($a);

            // // Sorting data using the 'sort' keyword, in deccending order/reverse order. rsort = reverse sort
            // echo "<br>";
            // $marks = array(84, 56,83, 94, 50);
            // rsort($marks);
            // print_r($marks);



            // Sorting an array with keys and values
            // $student = array(
            //     array(
            //         "name" => "John",
            //         "mod1" => 87,
            //         "mod2" => 77
            //     ),
            //     array(
            //         "name" => "Sally",
            //         "mod1" => 67,
            //         "mod2" => 59
            //     )
            // );

            // foreach ($student as $stud){
            //     echo "Student: " . $stud[name];
            //     echo "<br>";
            //     echo "Module 1: " . $stud[mod1];
            //     echo "<br>";
            //     echo "Module 2: " . $stud[mod2];
            //     echo "<p>";
            // }


            // Using Do and While loops

            // // I dont know ???

            $i = 1;

            // do{
            //     echo "$i <br>";
            //     $i++;
            // }
            
            while ($i <= 10){
                echo "$i . Hello <br>";
                $i++;

                if ($i == 5) {
                    break;
                    echo "This won't";
                }else {
                    continue;
                    echo "This sentence will not be printed";
                }

            }



            

        ?>
    </body>
</html>