<!-- How to implement: -->
<?php

// EXAMPLE ONE | BASIC WITH CONSTRUCTORS AND WITHOUT CONSTRUCTORS
// Author: youtube.com/thenewboston
// Video: PHP Tutorial 40 

        // // Without __construct
        // class Bucky {
        //     Public function notAConstructor () {
        //         echo "This function has been invoked!";
        //     } 
        // }

        // $newBuckyObject = new Bucky();   //Result: NULL nothing echos
        // // to get the function to work you need to invoke it with the new object.
        // $newObject->notAConstructor();

// ------------------------------------------------------------------------------------------------------------------------------------

        // // With __construct with parameters
        // class Ducky {
        //     Public function __construct($name) {
        //         echo "I was automatically Invoked because a new object was made by $name.<br>";
        //         echo "$name is cool <br>";
        //     }

                // Destructor do not have parameters
        //     Public function __destruct() {
        //         echo "destruct invoked!!";
        //     }
        // }
        // $newDuckyObject = new Ducky("Florence");

//______________________________________________________________________________________________________________________________________________________________________
// ______________________________________________________________________________________________________________________________________________________________________


// EXAMPLE TWO | CONSTRUCTORS INITIALISING PRIVATE VARIABLES
// Author: Satish B
// Video: Constructors and Destructors: PHP OOP

      
        // // Error version
        // class privateVarError {
        //     private $name = "Bananas!";
        // }

        // $a = new privateVarError();
        // echo $a->name; //Throws an ERROR, because it cannot access the private variable.

// ------------------------------------------------------------------------------------------------------------------------------------


        // // Using __construct to initalise private variable with no parameters.
        // class accessPrivateVar {
        //     private $name;
 
        //     function __construct() {
        //         $this->name = "I grabbed the Private Variable!!";
        //         // echos the $name variable
        //         echo $this->name;
        //     }
        // }

        // $b = new accessPrivateVar();

// ------------------------------------------------------------------------------------------------------------------------------------


         // Using __construct to initalise private variable with parameters.
        // class accessPrivateVar {
        //     private $name;
 
        //     function __construct($value) {
        //         $this->name = $value;
        //         // echos the $name variable
        //         echo $this->name;
        //     }
        // }
        // // defining arguments. 
        // $b = new accessPrivateVar("Flo");

// ______________________________________________________________________________________________________________________________________________________________________
// ______________________________________________________________________________________________________________________________________________________________________



//EXAMPLE THREE | CONSTRUCTOR WITH EXTEND CLASSES AND PARENT
//Author: http://php.net/manual/en/language.oop5.decon.php

        // // __Construct with extend classes
        // // Parent Class
        // class BaseClass {
        //     // Parent constructor
        //     function __construct() {
        //         print "In BaseClass constructor <br>";
        //     }
        // }

        // class SubClass extends BaseClass {
        //     function __construct() {
        //         //because a this class has defined its own constructor it will not run the parent constructor... unless
        //         //the code below is called. To invoke the parent constructor when new object is made.
        //         parent::__construct();

        //         // and then runs the current class constructor
        //         print "In SubClass constructor <br>";
        //     }
        // }

        // class OtherSubClass extends BaseClass {
        //     // Because this class hasn't defined it's own constructor the parent constructor will run. 
        // }

        // // In BaseClass constructor
        // $obj = new BaseClass(); 

        // // In SubClass constructor
        // $obj = new SubClass(); 

        // // In BaseClass constructor
        // $obj = new OtherSubClass();

?>