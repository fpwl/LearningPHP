<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Title</title>
    </head>
    <body>
        <?php
            // Activty to check of word is a palindrome
            $word1 = "Kayak";
            
            if(strrev($word1) == $word1){
                echo "$word1 is a palindrome. <br>";
            } else{
                echo "$word1 is not a palindrome. <br>";
            }

            // Seeing data type and number of characters and what is is.
            echo var_dump($word1);            
        ?>
    </body>
</html>