<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Student Grades</title>
    </head>
    <body>
        <?php
            // // nested loops Student grades, this one doesn't really work

                // $marks = array(72, 84, 71, 93, 78, 90, 80, 67, 89, 68, 88, 82);
                // $topic = 4;
                // $numberOfStudents = 3;

            
                // for ($s = 1; $s <= $numberOfStudents; $s++) {
                //     echo "<br> Student $s:";
                //     for ($t = 1; $t <= $topic; $t++){
                //         echo "<br> Topic $t Marks:" . $marks[$t];
                //     }
                //     echo "<br>";
                // }



            // Displaying student grades using nested arrays and echoing it.
              $student = array(
                array(
                    "name" => "John",
                    "mod1" => 72,
                    "mod2" => 84,
                    "mod3" => 71,
                    "mod4" => 93
                ),
                array(
                    "name" => "Sally",
                    "mod1" => 78,
                    "mod2" => 90,
                    "mod3" => 80,
                    "mod4" => 67
                ),
                 array(
                    "name" => "Billy",
                    "mod1" => 89,
                    "mod2" => 68,
                    "mod3" => 88,
                    "mod4" => 82
                )
            );

            foreach ($student as $stud){
                echo "Student: " . $stud[name];
                echo "<br>";
                echo "Module 1: " . $stud[mod1];
                echo "<br>";
                echo "Module 2: " . $stud[mod2];
                echo "<br>";
                echo "Module 3: " . $stud[mod3];
                echo "<br>";
                echo "Module 4: " . $stud[mod4];
                echo "<p>";
            }
            
        ?>
    </body>
</html>